<?php
$conn=new mysqli("localhost","jwestfal_student","student#2026","jwestfal_bible");
function getRandomVerse($conn){
$sql="SELECT t_kjv.t, book_info.title_short, t_kjv.c, t_kjv.v
FROM t_kjv INNER JOIN book_info ON book_info.`order`=t_kjv.b
ORDER BY RAND() LIMIT 1";
$r=$conn->query($sql);
$row=$r->fetch_assoc();
return "{$row['title_short']} {$row['c']}:{$row['v']} - {$row['t']}";
}
?>
</div>
<footer>
<p>Sanders Office Incorporated | Colony, KS 66015 | 888-355-1234 | sanders@sanoffice.com</p>
<p><?php echo getRandomVerse($conn); ?></p>
</footer>
</body>
</html>
<?php $conn->close(); ?>
