<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace with your actual logic to authenticate active members
    if ($username == 'active' && $password == 'password123') {
        echo "Active member login successful!";
    } else {
        echo "Invalid active member credentials!";
    }
}
?>
