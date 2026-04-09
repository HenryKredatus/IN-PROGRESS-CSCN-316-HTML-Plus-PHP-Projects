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

// SETTINGS
$book1 = "John";
$chapter1 = 3;
$verse1 = 16;

$book2 = "Psalms";
$chapter2 = 23;
$verse2 = 1;

// ---------- KJV ----------
$sql_kjv_1 = "
SELECT t_kjv.b, t_kjv.c, t_kjv.v, t_kjv.t, book_info.title_short
FROM book_info
INNER JOIN t_kjv ON book_info.`order` = t_kjv.b
WHERE book_info.title_short = '$book1'
AND t_kjv.c = $chapter1
AND t_kjv.v = $verse1
";

$sql_kjv_2 = "
SELECT t_kjv.b, t_kjv.c, t_kjv.v, t_kjv.t, book_info.title_short
FROM book_info
INNER JOIN t_kjv ON book_info.`order` = t_kjv.b
WHERE book_info.title_short = '$book2'
AND t_kjv.c = $chapter2
AND t_kjv.v = $verse2
";

// ---------- ASV ----------
$sql_asv_1 = "
SELECT t_asv.b, t_asv.c, t_asv.v, t_asv.t, book_info.title_short
FROM book_info
INNER JOIN t_asv ON book_info.`order` = t_asv.b
WHERE book_info.title_short = '$book1'
AND t_asv.c = $chapter1
AND t_asv.v = $verse1
";

$sql_asv_2 = "
SELECT t_asv.b, t_asv.c, t_asv.v, t_asv.t, book_info.title_short
FROM book_info
INNER JOIN t_asv ON book_info.`order` = t_asv.b
WHERE book_info.title_short = '$book2'
AND t_asv.c = $chapter2
AND t_asv.v = $verse2
";

// ---------- BBE ----------
$sql_bbe_1 = "
SELECT t_bbe.b, t_bbe.c, t_bbe.v, t_bbe.t, book_info.title_short
FROM book_info
INNER JOIN t_bbe ON book_info.`order` = t_bbe.b
WHERE book_info.title_short = '$book1'
AND t_bbe.c = $chapter1
AND t_bbe.v = $verse1
";

$sql_bbe_2 = "
SELECT t_bbe.b, t_bbe.c, t_bbe.v, t_bbe.t, book_info.title_short
FROM book_info
INNER JOIN t_bbe ON book_info.`order` = t_bbe.b
WHERE book_info.title_short = '$book2'
AND t_bbe.c = $chapter2
AND t_bbe.v = $verse2
";

// Run queries
$kjv1 = $conn->query($sql_kjv_1);
$kjv2 = $conn->query($sql_kjv_2);

$asv1 = $conn->query($sql_asv_1);
$asv2 = $conn->query($sql_asv_2);

$bbe1 = $conn->query($sql_bbe_1);
$bbe2 = $conn->query($sql_bbe_2);
?>

<h1>Bible Versions</h1>
<img src="images/Bible Versions.jpeg" alt="Bible Versions" class="content-image">

<h2>KJV</h2>
<?php
if ($kjv1 && $kjv1->num_rows > 0) {
    $row = $kjv1->fetch_assoc();
    echo "<p>{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}</p>";
}
if ($kjv2 && $kjv2->num_rows > 0) {
    $row = $kjv2->fetch_assoc();
    echo "<p>{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}</p>";
}
?>

<h2>ASV</h2>
<?php
if ($asv1 && $asv1->num_rows > 0) {
    $row = $asv1->fetch_assoc();
    echo "<p>{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}</p>";
}
if ($asv2 && $asv2->num_rows > 0) {
    $row = $asv2->fetch_assoc();
    echo "<p>{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}</p>";
}
?>

<h2>BBE</h2>
<?php
if ($bbe1 && $bbe1->num_rows > 0) {
    $row = $bbe1->fetch_assoc();
    echo "<p>{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}</p>";
}
if ($bbe2 && $bbe2->num_rows > 0) {
    $row = $bbe2->fetch_assoc();
    echo "<p>{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}</p>";
}
?>

<?php
$conn->close();
include 'footer.php';
?>