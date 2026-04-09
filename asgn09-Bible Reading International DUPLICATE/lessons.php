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

// Verses to pull
$book = "John";
$chapter = 3;

// Function to get all verses for a chapter from a table
function getChapterVerses($conn, $table, $book, $chapter) {
    $sql = "
    SELECT $table.c, $table.v, $table.t, book_info.title_short
    FROM book_info
    INNER JOIN $table ON book_info.`order` = $table.b
    WHERE book_info.title_short = '$book'
    AND $table.c = $chapter
    ORDER BY $table.v
    ";
    return $conn->query($sql);
}
?>

<h1>Bible Lesson: <?php echo $book . " " . $chapter; ?> (KJV)</h1>

<img src="images/John 3 1.png" alt="John 3" class="content-image">

<h2>Introduction</h2>
<p>
This lesson is based on <?php echo $book; ?> chapter <?php echo $chapter; ?> from the King James Version (KJV) of the Bible.
In this chapter, Jesus teaches Nicodemus about spiritual rebirth and explains the
importance of being "born again" to enter the Kingdom of God.
</p>

<h2>The Chapter</h2>

<?php
// Get all verses for the chapter
$verses = getChapterVerses($conn, "t_kjv", $book, $chapter);

if ($verses && $verses->num_rows > 0) {
    while ($row = $verses->fetch_assoc()) {
        // Heading from DB: book + chapter + verse
        echo "<h3>{$row['title_short']} {$row['c']}:{$row['v']}</h3>";
        // Verse text
        echo "<p>{$row['t']}</p>";
    }
} else {
    echo "<p>No verses found for this chapter.</p>";
}
?>

<h2>Lesson Explanation</h2>
<p>
In this chapter, Nicodemus, a Pharisee, comes to Jesus seeking understanding.
Jesus explains that physical birth is not enough—people must experience a
spiritual rebirth. This rebirth comes through faith in Jesus Christ and the
work of the Holy Spirit.
</p>

<p>
<?php echo getVerse($conn, "t_kjv", $book, $chapter, 16); ?> is one of the most well-known verses in the Bible and summarizes
the message of the Gospel: God's love, the sacrifice of Jesus, and the promise
of eternal life for those who believe.
</p>

<h2>Application</h2>
<ul>
    <li>Understand that salvation requires spiritual rebirth</li>
    <li>Believe in Jesus Christ for eternal life</li>
    <li>Live a life guided by the Spirit</li>
</ul>

<h2>Conclusion</h2>
<p>
<?php echo $book; ?> chapter <?php echo $chapter; ?> teaches that entering God's kingdom is not based on human effort,
but on faith and transformation through Jesus Christ. This lesson encourages
us to reflect on our own faith and relationship with God.
</p>

<img src="images/John 3 2.jpg" alt="John 3" class="content-image">

<?php
$conn->close();
include 'footer.php';

// Helper function for single verse formatting (used above for explanation)
function getVerse($conn, $table, $book, $chapter, $verse) {
    $sql = "
    SELECT $table.c, $table.v, $table.t, book_info.title_short
    FROM book_info
    INNER JOIN $table ON book_info.`order` = $table.b
    WHERE book_info.title_short = '$book'
    AND $table.c = $chapter
    AND $table.v = $verse
    ";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return "{$row['title_short']} {$row['c']}:{$row['v']} – {$row['t']}";
    } else {
        return "Verse not found.";
    }
}
?>