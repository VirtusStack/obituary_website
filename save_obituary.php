<?php
session_start();
require_once __DIR__ . "/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
$full_name = trim($_POST['full_name'] ?? '');
$relation = trim($_POST['relation'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$dob = !empty($_POST['dob']) ? $_POST['dob'] : null;
$dod = !empty($_POST['dod']) ? $_POST['dod'] : null;
$age = !empty($_POST['age']) ? (int)$_POST['age'] : null;
$religion = trim($_POST['religion'] ?? '');
$caste = trim($_POST['caste'] ?? '');
$address = trim($_POST['address'] ?? '');
$country =  trim($_POST['country'] ?? '');
$state_id = !empty($_POST['state_id']) ? (int)$_POST['state_id'] : null;
$city_id = !empty($_POST['city_id']) ? (int)$_POST['city_id'] : null;
$bio = trim($_POST['bio'] ?? '');
$sabha_date = !empty($_POST['sabha_date']) ? $_POST['sabha_date'] : null;
$sabha_time = !empty($_POST['sabha_time']) ? $_POST['sabha_time'] : null;
$sabha_venue = trim($_POST['sabha_venue'] ?? '' );
$map_link = trim($_POST['map_link'] ?? '');
$prarthna_text = trim($_POST['prarthna_text'] ?? '');

// Basic validation for required fields
$errors = [];
if (!$full_name) $errors[] = "Full name is required.";
if (!$relation) $errors[] = "Relation  is required.";
if (!$gender) $errors[] = "Gender  is required.";
if (!$country) $errors[] = "Country  is required.";
if (!$dod) $errors[] = "Date of Death  is required.";
if (!$state_id) $errors[] = "State selection  is required.";
if (!$city_id) $errors[] = "City selection  is required.";

// Handle photo upload if provided
$photoName = null;
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
   $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];
   $maxSize = 2 * 1024 * 1024; // 2 MB

 $fileType = mime_content_type($_FILES['photo']['tmp_name']);
 $fileSize = $_FILES['photo']['size'];

if (!in_array($fileType, $allowedTypes)) {
   $errors[] = "Only PNG, JPG, and JPEG files are allowed.";
   }
if ($fileSize > $maxSize) {
   $errors[] = "Photo must be less than 2MB.";
   }

   if (empty($errors)) {
   $uploadDir = __DIR__ . '/uploads/';
   if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

 // Clean original name & add timestamp
  $extension = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
  $cleanName = preg_replace('/[^a-zA-Z0-9_-]/', '_', pathinfo($_FILES['photo']['name'], PATHINFO_FILENAME));
  $photoName = time() . '_' . $cleanName . '.' . $extension;

 
  $destination = $uploadDir . $photoName;

  if (!move_uploaded_file($_FILES['photo']['tmp_name'], $destination)) {
      $errors[] = "Failed to upload photo.";
      }
   }
 }

// If errors, show and exit
 if (!empty($errors)) {
 foreach ($errors as $err) {
    echo "<div class='alert alert-danger'>" . htmlspecialchars($err) . "</div>";
    }
    exit;
    }


// Insert into database
$sql = "INSERT INTO obituaries
       (full_name, relation, gender, dob , dod, age, religion, caste, address, country, state_id, city_id, photo, bio, sabha_date, sabha_time, sabha_venue, map_link, prarthna_text)
 	VALUES                       	(:full_name, :relation, :gender, :dob , :dod, :age, :religion, :caste, :address, :country, :state_id, :city_id, :photo, :bio, :sabha_date, :sabha_time, :sabha_venue,  :map_link, :prarthna_text)";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':full_name', $full_name);
$stmt->bindValue(':relation', $relation);
$stmt->bindValue(':gender', $gender);
$stmt->bindValue(':dob', $dob);
$stmt->bindValue(':dod', $dod);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':religion', $religion);
$stmt->bindValue(':caste', $caste);
$stmt->bindValue(':address', $address);
$stmt->bindValue(':country', $country);
$stmt->bindValue(':state_id', $state_id, PDO::PARAM_INT);
$stmt->bindValue(':city_id', $city_id, PDO::PARAM_INT);
$stmt->bindValue(':photo', $photoName);
$stmt->bindValue(':bio', $bio);
$stmt->bindValue(':sabha_date', $sabha_date);
$stmt->bindValue(':sabha_time', $sabha_time);
$stmt->bindValue(':sabha_venue', $sabha_venue);
$stmt->bindValue(':map_link', $map_link);
$stmt->bindValue(':prarthna_text', $prarthna_text);

if ($stmt->execute()) {
  // Get last inserted ID
  $lastInsertId = $conn->lastInsertId();

// Redirect user to template selection page passing obituary id
  header("Location: select_template.php?obituary_id=" .$lastInsertId);
  exit;
} else {
   echo "<div class='alert alert-danger'>Failed to save obituary. Please try again</div>";
}
}
?>








  

