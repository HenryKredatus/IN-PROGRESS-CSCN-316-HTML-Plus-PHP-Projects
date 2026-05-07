<?php
$pageTitle = "Workshops";
include 'includes/header.php';

$workshops = file(
    'data/workshops.txt',
    FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
);
?>

<section class="container">

    <div class="section-title">
        <h2>Upcoming Workshops & Events</h2>
        <p>
            Join hands-on gardening experiences designed for beginners,
            hobbyists, and urban plant lovers of all skill levels.
        </p>
    </div>

    <!-- NEW GRID WRAPPER (isolated system) -->
    <div class="ws-grid">

        <?php foreach ($workshops as $workshop): ?>

            <?php
                $parts = explode("|", trim($workshop));

                $title = $parts[0] ?? '';
                $date = $parts[1] ?? '';
                $desc = $parts[2] ?? '';
                $img = $parts[3] ?? '';
                $alt = $parts[4] ?? '';
            ?>

            <article class="ws-card">

                <div class="ws-image">
                    <?php if (!empty($img)): ?>
                        <img src="<?php echo htmlspecialchars($img); ?>"
                             alt="<?php echo htmlspecialchars($alt); ?>">
                    <?php else: ?>
                        <div class="ws-placeholder">No Image</div>
                    <?php endif; ?>
                </div>

                <div class="ws-body">

                    <div class="ws-date">
                        <?php echo htmlspecialchars($date); ?>
                    </div>

                    <h3><?php echo htmlspecialchars($title); ?></h3>

                    <p><?php echo htmlspecialchars($desc); ?></p>

                    <a class="btn ws-btn" href="contact.php">
                        Reserve Your Spot
                    </a>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

    <div class="feature-box">
        <h3>Learn - Grow - Connect</h3>
        <p>
            GreenSprout workshops are designed to make gardening
            approachable, sustainable, and fun for urban residents.
            Each session includes expert guidance, practical demos,
            and take-home tips you can apply immediately.
        </p>
    </div>

</section>

<?php include 'includes/footer.php'; ?>