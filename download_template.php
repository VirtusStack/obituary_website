<?php
session_start();
require_once __DIR__ . "/config.php";
require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

// Check login
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}

$template = $_GET['template'] ?? '';
$id = isset($_GET['obituary_id']) ? (int)$_GET['obituary_id'] : 0;

if (!$template || !$id) {
    die("Invalid request");
}

$valid_templates = ['template1', 'template2'];
if (!in_array($template, $valid_templates)) {
    die("Invalid template");
}

// Fetch obituary details
$stmt = $conn->prepare("SELECT * FROM obituaries WHERE id = ?");
$stmt->execute([$id]);
$obituary = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$obituary) die("Obituary not found");

// Capture template output
ob_start();
include __DIR__ . "/templates/$template/$template.php";
$html = ob_get_clean();

// Fix template CSS and image paths
$template_base_url = "http://localhost/obituary_website/templates/$template/";
$html = str_replace('href="', 'href="' . $template_base_url, $html);
$html = str_replace('src="/obituary_website/uploads/', 'src="http://localhost/obituary_website/uploads/', $html);

// Setup Dompdf
$options = new Options();
$options->set('isRemoteEnabled', true); // allow external CSS/images
$options->set('defaultFont', 'Helvetica');
$dompdf = new Dompdf($options);

// Load HTML
$dompdf->loadHtml($html);

// Set paper size
$dompdf->setPaper('A4', 'portrait');

// Render PDF
$dompdf->render();

// Output PDF
$filename = "obituary_{$id}_{$template}.pdf";
$dompdf->stream($filename, ["Attachment" => false]);
exit;
