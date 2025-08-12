<?php
require_once __DIR__ . "/../config.php";

$stmt = $conn->prepare("SELECT id, name FROM states WHERE country = 'India' ORDER BY name");
$stmt->execute();
$states = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($states);
