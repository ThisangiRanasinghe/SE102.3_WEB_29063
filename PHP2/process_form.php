<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Submitted</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Registration Details</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            echo "<p><strong>Username:</strong> $username</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Password:</strong> $password</p>";
        }
        ?>
    </div>
</body>
</html>
