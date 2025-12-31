<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="pgm15.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Email:</label>
    <input type="text" name="email" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <label>Confirm Password:</label>
    <input type="password" name="confirm_password" required>
    <br><br>

    <label>Mobile:</label>
    <input type="text" name="mobile" required>
    <br><br>

    <input type="submit" value="Register">
</form>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $mobile = trim($_POST["mobile"]);

    $errors = [];

    // Name Validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Name can contain only letters and spaces.";
    }

    // Email Validation
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $errors[] = "Invalid email format.";
    }

    // Password Validation
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Confirm Password Validation
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Mobile Validation
    if (empty($mobile)) {
        $errors[] = "Mobile number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $errors[] = "Mobile number must be 10 digits.";
    }

    // Show Errors
    if (!empty($errors)) {
        echo "<h3>Errors:</h3>";
        foreach ($errors as $err) {
            echo "<p style='color:red;'>$err</p>";
        }
    } else {
        // Success Message
        echo "<h2 style='color:green;'>Registration Successful!</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Mobile: $mobile</p>";
    }
}
?>
</body>
</html>