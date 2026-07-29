<?php

$host="localhost";
$user="root";
$password="";
$database="luxe_beauty_expo";

$conn=mysqli_connect($host,$user,$password,$database);

if(!$conn)
{
    die("Connection Failed");
}

?>