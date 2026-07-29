<?php

include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$occupation = $_POST['occupation'];
$ticket = $_POST['ticket'];
$requirements = $_POST['requirements'];

$sql = "INSERT INTO registrations
(fullname,email,phone,city,occupation,ticket,requirements)

VALUES

('$fullname','$email','$phone','$city','$occupation','$ticket','$requirements')";

if(mysqli_query($conn,$sql))
{
    header("Location: thankyou.php");
    exit();
}
else
{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>