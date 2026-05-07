
<?php
$dayTheme = strtolower(date('l'));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SilverLeaf Art Studio</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="theme-<?php echo $dayTheme; ?>">
<header>
    <div class="navbar">
        <div class="logo">
            <img src="images/Leaf.png" alt="Silver Leaf">
            <div class="logo-text">
                <h1>SilverLeaf Art Studio</h1>
                <p>Creative Workshops • Artisan Gallery • Community Events</p>
            </div>
        </div>

        <?php include 'navigation.php'; ?>
    </div>
</header>
