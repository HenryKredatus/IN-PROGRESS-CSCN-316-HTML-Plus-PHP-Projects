<?php $pageTitle="Home"; include 'includes/header.php'; ?>

<?php
/*
================================================================================
AI USAGE / FULL SITE DEVELOPMENT DOCUMENTATION
================================================================================

This website (multi-page travel-themed PHP site) was developed and refined
with AI-assisted implementation and iterative improvements across all pages.

The site consists of 5 main pages:
- Home
- Destinations / Listings (grid-based content)
- Contact
- Packages
- About

================================================================================
1. OVERALL ARCHITECTURE
================================================================================
- Modular PHP structure using includes (header.php / footer.php).
- Consistent layout system across all pages:
  • Hero sections
  • Card-based grid layouts
  • Section wrappers for spacing consistency
- Reusable navigation system across all pages.

================================================================================
2. FRONT-END DESIGN SYSTEM (CSS)
================================================================================
- Unified dark-themed UI design across the entire site.
- Global reset implemented for consistent rendering.
- Standardized components:
  • Navbar (sticky navigation)
  • Hero sections (image + text overlays where applicable)
  • Cards (content containers with shadow + spacing)
  • Responsive grid system for content display
  • Forms (consistent input styling)

- Removed unused or redundant styles (e.g., placeholder class).
- Cleaned CSS for maintainability and reduced duplication.
- Improved spacing, typography, and layout consistency site-wide.

================================================================================
3. DATABASE INTEGRATION (jwestfal_nation)
================================================================================
- Central MySQL database used across relevant pages.
- Structured relational schema includes:
  • countries
  • regions
  • region_areas
  • country_languages
  • languages

- Implemented relational JOIN logic to connect geographic and language data.
- Optimized multilingual output using GROUP_CONCAT to combine multiple
  languages into a single readable field per country.

- Dynamic dropdown population for country selection on contact form.

================================================================================
4. CONTACT PAGE FUNCTIONALITY
================================================================================
- Required form fields:
  • Name
  • Email (validated)
  • Trip Type (Cruise, Adventure, Luxury, Budget, Other)
  • Message
  • Country (database-driven)

- Server-side validation implemented for all inputs.
- Input sanitization applied using htmlspecialchars + trim.
- Form does NOT retain values after submission (intentional reset behavior).

- Submission output:
  • Displays structured summary instead of simple confirmation text
  • Includes full relational database context:
    - Country
    - Region
    - Region Area
    - Languages (grouped)

================================================================================
5. FORM BEHAVIOR & UX LOGIC
================================================================================
- Form resets automatically after submission.
- Form resets on page reload (no persistent POST data).
- Submission summary:
  • Displays after successful submission
  • Automatically disappears after 10 seconds
  • Immediately disappears on page reload

- Ensures clean UX with no stale or repeated submissions.

================================================================================
6. JAVASCRIPT BEHAVIOR
================================================================================
- Lightweight client-side logic used only for:
  • Auto-hiding submission summary after delay
  • Preventing persistence of temporary UI state after reload

- No heavy frameworks used; vanilla JS only.

================================================================================
7. DEVELOPMENT IMPROVEMENTS (AI-ASSISTED REFINEMENTS)
================================================================================
Across multiple iterations, the following improvements were made:

- Eliminated duplicate or unnecessary CSS rules.
- Standardized layout spacing and grid behavior.
- Improved database query efficiency and readability.
- Enhanced form validation and UX flow.
- Removed unused UI elements (e.g., placeholder blocks).
- Ensured consistent styling across all pages.
- Structured output to be more readable and presentation-ready.

================================================================================
SUMMARY
================================================================================
This project was progressively improved to achieve:

- Clean modular PHP architecture
- Consistent UI/UX design system
- Reliable database integration with relational structure
- Strong server-side validation and sanitization
- Improved user experience (auto-reset forms + timed summaries)
- Maintainable and optimized CSS/JS structure

================================================================================
END OF DOCUMENTATION
================================================================================
*/
?>

<!-- HERO WITH IMAGE -->
<section class="hero home-hero">
  <div class="hero-image">
    <img src="images/Hero.jpg" alt="Beautiful tropical beach destination with clear water and sunset sky">
  </div>
  <div class="hero-content">
    <h1>Explore Beyond the Horizon</h1>
    <p>Luxury escapes and unforgettable adventures tailored just for you.</p>
  </div>
</section>

<!-- COMPANY INTRO -->
<section class="section">
  <div class="card">
    <h2>Welcome to Starlight Travel Co.</h2>
    <p>
      At Starlight Travel, we specialize in crafting personalized travel experiences
      that turn your dream vacations into reality. Whether you're seeking adventure,
      relaxation, or luxury, our expert planners handle every detail so you can focus
      on making memories.
    </p>
  </div>
</section>

<!-- FEATURED DESTINATIONS / DEALS -->
<section class="section">
  <h2 style="margin-bottom:2rem;">Featured Destinations & Deals</h2>
  <div class="grid">
    
    <div class="card">
      <img src="images/Bali.png" alt="Luxury private villa in Bali with pool and tropical surroundings" class="card-img">
      <h3>Bali Retreat</h3>
      <p>7 nights in a private villa with guided excursions.</p>
      <p><strong>Starting at $1,899</strong></p>
    </div>

    <div class="card">
      <img src="images/Alps.jpg" alt="Snow-covered Swiss Alps mountains with scenic views" class="card-img">
      <h3>Swiss Alps Adventure</h3>
      <p>Experience skiing, hiking, and breathtaking mountain views.</p>
      <p><strong>Starting at $2,499</strong></p>
    </div>

    <div class="card">
      <img src="images/Greece.jpg" alt="White buildings overlooking the blue sea in the Greek Isles at sunset" class="card-img">
      <h3>Greek Isles Cruise</h3>
      <p>Luxury cruise through Santorini, Mykonos, and beyond.</p>
      <p><strong>Starting at $2,999</strong></p>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>