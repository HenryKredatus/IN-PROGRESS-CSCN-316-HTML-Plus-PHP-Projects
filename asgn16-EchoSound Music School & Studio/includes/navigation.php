<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<nav class="navbar">
    <div class="container nav-inner">
        <div class="logo">
            <div class="logo-box">
                <img src="images/Logo.png" alt="EchoSound Music School and Recording Studio Logo">
            </div>

            <div>
                <h1>EchoSound</h1>
                <p>Music School & Studio</p>
            </div>
        </div>

        <div class="nav-links">
            <a class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
            <a class="<?php echo ($currentPage == 'lessons.php') ? 'active' : ''; ?>" href="lessons.php">Lessons</a>
            <a class="<?php echo ($currentPage == 'instructors.php') ? 'active' : ''; ?>" href="instructors.php">Instructors</a>
            <a class="<?php echo ($currentPage == 'studio.php') ? 'active' : ''; ?>" href="studio.php">Studio</a>
            <a class="<?php echo ($currentPage == 'events.php') ? 'active' : ''; ?>" href="events.php">Events</a>
            <a class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Book Now</a>
        </div>
    </div>
</nav>