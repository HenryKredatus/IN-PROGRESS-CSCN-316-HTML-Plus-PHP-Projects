<?php
session_start();

function clean_input($data){
    return htmlspecialchars(trim($data));
}

function valid_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function required($value){
    return isset($value) && trim($value) !== '';
}

$errors = [];
$success = $_SESSION['success_message'] ?? null;
unset($_SESSION['success_message']);

// ONLY populate on failed submission
$name = "";
$email = "";
$subject = "";
$message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $name = clean_input($_POST['name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $subject = clean_input($_POST['subject'] ?? '');
    $message = clean_input($_POST['message'] ?? '');
    $spam = clean_input($_POST['spam'] ?? '');

    // VALIDATION
    if(!required($name)){
        $errors[] = "Full name is required.";
    }

    if(!required($email) || !valid_email($email)){
        $errors[] = "A valid email address is required.";
    }

    if(!required($subject)){
        $errors[] = "Subject is required.";
    }

    if(!required($message)){
        $errors[] = "Message field cannot be empty.";
    }

    $validSubjects = ["Workshop Inquiry", "Gallery Question", "General Info"];
    if(!in_array($subject, $validSubjects)){
        $errors[] = "Please select a valid subject.";
    }

    if($spam !== "5"){
        $errors[] = "Anti-spam answer is incorrect.";
    }

    // SUCCESS → redirect (clears form properly)
    if(empty($errors)){
        $_SESSION['success_message'] = [
            "name" => $name,
            "email" => $email,
            "subject" => $subject,
            "message" => $message
        ];

        header("Location: contact.php");
        exit;
    }
}

include 'includes/header.php';
?>

<div class="container">
    <div class="section-title">
        <h2>Contact the Studio</h2>
        <p>Questions about classes, gallery events, or artist opportunities? Reach out below.</p>
    </div>

    <?php if(!empty($errors)): ?>
        <div class="alert">
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if($success): ?>
        <div class="success" id="successBox">
            <h3>Message Successfully Sent</h3>

            <div style="background:white;color:#333;padding:20px;border-radius:10px;margin-top:15px;">
                <h4>Message Summary</h4>
                <p><strong>Full Name:</strong> <?php echo $success['name']; ?></p>
                <p><strong>Email:</strong> <?php echo $success['email']; ?></p>
                <p><strong>Subject:</strong> <?php echo $success['subject']; ?></p>
                <p><strong>Message:</strong><br><?php echo nl2br($success['message']); ?></p>
            </div>
        </div>

        <script>
            setTimeout(() => {
                const box = document.getElementById("successBox");
                if (box) box.style.display = "none";
            }, 10000);
        </script>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name"
                value="<?php echo !empty($errors) ? $name : ''; ?>">
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email"
                value="<?php echo !empty($errors) ? $email : ''; ?>">
        </div>

        <div class="form-group">
            <label>Subject</label>
            <select name="subject">
                <option value="">Select a subject</option>
                <option value="Workshop Inquiry" <?php if($subject==="Workshop Inquiry") echo "selected"; ?>>Workshop Inquiry</option>
                <option value="Gallery Question" <?php if($subject==="Gallery Question") echo "selected"; ?>>Gallery Question</option>
                <option value="General Info" <?php if($subject==="General Info") echo "selected"; ?>>General Info</option>
            </select>
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea name="message"><?php echo !empty($errors) ? $message : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>What is 2 + 3?</label>
            <input type="text" name="spam">
        </div>

        <button class="btn" type="submit">Send Message</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>