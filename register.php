<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Luxe Beauty Expo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        /*==============================
        NAVBAR
===============================*/

        .custom-navbar {
            position: absolute;
            top: 25px;
            left: 50%;
            transform: translateX(-50%);
            width: 92%;
            z-index: 1000;

            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 20px;

            padding: 12px 25px;
        }

        .logo-text {
            text-decoration: none;
        }

        .logo-text h2 {
            font-family: "Cormorant Garamond", serif;
            font-size: 42px;
            font-weight: 700;
            color: #ffffff;
            margin: 0;
            line-height: 1;
        }

        .logo-text h2 span {
            color: #D4AF37;
        }

        .logo-text small {
            color: #f8f8f8;
            letter-spacing: 3px;
            font-size: 11px;
        }

        /*==============================
        NAVIGATION
===============================*/

        .navbar-nav {
            gap: 18px;
        }

        .nav-link {
            position: relative;
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            transition: .3s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #D4AF37;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            left: 50%;
            bottom: -4px;
            transform: translateX(-50%);
            background: #D4AF37;
            transition: .4s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        /*==================================
        REGISTER HERO
==================================*/

        .register-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url("https://i.pinimg.com/736x/78/40/bc/7840bcce9bfd44f6f6b1d69247227784.jpg") center center/cover no-repeat;
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(73, 22, 50, .75),
                    rgba(73, 22, 50, .75));
        }

        .register-hero .container {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            padding: 10px 24px;
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 50px;
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(10px);
            color: #D4AF37;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .hero-title {
            font-family: "Cormorant Garamond", serif;
            font-size: 72px;
            font-weight: 700;
            color: #fff;
            line-height: 1.15;
        }

        .hero-title span {
            color: #D4AF37;
        }

        .hero-text {
            max-width: 720px;
            margin: auto;
            color: #f5f5f5;
            font-family: "Poppins", sans-serif;
            font-size: 18px;
            line-height: 1.9;
        }

        .hero-buttons .btn {
            padding: 15px 36px;
            border-radius: 50px;
            font-weight: 600;
            transition: .35s;
        }

        .hero-buttons .btn-primary {
            background: #C93C78;
            border: none;
        }

        .hero-buttons .btn-primary:hover {
            background: #D4AF37;
            color: #491632;
            transform: translateY(-4px);
        }

        .hero-buttons .btn-outline-light:hover {
            background: #fff;
            color: #491632;
            transform: translateY(-4px);
        }

        @media(max-width:991px) {

            .register-hero {
                min-height: 85vh;
            }

            .hero-title {
                font-size: 56px;
            }

        }

        @media(max-width:768px) {

            .hero-title {
                font-size: 42px;
            }

            .hero-text {
                font-size: 16px;
            }

            .hero-buttons .btn {
                width: 100%;
                margin-bottom: 15px;
            }

            .hero-buttons .btn:last-child {
                margin-bottom: 0;
            }

        }

        /*==================================
        REGISTRATION FORM
==================================*/

        .registration {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .registration-wrapper {
            background: #fff;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .08);
        }

        .registration-info {
            background: linear-gradient(135deg, #491632, #6d2146);
            color: #fff;
            padding: 60px 45px;
            height: 100%;
        }

        .registration-info .section-subtitle {
            color: #D4AF37;
            font-weight: 600;
            letter-spacing: 2px;
            font-size: 14px;
        }

        .registration-info .section-title {
            font-family: "Cormorant Garamond", serif;
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
        }

        .registration-info .section-title span {
            color: #D4AF37;
        }

        .registration-info p {
            color: #f1f1f1;
            line-height: 1.9;
        }

        .registration-feature {
            display: flex;
            gap: 18px;
            margin-top: 35px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, .12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-icon i {
            color: #D4AF37;
            font-size: 24px;
        }

        .registration-feature h5 {
            margin-bottom: 8px;
            font-family: "Cormorant Garamond", serif;
            font-size: 28px;
        }

        .registration-form {
            padding: 60px;
        }

        .registration-form .form-label {
            font-weight: 600;
            color: #491632;
        }

        .registration-form .form-control,
        .registration-form .form-select {
            height: 55px;
            border-radius: 12px;
            border: 1px solid #ddd;
            box-shadow: none;
        }

        .registration-form textarea {
            height: auto !important;
            resize: none;
        }

        .registration-form .form-control:focus,
        .registration-form .form-select:focus {
            border-color: #C93C78;
            box-shadow: 0 0 0 .2rem rgba(201, 60, 120, .15);
        }

        .form-check-input:checked {
            background: #C93C78;
            border-color: #C93C78;
        }

        .register-btn {
            background: #C93C78;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            transition: .3s;
        }

        .register-btn:hover {
            background: #491632;
            color: #fff;
            transform: translateY(-3px);
        }

        @media(max-width:991px) {

            .registration-info,
            .registration-form {
                padding: 40px;
            }

        }

        @media(max-width:768px) {

            .registration {
                padding: 80px 0;
            }

            .registration-info .section-title {
                font-size: 38px;
            }

            .registration-info,
            .registration-form {
                padding: 30px 25px;
            }

            .register-btn {
                width: 100%;
            }

        }

        /*==================================
            WHY REGISTER
==================================*/

        .why-register {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .section-description {
            max-width: 700px;
            color: #666;
            line-height: 1.8;
            margin-left: 200px;
        }

        .benefit-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: .4s;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .06);
            height: 100%;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .12);
        }

        .benefit-icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: rgba(201, 60, 120, .08);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .4s;
        }

        .benefit-card:hover .benefit-icon {
            background: #C93C78;
        }

        .benefit-icon i {
            font-size: 34px;
            color: #C93C78;
            transition: .4s;
        }

        .benefit-card:hover .benefit-icon i {
            color: #fff;
        }

        .benefit-card h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #491632;
            margin-bottom: 18px;
        }

        .benefit-card p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 0;
        }

        @media(max-width:991px) {

            .why-register {
                padding: 80px 0;
            }

        }

        @media(max-width:768px) {

            .benefit-card {
                padding: 35px 25px;
            }

            .benefit-card h4 {
                font-size: 26px;
            }

        }

        /*==================================
            TICKET PRICING
==================================*/

        .pricing {
            padding: 100px 0;
            background: #ffffff;
        }

        .pricing-card {
            position: relative;
            background: #fff;
            padding: 50px 35px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 12px 40px rgba(0, 0, 0, .08);
            transition: .4s;
            height: 100%;
            border: 2px solid transparent;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            border-color: #C93C78;
        }

        .pricing-card.featured {
            background: linear-gradient(135deg, #491632, #6d2146);
            color: #fff;
            transform: scale(1.05);
        }

        .pricing-card.featured:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .popular-tag {
            position: absolute;
            top: -16px;
            left: 50%;
            transform: translateX(-50%);
            background: #D4AF37;
            color: #491632;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
        }

        .pricing-card h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 36px;
            color: #491632;
            margin-bottom: 20px;
        }

        .pricing-card.featured h4 {
            color: #fff;
        }

        .price {
            font-size: 52px;
            font-weight: 700;
            color: #C93C78;
            margin-bottom: 30px;
        }

        .price span {
            display: block;
            font-size: 16px;
            color: #888;
            margin-top: 5px;
        }

        .pricing-card.featured .price,
        .pricing-card.featured .price span {
            color: #D4AF37;
        }

        .pricing-card ul {
            list-style: none;
            padding: 0;
            margin: 0 0 35px;
        }

        .pricing-card ul li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            color: #555;
        }

        .pricing-card.featured ul li {
            border-color: rgba(255, 255, 255, .15);
            color: #f3f3f3;
        }

        .pricing-card ul li i {
            color: #C93C78;
            margin-right: 10px;
        }

        .pricing-card.featured ul li i {
            color: #D4AF37;
        }

        .pricing-btn {
            background: #C93C78;
            color: #fff;
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            transition: .3s;
        }

        .pricing-btn:hover {
            background: #491632;
            color: #fff;
        }

        .pricing-card.featured .pricing-btn {
            background: #D4AF37;
            color: #491632;
        }

        .pricing-card.featured .pricing-btn:hover {
            background: #fff;
            color: #491632;
        }

        @media(max-width:991px) {

            .pricing {
                padding: 80px 0;
            }

            .pricing-card.featured {
                transform: none;
            }

            .pricing-card.featured:hover {
                transform: translateY(-10px);
            }

        }

        /*==================================
                FAQ
==================================*/

        .faq {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .faq-btn {
            background: #C93C78;
            color: #fff;
            padding: 14px 35px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            transition: .3s;
        }

        .faq-btn:hover {
            background: #491632;
            color: #fff;
        }

        .accordion-item {
            border: none;
            border-radius: 18px !important;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
        }

        .accordion-button {
            padding: 22px 28px;
            font-weight: 600;
            color: #491632;
            background: #fff;
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            background: #491632;
            color: #fff;
        }

        .accordion-button::after {
            filter: brightness(0) saturate(100%);
        }

        .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }

        .accordion-body {
            padding: 25px 28px;
            color: #666;
            line-height: 1.9;
            background: #fff;
        }

        @media(max-width:991px) {

            .faq {
                padding: 80px 0;
            }

        }

        @media(max-width:768px) {

            .accordion-button {
                padding: 18px 20px;
                font-size: 16px;
            }

            .accordion-body {
                padding: 20px;
            }

        }

        /*==================================
            CALL TO ACTION
==================================*/

        .register-cta {
            padding: 100px 0;
            background: #ffffff;
        }

        .cta-box {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #491632, #C93C78);
            padding: 70px 60px;
            border-radius: 30px;
            color: #fff;
            box-shadow: 0 20px 60px rgba(73, 22, 50, .2);
        }

        .cta-box::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, .08);
            border-radius: 50%;
            top: -120px;
            right: -120px;
        }

        .cta-box::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            background: rgba(255, 255, 255, .06);
            border-radius: 50%;
            bottom: -100px;
            left: -80px;
        }

        .cta-box>* {
            position: relative;
            z-index: 2;
        }

        .cta-box .section-subtitle {
            color: #D4AF37;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .cta-box .section-title {
            font-family: "Cormorant Garamond", serif;
            font-size: 52px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
        }

        .cta-box .section-title span {
            color: #D4AF37;
        }

        .cta-box p {
            color: rgba(255, 255, 255, .9);
            line-height: 1.9;
            max-width: 700px;
            margin-bottom: 0;
        }

        .cta-btn {
            background: #fff;
            color: #491632;
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: .35s;
        }

        .cta-btn:hover {
            background: #D4AF37;
            color: #491632;
            transform: translateY(-5px);
        }

        @media(max-width:991px) {

            .register-cta {
                padding: 80px 0;
            }

            .cta-box {
                padding: 50px 40px;
                text-align: center;
            }

            .cta-box .section-title {
                font-size: 42px;
            }

        }

        @media(max-width:768px) {

            .cta-box {
                padding: 40px 25px;
            }

            .cta-box .section-title {
                font-size: 34px;
            }

            .cta-btn {
                width: 100%;
            }

        }

        /*==================================
                FOOTER
==================================*/

        .footer {
            background: #491632;
            color: #fff;
            padding: 90px 0 30px;
        }

        .footer-logo {
            display: inline-block;
            font-family: "Cormorant Garamond", serif;
            font-size: 38px;
            font-weight: 700;
            color: #D4AF37;
            text-decoration: none;
            transition: .3s;
        }

        .footer-logo:hover {
            color: #fff;
        }

        .footer-text {
            color: rgba(255, 255, 255, .8);
            line-height: 1.9;
            margin-bottom: 0;
        }

        .footer h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #D4AF37;
            margin-bottom: 25px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 15px;
        }

        .footer ul li:last-child {
            margin-bottom: 0;
        }

        .footer ul li a {
            color: rgba(255, 255, 255, .8);
            text-decoration: none;
            transition: .3s;
        }

        .footer ul li a:hover {
            color: #D4AF37;
            padding-left: 6px;
        }

        .footer-contact li {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            color: rgba(255, 255, 255, .8);
            line-height: 1.7;
        }

        .footer-contact i {
            color: #D4AF37;
            font-size: 20px;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .footer-social a {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, .1);
            color: #fff;
            text-decoration: none;
            transition: .35s;
        }

        .footer-social a:hover {
            background: #D4AF37;
            color: #491632;
            transform: translateY(-5px);
        }

        .footer hr {
            margin: 60px 0 25px;
            border-color: rgba(255, 255, 255, .15);
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .footer-bottom p {
            margin: 0;
            color: rgba(255, 255, 255, .75);
        }

        .footer-bottom div {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-bottom a {
            color: rgba(255, 255, 255, .75);
            text-decoration: none;
            transition: .3s;
        }

        .footer-bottom a:hover {
            color: #D4AF37;
        }

        .footer-bottom span {
            color: rgba(255, 255, 255, .35);
        }

        /*==================================
        RESPONSIVE FOOTER
==================================*/

        @media(max-width:991px) {

            .footer {
                padding: 70px 0 25px;
            }

            .footer h4 {
                margin-top: 10px;
            }

        }

        @media(max-width:767px) {

            .footer {
                text-align: center;
            }

            .footer-social {
                justify-content: center;
            }

            .footer-contact li {
                justify-content: center;
                text-align: left;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom div {
                justify-content: center;
                flex-wrap: wrap;
            }

        }
    </style>

</head>

<body>

    <!--==================================
                NAVBAR
    ==================================-->

    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container">

             <a class="navbar-brand logo-text" href="index.php">

                <h2>Luxe <span>Beauty</span></h2>

                <small>BEAUTY EXPO 2026</small>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <ul class="navbar-nav align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">
                            Gallery
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!--==================================
            REGISTER HERO
    ==================================-->

    <section class="register-hero d-flex align-items-center">

        <div class="hero-overlay"></div>

        <div class="container position-relative">

            <div class="row justify-content-center">

                <div class="col-lg-8 text-center">

                    <span class="hero-badge">
                        REGISTER NOW
                    </span>

                    <h1 class="hero-title mt-4">
                        Reserve Your
                        <span>Exclusive Pass</span>
                    </h1>

                    <p class="hero-text mt-4">
                        Join India's most prestigious beauty exhibition and immerse
                        yourself in a world of luxury brands, inspiring masterclasses,
                        live demonstrations, networking opportunities, and exclusive
                        product launches. Secure your spot today and be part of the
                        ultimate beauty experience.
                    </p>

                    <div class="hero-buttons mt-5">

                        <a href="#pricing" class="btn btn-outline-light">
                            View Tickets
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==================================
            WHY REGISTER
===================================-->

    <section class="why-register py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    WHY ATTEND
                </span>

                <h2 class="section-title mt-3">
                    Experience Beauty Like
                    <span>Never Before</span>
                </h2>

                <p class="section-description mx-auto">
                    Discover exclusive opportunities, premium brands, and unforgettable
                    experiences waiting for you at Luxe Beauty Expo.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">

                    <div class="benefit-card">

                        <div class="benefit-icon">
                            <i class="bi bi-gem"></i>
                        </div>

                        <h4>Luxury Brands</h4>

                        <p>
                            Explore premium beauty, skincare, cosmetics, fragrance,
                            and wellness brands from across the globe.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="benefit-card">

                        <div class="benefit-icon">
                            <i class="bi bi-camera-reels"></i>
                        </div>

                        <h4>Live Demonstrations</h4>

                        <p>
                            Watch industry experts perform live makeup, skincare,
                            hairstyling, and product demonstrations.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="benefit-card">

                        <div class="benefit-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <h4>Masterclasses</h4>

                        <p>
                            Gain valuable insights from renowned professionals through
                            exclusive educational sessions.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="benefit-card">

                        <div class="benefit-icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <h4>Networking</h4>

                        <p>
                            Connect with entrepreneurs, influencers, makeup artists,
                            beauty experts, and fellow enthusiasts.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==================================
        TICKET PRICING
    ==================================-->
    <!--==================================
            TICKET PRICING
===================================-->

    <section class="pricing py-5" id="pricing">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    CHOOSE YOUR PASS
                </span>

                <h2 class="section-title mt-3">
                    Find the Perfect
                    <span>Experience</span>
                </h2>

                <p class="section-description mx-auto">
                    Select the pass that best suits your experience and enjoy exclusive
                    access to India's most luxurious beauty exhibition.
                </p>

            </div>

            <div class="row g-4 justify-content-center">

                <!-- General Pass -->

                <div class="col-lg-4 col-md-6">

                    <div class="pricing-card">

                        <h4>General Pass</h4>

                        <div class="price">

                            ₹999

                            <span>/ Person</span>

                        </div>

                        <ul>

                            <li><i class="bi bi-check-circle-fill"></i> Expo Entry</li>

                            <li><i class="bi bi-check-circle-fill"></i> Brand Exhibitions</li>

                            <li><i class="bi bi-check-circle-fill"></i> Live Demonstrations</li>

                            <li><i class="bi bi-check-circle-fill"></i> Product Sampling</li>

                            <li><i class="bi bi-check-circle-fill"></i> Networking Access</li>

                        </ul>

                        <a href="booking.php" class="btn pricing-btn">
                            Choose Plan
                        </a>

                    </div>

                </div>

                <!-- VIP Pass -->

                <div class="col-lg-4 col-md-6">

                    <div class="pricing-card featured">

                        <div class="popular-tag">
                            Most Popular
                        </div>

                        <h4>VIP Pass</h4>

                        <div class="price">

                            ₹2,499

                            <span>/ Person</span>

                        </div>

                        <ul>

                            <li><i class="bi bi-check-circle-fill"></i> Everything in General</li>

                            <li><i class="bi bi-check-circle-fill"></i> Priority Entry</li>

                            <li><i class="bi bi-check-circle-fill"></i> VIP Seating</li>

                            <li><i class="bi bi-check-circle-fill"></i> Masterclass Access</li>

                            <li><i class="bi bi-check-circle-fill"></i> Premium Gift Hamper</li>

                        </ul>

                        <a href="booking.php" class="btn pricing-btn">
                            Choose Plan
                        </a>

                    </div>

                </div>

                <!-- Premium Pass -->

                <div class="col-lg-4 col-md-6">

                    <div class="pricing-card">

                        <h4>Premium Pass</h4>

                        <div class="price">

                            ₹4,999

                            <span>/ Person</span>

                        </div>

                        <ul>

                            <li><i class="bi bi-check-circle-fill"></i> Everything in VIP</li>

                            <li><i class="bi bi-check-circle-fill"></i> Meet & Greet</li>

                            <li><i class="bi bi-check-circle-fill"></i> Reserved Front Row Seating</li>

                            <li><i class="bi bi-check-circle-fill"></i> Luxury Gift Box</li>

                            <li><i class="bi bi-check-circle-fill"></i> Premium Lounge Access</li>

                        </ul>

                        <a href="booking.php" class="btn pricing-btn">
                            Choose Plan
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
                FAQ
    ==================================-->

    <!--==================================
                FAQ
===================================-->

    <section class="faq py-5">

        <div class="container">

            <div class="row align-items-center">

                <!-- Left Content -->

                <div class="col-lg-5 mb-5 mb-lg-0">

                    <span class="section-subtitle">
                        FREQUENTLY ASKED QUESTIONS
                    </span>

                    <h2 class="section-title mt-3">
                        Have Questions?
                        <span>We've Got Answers</span>
                    </h2>

                    <p class="section-description mt-4">
                        Find answers to the most commonly asked questions about
                        registration, tickets, event access, and everything you need
                        to know before attending Luxe Beauty Expo.
                    </p>

                    <a href="contacts.php" class="btn faq-btn mt-4">
                        Contact Us
                    </a>

                </div>

                <!-- Right FAQ -->

                <div class="col-lg-7">

                    <div class="accordion" id="faqAccordion">

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">

                                    How do I register for the event?

                                </button>

                            </h2>

                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">

                                <div class="accordion-body">

                                    Complete the online registration form, choose
                                    your preferred ticket, and confirm your booking
                                    to receive your event pass.

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">

                                    Can I upgrade my ticket later?

                                </button>

                            </h2>

                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                                <div class="accordion-body">

                                    Yes. Subject to availability, you can upgrade
                                    your pass before the event by contacting our
                                    support team.

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">

                                    Will I receive a confirmation email?

                                </button>

                            </h2>

                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                                <div class="accordion-body">

                                    Yes. A confirmation email containing your
                                    registration details and ticket information
                                    will be sent after successful registration.

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">

                                    Are tickets refundable?

                                </button>

                            </h2>

                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                                <div class="accordion-body">

                                    Tickets are generally non-refundable. However,
                                    if the event is cancelled or rescheduled,
                                    attendees will be informed about the available
                                    options.

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">

                                    What should I bring on the event day?

                                </button>

                            </h2>

                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">

                                <div class="accordion-body">

                                    Please carry your digital or printed ticket
                                    along with a valid government-issued photo ID
                                    for smooth entry.

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==================================
            CALL TO ACTION
    ==================================-->
    <!--==================================
            CALL TO ACTION
===================================-->

    <section class="register-cta">

        <div class="container">

            <div class="cta-box">

                <div class="row align-items-center">

                    <div class="col-lg-8">

                        <span class="section-subtitle">
                            DON'T MISS OUT
                        </span>

                        <h2 class="section-title mt-3">
                            Be a Part of India's Most
                            <span>Luxurious Beauty Expo</span>
                        </h2>

                        <p class="mt-4">
                            Seats are limited and registrations are filling up fast.
                            Reserve your pass today to experience exclusive product
                            launches, expert masterclasses, premium networking, and
                            unforgettable beauty innovations.
                        </p>

                    </div>

                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                        <a href="booking.php" class="btn cta-btn">

                            Register Now

                            <i class="bi bi-arrow-right ms-2"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
                FOOTER
    ==================================-->

    <!--==================================
                FOOTER
===================================-->

    <footer class="footer">

        <div class="container">

            <div class="row gy-5">

                <!-- Company Info -->

                <div class="col-lg-4">

                    <a href="index.php" class="footer-logo">
                        Luxe Beauty Expo
                    </a>

                    <p class="footer-text mt-4">
                        Luxe Beauty Expo is India's premier beauty exhibition,
                        bringing together renowned beauty brands, industry experts,
                        and beauty enthusiasts for an unforgettable celebration of
                        innovation, luxury, and beauty excellence.
                    </p>

                    <div class="footer-social">

                        <a href="#"><i class="bi bi-facebook"></i></a>

                        <a href="#"><i class="bi bi-instagram"></i></a>

                        <a href="#"><i class="bi bi-twitter-x"></i></a>

                        <a href="#"><i class="bi bi-linkedin"></i></a>

                    </div>

                </div>

                <!-- Quick Links -->

                <div class="col-lg-2 col-md-6">

                    <h4>Quick Links</h4>

                    <ul>

                        <li><a href="index.php">Home</a></li>

                        <li><a href="about.php">About</a></li>

                        <li><a href="gallery.php">Gallery</a></li>

                        <li><a href="contacts.php">Contact</a></li>

                        <li><a href="login.php">Register</a></li>

                    </ul>

                </div>

                <!-- Event -->

                <div class="col-lg-3 col-md-6">

                    <h4>Event Highlights</h4>

                    <ul>

                        <li><a href="#">Luxury Brands</a></li>

                        <li><a href="#">Masterclasses</a></li>

                        <li><a href="#">Live Demonstrations</a></li>

                        <li><a href="#">Networking</a></li>

                        <li><a href="#">VIP Experience</a></li>

                    </ul>

                </div>

                <!-- Contact -->

                <div class="col-lg-3">

                    <h4>Contact Us</h4>

                    <ul class="footer-contact">

                        <li>

                            <i class="bi bi-geo-alt-fill"></i>

                            <span>
                                Biswa Bangla Convention Centre,<br>
                                New Town, Kolkata, India
                            </span>

                        </li>

                        <li>

                            <i class="bi bi-envelope-fill"></i>

                            <span>
                                info@luxebeautyexpo.com
                            </span>

                        </li>

                        <li>

                            <i class="bi bi-telephone-fill"></i>

                            <span>
                                +91 98765 43210
                            </span>

                        </li>

                    </ul>

                </div>

            </div>

            <hr>

            <div class="footer-bottom">

                <p>
                    © 2026 Luxe Beauty Expo. All Rights Reserved.
                </p>

                <div>

                    <a href="#">Privacy Policy</a>

                    <span>|</span>

                    <a href="#">Terms & Conditions</a>

                </div>

            </div>

        </div>

    </footer>

    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>