<?php include 'header.php'; ?>
<?php
$conn=new mysqli("localhost","jwestfal_student","student#2026","jwestfal_bible");

function getVerse($c,$b,$ch,$v){
$sql="SELECT t_kjv.t, book_info.title_short, t_kjv.c, t_kjv.v
FROM t_kjv INNER JOIN book_info ON book_info.`order`=t_kjv.b
WHERE book_info.title_short='$b' AND t_kjv.c=$ch AND t_kjv.v=$v";
$r=$c->query($sql);$row=$r->fetch_assoc();
return "{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}";
}
?>

<section class="hero">
    <h1>About Sanders Office Incorporated</h1>
    <p>Serving businesses with integrity, excellence, and faith-driven purpose.</p>
</section>

<img src="images/Logo.png" class="page-logo" alt="Sanders Office Incorporated Logo">

<section class="about-section">
    <h2>Our Story</h2>
    <p>
        Sanders Office Incorporated began as a small, family-run business in the early 1990s.
        Founded by a group of professionals who believed that faith and business could work hand-in-hand,
        the company started with a simple mission: to provide honest, reliable office services while
        honoring Christian values.
    </p>

    <p>
        Over the years, the organization grew from a single office into a trusted provider of office
        solutions across multiple regions. Through economic challenges and changing technologies,
        Sanders Office Incorporated remained committed to its founding principles—integrity,
        diligence, and service to others.
    </p>

    <p>
        Today, the company continues to expand while staying grounded in its original purpose:
        helping clients succeed while reflecting Christ-like character in every interaction.
    </p>
</section>

<img src="images/Exterior Old.png" class="content-image" alt="Office Exterior Sepia">

<section class="about-section">
    <h2>Our Mission & Values</h2>
    <p>
        At Sanders Office Incorporated, we believe that our work is more than just business—it is
        an opportunity to serve others and glorify God through excellence and dedication.
    </p>

    <div class="verse-box">
        <p><?php echo getVerse($conn,"Colossians",3,23); ?></p>
    </div>

    <p>
        This verse reflects our commitment to giving our best effort in everything we do,
        knowing that our work ultimately serves a higher purpose.
    </p>

    <div class="verse-box">
        <p><?php echo getVerse($conn,"Proverbs",3,5); ?></p>
    </div>

    <p>
        Trust is central to our organization—trust in God and trust built with our clients
        through honesty and reliability.
    </p>
</section>

<section class="about-section">
    <h2>Faith in Action</h2>

    <div class="verse-grid">
        <div class="verse-box">
            <?php echo getVerse($conn,"Philippians",4,13); ?>
        </div>

        <div class="verse-box">
            <?php echo getVerse($conn,"Matthew",5,16); ?>
        </div>
    </div>

    <p>
        These verses inspire us daily—to remain strong in our work and to be a light to others
        through our actions, professionalism, and service.
    </p>
</section>

<section class="about-section">
    <h2>Looking Forward</h2>
    <p>
        As we continue to grow, Sanders Office Incorporated remains dedicated to innovation,
        customer satisfaction, and faith-based leadership. We strive to build lasting relationships
        and make a meaningful impact in every community we serve.
    </p>
</section>

<?php $conn->close(); ?>
<?php include 'footer.php'; ?>