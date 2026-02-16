<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="card">
    <div class="card-header">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
        <p class="subtitle">You are successfully logged in.</p>
    </div>

    <div class="dashboard-content">
        <p>This is your protected member area.</p>
        <p>Your session is active and secure.</p>
    </div>

    <a class="logout-btn" href="?logout=true">Logout</a>
</div>

</body>
</html>
