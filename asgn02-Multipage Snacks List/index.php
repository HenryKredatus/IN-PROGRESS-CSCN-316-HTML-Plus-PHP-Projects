<?php
$snacks = require __DIR__ . '/data.php';
include __DIR__ . '/includes/header.php';
?>

<h2>Available Snacks</h2>

<?php foreach ($snacks as $snack): ?>
<div class="snack">
    <strong><?php echo htmlspecialchars($snack['name']); ?></strong><br>
    Category: <?php echo htmlspecialchars($snack['category']); ?><br>
    Price: $<?php echo number_format($snack['price'], 2); ?><br>
    <a href="details.php?id=<?php echo $snack['id']; ?>">View Details</a>
</div>
<?php endforeach; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
