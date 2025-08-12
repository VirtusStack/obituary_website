<?php
require_once "../config.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Validate password
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];

// set cookie if Remember Me is checked
if (isset($_POST['remember'])) {
  $token = bin2hex(random_bytes(16));
// Store it in a cookie valid for 30 days
  setcookie("remember_token", $token, time() + (30 * 24 * 60 * 60), "/");

// Store token in DB (optional - safer)
    $stmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
    $stmt->execute([$token, $user['id']]);
    }

    $_SESSION['success'] = "Welcome back, {$user['name']}!";
    header("Location: ../dashboard.php");
    exit;
 } else {
    $errorMsg = "Invalid email or password.";
   }
}
?>

<?php include("../includes/head.php"); ?>

<div class="container mt-5" style="max-width: 450px;">
<h2>Login</h2>
<?php if(isset($errorMsg)) echo "<div class='alert alert-danger'>$errorMsg</div>"; ?>
<form method="post">
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

<div class="form-check mb-2">
<input class="form-check-input" type="checkbox" name="remember" id="remember">
<label class="form-check-label" for="remember">Remember Me</label>
</div>

<button type="submit" class="btn btn-success">Login</button>
<p class="mt-2">Don't have an Account? <a href="register.php">Register</a></p>
</form>
</body>
</html>