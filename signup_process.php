<?php

include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check passwords
if ($password != $confirm_password) {

    echo "<script>
            alert('Passwords do not match!');
            window.location='signup.php';
          </script>";
    exit();
}

// Check if email already exists
$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

if (mysqli_num_rows($check) > 0) {

    echo "<script>
            alert('Email already registered!');
            window.location='signup.php';
          </script>";
    exit();
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user
$query = "INSERT INTO users(fullname,email,phone,password)
VALUES('$fullname','$email','$phone','$hashed_password')";

if (mysqli_query($conn, $query)) {

    echo "<script>
            alert('Account Created Successfully!');
            window.location='login.php';
          </script>";

} else {

    echo "Error: " . mysqli_error($conn);

}
?>