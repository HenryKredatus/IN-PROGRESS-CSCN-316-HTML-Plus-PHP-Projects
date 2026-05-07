<?php include 'includes/header.php'; ?>

<?php
$artists = [
    [
        "name" => "Maya Holloway",
        "bio" => "A mixed-media artist blending watercolor and digital illustration into dreamlike landscapes.",
        "image" => "images/Maya.jpg",
        "alt" => "Mixed-media artist Maya Holloway standing beside colorful watercolor artwork"
    ],
    [
        "name" => "Jordan Lee",
        "bio" => "Ceramics instructor known for earthy handcrafted pottery inspired by nature.",
        "image" => "images/Jordan.jpg",
        "alt" => "Ceramics instructor Jordan Lee shaping handcrafted pottery in the studio"
    ],
    [
        "name" => "Ariana Brooks",
        "bio" => "Contemporary painter focusing on colorful abstract storytelling pieces.",
        "image" => "images/Ariana.jpg",
        "alt" => "Contemporary artist Ariana Brooks displaying vibrant abstract paintings"
    ]
];

$spotlight = $artists[array_rand($artists)];
?>

<section class="hero" style="background-image: url('images/Hero.jpeg');" aria-label="Creative art studio background with painting and pottery atmosphere">
    <div class="hero-content">
        <h2>Where Creativity Comes to Life</h2>
        <p>
            SilverLeaf Art Studio is a welcoming creative space where artists,
            beginners, and community members gather to explore painting,
            pottery, digital illustration, and mixed-media art experiences.
        </p>

        <a href="workshops.php" class="btn">Explore Workshops</a>
    </div>
</section>

<div class="container">

    <!-- STUDIO INTRODUCTION -->
    <div class="section-title">
        <h2>Welcome to SilverLeaf Art Studio</h2>
        <p>
            Discover a colorful and inspiring environment designed to encourage
            creativity, collaboration, and artistic growth.
        </p>
    </div>

    <div class="grid">
        <div class="card">
            <img src="images/Studio.jpg" alt="Interior view of the SilverLeaf Art Studio workspace">
            <div class="card-content">
                <h3>Creative Studio Space</h3>
                <p>
                    Our studio features bright workspaces, professional supplies,
                    and a relaxed atmosphere perfect for artists of all skill levels.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="images/Watercolor.jpg" alt="Watercolor Painting">
            <div class="card-content">
                <h3>Hands-On Workshops</h3>
                <p>
                    Join guided classes in watercolor, pottery, sketching,
                    digital illustration, and experimental mixed-media techniques.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="images/Gallery.jpg" alt="Community members viewing artwork in the studio gallery">
            <div class="card-content">
                <h3>Community Gallery</h3>
                <p>
                    Browse rotating exhibits showcasing local artists,
                    student creations, and featured seasonal collections.
                </p>
            </div>
        </div>
    </div>

    <!-- FEATURED EXPERIENCES -->
    <div class="section-title" style="margin-top: 70px;">
        <h2>Featured Studio Experiences</h2>
        <p>Creative opportunities designed to inspire every artist.</p>
    </div>

    <div class="grid">
        <div class="card">
            <img src="images/Painting.jpg" alt="Artist painting on a canvas during a workshop session">
            <div class="card-content">
                <h3>Painting Workshops</h3>
                <p>
                    Learn acrylic and watercolor techniques through interactive
                    lessons led by experienced local artists.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="images/Pottery.jpg" alt="Handmade pottery pieces displayed after a ceramics class">
            <div class="card-content">
                <h3>Pottery Classes</h3>
                <p>
                    Practice wheel throwing, sculpting, and glazing while creating
                    your own handcrafted ceramic pieces.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="images/Gallery 2.png" alt="Art gallery wall displaying colorful paintings">
            <div class="card-content">
                <h3>Art Gallery</h3>
                <p>
                    Explore vibrant exhibits featuring paintings,
                    digital illustrations, pottery, and student artwork.
                </p>
            </div>
        </div>
    </div>

    <!-- GALLERY PREVIEW -->
    <div class="section-title" style="margin-top: 70px;">
        <h2>Gallery Preview</h2>
        <p>
            A glimpse into the creative artwork displayed throughout our studio.
        </p>
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="images/Acrylic.jpg" alt="Acrylic painting with vibrant warm colors">
            <p>Abstract Acrylic Collection</p>
        </div>

        <div class="gallery-item">
            <img src="images/Pottery Shelves.jpg" alt="Handcrafted ceramic pottery arranged on wooden shelves">
            <p>Handcrafted Pottery</p>
        </div>

        <div class="gallery-item">
            <img src="images/Illustrations.jpg" alt="Digital illustrations artwork displayed in a modern frame">
            <p>Digital Illustration Series</p>
        </div>

        <div class="gallery-item">
            <img src="images/Watercolor Landscape.jpg" alt="Watercolor landscape artwork featured in the studio gallery">
            <p>Watercolor Landscapes</p>
        </div>
    </div>

    <!-- CALL TO ACTION -->
    <div class="highlight">
        <h2>Ready to Start Creating?</h2>

        <p>
            Whether you are trying art for the first time or expanding your
            creative skills, SilverLeaf Art Studio offers workshops,
            community events, and inspiring experiences for everyone.
        </p>

        <br>

        <a href="workshops.php" class="btn">View All Workshops</a>
        <a href="contact.php" class="btn" style="margin-left: 10px;">
            Contact the Studio
        </a>

        <img
            src="images/Studio 2.jpg"
            alt="Art Studio"
        >
    </div>

    <!-- ARTIST SPOTLIGHT -->
    <div class="highlight" style="margin-top: 60px;">
        <h2>Artist Spotlight</h2>

        <h3><?php echo $spotlight['name']; ?></h3>

        <p><?php echo $spotlight['bio']; ?></p>

        <img
            src="<?php echo $spotlight['image']; ?>"
            alt="Featured artist spotlight portrait for <?php echo $spotlight['name']; ?>"
        >
    </div>

</div>

<?php
/*
AI USAGE NOTE

This website was developed with assistance from an AI tool to support structure, debugging, and refinement of PHP, HTML, and CSS code.

AI assistance was used to:
- Help design and organize multi-page PHP structure (header/footer includes and page templates)
- Improve form handling logic using PHP (validation functions, sanitization, and error handling)
- Implement secure contact form functionality including required field validation, email validation, and subject validation
- Add a simple anti-spam challenge question handled through PHP logic
- Ensure proper form behavior where inputs persist only on failed submission and reset after successful submission using a POST-redirect-GET pattern
- Generate formatted HTML output for submission confirmation messages
- Improve accessibility through meaningful alt text for images and structured semantic HTML
- Assist with responsive layout and CSS improvements for cards, galleries, hero sections, and spotlight components
- Refine image handling so artwork and gallery images display clearly without distortion where possible

All final design decisions, content choices, and adjustments were reviewed and approved by the developer.
*/
?>

<?php include 'includes/footer.php'; ?>