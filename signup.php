<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Luxe Beauty Expo</title>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:linear-gradient(rgba(73,22,50,.85),rgba(73,22,50,.85)),url("assets/images/hero/hero-register.jpg") center/cover no-repeat;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .signup-box{
            width:430px;
            background:rgba(255,255,255,.08);
            backdrop-filter:blur(15px);
            border-radius:20px;
            padding:40px;
            color:#fff;
            border:1px solid rgba(255,255,255,.15);
        }

        h2{
            font-family:'Cormorant Garamond',serif;
            color:#D4AF37;
            text-align:center;
            font-size:42px;
            margin-bottom:8px;
        }

        p{
            text-align:center;
            margin-bottom:30px;
            color:#ddd;
        }

        .input-group{
            position:relative;
            margin-bottom:18px;
        }

        .input-group i{
            position:absolute;
            top:50%;
            left:15px;
            transform:translateY(-50%);
            color:#D4AF37;
        }

        .input-group input{
            width:100%;
            padding:14px 14px 14px 45px;
            border:none;
            outline:none;
            border-radius:10px;
            background:rgba(255,255,255,.12);
            color:#fff;
        }

        .input-group input::placeholder{
            color:#ddd;
        }

        button{
            width:100%;
            padding:14px;
            border:none;
            border-radius:30px;
            background:#C93C78;
            color:#fff;
            cursor:pointer;
            font-size:16px;
            font-weight:600;
            transition:.3s;
        }

        button:hover{
            background:#D4AF37;
            color:#491632;
        }

        .login-link{
            margin-top:20px;
            text-align:center;
        }

        .login-link a{
            color:#D4AF37;
            text-decoration:none;
            font-weight:600;
        }

    </style>
</head>

<body>

<div class="signup-box">

<h2>Create Account</h2>

<p>Join Luxe Beauty Expo</p>

<form action="signup_process.php" method="POST">

<div class="input-group">
<i class="bi bi-person-fill"></i>
<input type="text" name="fullname" placeholder="Full Name" required>
</div>

<div class="input-group">
<i class="bi bi-envelope-fill"></i>
<input type="email" name="email" placeholder="Email Address" required>
</div>

<div class="input-group">
<i class="bi bi-telephone-fill"></i>
<input type="text" name="phone" placeholder="Phone Number" required>
</div>

<div class="input-group">
<i class="bi bi-lock-fill"></i>
<input type="password" name="password" placeholder="Password" required>
</div>

<div class="input-group">
<i class="bi bi-lock-fill"></i>
<input type="password" name="confirm_password" placeholder="Confirm Password" required>
</div>

<button type="submit">
Create Account
</button>

</form>

<div class="login-link">
Already have an account?
<a href="login.php">Login</a>
</div>

</div>

</body>

</html>