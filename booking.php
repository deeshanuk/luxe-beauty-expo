<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$ticket = $_GET['ticket'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Ticket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body{
            background:#FFF8FB;
            font-family:Poppins,sans-serif;
        }

        .booking-box{
            max-width:800px;
            margin:70px auto;
            background:#fff;
            padding:40px;
            border-radius:20px;
            box-shadow:0 15px 40px rgba(0,0,0,.08);
        }

        h2{
            font-family:"Cormorant Garamond",serif;
            color:#491632;
            font-size:50px;
            text-align:center;
        }

        p{
            text-align:center;
            color:#666;
            margin-bottom:35px;
        }

        .btn-book{
            background:#C93C78;
            color:#fff;
            border:none;
            border-radius:50px;
            padding:14px;
            width:100%;
            font-weight:600;
        }

        .btn-book:hover{
            background:#491632;
            color:#fff;
        }

    </style>

</head>

<body>

<div class="booking-box">

<h2>Book Your Pass</h2>

<p>Complete your registration below.</p>

<form action="booking_process.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<label>Full Name</label>
<input type="text" class="form-control" name="fullname" required>
</div>

<div class="col-md-6 mb-3">
<label>Email</label>
<input type="email" class="form-control" name="email" required>
</div>

<div class="col-md-6 mb-3">
<label>Phone</label>
<input type="text" class="form-control" name="phone" required>
</div>

<div class="col-md-6 mb-3">
<label>City</label>
<input type="text" class="form-control" name="city" required>
</div>

<div class="col-md-6 mb-3">
<label>Occupation</label>

<select class="form-select" name="occupation">
<option>Beauty Professional</option>
<option>Student</option>
<option>Business Owner</option>
<option>Influencer</option>
<option>Makeup Artist</option>
<option>Visitor</option>
</select>

</div>

<div class="col-md-6 mb-3">

<label>Ticket</label>

<select class="form-select" name="ticket">

<option value="General Pass" <?= $ticket=="General Pass" ? "selected" : "" ?>>
General Pass
</option>

<option value="VIP Pass" <?= $ticket=="VIP Pass" ? "selected" : "" ?>>
VIP Pass
</option>

<option value="Premium Pass" <?= $ticket=="Premium Pass" ? "selected" : "" ?>>
Premium Pass
</option>

</select>

</div>

<div class="col-12 mb-3">

<label>Special Requirements</label>

<textarea class="form-control" rows="4" name="requirements"></textarea>

</div>

<div class="col-12">

<button type="submit" class="btn-book">
Confirm Booking
</button>

</div>

</div>

</form>

</div>

</body>

</html>