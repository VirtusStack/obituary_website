<?php
require_once "../config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

if (strlen($password) !== 8) {
        $error = "Password must be at least 8 characters long.";
    } else {
       
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

 try {
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $hashedPassword]);

 	$_SESSION['user_id'] = $conn->lastInsertId();
	$_SESSION['user_name'] = $name;

	header("Location: ../dashboard.php");
        exit;
    } catch (PDOException $e) {
      if ($e->getCode() == 23000) {
       $error = "Email already exists.";
 } else {
	$error = "Registration failed: " . $e->getMessage();
       }
     }
 }
}
?>
<?php include ("../includes/head.php"); ?>
<div class="container mt-5" style="max-width: 450px;">
<h2>Register</h2>
<?php if(!empty($errorMsg)) echo "<div class='alert alert-danger'>$errorMsg</div>"; ?>
<form method="post">
  <input type="text" name="name" class="form-control mb-2" placeholder="Full Name" required autocomplete="name">
  <input type="email" name="email" class="form-control mb-2" placeholder="Email" required autocomplete="email">
  <input type="password" name="password" class="form-control mb-2" placeholder="Password" required minlength="8" autocomplete="new-password">

  <button type="submit" class="btn btn-primary w-100">Register</button>
  <p class="mt-2 text-center">Already have an account? <a href="login.php">Login</a></p>
</form>
</div>
</body>
</html>
