
<?php
$pageTitle = "Home";
include 'includes/header.php';
?>

<?php
/*
AI DEVELOPMENT / USAGE NOTE
===========================

This site was iteratively improved using AI-assisted development.

SUMMARY OF CHANGES:

1. IMAGE HANDLING
- Fixed card/gallery images to prevent stretching/cropping
- Used object-fit: contain for product images
- Used object-fit: cover for hero/banner images

2. LAYOUT + SPACING
- Improved spacing between grids and section blocks (e.g., feature boxes)
- Fixed inconsistent card/grid spacing across pages
- Enhanced hero layering with image + overlay for readability

3. WORKSHOPS PAGE
- Prevented blank cards by skipping empty lines in workshops.txt
- Parsed structured workshop data (title, date, description, image, alt)
- Added cleaner event layout with date badges

4. PRODUCTS PAGE
- Added categories (Plants, Tools, Soil Mixes)
- Included per-product alt text for accessibility
- Improved stock display and card structure

5. ABOUT PAGE
- Expanded content structure (story, mission, sustainability)
- Improved full-width feature sections and visual hierarchy
- Better separation of content blocks for readability

6. CONTACT PAGE
- Built PHP form with validation and error handling
- Added persistent input values after submission errors
- Implemented success/error messaging system
- Added submission logging with timestamps
- Included business hours and location section with map integration

7. HERO SECTION
- Replaced background-image with real <img> element
- Added overlay for text readability
- Improved accessibility with proper alt text support

8. CSS IMPROVEMENTS
- Removed duplicate/conflicting rules
- Standardized spacing, typography, and components
- Improved consistency across all pages (home, products, workshops, about, contact)
- Reduced stylesheet redundancy and improved maintainability

9. OVERALL GOALS
- Maintainable modular PHP structure (includes, reusable layout parts)
- Consistent UI system (cards, grids, feature boxes, forms)
- Improved accessibility and semantic structure
- More complete, production-like multi-page website

END RESULT:
A fully functional multi-page PHP website with structured content,
clean responsive design, consistent styling, and improved UX across
Home, Products, Workshops, About, and Contact pages.
*/
?>

<section class="hero">

    <img 
        src="assets/images/Hero.jpg" 
        alt="Lush urban garden with plants, flowers, and greenery"
        class="hero-image"
    >

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h2>Bring Nature Into Your Urban Space</h2>

        <p>
            GreenSprout Urban Garden Center helps city residents grow 
            thriving gardens with eco-friendly products, workshops, 
            and expert guidance.
        </p>

        <a href="products.php" class="btn">
            Explore Products
        </a>
    </div>

</section>

<section class="container">
    <div class="section-title">
        <h2>Why Garden With Us?</h2>
        <p>Everything you need to create a greener, healthier lifestyle.</p>
    </div>

    <div class="grid">
        <div class="card">
            <img src="assets/images/Plants.png" alt="Plants">
            <div class="card-content">
                <h3>Healthy Plants</h3>
                <p>Choose from indoor plants, succulents, herbs, and seasonal flowers grown with sustainability in mind.</p>
            </div>
        </div>

        <div class="card">
            <img src="assets/images/Workshop.jpg" alt="Workshop">
            <div class="card-content">
                <h3>Community Workshops</h3>
                <p>Learn gardening basics, container gardening, and eco-friendly planting techniques from local experts.</p>
            </div>
        </div>

        <div class="card">
            <img src="assets/images/Supplies.jpg" alt="Tools">
            <div class="card-content">
                <h3>Eco-Friendly Supplies</h3>
                <p>Shop sustainable soil mixes, watering systems, and gardening tools designed for urban spaces.</p>
            </div>
        </div>
    </div>

    <div class="tips-banner">
        <h2>Tip of the Day</h2>
        <p><?php echo $randomTip; ?></p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
