<?php

session_start();
include("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

        // Store user details in session
        $_SESSION['user'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['email'] = $row['email'];

        header("Location: index.php");
        exit();

    } else {

        echo "<script>
                alert('Incorrect Password!');
                window.location='login.php';
              </script>";
    }

} else {

    echo "<script>
            alert('Email not registered!');
            window.location='signup.php';
          </script>";
}
?>