<?php
// ===== CONFIG =====
$apiKey = "API_KEY";
$aiOutput = "";
$errors = [];
$name = "";
$message = "";

// ===== HANDLE FORM SUBMISSION =====
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Trim inputs
    $name = trim($_POST["name"] ?? "");
    $message = trim($_POST["message"] ?? "");

    // Basic validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {

        // AI Prompt (strict constraints)
        $prompt = "Rewrite the following message to improve clarity and readability.
Keep the meaning and facts exactly the same.
Do NOT add new promises, personal information, or extra details.
Limit the rewrite to 80 words or fewer.

Message:
\"$message\"";

        // OpenAI API request
        $data = [
            "model" => "gpt-4.1-mini",
            "messages" => [
                ["role" => "user", "content" => $prompt]
            ],
            "max_tokens" => 120
        ];

        $ch = curl_init("https://api.openai.com/v1/chat/completions");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Bearer $apiKey"
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if ($response === false) {
            $aiOutput = "cURL Error: " . curl_error($ch);
        } else {
            $decoded = json_decode($response, true);

            if (isset($decoded["error"])) {
                $aiOutput = "API Error: " . $decoded["error"]["message"];
            } elseif (isset($decoded["choices"][0]["message"]["content"])) {
                $aiOutput = $decoded["choices"][0]["message"]["content"];
            } else {
                $aiOutput = "Unexpected API response.";
            }
        }

        curl_close($ch);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-bottom: 30px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        button {
            padding: 10px 15px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        .results {
            display: flex;
            gap: 20px;
        }

        .card {
            flex: 1;
            padding: 15px;
            border-radius: 8px;
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
        }

        .card h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Feedback Form</h1>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <div><?php echo htmlspecialchars($error); ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">

        <label>Message:</label>
        <textarea name="message" rows="5"><?php echo htmlspecialchars($message); ?></textarea>

        <button type="submit">Submit Feedback</button>
    </form>

    <?php if ($aiOutput && empty($errors)): ?>
        <div class="results">
            <div class="card">
                <h3>Original</h3>
                <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
            </div>

            <div class="card">
                <h3>Polished Version</h3>
                <p><?php echo nl2br(htmlspecialchars($aiOutput)); ?></p>
            </div>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
