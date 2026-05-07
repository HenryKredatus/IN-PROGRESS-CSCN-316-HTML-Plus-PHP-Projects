<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle="Contact";
include 'includes/header.php';

/* DATABASE CONNECTION */
$host = "localhost";
$dbname = "jwestfal_nation";
$username = "jwestfal_student";
$password = "student#2026";

$conn = @new mysqli($host, $username, $password, $dbname);

$db_error = "";
if ($conn->connect_error) {
  $db_error = "Database connection failed.";
}

/* VARIABLES */
$errors = [];
$summary = "";
$success = false;

/* SANITIZE */
function clean_input($data) {
  return htmlspecialchars(trim($data));
}

/* COUNTRIES */
$countries = [];
if (!$conn->connect_error) {
  $result = $conn->query("SELECT country_id, name FROM countries ORDER BY name");
  while ($row = $result->fetch_assoc()) {
    $countries[] = $row;
  }
}

/* FORM HANDLING */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = clean_input($_POST["name"] ?? "");
  $email = clean_input($_POST["email"] ?? "");
  $trip = clean_input($_POST["trip"] ?? "");
  $message = clean_input($_POST["message"] ?? "");
  $country = clean_input($_POST["country"] ?? "");

  if (empty($name)) $errors[] = "Name is required";
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
  if (empty($trip)) $errors[] = "Please select a trip type";
  if (empty($message)) $errors[] = "Message is required";
  if (empty($country)) $errors[] = "Please select a country";

  if (empty($errors) && !$conn->connect_error) {

    $stmt = $conn->prepare("
      SELECT 
        c.name AS country_name,
        r.name AS region_name,
        ra.region_area,
        GROUP_CONCAT(DISTINCT l.language SEPARATOR ', ') AS languages
      FROM countries c
      LEFT JOIN country_languages cl ON c.country_id = cl.country_id
      LEFT JOIN languages l ON cl.language_id = l.language_id
      LEFT JOIN regions r ON c.region_id = r.region_id
      LEFT JOIN region_areas ra ON r.name = ra.region_name
      WHERE c.country_id = ?
      GROUP BY c.country_id
    ");

    $stmt->bind_param("i", $country);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $summary = "<div class='card'>
      <h3>Submission Summary</h3>

      <p><strong>Name:</strong> $name</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Trip Type:</strong> $trip</p>
      <p><strong>Message:</strong> $message</p>

      <h4>Selected Country Information</h4>

      <p><strong>Country:</strong> {$row['country_name']}</p>
      <p><strong>Region:</strong> {$row['region_name']}</p>
      <p><strong>Region Area:</strong> {$row['region_area']}</p>
      <p><strong>Languages:</strong> {$row['languages']}</p>
    </div>";

    $success = true;
  }
}
?>

<section class="hero">
  <h1>Contact Us</h1>
</section>

<section class="section">

<!-- DB ERROR -->
<?php if (!empty($db_error)): ?>
  <div class="card">
    <p><?= $db_error ?></p>
  </div>
<?php endif; ?>

<!-- ERRORS -->
<?php if (!empty($errors)): ?>
  <div class="card" style="margin-bottom: 2rem;">
    <h3>Errors</h3>
    <ul>
      <?php foreach ($errors as $e): ?>
        <li><?= $e ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<!-- SUBMISSION RESULTS -->
<div id="submission-summary">
  <?= $summary ?>
</div>

<!-- FORM -->
<div class="form-wrapper">
<form method="POST">

  <input name="name" placeholder="Name">
  <input type="email" name="email" placeholder="Email">

  <select name="trip">
    <option value="">Select Trip Type</option>
    <option>Cruise</option>
    <option>Adventure</option>
    <option>Luxury</option>
    <option>Budget</option>
    <option>Other</option>
  </select>

  <select name="country">
    <option value="">Select Country</option>
    <?php foreach ($countries as $c): ?>
      <option value="<?= $c['country_id'] ?>">
        <?= $c['name'] ?>
      </option>
    <?php endforeach; ?>
  </select>

  <textarea name="message" placeholder="Message"></textarea>

  <button type="submit">Submit</button>

</form>
</div>

<!-- CONTACT INFO (NOW BELOW FORM) -->
<div class="card contact-info">
  <h3>Contact Information</h3>

  <p><strong>Starlight Travel Co.</strong></p>
  <p>123 Oceanview Drive, Miami, FL</p>

  <p>
    <a href="tel:5551234567">(555) 123-4567</a> |
    <a href="mailto:contact@starlighttravel.com">contact@starlighttravel.com</a>
  </p>

  <p><strong>Hours:</strong> Mon–Fri 9:00 AM – 6:00 PM</p>
  <p><em>We typically respond within 1 business day.</em></p>
</div>

</section>

<!-- AUTO HIDE SUMMARY -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const summary = document.getElementById("submission-summary");

  if (summary && summary.innerHTML.trim() !== "") {

    if (performance.navigation.type === 1) {
      summary.style.display = "none";
      return;
    }

    setTimeout(() => {
      summary.style.opacity = "0";
      summary.style.transition = "opacity 0.5s ease";

      setTimeout(() => {
        summary.style.display = "none";
      }, 500);

    }, 10000);
  }

});
</script>

<?php include 'includes/footer.php'; ?>