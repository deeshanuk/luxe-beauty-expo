<?php
session_start();
include("db.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['user'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile | Luxe Beauty Expo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#FFF8FB;
            font-family:Poppins,sans-serif;
        }

        .profile-card{
            max-width:700px;
            margin:70px auto;
            border:none;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,.1);
        }

        .profile-header{
            background:#491632;
            color:#fff;
            padding:40px;
            text-align:center;
        }

        .profile-header h2{
            margin-top:15px;
        }

        .avatar{
            width:100px;
            height:100px;
            border-radius:50%;
            background:#fff;
            color:#491632;
            font-size:45px;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:auto;
        }

        .info{
            padding:35px;
        }

        .info p{
            font-size:17px;
            margin-bottom:18px;
        }

        .info strong{
            color:#491632;
            width:140px;
            display:inline-block;
        }

        .btn-home{
            background:#C93C78;
            color:#fff;
            border:none;
        }

        .btn-home:hover{
            background:#491632;
            color:#fff;
        }
    </style>

</head>

<body>

<div class="container">

<div class="card profile-card">

<div class="profile-header">

<div class="avatar">
👤
</div>

<h2><?php echo htmlspecialchars($user['fullname']); ?></h2>

<p>Registered User</p>

</div>

<div class="info">

<p>
<strong>Full Name :</strong>
<?php echo htmlspecialchars($user['fullname']); ?>
</p>

<p>
<strong>Email :</strong>
<?php echo htmlspecialchars($user['email']); ?>
</p>

<p>
<strong>Phone :</strong>
<?php echo htmlspecialchars($user['phone']); ?>
</p>

<p>
<strong>Member Since :</strong>
<?php echo date("d M Y", strtotime($user['created_at'])); ?>
</p>

<div class="mt-4">

<a href="index.php" class="btn btn-home">
Back to Home
</a>

<a href="logout.php" class="btn btn-outline-danger ms-2">
Logout
</a>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>