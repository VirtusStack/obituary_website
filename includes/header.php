<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['user_id']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
<div class="container">
<a class="navbar-brand fw-bold text-primary" href="/">ObituarySite</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarContent">
 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
 <li class="nav-item"><a class="nav-link" href="/obituary/create_obituary.php">Create Obituary</a></li>
 <li class="nav-item"><a class="nav-link" href="/obituary/select_template.php">Templates</a></li>
 <li class="nav-item"><a class="nav-link" href="/about.php">About</a></li>
 <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
</ul>

<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<?php if ($isLoggedIn): ?>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-primary fw-semibold d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<i class="bi bi-person-circle fs-5 me-1"></i> My Account
</a>
<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
<li><a class="dropdown-item" href="/obituary/dashboard.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
<li><a class="dropdown-item" href="/obituary/profile.php"><i class="bi bi-person me-2"></i>Profile</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item text-danger" href="/obituary/auth/logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
</ul>
</li>
<?php else: ?>
<li class="nav-item">
<a class="nav-link btn btn-outline-primary me-2 px-3 d-flex align-items-center" href="/obituary/auth/login.php">
<i class="bi bi-box-arrow-in-right me-1"></i> Login
</a>
</li>
<li class="nav-item">
<a class="nav-link btn btn-outline-primary px-3 d-flex align-items-center" href="/obituary/auth/register.php">
<i class="bi bi-person-plus me-1"></i> Register
</a>
</li>
<?php endif; ?>
 </ul>
 </div>
  </div>
</nav>
