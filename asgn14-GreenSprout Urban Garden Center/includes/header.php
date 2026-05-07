
<?php include __DIR__ . '/settings.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> | GreenSprout Urban Garden Center</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="top-banner">
        <?php echo $seasonBanner; ?>
    </div>

    <header>
        <div class="navbar">
            <div class="logo">
                <h1>GreenSprout</h1>
            </div>

            <?php include __DIR__ . '/navigation.php'; ?>
        </div>
    </header>
