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
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Obituary - Template 2</title>
  <link rel="stylesheet" href="/obituary_website/templates/template2/style.css?v=<?php echo time(); ?>" />

</head>
<body>
  <div class="template2-card">
    <div class="photo-side">
      <?php if ($obituary['photo'] && file_exists(__DIR__ . "/../../uploads/".$obituary['photo'])): ?>
        <img src="/obituary_website/uploads/<?=htmlspecialchars($obituary['photo'])?>" alt="Photo of <?=htmlspecialchars($obituary['full_name'])?>" />
      <?php else: ?>
        <div class="photo-placeholder">No Image</div>
      <?php endif ?>
    </div>

    <div class="content-side">
      <h2><?=htmlspecialchars($obituary['full_name'])?></h2>

      <div class="dates">
        <span><strong>DOB:</strong> <?=htmlspecialchars($obituary['dob'])?></span> | 
        <span><strong>DOD:</strong> <?=htmlspecialchars($obituary['dod'])?></span>
      </div>

      <p><strong>Age:</strong> <?=htmlspecialchars($obituary['age'])?></p>
      <p><strong>Religion:</strong> <?=htmlspecialchars($obituary['religion'])?></p>
      <p><strong>Caste:</strong> <?=htmlspecialchars($obituary['caste'])?></p>
      <p><strong>Address:</strong> <?=htmlspecialchars($obituary['address'])?></p>

      <?php if (!empty($obituary['bio'])): ?>
      <div class="bio">"<?=htmlspecialchars($obituary['bio'])?>"</div>
      <?php endif; ?>

      <footer>Forever in our hearts</footer>
    </div>
  </div>
</body>
</html>
