<?php 
$pageTitle="Instructors"; 
include 'includes/header.php'; 
include 'includes/navigation.php';

$instructors = json_decode(file_get_contents('data/instructors.json'), true);

$instructorImages = [
    [
        "src" => "images/Mia.jpg",
        "alt" => "Mia Rivers"
    ],
    [
        "src" => "images/Jay.jpg",
        "alt" => "Jay Carter"
    ],
    [
        "src" => "images/Elena.jpg",
        "alt" => "Elena Brooks"
    ]
];
?>

<section class="page-banner">
    <div class="container">
        <h1>Meet Our Instructors</h1>
        <p>Experienced performers and mentors passionate about helping students grow.</p>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="card-grid">

        <?php foreach($instructors as $index => $teacher): ?>

        <div class="card">

            <div class="card-image instructor-image">
                <img 
                    src="<?php echo $instructorImages[$index]['src']; ?>" 
                    alt="<?php echo $instructorImages[$index]['alt']; ?>"
                >
            </div>

            <div class="card-content">
                <h3><?php echo $teacher['name']; ?></h3>

                <p>
                    <strong><?php echo $teacher['specialty']; ?></strong>
                </p>

                <p><?php echo $teacher['bio']; ?></p>
            </div>

        </div>

        <?php endforeach; ?>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>