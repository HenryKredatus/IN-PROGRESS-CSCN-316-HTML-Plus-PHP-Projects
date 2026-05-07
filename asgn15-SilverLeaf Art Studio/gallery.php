<?php include 'includes/header.php'; ?>

<?php
$images = [
    [
        "title" => "Ember Horizon",
        "image" => "images/artwork1.jpg",
        "desc" => "A vibrant abstract painting exploring warm color gradients and layered brush textures.",
        "alt" => "Abstract painting with warm gradients and layered brush strokes"
    ],
    [
        "title" => "Silent Meadow",
        "image" => "images/artwork2.jpg",
        "desc" => "A calm watercolor landscape capturing soft skies and rolling hills.",
        "alt" => "Watercolor landscape with soft hills and pastel sky tones"
    ],
    [
        "title" => "Neon Persona",
        "image" => "images/artwork3.jpg",
        "desc" => "Digital illustration featuring a stylized character design concept sketch.",
        "alt" => "Digital character illustration with clean line art and shading"
    ],
    [
        "title" => "Fragments of Memory",
        "image" => "images/artwork4.jpg",
        "desc" => "Mixed media collage combining paper textures, paint, and ink details.",
        "alt" => "Mixed media collage with layered paper, paint, and ink textures"
    ],
    [
        "title" => "Tidal Motion",
        "image" => "images/artwork5.jpg",
        "desc" => "Expressive acrylic painting focusing on bold movement and contrast.",
        "alt" => "Acrylic painting with bold brush movement and high contrast colors"
    ],
    [
        "title" => "Earthbound Forms",
        "image" => "images/artwork6.jpg",
        "desc" => "Ceramic-inspired artwork study highlighting natural earth tones.",
        "alt" => "Earth-toned ceramic inspired art piece with organic textures"
    ],
    [
        "title" => "Quiet Studies",
        "image" => "images/artwork7.jpg",
        "desc" => "Sketchbook page filled with observational figure drawing studies.",
        "alt" => "Sketchbook page with pencil figure drawing studies"
    ],
    [
        "title" => "Ink Drift",
        "image" => "images/artwork8.jpg",
        "desc" => "Experimental ink composition using flowing abstract shapes.",
        "alt" => "Abstract ink artwork with flowing organic shapes"
    ],
    [
        "title" => "Astral Corridor",
        "image" => "images/artwork9.jpg",
        "desc" => "Digital painting of a surreal environment with atmospheric lighting.",
        "alt" => "Surreal digital painting with glowing atmospheric lighting"
    ],
    [
        "title" => "Color Theory No. 7",
        "image" => "images/artwork10.jpg",
        "desc" => "Color study focused on complementary palette exploration.",
        "alt" => "Color study artwork showing complementary color contrasts"
    ],
    [
        "title" => "Bloom Study",
        "image" => "images/artwork11.jpg",
        "desc" => "Watercolor floral composition with soft layered petals.",
        "alt" => "Watercolor floral painting with soft layered petals"
    ],
    [
        "title" => "Echoes of Process",
        "image" => "images/artwork12.jpg",
        "desc" => "Final exhibition piece combining multiple mixed media techniques.",
        "alt" => "Mixed media exhibition artwork combining paint and texture layers"
    ],
];

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 4;
$totalPages = ceil(count($images) / $perPage);

$start = ($page - 1) * $perPage;
$currentImages = array_slice($images, $start, $perPage);
?>

<div class="container">
    <div class="section-title">
        <h2>Studio Gallery</h2>
        <p>Explore colorful works created by local artists and workshop students.</p>
    </div>

    <div class="gallery-grid">
        <?php foreach($currentImages as $art): ?>
        <div class="gallery-item">
            <img src="<?php echo $art['image']; ?>" alt="<?php echo $art['alt']; ?>">
            <p><?php echo $art['title']; ?></p>
            <small style="display:block; padding: 0 15px 15px; color:#666;">
                <?php echo $art['desc']; ?>
            </small>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php for($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>