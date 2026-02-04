<?php
// Prevent direct access (only allow POST requests)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Read and trim input
$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');

$errors = [];

// Validate name (minimum 2 characters)
if (strlen($name) < 2) {
    $errors[] = 'Name must be at least 2 characters long.';
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Results</title>
</head>
<body>

<h1>Form Submission Result</h1>

<?php if (!empty($errors)): ?>
    <h2>Errors</h2>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Go back</a>
<?php else: ?>
    <h2>Success!</h2>
    <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
<?php endif; ?>

</body>
</html>
