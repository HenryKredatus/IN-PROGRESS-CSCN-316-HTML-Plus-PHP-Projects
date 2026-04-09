<?php
include 'header.php';
include 'config.php';

echo "<h2>Countries</h2>";

// Manually assign images for each country
$countryImages = [
    "Aruba" => ["images/Aruba 1.jpg", "images/Aruba 2.jpg", "images/Aruba 3.jpg"],
    "Afghanistan" => ["images/Afghanistan 1.jpg", "images/Afghanistan 2.gif", "images/Afghanistan 3.gif"],
    "Angola" => ["images/Angola 1.gif", "images/Angola 2.jpg", "images/Angola 3.jpg"],
    "Anguilla" => ["images/Anguilla 1.jpg", "images/Anguilla 2.png", "images/Anguilla 3.jpg"],
    "Albania" => ["images/Albania 1.jpg", "images/Albania 2.png", "images/Albania 3.gif"],
    "Andorra" => ["images/Andorra 1.png", "images/Andorra 2.jpg", "images/Andorra 3.gif"],
    "Netherlands Antilles" => ["images/NA 1.png", "images/NA 2.gif", "images/NA 3.jpg"],
    "United Arab Emirates" => ["images/UAE 1.jpg", "images/UAE 2.gif", "images/UAE 3.jpg"],
    "Argentina" => ["images/Argentina 1.png", "images/Argentina 2.png", "images/Argentina 3.gif"],
    "Armenia" => ["images/Armenia 1.png", "images/Armenia 2.png", "images/Armenia 3.jpg"],
];

try {
    // Fetch first 10 countries with their region names via JOIN
    $stmt = $pdo->query("
        SELECT c.*, r.name AS region_name
        FROM countries c
        LEFT JOIN regions r ON c.region_id = r.region_id
        LIMIT 10
    ");
    $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($countries as $country) {
        echo "<div class='card'>";

        // Country attributes
        echo "<h3>" . htmlspecialchars($country['name']) . "</h3>";
        echo "<p>Code 2: " . htmlspecialchars($country['country_code2']) . "</p>";
        echo "<p>Code 3: " . htmlspecialchars($country['country_code3']) . "</p>";

        // Region name from JOIN
        $regionName = $country['region_name'] ?? "Unknown";
        echo "<p>Region: " . htmlspecialchars($regionName) . "</p>";

        // Manually insert images
        if (isset($countryImages[$country['name']])) {
            foreach ($countryImages[$country['name']] as $img) {
                echo "<img src='" . htmlspecialchars($img) . "' alt='" . htmlspecialchars($country['name']) . " Image'>";
            }
        } else {
            echo "<p>No images specified for this country.</p>";
        }

        echo "</div>"; // end card
    }

} catch (Exception $e) {
    echo "<p>Error loading data: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>