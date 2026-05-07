<?php $pageTitle="Home"; include 'includes/header.php'; include 'includes/navigation.php'; ?>

<?php
/*
================================================================================
AI USAGE / DEVELOPMENT NOTE
================================================================================

This website has been developed and iteratively improved with AI-assisted
development support to enhance structure, usability, and functionality while
preserving original design intent.

SUMMARY OF AI-ASSISTED IMPLEMENTATIONS ACROSS THE SITE:

1. FRONT-END STRUCTURE & UI IMPROVEMENTS
--------------------------------------------------------------------------------
- Standardized page layouts across all sections (banner + content containers)
- Improved card-based layouts for consistent visual hierarchy
- Replaced placeholder UI elements with semantic image containers using <img>
- Added descriptive, accessibility-friendly alt text for all images
- Ensured responsive-friendly structural grouping (two-column layouts, grids)

2. IMAGE HANDLING & ACCESSIBILITY
--------------------------------------------------------------------------------
- Converted non-semantic placeholder div images into proper <img> elements
- Added meaningful alt attributes for accessibility (screen readers + SEO)
- Structured image paths consistently (e.g., images/events/, images/studio/)
- Ensured images do not distort layout or affect other components

3. FORM SYSTEM (BOOKING / CONTACT FUNCTIONALITY)
--------------------------------------------------------------------------------
- Implemented secure server-side form processing using PHP POST handling
- Added input sanitization via reusable cleanInput() function
- Added validation with custom error messages per field:
    - Full Name (required)
    - Email (required + format validation)
    - Lesson Type (required)
    - Preferred Time (required)
- Implemented persistent error display under each relevant input

4. DATA STORAGE
--------------------------------------------------------------------------------
- Implemented JSON-based storage system for booking submissions
- Automatically creates /submissions directory if missing
- Appends new bookings to bookings.json safely
- Ensures data integrity by validating decoded JSON before writing

5. FORM BEHAVIOR LOGIC
--------------------------------------------------------------------------------
- Configured form to:
    - Preserve user input on validation failure (to prevent data loss)
    - Reset automatically on fresh page load (GET request)
    - Redirect to confirmation page on successful submission
- Prevents duplicate submissions using POST → process → exit pattern

6. CONFIRMATION FLOW
--------------------------------------------------------------------------------
- Introduced separate confirmation.php template for successful submissions
- Clean separation between processing logic and user feedback UI

7. CONSISTENCY & CODE QUALITY
--------------------------------------------------------------------------------
- Standardized variable naming across forms and pages
- Reduced duplicated logic in form handling
- Improved readability of PHP/HTML integration
- Maintained separation between presentation and processing logic

8. USER EXPERIENCE IMPROVEMENTS
--------------------------------------------------------------------------------
- Reduced friction in booking and contact workflows
- Improved clarity of event, studio, and lesson offerings
- Enhanced readability of pricing, equipment, and rental sections
- Structured content to guide user flow logically (info → details → action)

================================================================================
END OF AI DEVELOPMENT NOTE
================================================================================
*/
?>

<section class="hero">

    <img 
        src="images/Hero.jpg" 
        alt="Students performing music together inside EchoSound Music School and Recording Studio"
        class="hero-bg"
    >

    <div class="hero-overlay"></div>

    <div class="container hero-content">
        <h2>Find Your <span class="highlight">Sound</span></h2>

        <p>
            EchoSound Music School & Recording Studio helps students and local artists grow
            through lessons, live workshops, rehearsal sessions, and beginner-friendly
            recording experiences.
        </p>

        <a href="contact.php" class="btn">Book a Lesson</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Why Students Love EchoSound</h2>
            <p>Energetic instructors, creative spaces, and flexible programs for all skill levels.</p>
        </div>

        <div class="card-grid">

            <div class="card">
                <div class="card-image">
                    <img 
                        src="images/Guitar Lesson.jpg" 
                        alt="Student practicing guitar during a private music lesson"
                    >
                </div>

                <div class="card-content">
                    <h3>Private Lessons</h3>
                    <p>One-on-one instruction for guitar, piano, vocals, drums, and more.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img 
                        src="images/Recording Session.jpg" 
                        alt="Recording Session"
                    >
                </div>

                <div class="card-content">
                    <h3>Recording Sessions</h3>
                    <p>Record demos and creative projects in a relaxed, beginner-friendly studio environment.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img 
                        src="images/Live Workshop.jpg" 
                        alt="Students participating in a live music workshop and jam session"
                    >
                </div>

                <div class="card-content">
                    <h3>Live Workshops</h3>
                    <p>Join collaborative workshops, open mics, and performance coaching events.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container two-column">

        <div>
            <h2>Music Education That Feels Inspiring</h2>

            <p>
                Whether you are picking up your first instrument or preparing for live performances,
                EchoSound gives students a welcoming place to learn and create. Our instructors focus
                on confidence, creativity, and real-world music skills.
            </p>

            <br>

            <a href="lessons.php" class="btn">Explore Programs</a>
        </div>

        <div class="placeholder-image">
            <img 
                src="images/Music Education.jpg" 
                alt="Music student rehearsing inside the EchoSound studio"
            >
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>