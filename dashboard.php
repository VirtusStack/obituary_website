<?php
session_start();

if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {
    require_once("config.php");

    $stmt = $conn->prepare("SELECT id, name FROM users WHERE remember_token = ?");
    $stmt->execute([$_COOKIE['remember_token']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
    }
}

if (!isset($_SESSION['user_id'])) {
    header("Location: /obituary/auth/login.php");
    exit;
}

include 'includes/head.php';
include 'includes/header.php';
?>

<div class="container mt-5">
  <h2>Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?>!</h2>
  <p>This is your dashboard. You can create and manage obituaries here.</p>
</div>

<?php include 'includes/footer.php'; ?>
