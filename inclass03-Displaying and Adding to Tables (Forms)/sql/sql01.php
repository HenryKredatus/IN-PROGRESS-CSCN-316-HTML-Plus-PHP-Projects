<?php
//Connect to the Server and Database
$con = mysqli_connect("localhost", "jwestfal_student", "student#2026", "jwestfal_office");

if (mysqli_connect_errno()) {
    echo "Failed to connect to the Server and/or Database: " . mysqli_connect_errno();
    exit();
}

//Start Query
$sql = "SELECT * FROM employees ORDER BY LAST_NAME";

if($result = mysqli_query($con, $sql)) {
    if(mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Hire Date</th>";
        echo "<th>Salary</th>";
        echo "<th>Email</th>";
        echo "</tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FIRST_NAME'] . "</td>";
        echo "<td>" . $row['LAST_NAME'] . "</td>";
        echo "<td>" . $row['HIRE_DATE'] . "</td>";
        echo "<td>" . "$" . $row['SALARY'] . "</td>";
        echo "<td>" . $row['EMAIL'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
    }
    else {
        echo "No Records matching your query were found.";
    }
}else {
    echo "ERROR: could not connect to execute $sql.";
    mysqli_error($con);
}

//Close Connection
mysqli_close($con);
?>