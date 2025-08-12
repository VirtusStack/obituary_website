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

<style>
    /* Box container for whole selection */
    .selection-box {
        max-width: 960px;
        margin: 2rem auto;
        padding: 30px 40px;
        border: 1px solid #ddd;
        border-radius: 14px;
        background: #fafafa;
        box-shadow: 0 5px 18px rgba(0,0,0,0.07);
    }

    .template-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        background: #fff;
        text-align: center;
        padding: 20px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.05);
        transition: transform 0.2s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .template-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .template-title {
        font-size: 1.1rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: #444;
    }
    .btn-sm-custom {
        font-size: 0.85rem;
        padding: 6px 12px;
        border-radius: 6px;
        margin-bottom: 8px;
    }
</style>
<div class="selection-box">
 <h2 class="mb-4 text-center">Select Template</h2>
 <div class="row g-4 justify-content-center">

<!-- Template 1 -->
<div class="col-md-3 ">
<div class="template-card">
<div class="template-title">Template 1 - Classic</div>
<a href="templates/template1/template1.php?obituary_id=<?= $obituary_id ?>" class="btn btn-outline-primary btn-sm-custom mb-2">Preview</a>
<a href="download_template.php?template=template1&obituary_id=<?= $obituary_id ?>" class="btn btn-success btn-sm-custom mb-2">Download</a>
<a href="publish_template.php?template=template1&obituary_id=<?= $obituary_id ?>" class="btn btn-warning btn-sm-custom mb-2">Publish</a>
</div>
</div>

<!-- Template 2 -->
<div class="col-md-3">
<div class="template-card">
<div class="template-title">Template 2 - Classic</div>
<a href="templates/template2/template2.php?obituary_id=<?= $obituary_id ?>"  class="btn btn-outline-primary btn-sm-custom mb-2">Preview</a>
<a href="download_template.php?template=template2&obituary_id=<?= $obituary_id ?>" class="btn btn-success btn-sm-custom mb-2">Download</a>
<a href="publish_template.php?template=template2&obituary_id=<?= $obituary_id ?>" class="btn btn-warning btn-sm-custom mb-2">Publish</a>
</div>
</div>

<!-- Template 3 -->
<div class="col-md-3 ">
<div class="template-card">
<div class="template-title">Template 3 - Classic</div>
<a href="templates/template1/template3.php?obituary_id=<?= $obituary_id ?>" class="btn btn-outline-primary btn-sm-custom mb-2">Preview</a>
<a href="download_template.php?template=template1&obituary_id=<?= $obituary_id ?>" class="btn btn-success btn-sm-custom mb-2">Download</a>
<a href="publish_template.php?template=template1&obituary_id=<?= $obituary_id ?>" class="btn btn-warning btn-sm-custom mb-2">Publish</a>
</div>
</div>

<!-- Template 4 -->
<div class="col-md-3">
<div class="template-card">
<div class="template-title">Template 4 - Classic</div>
<a href="templates/template2/template4.php?obituary_id=<?= $obituary_id ?>"  class="btn btn-outline-primary btn-sm-custom mb-2">Preview</a>
<a href="download_template.php?template=template2&obituary_id=<?= $obituary_id ?>" class="btn btn-success btn-sm-custom mb-2">Download</a>
<a href="publish_template.php?template=template2&obituary_id=<?= $obituary_id ?>" class="btn btn-warning btn-sm-custom mb-2">Publish</a>
</div>
</div>

</div>
</div>
<?php include(__DIR__ . "/includes/footer.php"); ?>


