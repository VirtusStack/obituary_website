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
  <title>Obituary - Template 1</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="template1-container">
<h1>In Loving Memory</h1>

<?php if ($obituary['photo'] && file_exists(__DIR__ . "/../../uploads/".$obituary['photo'])): ?>
  <img src="/obituary_website/uploads/<?=htmlspecialchars($obituary['photo'])?>" alt="Photo" class="photo" />
<?php endif ?>

<div class="details">
<strong>Name:</strong> <?=htmlspecialchars($obituary ['full_name'])?><br />
<strong>Gender:</strong> <?=htmlspecialchars($obituary ['gender'])?><br />
<strong>Date of Birth:</strong> <?=htmlspecialchars($obituary ['dob'])?><br />
<strong>Date of Death:</strong> <?=htmlspecialchars($obituary ['dod'])?><br />
<strong>Age:</strong> <?=htmlspecialchars($obituary ['age'])?><br />
<strong>Religion:</strong> <?=htmlspecialchars($obituary ['religion'])?><br />
<strong>Caste:</strong> <?=htmlspecialchars($obituary ['caste'])?><br />
<strong>Address:</strong> <?=htmlspecialchars($obituary ['address'])?><br />
</div>

<?php if (!empty($obituary['bio'])): ?>
<div class="bio">"<?=htmlspecialchars($obituary['bio'])?>"</div>
<?php endif; ?>

<footer>May the soul rest in eternal peace</footer>
</div>

</body>
</html>


