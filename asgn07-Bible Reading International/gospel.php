<?php include 'header.php'; ?>

<?php
$host = "localhost";
$dbname = "jwestfal_bible";
$username = "jwestfal_student";
$password = "student#2026";

// Connect
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function that returns FULL formatted verse
function getVerse($conn, $book, $chapter, $verse) {
    $sql = "
    SELECT t_kjv.c, t_kjv.v, t_kjv.t, book_info.title_short
    FROM book_info
    INNER JOIN t_kjv ON book_info.`order` = t_kjv.b
    WHERE book_info.title_short = '$book'
    AND t_kjv.c = $chapter
    AND t_kjv.v = $verse
    ";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return "{$row['title_short']} {$row['c']}:{$row['v']} – \"{$row['t']}\"";
    } else {
        return "Verse not found.";
    }
}
?>

<h1>The Gospel</h1>

<img src="images/Gospel Quartet 1.jpg" alt="Gospel Authors" class="content-image">

<h2>What the Bible Teaches About the Gospel</h2>

<p>
The Gospel is the good news that Jesus Christ died for our sins, was buried,
and rose again so that we can have eternal life through faith in Him.
The Bible teaches that all people are sinners, but God offers salvation
through His grace.
</p>

<h3>Supporting Verses</h3>

<p><strong><?php echo getVerse($conn, "1 Corinthians", 15, 3); ?></strong></p>
<p><strong><?php echo getVerse($conn, "1 Corinthians", 15, 4); ?></strong></p>

<p><strong><?php echo getVerse($conn, "Romans", 3, 23); ?></strong></p>

<p><strong><?php echo getVerse($conn, "Romans", 6, 23); ?></strong></p>

<p><strong><?php echo getVerse($conn, "John", 3, 16); ?></strong></p>

<p><strong><?php echo getVerse($conn, "John", 3, 17); ?></strong></p>

<p><strong><?php echo getVerse($conn, "Romans", 5, 8); ?></strong></p>

<p><strong><?php echo getVerse($conn, "Ephesians", 2, 8); ?></strong></p>
<p><strong><?php echo getVerse($conn, "Ephesians", 2, 9); ?></strong></p>

<p><strong><?php echo getVerse($conn, "Acts", 4, 12); ?></strong></p>

<p><strong><?php echo getVerse($conn, "2 Corinthians", 5, 21); ?></strong></p>

<p><strong><?php echo getVerse($conn, "1 Peter", 2, 24); ?></strong></p>


<h2>How to Be Saved</h2>

<p>
The Bible teaches that salvation is received by believing in Jesus Christ,
repenting of sin, and calling upon the name of the Lord. It is not earned
by works, but given freely by God's grace.
</p>

<h3>Steps and Supporting Verses</h3>

<p><strong>Recognize you are a sinner</strong></p>
<p><?php echo getVerse($conn, "Romans", 3, 10); ?></p>

<p><strong>Understand the consequence of sin</strong></p>
<p><?php echo getVerse($conn, "Romans", 6, 23); ?></p>

<p><strong>Believe in Jesus Christ</strong></p>
<p><?php echo getVerse($conn, "John", 3, 16); ?></p>

<p><strong>Repent of your sins</strong></p>
<p><?php echo getVerse($conn, "Acts", 3, 19); ?></p>

<p><strong>Confess Jesus as Lord</strong></p>
<p><?php echo getVerse($conn, "Romans", 10, 9); ?></p>

<p><strong>Believe in your heart</strong></p>
<p><?php echo getVerse($conn, "Romans", 10, 10); ?></p>

<p><strong>Call upon the Lord</strong></p>
<p><?php echo getVerse($conn, "Romans", 10, 13); ?></p>

<p><strong>Receive salvation as a gift</strong></p>
<p><?php echo getVerse($conn, "Ephesians", 2, 8); ?></p>

<p><strong>Be assured of salvation</strong></p>
<p><?php echo getVerse($conn, "1 John", 5, 11); ?></p>

<p><strong>Live a new life in Christ</strong></p>
<p><?php echo getVerse($conn, "2 Corinthians", 5, 17); ?></p>

<img src="images/Gospel Quartet 2.jpeg" alt="Gospel Authors" class="content-image">

<?php
$conn->close();
include 'footer.php';
?>