<?php
$pageTitle = "Contact & Booking";

include 'includes/header.php';
include 'includes/navigation.php';

function cleanInput($data){
    return htmlspecialchars(trim(stripslashes($data)));
}

$name = "";
$email = "";
$lesson = "";
$time = "";
$notes = "";
$errors = [];

/*
    ONLY keep form values when validation fails.
    Otherwise keep everything blank.
*/
$preserveValues = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = cleanInput($_POST["name"] ?? "");
    $email = cleanInput($_POST["email"] ?? "");
    $lesson = cleanInput($_POST["lesson"] ?? "");
    $time = cleanInput($_POST["time"] ?? "");
    $notes = cleanInput($_POST["notes"] ?? "");

    // VALIDATION
    if(empty($name)){
        $errors["name"] = "Please enter your full name.";
    }

    if(empty($email)){
        $errors["email"] = "Email is required.";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Please enter a valid email address.";
    }

    if(empty($lesson)){
        $errors["lesson"] = "Please select a lesson type.";
    }

    if(empty($time)){
        $errors["time"] = "Please select a preferred time.";
    }

    // If validation fails, preserve entered values
    if(!empty($errors)){
        $preserveValues = true;
    }

    // SAVE IF VALID
    if(empty($errors)){

        $submission = [
            "name" => $name,
            "email" => $email,
            "lesson_type" => $lesson,
            "preferred_time" => $time,
            "notes" => $notes,
            "submitted" => date("Y-m-d H:i:s")
        ];

        $file = "submissions/bookings.json";

        if(!file_exists("submissions")){
            mkdir("submissions", 0777, true);
        }

        if(file_exists($file)){
            $currentData = json_decode(file_get_contents($file), true);

            if(!is_array($currentData)){
                $currentData = [];
            }

        } else {
            $currentData = [];
        }

        $currentData[] = $submission;

        file_put_contents(
            $file,
            json_encode($currentData, JSON_PRETTY_PRINT)
        );

        // SUCCESS REDIRECT
        header(
            "Location: confirmation.php?name=" .
            urlencode($name) .
            "&lesson=" .
            urlencode($lesson) .
            "&email=" .
            urlencode($email)
        );

        exit();
    }
}
?>

<section class="page-banner">
    <div class="container">
        <h1>Book a Lesson</h1>
        <p>
            Tell us what you are interested in and
            we will help you get started.
        </p>
    </div>
</section>

<section class="section">
    <div class="container two-column">

        <form method="POST" action="" autocomplete="off">

            <div class="form-group">
                <label for="name">Full Name</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="off"
                    value="<?php echo $preserveValues ? $name : ''; ?>"
                >

                <?php if(isset($errors["name"])): ?>
                    <p class="error">
                        <?php echo $errors["name"]; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    autocomplete="off"
                    value="<?php echo $preserveValues ? $email : ''; ?>"
                >

                <?php if(isset($errors["email"])): ?>
                    <p class="error">
                        <?php echo $errors["email"]; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="lesson">Lesson Type</label>

                <select id="lesson" name="lesson">

                    <option value="">Select One</option>

                    <option value="Guitar"
                        <?php if($preserveValues && $lesson == "Guitar") echo "selected"; ?>>
                        Guitar
                    </option>

                    <option value="Piano"
                        <?php if($preserveValues && $lesson == "Piano") echo "selected"; ?>>
                        Piano
                    </option>

                    <option value="Drums"
                        <?php if($preserveValues && $lesson == "Drums") echo "selected"; ?>>
                        Drums
                    </option>

                    <option value="Vocals"
                        <?php if($preserveValues && $lesson == "Vocals") echo "selected"; ?>>
                        Vocals
                    </option>

                    <option value="Other"
                        <?php if($preserveValues && $lesson == "Other") echo "selected"; ?>>
                        Other
                    </option>

                </select>

                <?php if(isset($errors["lesson"])): ?>
                    <p class="error">
                        <?php echo $errors["lesson"]; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="time">Preferred Time</label>

                <select id="time" name="time">

                    <option value="">Select One</option>

                    <option value="Morning"
                        <?php if($preserveValues && $time == "Morning") echo "selected"; ?>>
                        Morning
                    </option>

                    <option value="Afternoon"
                        <?php if($preserveValues && $time == "Afternoon") echo "selected"; ?>>
                        Afternoon
                    </option>

                    <option value="Evening"
                        <?php if($preserveValues && $time == "Evening") echo "selected"; ?>>
                        Evening
                    </option>

                </select>

                <?php if(isset($errors["time"])): ?>
                    <p class="error">
                        <?php echo $errors["time"]; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="notes">Additional Notes</label>

                <textarea
                    id="notes"
                    name="notes"
                    autocomplete="off"
                ><?php echo $preserveValues ? $notes : ''; ?></textarea>
            </div>

            <button class="btn" type="submit">
                Submit Booking Request
            </button>

        </form>

        <div class="form-image">
            <img
                src="images/Music Education.jpg"
                alt="Student and instructor working together during a music lesson in a studio environment"
            >
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>