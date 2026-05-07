<?php
$pageTitle = "Contact";
include 'includes/header.php';

$errors = [];
$success = "";

// Sticky fields
$name = "";
$email = "";
$topic = "";
$method = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $topic = $_POST["topic"] ?? "";
    $method = $_POST["method"] ?? "";
    $message = trim($_POST["message"] ?? "");

    // Validation
    if ($name === "") {
        $errors[] = "Full name is required.";
    }

    if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email address is required.";
    }

    if ($topic === "") {
        $errors[] = "Please select what you're contacting us about.";
    }

    if ($method === "") {
        $errors[] = "Please choose a preferred contact method.";
    }

    if ($message === "") {
        $errors[] = "Please enter a message.";
    }

    // Success handling
    if (empty($errors)) {

        $logEntry =
            "DATE: " . date("Y-m-d H:i:s") . PHP_EOL .
            "NAME: $name" . PHP_EOL .
            "EMAIL: $email" . PHP_EOL .
            "TOPIC: $topic" . PHP_EOL .
            "METHOD: $method" . PHP_EOL .
            "MESSAGE: $message" . PHP_EOL .
            "------------------------" . PHP_EOL;

        file_put_contents("data/submissions.txt", $logEntry, FILE_APPEND);

        $success = "Thank you! Your message has been submitted.";

        // reset sticky fields
        $name = $email = $topic = $method = $message = "";
    }
}
?>

<section class="container">

    <div class="section-title">
        <h2>Contact & Visit Us</h2>
        <p>Have questions about products, workshops, or gardening advice? Reach out anytime.</p>
    </div>

    <div class="contact-wrapper">

        <!-- FORM -->
        <div>

            <form method="POST" action="">

                <?php if (!empty($errors)): ?>
                    <div class="error">
                        <?php foreach ($errors as $error): ?>
                            <p><?php echo htmlspecialchars($error); ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ($success): ?>
                    <div class="success">
                        <p><?php echo htmlspecialchars($success); ?></p>
                    </div>
                <?php endif; ?>

                <label>Full Name *</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">

                <label>Email *</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

                <label>What are you contacting us about? *</label>
                <div style="margin-top:0.5rem;">
                    <label>
                        <input type="radio" name="topic" value="Products" <?php if ($topic === "Products") echo "checked"; ?>>
                        Products
                    </label>

                    <label>
                        <input type="radio" name="topic" value="Workshops" <?php if ($topic === "Workshops") echo "checked"; ?>>
                        Workshops
                    </label>

                    <label>
                        <input type="radio" name="topic" value="General Question" <?php if ($topic === "General Question") echo "checked"; ?>>
                        General Question
                    </label>
                </div>

                <label>Preferred Contact Method *</label>
                <select name="method">
                    <option value="">Select</option>
                    <option value="Email" <?php if ($method === "Email") echo "selected"; ?>>Email</option>
                    <option value="Phone" <?php if ($method === "Phone") echo "selected"; ?>>Phone</option>
                </select>

                <label>Message *</label>
                <textarea name="message"><?php echo htmlspecialchars($message); ?></textarea>

                <button type="submit">Send Message</button>

            </form>

        </div>

        <!-- INFO PANEL -->
        <div class="hours">

            <h3>Store Hours</h3>
            <p>Monday – Friday: 9AM – 7PM</p>
            <p>Saturday: 8AM – 8PM</p>
            <p>Sunday: 10AM – 5PM</p>

            <div class="map-placeholder">
                <iframe
                    src="https://www.google.com/maps?q=Lynchburg,VA&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>

            <div style="margin-top:1.5rem;">
                <h3>Address</h3>
                <p>142 Greenway Avenue, Lynchburg, VA 24501</p>
                <p>Phone: (434) 555-0194</p>
                <p>Email: hello@greensproutgarden.com</p>
            </div>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>