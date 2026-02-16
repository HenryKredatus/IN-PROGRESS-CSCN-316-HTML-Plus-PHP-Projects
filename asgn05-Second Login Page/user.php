<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="user-body">

<div class="dashboard">
    <h1>Hello, <?php echo htmlspecialchars($_SESSION["user"]); ?> 👋</h1>
    <p>You have successfully logged in.</p>

    <div class="card-container">
        <div class="card">
            <h2>Profile</h2>
            <p>View and update your personal info.</p>
        </div>

        <div class="card">
            <h2>Settings</h2>
            <p>Adjust your account preferences.</p>
        </div>

        <div class="card">
            <h2>Messages</h2>
            <p>Check your recent activity.</p>
        </div>
    </div>

    <a href="logout.php" class="logout-btn">Logout</a>
</div>

</body>
</html>
