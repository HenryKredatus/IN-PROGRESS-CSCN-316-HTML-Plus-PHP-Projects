<?php $current = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar">
<div class="logo"><img src="images/Logo.png" alt="Logo"></div>
<ul>
<li><a class="<?= $current=='index.php'?'active':'' ?>" href="index.php">Home</a></li>
<li><a class="<?= $current=='destinations.php'?'active':'' ?>" href="destinations.php">Destinations</a></li>
<li><a class="<?= $current=='packages.php'?'active':'' ?>" href="packages.php">Packages</a></li>
<li><a class="<?= $current=='about.php'?'active':'' ?>" href="about.php">About</a></li>
<li><a class="<?= $current=='contact.php'?'active':'' ?>" href="contact.php">Contact</a></li>
</ul>
</nav>