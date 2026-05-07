<?php
$tips = [
    "Rotate indoor plants weekly so every side receives balanced sunlight.",
    "Use compost to naturally enrich your soil and reduce waste.",
    "Water deeply but less frequently to encourage strong root systems.",
    "Add mulch to retain moisture and prevent weeds in container gardens.",
    "Herbs thrive best with at least six hours of sunlight daily."
];

$randomTip = $tips[array_rand($tips)];

$month = date('n');

if($month >= 3 && $month <= 5){
    $seasonBanner = "Spring Planting Season is Here! Fresh herbs and flowers now available.";
} elseif($month >= 6 && $month <= 8){
    $seasonBanner = "Summer Garden Sale - Save on patio plants and watering essentials!";
} elseif($month >= 9 && $month <= 11){
    $seasonBanner = "Fall Harvest Specials and Compost Workshops Happening Weekly!";
} else {
    $seasonBanner = "Winter Indoor Gardening Kits Available Now!";
}
?>
