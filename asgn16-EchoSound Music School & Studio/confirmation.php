<?php
$pageTitle="Booking Confirmed";
include 'includes/header.php';
include 'includes/navigation.php';

$name = $_GET['name'] ?? 'there';
$lesson = $_GET['lesson'] ?? 'your selected';
$email = $_GET['email'] ?? '';
?>

<section class="section">
    <div class="container">
        <div class="success-box">

            <h2>Booking Request Submitted!</h2>

            <p>
                Thank you, <?php echo htmlspecialchars($name); ?>.
                Your request for <?php echo htmlspecialchars($lesson); ?> lessons has been received.
            </p>

            <?php if(!empty($email)): ?>
                <p>We will contact you soon at <?php echo htmlspecialchars($email); ?>.</p>
            <?php endif; ?>

            <br>

            <a href="contact.php" class="btn">Book Another Lesson</a>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>