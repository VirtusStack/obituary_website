<?php
session_start();
require_once __DIR__ . "/config.php";

// check login

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit;
}

?>
<?php include(__DIR__ . "/includes/head.php"); ?>
<?php include(__DIR__ . "/includes/header.php"); ?>

<div class="container my-5">

<h2>Create Obituary & Prarthana Sabha</h2>

<form method="post" action="save_obituary.php" enctype="multipart/form-data" autocomplete="off"  class="bg-white p-4 rounded shadow-sm">
<h4 class="mt-4">Obituary Details</h4>
<div class="row g-3">

<div class="col-md-6">
<label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
<input type="text" id="full_name" name="full_name" class="form-control" required />
</div>

<div class="col-md-6"> 
<label for="relation" class="form-label">Relation <span class="text-danger">*</span></label>
<select id="relation" name="relation" class="form-select" required>
<option value="">-- Select Relation --</option>
<option value="Mother">Mother</option>
<option value="Father">Father</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Wife">Wife</option>
<option value="Husband">Husband</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Other">Other</option>
</select>
</div>

<div class="col-md-4">
<label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
<select id="gender" name="gender" class="form-select" required>
<option value="">--Select Gender--</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div>

<div class="col-md-4">
<label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
<input type="date" id="dob" name="dob" class="form-control" />
</div>

<div class="col-md-4">
<label for="dod" class="form-label">Date of Death <span class="text-danger">*</span></label>
<input type="date" id="dod" name="dod" class="form-control" />
</div>

<div class="col-md-4">
<label for="age" class="form-label">Age</label>
<input type="number" id="age" name="age" class="form-control" min="0" />
</div>

<div class="col-md-4"> 
<label for="religion" class="form-label">Religion</label>
<select id="religion" name="religion" class="form-select">
<option value="">-- Select Religion --</option>
<option value="Hindu">Hindu</option>
<option value="Muslim">Muslim</option>
<option value="Christian">Christian</option>
<option value="Sikh">Sikh</option>
<option value="Buddhist">Buddhist</option>
<option value="Jain">Jain</option>
<option value="Other">Other</option>
</select>
</div>

<div class="col-md-4"> 
<label for="caste" class="form-label">Caste</label>
<select id="caste" name="caste" class="form-select">
<option value="">-- Select Caste --</option>
<option value="Brahmin">Brahmin</option>
<option value="Kshatriya">Kshatriya</option>
<option value="Vaishya">Vaishya</option>
<option value="Shudra">Shudra</option>
<option value="Dalit">Dalit</option>
<option value="Other">Other</option>
</select>
</div>

<div class="col-md-12">
<label for="photo" class="form-label">Photo</label>
<input type="file" id="photo" name="photo" class="form-control" accept="image/*" />
</div>

<div class="col-12">
<label for="address" class="form-label">Address</label>
<textarea id="address" name="address" rows="2" class="form-control"></textarea>
</div>                                                                     


<div class="col-md-4">
<label for="country" class="form-label">Country</label>
<select id="country" name="country" class="form-select" required>
<option value="">--Select Country--</option>
<option value="India">India</option>
</select>
</div>

<div class="col-md-4">
<label for="state" class="form-label">State <span class="text-danger">*</span></label>
<select id="state" name="state_id" class="form-select" required>
<option value="">--Select State--</option>
</select>
</div>

<div class="col-md-4">
<label for="city" class="form-label">City <span class="text-danger">*</span></label>
<select id="city" name="city_id" class="form-select" required>
<option value="">--Select City--</option>
</select>
</div>

<div class="col-12 mt-3">
<label for="bio" class="form-label">Bio </label> (You can select or write)</label>
<textarea id="bio" name="bio" rows="4" class="form-control" placeholder="Enter bio or select a predefined one..."></textarea>
<select id="bio_presets" class="form-select mt-2">
<option value="">-- Select a predefined biography --</option>
    <option value="A kind and loving soul who touched the lives of many with warmth and compassion.">A kind and loving soul who touched the lives of many with warmth and compassion.</option>
    <option value="Lived a life full of love, laughter, and kindness, leaving behind a legacy of beautiful memories.">Lived a life full of love, laughter, and kindness, leaving behind a legacy of beautiful memories.</option>
    <option value="A gentle heart and caring spirit, always ready to help others and spread joy.">A gentle heart and caring spirit, always ready to help others and spread joy.</option>
    <option value="Remembered for their generosity, strength, and unwavering kindness towards everyone.">Remembered for their generosity, strength, and unwavering kindness towards everyone.</option>
    <option value="A beacon of hope and comfort, who inspired all with their humility and grace.">A beacon of hope and comfort, who inspired all with their humility and grace.</option>
    <option value="A life well-lived, filled with love, care, and compassion for all.">A life well-lived, filled with love, care, and compassion for all.</option>
    <option value="Always ready to lend a helping hand and share a warm smile.">Always ready to lend a helping hand and share a warm smile.</option>
    <option value="Left behind countless cherished memories for friends and family.">Left behind countless cherished memories for friends and family.</option>
    <option value="A heart that gave endlessly, and a soul that loved unconditionally.">A heart that gave endlessly, and a soul that loved unconditionally.</option>
    <option value="Brought joy and light to every life they touched.">Brought joy and light to every life they touched.</option>
    <option value="Will be remembered for their honesty, dedication, and gentle spirit.">Will be remembered for their honesty, dedication, and gentle spirit.</option>
    <option value="A person whose kindness knew no boundaries.">A person whose kindness knew no boundaries.</option>
    <option value="Shared laughter, wisdom, and kindness throughout their journey.">Shared laughter, wisdom, and kindness throughout their journey.</option>
    <option value="Their memory will forever remain a guiding light for loved ones.">Their memory will forever remain a guiding light for loved ones.</option>
    <option value="Known for their humility and deep sense of care for others.">Known for their humility and deep sense of care for others.</option>
    <option value="Their love and compassion will be missed by all who knew them.">Their love and compassion will be missed by all who knew them.</option>
    <option value="Always treated others with dignity, respect, and kindness.">Always treated others with dignity, respect, and kindness.</option>
    <option value="A loving presence that made every gathering brighter.">A loving presence that made every gathering brighter.</option>
    <option value="Their generosity was matched only by their gentle nature.">Their generosity was matched only by their gentle nature.</option>
    <option value="A beautiful soul who inspired love and kindness in everyone.">A beautiful soul who inspired love and kindness in everyone.</option>
    <option value="Their smile had the power to comfort and bring joy.">Their smile had the power to comfort and bring joy.</option>
    <option value="A source of strength and encouragement to many.">A source of strength and encouragement to many.</option>
    <option value="Will forever be remembered for their pure heart and gentle ways.">Will forever be remembered for their pure heart and gentle ways.</option>
    <option value="Their laughter still echoes in the hearts of loved ones.">Their laughter still echoes in the hearts of loved ones.</option>
    <option value="Believed in spreading love and kindness wherever they went.">Believed in spreading love and kindness wherever they went.</option>
    <option value="A cherished friend, loving family member, and inspiring soul.">A cherished friend, loving family member, and inspiring soul.</option>
    <option value="Touched lives with their grace, warmth, and compassion.">Touched lives with their grace, warmth, and compassion.</option>
    <option value="Lived life with integrity, kindness, and deep care for others.">Lived life with integrity, kindness, and deep care for others.</option>
    <option value="A humble heart who always put others before themselves.">A humble heart who always put others before themselves.</option>
    <option value="Their memory is a treasure that will never fade.">Their memory is a treasure that will never fade.</option>
    <option value="Known for their unwavering support and unconditional love.">Known for their unwavering support and unconditional love.</option>
    <option value="Lived a life that was a true example of kindness and dedication.">Lived a life that was a true example of kindness and dedication.</option>
    <option value="A rare soul whose kindness will forever inspire us.">A rare soul whose kindness will forever inspire us.</option>
    <option value="Remembered with deep love, respect, and gratitude.">Remembered with deep love, respect, and gratitude.</option>
    <option value="Left behind a legacy of compassion and care.">Left behind a legacy of compassion and care.</option>
    <option value="Their life was a blessing, and their memory a treasure.">Their life was a blessing, and their memory a treasure.</option>
    <option value="A loving heart that embraced everyone without judgment.">A loving heart that embraced everyone without judgment.</option>
    <option value="Their presence was a gift, their absence a great loss.">Their presence was a gift, their absence a great loss.</option>
    <option value="Always ready to bring comfort and peace to those around.">Always ready to bring comfort and peace to those around.</option>
    <option value="Their journey was marked by love, kindness, and selflessness.">Their journey was marked by love, kindness, and selflessness.</option>
  </select>
</div>

</div>
<hr class="my-4" />

<h4>Prarthana Sabha Details</h4>
<div class="row g-3">

<div class="col-md-4">
<label for="sabha_date" class="form-label">Prayer Meeting Date</label>
<input type="date" id="sabha_date" name="sabha_date" class="form-control" />
</div>

<div class="col-md-4">
<label for="sabha_time" class="form-label">Time</label>
<input type="time" id="sabha_time" name="sabha_time" class="form-control" />
</div>

<div class="col-md-4">
<label for="sabha_venue" class="form-label">Venue</label>
<input type="text" id="sabha_venue" name="sabha_venue" class="form-control" />
</div>

<div>
<label class="form-label">Google Map Link (optional)</label>
<input type="url" name="map_link" class="form-control" placeholder="https://maps.google.com/...">
</div>

<!-- Predefined Prarthna Sabha -->
<div class="mb-3">
<label class="form-label">Prarthna Sabha / Prayer Text</label>
<textarea name="prarthna_text" class="form-control" rows="3">We cordially invite you to the Prarthna Sabha in loving memory of ...</textarea>
</div>

</div>

<div class="mt-4">
<button type="submit" class="btn btn-success">Next</button>
</div>
</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  // Load states on page load
  $.ajax({
    url: 'ajax/get_states.php',
    method: 'GET',
    dataType: 'json',
    success: function(states) {
      let options = '<option value="">--Select State--</option>';
      states.forEach(function(state) {
        options += `<option value="${state.id}">${state.name}</option>`;
      });
      $('#state').html(options);
      $('#city').html('<option value="">--Select City--</option>');
    }
  });

  // Load cities when state changes
  $('#state').change(function() {
    const state_id = $(this).val();
    if (!state_id) {
      $('#city').html('<option value="">--Select City--</option>');
      return;
    }
    $.ajax({
      url: 'ajax/get_cities.php',   // <-- This should be get_cities.php
      method: 'GET',
      data: { state_id: state_id },
      dataType: 'json',
      success: function(cities) {
        let options = '<option value="">--Select City--</option>';
        cities.forEach(function(city) {
          options += `<option value="${city.id}">${city.name}</option>`;
        });
        $('#city').html(options);
      }
    });
  });
});

// When user selects a bio present, fill textarea
$('#bio_presets').change(function() {
    const val = $(this).val();
    $('#bio').val(val);
});
</script>
<?php include(__DIR__ . "/includes/footer.php"); ?> 
   

                                              


