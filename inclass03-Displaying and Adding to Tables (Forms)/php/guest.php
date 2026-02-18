<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['clear'])) {
        file_put_contents("entries.txt", "");
        echo "<p>Guestbook Cleared!</p>";
    }

    else {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        $entry = date('Y-m-d H:i:s') . " - $name: $message\n";
        //Append to the file
        $handle = fopen("entries.txt", "a"); //a - append
        fwrite($handle, $entry);
        fclose($handle);
        echo "<p>Thank you for signing our Guestbook!</p>";
    }
}

?>

<h2>Previous Entries</h2>
<?php
    if(file_exists("entries.txt")) {
        $entries = file("entries.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $count = count($entries);
        if($count>0) {
            echo "<p>Total Entries: $count</p>";
            foreach($entries as $line) {
                echo "<p>" . $line . "</p>";
            }
        }
        else {
            echo "<p>No Entries</p>";
        }
    }
?>
<a href="../guestbook.php" alt="Guestbook"><button id="returnbtn">Back to Guestbook</button></a>