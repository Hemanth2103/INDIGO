<?php
// Step 1: Import dp.php to establish a connection
require 'db.php';

// Step 2: Retrieve form input elements from register.html
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Step 3: Validate password and confirm password
    if ($password !== $confirmPassword) {
        echo "<script>window.location.href = '../register.html'
        alert('Passwords do not match');</script>";
        exit;
    }

    // Step 4: Generate unique ID for each user
    $query = "SELECT MAX(uid) AS max_id FROM users";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $nextId = $row['max_id'] + 1;

    // Step 5: Insert form data into users table
    $query = "INSERT INTO users (uid, username, password) VALUES ($nextId, '$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>window.location.href = '../login.html';
        alert('User register successfully');</script>";
    } else {
        echo "Error registering user.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>