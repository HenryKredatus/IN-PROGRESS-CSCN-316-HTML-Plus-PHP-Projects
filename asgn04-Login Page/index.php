<?php
session_start();

$valid_username = "student";
$valid_password = "Password123";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields.";
    }
    elseif ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: user.php");
        exit();
    }
    else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="card">
    <div class="card-header">
        <h1>Member Login</h1>
        <p class="subtitle">Access your secure dashboard</p>
    </div>

    <?php if (!empty($error)): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="" autocomplete="off">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <p class="hint">
        Demo credentials: student / Password123
    </p>
</div>

</body>
</html>
