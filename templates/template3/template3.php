<?php
require_once __DIR__ . "/../../config.php";

if (!isset($_GET['obituary_id'])) {
    die("Obituary ID missing");
}

$obituary_id = (int)$_GET['obituary_id'];


// Fetch obituary details
$stmt = $conn->prepare("SELECT * FROM obituaries WHERE id = ?");
$stmt->execute([$obituary_id]);
$obituary = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$obituary) {
    die("Obituary not found");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Obituary - Template 3</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="template3-container">
  <div class="obituary-photo">
        <img src="/obituary_website/uploads/<?php echo htmlspecialchars($obituary['photo']); ?>" alt="Photo">
    </div>
 <div class="obituary-content">
        <h1><?php echo htmlspecialchars($obituary['full_name']); ?></h1>
        <h2><em><?php echo htmlspecialchars($obituary['relation']); ?></em></h2>
        
        <p class="dates">
            <?php echo date("F j, Y", strtotime($obituary['dob'])); ?> – 
            <?php echo date("F j, Y", strtotime($obituary['dod'])); ?>
        </p>

        <p><strong>Age:</strong> <?php echo htmlspecialchars($obituary['age']); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($obituary['gender']); ?></p>
        <p><strong>Religion:</strong> <?php echo htmlspecialchars($obituary['religion']); ?></p>

        <p class="message">
            <?php echo htmlspecialchars($obituary['bio']); ?>
        </p>
    </div>
</div>
    