<?php
session_start();
require_once __DIR__ . "/config.php";

// check login

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}

$template = $_GET['template'] ?? '';
$id = isset($_GET['obituary_id']) ? (int)$_GET['obituary_id'] : 0;


if (!$template || !$id) {
    die("Invalid request");
}

// Validate template exists
$valid_templates = ['template1', 'template2'];
if (!in_array($template, $valid_templates)) {
die("Invalid template");
}

// Capyure the output of the template page as HTML string
ob_start();
include __DIR__. "/templates/$template/$template.php";
$html = ob_get_clean();

// Set headers to forse download as .html file
header('Content-Type: text/html');
header('Content-Disposition: attachment; filename="obituary_'.$id.'_'.$template.'.html"');
echo $html;
exit;


