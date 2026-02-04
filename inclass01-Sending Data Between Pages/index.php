<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Form</title>
</head>
<body>

<h1>User Information</h1>

<form action="handle.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required>
    <br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
