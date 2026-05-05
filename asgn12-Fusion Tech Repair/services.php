<?php include 'includes/header.php'; ?>
<div class="section">
<h2>Our Services</h2>

<div class="card-grid">
<?php
$services = [
    [
        "title" => "Screen Repair",
        "image" => "images/Screen Repair.png",
        "alt" => "Broken Screen and Tools",
        "desc" => "We replace cracked or damaged screens on phones, tablets, and laptops using high-quality parts for a like-new finish."
    ],
    [
        "title" => "Battery Replacement",
        "image" => "images/Battery Replacement.jpg",
        "alt" => "Phone battery being replaced by a technician",
        "desc" => "Extend your device's life with a fresh battery installation that restores performance and reliability."
    ],
    [
        "title" => "Virus Removal",
        "image" => "images/Virus Removal.png",
        "alt" => "Virus Removal Cartoon",
        "desc" => "We remove malware, spyware, and viruses while protecting your data and improving system performance."
    ],
    [
        "title" => "Custom Builds",
        "image" => "images/Custom PC.jpg",
        "alt" => "Custom-built desktop PC with blue lighting",
        "desc" => "Get a fully customized PC tailored to your needs-whether for gaming, work, or creative projects."
    ],
    [
        "title" => "Data Recovery",
        "image" => "images/Data Recovery.jpg",
        "alt" => "Technician recovering data from a damaged hard drive",
        "desc" => "Lost important files? We specialize in recovering data from damaged drives, corrupted systems, and accidental deletions."
    ],
    [
        "title" => "Water Damage Repair",
        "image" => "images/WDR.jpg",
        "alt" => "Water-damaged phone being repaired on a workbench",
        "desc" => "We diagnose and repair devices exposed to liquid damage, restoring functionality whenever possible."
    ]
];

foreach ($services as $s) {
    echo "
    <div class='card'>
        <img src='{$s["image"]}' alt='{$s["alt"]}'>
        <h3>{$s["title"]}</h3>
        <p>{$s["desc"]}</p>
    </div>
    ";
}
?>
</div>

</div>
<?php include 'includes/footer.php'; ?>