<?php include 'header.php'; ?>

<?php
$conn = new mysqli("localhost","jwestfal_student","student#2026","jwestfal_office");

// Only pull specific employees
$sql = "SELECT e.EMPLOYEE_ID,e.FIRST_NAME,e.LAST_NAME,e.PHOTO,e.JOB_ID,j.JOB_TITLE
FROM employees e 
JOIN jobs j ON e.JOB_ID=j.JOB_ID
WHERE e.EMPLOYEE_ID IN (100,101,107,120,126,129)";

$r = $conn->query($sql);

// Unique bios for each employee
$bios = [
    100 => "A seasoned leader who brings years of experience in office management and strategic planning.",
    101 => "Known for exceptional organizational skills and a commitment to maintaining efficient workflows.",
    107 => "A detail-oriented professional who ensures accuracy and consistency in all administrative processes.",
    120 => "Specializes in client relations, building strong and lasting partnerships with every interaction.",
    126 => "An innovative thinker who contributes creative solutions to complex business challenges.",
    129 => "Dedicated to supporting team success through reliability, professionalism, and strong communication."
];
?>

<h1>Meet Our Staff</h1>

<div class="staff">
<?php while($row = $r->fetch_assoc()){ ?>
    <div class="card">

        <?php if (!empty($row['PHOTO'])) { ?>
            <img 
                src="data:image/jpeg;base64,<?php echo base64_encode($row['PHOTO']); ?>" 
                alt="Photo of <?php echo $row['FIRST_NAME']; ?>"
                class="staff-photo"
            >
        <?php } else { ?>
            <img src="images/default-user.png" class="staff-photo" alt="Default Photo">
        <?php } ?>

        <h3><?php echo $row['FIRST_NAME']." ".$row['LAST_NAME']; ?></h3>
        <p class="job-title"><?php echo $row['JOB_TITLE']; ?></p>

        <p>
            <?php echo $bios[$row['EMPLOYEE_ID']]; ?>
        </p>

    </div>
<?php } ?>
</div>

<img src="images/People.png" class="content-image" alt="People">

<?php $conn->close(); ?>
<?php include 'footer.php'; ?>