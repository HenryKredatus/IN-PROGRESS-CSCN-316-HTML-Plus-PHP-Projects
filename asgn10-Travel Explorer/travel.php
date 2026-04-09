<?php 
include 'header.php'; 
include 'config.php';

$query = $pdo->query("
    SELECT LOCATION_ID, STREET_ADDRESS, POSTAL_CODE, CITY, STATE_PROVINCE, COUNTRY_ID 
    FROM locations 
    LIMIT 10
");

/* Map LOCATION_ID → image + alt text */
$images = [
    1000 => ["src" => "images/Rome.jpg", "alt" => "Rome"],
    1100 => ["src" => "images/Venice.jpg", "alt" => "Venice"],
    1200 => ["src" => "images/Tokyo.jpeg", "alt" => "Tokyo"],
    1300 => ["src" => "images/Hiroshima.png", "alt" => "Hiroshima"],
    1400 => ["src" => "images/Southlake.png", "alt" => "Southlake"],
    1500 => ["src" => "images/South SF.jpg", "alt" => "South San Francisco"],
    1600 => ["src" => "images/South Brunswick.jpg", "alt" => "South Brunswick"],
    1700 => ["src" => "images/Seattle.jpg", "alt" => "Seattle"],
    1800 => ["src" => "images/Toronto.jpg", "alt" => "Toronto"],
    1900 => ["src" => "images/Whitehorse.jpg", "alt" => "Whitehorse"]
];

/* Brief synopsis for each city */
$synopsis = [
    1000 => "Rome, the Eternal City, offers ancient ruins, iconic landmarks, and vibrant culture.",
    1100 => "Venice is famous for its canals, gondolas, and romantic architecture.",
    1200 => "Tokyo blends futuristic skyscrapers with traditional temples and delicious cuisine.",
    1300 => "Hiroshima is a city of history, peace memorials, and beautiful gardens.",
    1400 => "Southlake is a charming Texas town known for community parks and shopping.",
    1500 => "South San Francisco features stunning bay views and industrial history.",
    1600 => "South Brunswick offers a mix of suburban life and cultural diversity in New Jersey.",
    1700 => "Seattle is known for its iconic Space Needle, coffee culture, and waterfront.",
    1800 => "Toronto is a bustling Canadian city with multicultural neighborhoods and skyline views.",
    1900 => "Whitehorse, in Yukon, is a gateway to the wilderness and northern adventures."
];
?>

<h1>Travel Destinations</h1>

<div class="grid">
<?php while($row = $query->fetch(PDO::FETCH_ASSOC)): ?>

    <div class="card">

        <?php if (isset($images[$row['LOCATION_ID']])): ?>
            <img 
                src="<?php echo $images[$row['LOCATION_ID']]['src']; ?>" 
                alt="<?php echo $images[$row['LOCATION_ID']]['alt']; ?>">
        <?php endif; ?>

        <h2><?php echo $row['CITY']; ?></h2>

        <p><strong>Street:</strong> <?php echo $row['STREET_ADDRESS']; ?></p>
        <p><strong>Postal Code:</strong> <?php echo $row['POSTAL_CODE']; ?></p>
        <p><strong>State/Province:</strong> <?php echo $row['STATE_PROVINCE']; ?></p>
        <p><strong>Country ID:</strong> <?php echo $row['COUNTRY_ID']; ?></p>

        <?php if (isset($synopsis[$row['LOCATION_ID']])): ?>
            <p><em><?php echo $synopsis[$row['LOCATION_ID']]; ?></em></p>
        <?php endif; ?>

    </div>

<?php endwhile; ?>
</div>