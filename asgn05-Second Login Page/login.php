<?php
session_start();

// Hard-coded credentials
$correctUsername = "student";
$correctPassword = "pass123";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $correctUsername && $password === $correctPassword) {
        $_SESSION["user"] = $username;
        header("Location: user.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">

<div class="login-container">
    <h1>Welcome Back</h1>
    <p>Please login to continue</p>

    <?php if ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <div class="test-info">
        <p><strong>Test Login:</strong></p>
        <p>Username: student</p>
        <p>Password: pass123</p>
    </div>
</div>

</body>
</html>
