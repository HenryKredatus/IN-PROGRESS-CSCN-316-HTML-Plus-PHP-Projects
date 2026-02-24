<?php
$host = "localhost";
$dbname = "jwestfal_office";
$username = "jwestfal_student";
$password = "student#2026";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed");

include 'includes/header.php';
?>

<main class="content">

    <!-- LOGO ABOVE PAGE TITLE -->
    <img
        src="images/Logo.png"
        alt="Westfall Office logo"
        class="page-logo"
    >

    <h1>Employee Reports</h1>

<?php
$queries = [
    "Employee Names" =>
        "SELECT FIRST_NAME AS 'First Name', LAST_NAME AS 'Last Name' FROM employees",

    "Unique Departments" =>
        "SELECT DISTINCT DEPARTMENT_ID AS 'Department ID' FROM employees",

    "Employees With All Details Ordered by First Name" =>
        "SELECT 
            EMPLOYEE_ID,
            FIRST_NAME,
            LAST_NAME,
            EMAIL,
            PHONE_NUMBER,
            HIRE_DATE,
            JOB_ID,
            SALARY,
            COMMISSION_PCT,
            MANAGER_ID,
            DEPARTMENT_ID
         FROM employees
         ORDER BY FIRST_NAME DESC",

    "Salary and PF (12%)" =>
        "SELECT FIRST_NAME, LAST_NAME, SALARY, ROUND(SALARY * 0.12, 2) AS PF 
         FROM employees",

    "Salary Ascending" =>
        "SELECT EMPLOYEE_ID, FIRST_NAME, LAST_NAME, SALARY 
         FROM employees ORDER BY SALARY ASC",

    "Total Salaries" =>
        "SELECT SUM(SALARY) AS TOTAL_SALARY FROM employees",

    "Max & Min Salary" =>
        "SELECT MAX(SALARY) AS MAX_SALARY, MIN(SALARY) AS MIN_SALARY FROM employees"
];

foreach ($queries as $title => $sql) {
    echo "<section class='report-section'>";
    echo "<h2>$title</h2>";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<div class='table-wrapper'><table><tr>";

        while ($field = $result->fetch_field()) {
            echo "<th>{$field->name}</th>";
        }
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $val) echo "<td>$val</td>";
            echo "</tr>";
        }

        echo "</table></div>";
    } else {
        echo "<p>No results.</p>";
    }

    echo "</section>";
}

$conn->close();
?>
</main>

<?php include 'includes/footer.php'; ?>