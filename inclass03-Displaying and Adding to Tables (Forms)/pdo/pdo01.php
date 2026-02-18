<?php
$host = "localhost";
$dbname = "jwestfal_office";
$username = "jwestfal_student";
$password = "student#2026";
try {
    //Create a PDO Instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$username,$password);
    //Set Error Mode to Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "<h3>Connected Successfully!</h3>";
    //Run a Query
    $sql = "SELECT * FROM employees ORDER BY LAST_NAME";
    $stmt = $pdo->query($sql);
    //Output Results
    echo "<table>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['FIRST_NAME']) . "</td>";
        echo "<td>" . htmlspecialchars($row['LAST_NAME']) . "</td>";
        echo "<td>" . htmlspecialchars($row['EMAIL']) . "@company.com" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}catch (PDOException $e) {
    echo "Connection Failed:" . $e->getMessage();
}
$pdo = null; //Triggers immediate connection closure.
?>