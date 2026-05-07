<?php
$pageTitle = "Gardening Tips";
include 'includes/header.php';
?>

<section class="container">

    <div class="section-title">
        <h2>Gardening Guide Hub</h2>
        <p>Learn the essentials, follow step-by-step tutorials, and grow with the seasons.</p>
    </div>

    <!-- BEGINNER PATH -->
    <div class="feature-box">
        <h3>🌱 Beginner Gardening Essentials</h3>
        <p>
            Start simple. Focus on consistency, not complexity. Most beginner success comes from choosing
            the right plants and avoiding overwatering.
        </p>
        <ul style="margin-top: 1rem; padding-left: 1.2rem;">
            <li>Start with herbs (basil, mint, parsley)</li>
            <li>Use well-draining soil</li>
            <li>Keep a simple watering schedule</li>
            <li>Don’t over-fertilize early on</li>
        </ul>
    </div>

    <div class="feature-box">
        <h3>☀️ Light & Placement Basics</h3>
        <p>
            Plants depend on light more than anything else. Observe your space before choosing plants.
        </p>
        <ul style="margin-top: 1rem; padding-left: 1.2rem;">
            <li>Bright indirect light → pothos, peace lily</li>
            <li>Direct sun → herbs, succulents</li>
            <li>Low light → snake plant, ZZ plant</li>
        </ul>
    </div>

    <div class="feature-box">
        <h3>💧 Watering Without Guesswork</h3>
        <p>
            Stick your finger 1–2 inches into the soil. If it feels dry, it’s time to water.
            If not, wait. Overwatering kills more plants than underwatering.
        </p>
    </div>

    <!-- TUTORIAL SECTION -->
    <div class="section-title" style="margin-top: 4rem;">
        <h2>Step-by-Step Tutorials</h2>
        <p>Follow these simple projects to build real gardening skills.</p>
    </div>

    <div class="grid">

        <div class="card">
            <img src="assets/images/Planting Seeds.jpg" alt="Planting seeds">
            <div class="card-content">
                <h3>How to Start Seeds Indoors</h3>
                <p>
                    Learn how to plant seeds in trays, maintain moisture, and transplant seedlings successfully.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="assets/images/Herb Workshop.png" alt="Herb garden tutorial">
            <div class="card-content">
                <h3>Build a Kitchen Herb Garden</h3>
                <p>
                    Create a small indoor herb setup that provides fresh ingredients year-round.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="assets/images/Composting Workshop.jpg" alt="Composting">
            <div class="card-content">
                <h3>Beginner Composting Guide</h3>
                <p>
                    Turn kitchen scraps into nutrient-rich soil using simple composting methods.
                </p>
            </div>
        </div>

    </div>

    <!-- SEASONAL ADVICE -->
    <div class="feature-box" style="margin-top: 4rem;">
        <h3>🌤 Seasonal Gardening Advice</h3>
        <p>
            Gardening changes with the seasons. Adjust your care routine throughout the year.
        </p>

        <div class="grid" style="margin-top: 1.5rem;">

            <div>
                <h4>🌸 Spring</h4>
                <p>Best time to plant new seeds and start outdoor gardens.</p>
            </div>

            <div>
                <h4>☀️ Summer</h4>
                <p>Focus on watering, pruning, and pest control.</p>
            </div>

            <div>
                <h4>🍂 Fall</h4>
                <p>Harvest crops and prepare soil for winter rest.</p>
            </div>

            <div>
                <h4>❄️ Winter</h4>
                <p>Maintain indoor plants and plan next year’s garden.</p>
            </div>

        </div>
    </div>

    <!-- IMAGE GALLERY -->
    <div class="section-title" style="margin-top: 4rem;">
        <h2>Inspiration Gallery</h2>
    </div>

    <div class="gallery">
        <img src="assets/images/Indoor 1.jpg" alt="Garden inspiration 1">
        <img src="assets/images/Indoor 2.png" alt="Garden inspiration 2">
        <img src="assets/images/Indoor 3.jpg" alt="Garden inspiration 3">
        <img src="assets/images/Indoor 4.jpg" alt="Indoor plant setup inspiration">
    </div>

</section>

<?php include 'includes/footer.php'; ?>