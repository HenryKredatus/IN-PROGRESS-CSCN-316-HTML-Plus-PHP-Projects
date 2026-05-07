<?php include 'includes/header.php'; ?>

<?php
$workshops = [
    [
        "title" => "Intro to Watercolor",
        "level" => "Beginner",
        "desc" => "Learn blending and color layering fundamentals.",
        "image" => "images/Watercolor.jpg",
        "alt" => "Watercolor Painting"
    ],
    [
        "title" => "Digital Illustration Lab",
        "level" => "Intermediate",
        "desc" => "Explore tablet drawing and character design.",
        "image" => "images/Drawing Tablet.jpg",
        "alt" => "Artist using a digital drawing tablet to create character illustrations"
    ],
    [
        "title" => "Advanced Pottery Techniques",
        "level" => "Advanced",
        "desc" => "Master wheel shaping and custom glazing.",
        "image" => "images/Pottery Wheel.png",
        "alt" => "Advanced pottery workshop with artist shaping clay on a spinning wheel"
    ],
    [
        "title" => "Creative Sketchbook Journaling",
        "level" => "Beginner",
        "desc" => "Build confidence through guided sketch prompts.",
        "image" => "images/Sketchbook.jpeg",
        "alt" => "Open sketchbook filled with creative drawings and journaling prompts"
    ],
    [
        "title" => "Mixed Media Textures",
        "level" => "Intermediate",
        "desc" => "Combine paper, paint, and texture mediums.",
        "image" => "images/MM.jpg",
        "alt" => "Mixed media art project"
    ],
];

$filter = $_GET['level'] ?? 'All';

$filtered = array_filter($workshops, function($workshop) use ($filter){
    return $filter === 'All' || $workshop['level'] === $filter;
});
?>

<div class="container">
    <div class="section-title">
        <h2>Workshops & Classes</h2>
        <p>Discover creative classes tailored for artists of all experience levels.</p>
    </div>

    <div class="highlight">
        <h3>Filter Workshops</h3>
        <p>
            <a class="btn" href="?level=All">All</a>
            <a class="btn" href="?level=Beginner">Beginner</a>
            <a class="btn" href="?level=Intermediate">Intermediate</a>
            <a class="btn" href="?level=Advanced">Advanced</a>
        </p>
    </div>

    <div class="grid" style="margin-top:40px;">
        <?php foreach($filtered as $workshop): ?>
        <div class="card">
            <img 
                src="<?php echo $workshop['image']; ?>" 
                alt="<?php echo $workshop['alt']; ?>"
            >
            <div class="card-content">
                <h3><?php echo $workshop['title']; ?></h3>
                <p><strong>Skill Level:</strong> <?php echo $workshop['level']; ?></p>
                <p><?php echo $workshop['desc']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>