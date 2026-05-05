<?php include 'includes/header.php'; ?>

<div class="hero">
    <h1>Contact Us</h1>
    <p>Have a question or need a repair? Reach out and we’ll get back to you.</p>
</div>

<div class="section">

<?php
$name = "";
$email = "";
$message = "";
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize input
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }

    // If no errors → success
    if (empty($errors)) {
        $success = "Thank you, $name! Your message has been received. We'll contact you soon.";
        
        // Clear form after success
        $name = $email = $message = "";
    }
}
?>

<h2>Get in Touch</h2>

<!-- Error Messages -->
<?php if (!empty($errors)): ?>
    <div class="form-error">
        <?php foreach ($errors as $e) {
            echo "<p>$e</p>";
        } ?>
    </div>
<?php endif; ?>

<!-- Success Message -->
<?php if ($success): ?>
    <div class="form-success">
        <p><?php echo $success; ?></p>
    </div>
<?php endif; ?>

<form method="POST" action="">
    <input 
        type="text" 
        name="name" 
        placeholder="Your Name"
        value="<?php echo htmlspecialchars($name); ?>"
    >

    <input 
        type="text" 
        name="email" 
        placeholder="Your Email"
        value="<?php echo htmlspecialchars($email); ?>"
    >

    <textarea 
        name="message" 
        placeholder="Your Message"
        rows="5"
    ><?php echo htmlspecialchars($message); ?></textarea>

    <button type="submit">Send Message</button>
</form>

<!-- Extra info section -->
<div class="card-grid" style="margin-top:30px;">
    <div class="card">
        <h3>Location</h3>
        <p>123 Tech Street<br>Repair City, TX 00000</p>
    </div>
    <div class="card">
        <h3>Hours</h3>
        <p>Mon–Fri: 9AM – 6PM<br>Sat: 10AM – 4PM</p>
    </div>
    <div class="card">
        <h3>Contact</h3>
        <p>Email: support@fusiontech.com<br>Phone: (555) 123-4567</p>
    </div>
</div>

<!-- Map Section -->
<div style="margin-top: 40px;">
    <h2>Find Us</h2>

    <div class="map-container">
        <iframe
            src="https://www.google.com/maps?q=123+Tech+Street+Repair+City+TX&output=embed"
            width="100%"
            height="350"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</div>

</div>

<?php include 'includes/footer.php'; ?>