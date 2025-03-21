<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    $encryptpass = password_hash($_POST["password"], PASSWORD_BCRYPT); // Encrypt password

    $sql = "INSERT INTO users (first_name, last_name, username, password) 
            VALUES ('$fname', '$lname', '$uname', '$encryptpass')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form method="post">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Register</button>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

</html>