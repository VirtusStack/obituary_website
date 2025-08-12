<?php
require_once __DIR__ . "/../config.php";

if (!isset($_GET['state_id'])) {
    echo json_encode([]);
    exit;
}

$state_id = (int)$_GET['state_id'];

$stmt = $conn->prepare("SELECT id, name FROM cities WHERE state_id = :state_id ORDER BY name");
$stmt->bindValue(':state_id', $state_id, PDO::PARAM_INT);
$stmt->execute();

$cities = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($cities);
