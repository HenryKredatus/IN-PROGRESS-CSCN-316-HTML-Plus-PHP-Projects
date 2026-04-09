<?php 
include 'header.php'; 
include 'config.php';

echo "<h2>People</h2>";

echo "<div class='people-container'>";

/* Guests Section */
echo "<div class='people-card'>";
echo "<h3>Guests</h3>";

try {
    $stmt = $pdo->query("SELECT name FROM guests");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p class='person'>" . htmlspecialchars($row['name']) . "</p>";
    }
} catch (Exception $e) {
    echo "<p>Error loading guests.</p>";
}

echo "</div>";

/* VIPs Section */
echo "<div class='people-card'>";
echo "<h3>VIPs</h3>";

try {
    $stmt = $pdo->query("SELECT name FROM vips");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p class='person vip'>" . htmlspecialchars($row['name']) . "</p>";
    }
} catch (Exception $e) {
    echo "<p>Error loading VIPs.</p>";
}

echo "</div>";

echo "</div>";

// Image at bottom
echo "<div class='people-image'>";
echo "<img src='images/People.jpg' alt='People'>";
echo "</div>";
?>