<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Luxe Beauty Expo</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(rgba(73, 22, 50, 0.85), rgba(73, 22, 50, 0.85)),
                url("hero-section.jpeg") center/cover no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 380px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 18px;
            padding: 40px;
            color: #fff;
            box-shadow: 0 15px 40px rgba(0,0,0,.3);
        }

        h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 42px;
            text-align: center;
            color: #D4AF37;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            font-size: 14px;
            color: #ddd;
            margin-bottom: 30px;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #D4AF37;
        }

        .input-box input {
            width: 100%;
            padding: 14px 14px 14px 45px;
            border: none;
            outline: none;
            border-radius: 10px;
            background: rgba(255,255,255,.12);
            color: white;
            font-size: 15px;
        }

        .input-box input::placeholder {
            color: #ddd;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .options a {
            color: #D4AF37;
            text-decoration: none;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 30px;
            background: #C93C78;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .login-btn:hover {
            background: #D4AF37;
            color: #491632;
        }

        .register {
            margin-top: 25px;
            text-align: center;
            font-size: 14px;
        }

        .register a {
            color: #D4AF37;
            text-decoration: none;
            font-weight: 600;
        }

        @media(max-width:450px){
            .login-card{
                width:90%;
                padding:30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">

        <h2>Welcome Back</h2>

        <p class="subtitle">
            Login to Luxe Beauty Expo
        </p>

        <form action="login_process.php" method="POST">

            <div class="input-box">
                <i class="bi bi-envelope-fill"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="input-box">
                <i class="bi bi-lock-fill"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="options">
                <label>
                    <input type="checkbox">
                    Remember Me
                </label>

                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>

        </form>

        <div class="register">
            Don't have an account?
            <a href="signup.php">Register</a>
        </div>

    </div>

</body>

</html>