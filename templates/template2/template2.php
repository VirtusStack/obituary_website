<?php
require_once __DIR__ . "/../../config.php";
session_start();

if (!isset($_GET['id'])) {
    die("Obituary ID missing");
}

$id = (int)$_GET['id'];

// Fetch obituary details
$stmt = $conn->prepare("SELECT * FROM obituaries WHERE id = ?");
$stmt->execute([$id]);
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
  <title>Obituary - Template 2</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="template2-card">
<?php if ($obituary['photo'] && file_exists(__DIR__ . "/../../uploads/".$obituary['photo'])): ?>
<img src="../../uploads/<?htmlspecialchars($obituary['photo'])?>" alt="Photo" class="photo" />
<?php endif ?>

<div class="content-side">
<h2><?=htmlspecialchars($obituary['full_name'])?></h2>
<p class="relation">Beloved <?=htmlspecialchars($obituary['relation'])?></p>

<div class="dates">
<span><strong>DOB:</strong> <?=htmlspecialchars($obituary['dob'])?></span> | 
<span><strong>DOD:</strong> <?=htmlspecialchars($obituary['dod'])?></span>
</div>

<strong>Age:</strong> <?=htmlspecialchars($obituary ['age'])?><br />
<strong>Religion:</strong> <?=htmlspecialchars($obituary ['religion'])?><br />
<strong>Caste:</strong> <?=htmlspecialchars($obituary ['caste'])?><br />
<strong>Address:</strong> <?=htmlspecialchars($obituary ['address'])?><br />
</div>

<?php if (!empty($obituary['bio'])): ?>
<div class="bio">"<?=htmlspecialchars($obituary['bio'])?>"</div>
<?php endif; ?>

<footer>Forever in our hearts</footer>
</div>
</div>
</body>
</html>


