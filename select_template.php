<?php
session_start();
require_once __DIR__ . "/config.php";

// check login

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}

if (!isset($_GET['obituary_id'])) {
    die("Obituary ID missing");
}

$obituary_id = (int)$_GET['obituary_id'];

?>
<?php include(__DIR__ . "/includes/head.php"); ?>
<?php include(__DIR__ . "/includes/header.php"); ?>

<div class="container my-5">
<h2>Select Template for Obituary ID: <?=htmlspecialchars($obituary_id)?></h2>

<div class="row">
<!-- Template 1 -->
<div class="col-md-6 mb-4">
<div class="card p-3">
<h4>Template 1 - Classic</h4>
<a href="templates/template1/template1.php?obituary_id=<?= $obituary_id ?>" target="_blank" class="btn btn-outline-primary mb-2">Preview</a>
<a href="download_template.php?template=template1&obituary_id=<?= $obituary_id ?>" class="btn btn-success mb-2">Download</a>
<a href="publish_template.php?template=template1&obituary_id=<?= $obituary_id ?>" class="btn btn-success mb-2">Publish</a>
</div>
</div>

<!-- Template 2 -->
<div class="col-md-6 mb-4">
<div class="card p-3">
<h4>Template 2 - Classic</h4>
<a href="templates/template2/template2.php?obituary_id=<?= $obituary_id ?>" target="_blank" class="btn btn-outline-primary mb-2">Preview</a>
<a href="download_template.php?template=template2&obituary_id=<?= $obituary_id ?>" class="btn btn-success mb-2">Download</a>
<a href="publish_template.php?template=template2&obituary_id=<?= $obituary_id ?>" class="btn btn-success mb-2">Publish</a>
</div>
</div>
</div>
</div>
<?php include(__DIR__ . "/includes/footer.php"); ?>



