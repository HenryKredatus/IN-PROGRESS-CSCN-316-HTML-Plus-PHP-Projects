<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<main id="">
    <h2>Guest Book</h2>

    <form action="php/guest.php" method="post">
        <div>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required>
        </div>

        <br>

        <div>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" cols="40" required></textarea>
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>
</main>

<?php include("includes/footer.php"); ?>