<?php
$snacks = require __DIR__ . '/data.php';
include __DIR__ . '/includes/header.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$found = null;

foreach ($snacks as $snack) {
    if ($snack['id'] === $id) {
        $found = $snack;
        break;
    }
}
?>

<?php if ($found): ?>
<h2><?php echo htmlspecialchars($found['name']); ?></h2>
<p><strong>Category:</strong> <?php echo htmlspecialchars($found['category']); ?></p>
<p><strong>Price:</strong> $<?php echo number_format($found['price'], 2); ?></p>
<?php else: ?>
<h2>Snack not found</h2>
<p>The snack you are looking for does not exist.</p>
<?php endif; ?>

<p><a href="index.php">Back to list</a></p>

<?php include __DIR__ . '/includes/footer.php'; ?>
