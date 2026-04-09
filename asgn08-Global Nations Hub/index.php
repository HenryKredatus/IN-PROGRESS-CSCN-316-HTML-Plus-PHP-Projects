<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <img src="images/Logo.png" alt="Global Nations Hub" class="hero-image">
    <div class="hero-text">
        <h1>Explore the World</h1>
        <p>Discover countries, regions, and people from across the globe in one place.</p>
    </div>
</section>

<!-- Intro Section -->
<section class="intro">
    <h2>Welcome to Global Nations Hub</h2>
    <p>
        Global Nations Hub is your gateway to exploring the world's countries and cultures.
        Learn about different regions, view country details, and explore people across nations.
    </p>
</section>

<!-- Feature Cards -->
<section class="features">
    <div class="feature-card">
        <h3>🌍 Countries</h3>
        <p>Browse detailed information about countries, including codes, regions, and maps.</p>
        <a href="countries.php" class="feature-btn">View Countries</a>
    </div>

    <div class="feature-card">
        <h3>👥 People</h3>
        <p>Explore guests and VIPs from around the world and see who stands out.</p>
        <a href="people.php" class="feature-btn">View People</a>
    </div>
</section>


<?php
/*
==============================
AI Usage Note – Global Nations Hub
==============================

This site was developed with AI assistance (ChatGPT, GPT-5-mini). Key contributions include:

1. **PHP & Database Integration**
   - Connected to the database using provided credentials.
   - Dynamically retrieved and displayed nation codes, region names, and country names.

2. **HTML & Layout**
   - Used modular includes (header.php) for clean organization.
   - Displayed database info and maps for each country as individual "cards."
   - Assigned images to each country name to be displayed when each country name was accessed.

3. **CSS & Styling**
   - Ensured images and logos scale correctly without distortion.
   - Applied flexible layouts for country sections.

4. **AI Role**
   - Guided PHP logic, HTML structure, and CSS styling.
   - Generated code snippets and suggested best practices for responsive, dynamic content.

This comment records the AI's role in building the main site functionality beyond the homepage.
==============================
*/
?>