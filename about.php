<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | Luxe Beauty Expo</title>

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
        /*==================================
            NAVBAR
==================================*/

        .custom-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 18px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            z-index: 1000;
        }

        .logo-text {
            text-decoration: none;
        }

        .logo-text h2 {
            font-family: "Cormorant Garamond", serif;
            font-size: 2rem;
            font-weight: 700;
            color: #491632;
            margin: 0;
        }

        .logo-text h2 span {
            color: #C93C78;
        }

        .logo-text small {
            display: block;
            font-size: 11px;
            letter-spacing: 3px;
            color: #777;
        }

        .navbar-nav {
            gap: 18px;
        }

        .nav-link {
            position: relative;
            color: #491632;
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            transition: .3s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #C93C78;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 2px;
            background: #C93C78;
            transition: .3s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .register-btn {
            background: #C93C78;
            color: #fff;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 500;
            transition: .3s;
        }

        .register-btn:hover {
            background: #491632;
            color: #fff;
        }

        .navbar-toggler {
            border: none;
            box-shadow: none !important;
        }

        /*==================================
            ABOUT HERO
==================================*/

        .about-hero {
            padding: 170px 0 100px;
            background: linear-gradient(135deg, #FFF8FB 0%, #ffffff 100%);
            overflow: hidden;
        }

        .about-title {
            font-family: "Cormorant Garamond", serif;
            font-size: 68px;
            font-weight: 700;
            line-height: 1.15;
            color: #491632;
        }

        .about-title span {
            color: #C93C78;
        }

        .about-text {
            font-family: "Poppins", sans-serif;
            font-size: 17px;
            line-height: 1.9;
            color: #666;
            max-width: 560px;
        }

        .about-image {
            max-width: 100%;
            animation: floatImage 5s ease-in-out infinite;
            padding: 40px;
            border-radius: 100px;
        }

        @keyframes floatImage {

            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0);
            }

        }

        .hero-btn {
            background: #C93C78;
            border: none;
            color: #fff;
            padding: 14px 35px;
            border-radius: 50px;
            transition: .3s;
        }

        .hero-btn:hover {
            background: #491632;
            transform: translateY(-3px);
        }

        .hero-btn-outline {
            padding: 14px 35px;
            border-radius: 50px;
            border: 2px solid #491632;
            color: #491632;
            transition: .3s;
        }

        .hero-btn-outline:hover {
            background: #491632;
            color: #fff;
        }

        /*==================================
            RESPONSIVE
==================================*/

        @media(max-width:991px) {

            .about-hero {
                padding: 150px 0 90px;
                text-align: center;
            }

            .about-title {
                font-size: 52px;
            }

            .about-text {
                margin: auto;
            }

            .about-image {
                margin-top: 50px;
            }

        }

        @media(max-width:768px) {

            .about-hero {
                padding: 130px 0 70px;
            }

            .about-title {
                font-size: 40px;
            }

            .about-text {
                font-size: 16px;
            }

            .hero-btn,
            .hero-btn-outline {
                width: 100%;
                margin-bottom: 15px;
            }

        }

        /*==================================
        OUR STORY
==================================*/

        .our-story {
            padding: 100px 0;
            background: #ffffff;
        }

        .story-image {
            border-radius: 20px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
            transition: .4s;
        }

        .story-image:hover {
            transform: scale(1.03);
        }

        .story-text {
            font-family: "Poppins", sans-serif;
            color: #666;
            font-size: 16px;
            line-height: 1.9;
            margin-bottom: 20px;
        }

        .story-card {
            background: #FFF8FB;
            padding: 30px;
            border-radius: 18px;
            text-align: center;
            transition: .3s;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
        }

        .story-card:hover {
            transform: translateY(-8px);
        }

        .story-card h3 {
            font-family: "Cormorant Garamond", serif;
            font-size: 42px;
            font-weight: 700;
            color: #C93C78;
            margin-bottom: 10px;
        }

        .story-card p {
            font-family: "Poppins", sans-serif;
            color: #555;
            margin: 0;
        }

        /*==================================
        RESPONSIVE
==================================*/

        @media(max-width:991px) {

            .our-story {
                text-align: center;
            }

            .story-image {
                margin-bottom: 40px;
            }

        }

        /*==================================
        MISSION & VISION
==================================*/

        .mission-vision {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .purpose-card {
            background: #fff;
            padding: 45px 35px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
            transition: .35s;
            height: 100%;
        }

        .purpose-card:hover {
            transform: translateY(-10px);
        }

        .purpose-icon {
            width: 80px;
            height: 80px;
            background: #C93C78;
            color: #fff;
            font-size: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin: 0 auto 25px;
        }

        .purpose-card h3 {
            font-family: "Cormorant Garamond", serif;
            font-size: 34px;
            color: #491632;
            margin-bottom: 20px;
        }

        .purpose-card p {
            font-family: "Poppins", sans-serif;
            color: #666;
            line-height: 1.9;
            margin: 0;
        }

        /*==================================
        RESPONSIVE
==================================*/

        @media(max-width:991px) {

            .mission-vision {
                padding: 80px 0;
            }

            .purpose-card {
                padding: 35px 25px;
            }

        }

        /*==================================
        WHY CHOOSE US
==================================*/

        .why-choose {
            padding: 100px 0;
            background: #ffffff;
        }

        .choose-card {
            background: #FFF8FB;
            padding: 40px 30px;
            text-align: center;
            border-radius: 20px;
            height: 100%;
            transition: .35s;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        }

        .choose-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .12);
        }

        .choose-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #C93C78;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .choose-card h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #491632;
            margin-bottom: 15px;
        }

        .choose-card p {
            font-family: "Poppins", sans-serif;
            color: #666;
            font-size: 15px;
            line-height: 1.8;
            margin: 0;
        }

        @media(max-width:991px) {

            .why-choose {
                padding: 80px 0;
            }

            .choose-card {
                padding: 35px 25px;
            }

        }

        /*==================================
        EVENT HIGHLIGHTS
==================================*/

        .event-highlights {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .highlight-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
            transition: .35s;
            height: 100%;
        }

        .highlight-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
        }

        .highlight-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            transition: .5s;
        }

        .highlight-card:hover img {
            transform: scale(1.08);
        }

        .highlight-content {
            padding: 30px;
        }

        .highlight-content h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #491632;
            margin-bottom: 15px;
        }

        .highlight-content p {
            font-family: "Poppins", sans-serif;
            font-size: 15px;
            line-height: 1.8;
            color: #666;
            margin: 0;
        }

        @media(max-width:991px) {

            .event-highlights {
                padding: 80px 0;
            }

        }

        @media(max-width:768px) {

            .highlight-card img {
                height: 220px;
            }

            .highlight-content {
                padding: 25px;
            }

            .highlight-content h4 {
                font-size: 26px;
            }

        }

        /*==================================
            STATISTICS
==================================*/

        .statistics {
            padding: 100px 0;
            background: #491632;
        }

        .statistics .section-subtitle {
            color: #D4AF37;
        }

        .statistics .section-title {
            color: #fff;
        }

        .statistics .section-title span {
            color: #D4AF37;
        }

        .statistics .section-description {
            color: #f1f1f1;
            max-width: 650px;
        }

        .stat-card {
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 20px;
            text-align: center;
            padding: 40px 25px;
            transition: .35s;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            background: #C93C78;
        }

        .stat-card i {
            font-size: 45px;
            color: #D4AF37;
            margin-bottom: 20px;
        }

        .stat-card h2 {
            font-family: "Cormorant Garamond", serif;
            font-size: 52px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
        }

        .stat-card p {
            font-family: "Poppins", sans-serif;
            color: #f5f5f5;
            margin: 0;
            font-size: 16px;
            letter-spacing: .5px;
        }

        @media(max-width:991px) {

            .statistics {
                padding: 80px 0;
            }

            .stat-card {
                padding: 35px 20px;
            }

        }

        @media(max-width:768px) {

            .stat-card h2 {
                font-size: 42px;
            }

            .stat-card i {
                font-size: 38px;
            }

        }

        /*==================================
        EVENT TIMELINE
==================================*/

        .event-timeline {
            padding: 100px 0;
            background: #ffffff;
        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
            padding-left: 40px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 12px;
            top: 0;
            width: 3px;
            height: 100%;
            background: #C93C78;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-dot {
            position: absolute;
            left: -37px;
            top: 8px;
            width: 22px;
            height: 22px;
            background: #D4AF37;
            border: 4px solid #C93C78;
            border-radius: 50%;
        }

        .timeline-content {
            background: #FFF8FB;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            transition: .35s;
        }

        .timeline-content:hover {
            transform: translateX(8px);
        }

        .timeline-time {
            display: inline-block;
            background: #C93C78;
            color: #fff;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .timeline-content h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #491632;
            margin-bottom: 12px;
        }

        .timeline-content p {
            font-family: "Poppins", sans-serif;
            color: #666;
            line-height: 1.8;
            margin: 0;
        }

        @media(max-width:768px) {

            .event-timeline {
                padding: 80px 0;
            }

            .timeline {
                padding-left: 30px;
            }

            .timeline-dot {
                left: -27px;
            }

            .timeline-content {
                padding: 25px;
            }

            .timeline-content h4 {
                font-size: 24px;
            }

        }

        /*==================================
            GALLERY
==================================*/

        .gallery {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            transition: .5s;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(73, 22, 50, .15),
                    rgba(73, 22, 50, .85));
            display: flex;
            justify-content: center;
            align-items: flex-end;
            opacity: 0;
            transition: .4s;
            padding-bottom: 30px;
        }

        .gallery-overlay h5 {
            color: #fff;
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            margin: 0;
            transform: translateY(20px);
            transition: .4s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-item:hover .gallery-overlay h5 {
            transform: translateY(0);
        }

        @media(max-width:991px) {

            .gallery {
                padding: 80px 0;
            }

        }

        @media(max-width:768px) {

            .gallery-item img {
                height: 260px;
            }

            .gallery-overlay h5 {
                font-size: 24px;
            }

        }

        /*==================================
            FOOTER
==================================*/

        .footer {
            background: #491632;
            color: #fff;
            padding: 80px 0 25px;
        }

        .footer-logo {
            font-family: "Cormorant Garamond", serif;
            font-size: 34px;
            font-weight: 700;
            color: #D4AF37;
            text-decoration: none;
        }

        .footer-logo:hover {
            color: #D4AF37;
        }

        .footer-text {
            margin: 25px 0;
            line-height: 1.9;
            color: #d8d8d8;
            font-family: "Poppins", sans-serif;
        }

        .footer h5 {
            color: #D4AF37;
            font-family: "Cormorant Garamond", serif;
            font-size: 28px;
            margin-bottom: 25px;
        }

        .footer-links,
        .contact-info {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li,
        .contact-info li {
            margin-bottom: 15px;
        }

        .footer-links a {
            text-decoration: none;
            color: #d8d8d8;
            transition: .3s;
        }

        .footer-links a:hover {
            color: #D4AF37;
            padding-left: 6px;
        }

        .contact-info li {
            color: #d8d8d8;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .contact-info i {
            color: #D4AF37;
            font-size: 18px;
            margin-top: 3px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .1);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            transition: .35s;
            font-size: 18px;
        }

        .social-icons a:hover {
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
            color: #cfcfcf;
        }

        .footer-bottom a {
            color: #cfcfcf;
            text-decoration: none;
            transition: .3s;
        }

        .footer-bottom a:hover {
            color: #D4AF37;
        }

        .footer-bottom span {
            margin: 0 10px;
            color: #888;
        }

        @media(max-width:768px) {

            .footer {
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }

            .contact-info li {
                justify-content: center;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

        }
    </style>

</head>

<body>

    <!--==============================
            NAVBAR
    ==============================-->

    <nav class="navbar navbar-expand-lg custom-navbar">

        <div class="container">

            <!-- Logo -->

            <a class="navbar-brand logo-text" href="index.php">

                <h2>Luxe <span>Beauty</span></h2>

                <small>BEAUTY EXPO 2026</small>

            </a>

            <!-- Mobile Toggle -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!-- Navigation -->

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <ul class="navbar-nav align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Contact</a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a href="login.php" class="btn register-btn">
                            Register Now
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!--==============================
            ABOUT HERO
    ==============================-->

    <section class="about-hero py-5">

        <div class="container">

            <div class="row align-items-center min-vh-100">

                <!-- Left Content -->

                <div class="col-lg-6">

                    <span class="section-subtitle">
                        ABOUT LUXE BEAUTY EXPO
                    </span>

                    <h1 class="about-title mt-3">
                        Celebrating
                        <span>Beauty</span>,
                        Innovation &
                        Luxury
                    </h1>

                    <p class="about-text mt-4">

                        Luxe Beauty Expo is a premier beauty exhibition that
                        brings together world-renowned beauty brands,
                        industry experts, skincare specialists, makeup
                        artists, and beauty enthusiasts under one roof.
                        Our mission is to create an unforgettable experience
                        where innovation, education, and luxury come together
                        to inspire everyone passionate about beauty.

                    </p>

                    <div class="mt-4">

                        <a href="services.php" class="btn btn-primary hero-btn me-3">

                            Explore Services

                        </a>

                        <a href="register.php" class="btn btn-outline-dark hero-btn-outline">

                            Join The Expo

                        </a>

                    </div>

                </div>

                <!-- Right Image -->

                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <img src="https://i.pinimg.com/736x/c0/11/9e/c0119e2e0cc3cc537b77c77b74944ded.jpg" class="img-fluid about-image" alt="About Luxe Beauty Expo">

                </div>

            </div>

        </div>

    </section>

    <!--==============================
        OUR STORY
================================-->

    <section class="our-story py-5">

        <div class="container">

            <div class="row align-items-center g-5">

                <!-- Left Image -->

                <div class="col-lg-6">

                    <img src="https://i.pinimg.com/736x/a9/be/04/a9be04c7038247cafbbe24df6e9cc3aa.jpg" alt="Our Story" class="img-fluid story-image">

                </div>

                <!-- Right Content -->

                <div class="col-lg-6">

                    <span class="section-subtitle">
                        OUR STORY
                    </span>

                    <h2 class="section-title mt-3">
                        Where Beauty Meets
                        <span>Innovation</span>
                    </h2>

                    <p class="story-text mt-4">

                        Luxe Beauty Expo was created with a vision to redefine the
                        beauty industry by bringing together luxury brands,
                        emerging innovators, and passionate beauty enthusiasts
                        under one roof. Every edition of our expo celebrates
                        creativity, craftsmanship, and the latest advancements in
                        skincare, cosmetics, wellness, and personal care.

                    </p>

                    <p class="story-text">

                        From exclusive product launches and live beauty
                        demonstrations to expert-led masterclasses and networking
                        opportunities, we provide an immersive experience that
                        inspires professionals and consumers alike. Our mission is
                        to create meaningful connections while showcasing the
                        future of beauty and self-care.

                    </p>

                    <div class="row mt-4">

                        <div class="col-6">

                            <div class="story-card">

                                <h3>100+</h3>
                                <p>Luxury Brands</p>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="story-card">

                                <h3>15K+</h3>
                                <p>Visitors Every Year</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==============================
        MISSION & VISION
================================-->

    <section class="mission-vision py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    OUR PURPOSE
                </span>

                <h2 class="section-title mt-3">
                    Our <span>Mission</span> & Vision
                </h2>

                <p class="section-description mx-auto">
                    We are committed to creating an inspiring platform where
                    innovation, creativity, and luxury redefine the future of
                    the beauty industry.
                </p>

            </div>

            <div class="row g-4">

                <!-- Mission -->

                <div class="col-lg-6">

                    <div class="purpose-card">

                        <div class="purpose-icon">
                            <i class="bi bi-stars"></i>
                        </div>

                        <h3>Our Mission</h3>

                        <p>
                            To connect renowned beauty brands, professionals,
                            and enthusiasts through immersive experiences,
                            educational masterclasses, product launches,
                            and networking opportunities that inspire
                            innovation and growth.
                        </p>

                    </div>

                </div>

                <!-- Vision -->

                <div class="col-lg-6">

                    <div class="purpose-card">

                        <div class="purpose-icon">
                            <i class="bi bi-eye"></i>
                        </div>

                        <h3>Our Vision</h3>

                        <p>
                            To become Asia's most prestigious beauty
                            exhibition by celebrating excellence, promoting
                            sustainability, and shaping the future of the
                            global beauty industry.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==============================
        WHY CHOOSE US
================================-->

    <section class="why-choose py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    WHY CHOOSE US
                </span>

                <h2 class="section-title mt-3">
                    Experience the <span>Best</span> of Beauty
                </h2>

                <p class="section-description mx-auto">

                    Discover what makes Luxe Beauty Expo the ultimate destination
                    for beauty professionals, luxury brands, and beauty enthusiasts.

                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <div class="choose-icon">
                            <i class="bi bi-gem"></i>
                        </div>

                        <h4>Luxury Brands</h4>

                        <p>
                            Explore exclusive collections from premium beauty and
                            skincare brands around the world.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <div class="choose-icon">
                            <i class="bi bi-person-video3"></i>
                        </div>

                        <h4>Expert Sessions</h4>

                        <p>
                            Learn from internationally recognized beauty experts
                            through live demonstrations and masterclasses.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <div class="choose-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>

                        <h4>Latest Trends</h4>

                        <p>
                            Stay ahead with innovative beauty technology, products,
                            and emerging industry trends.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <div class="choose-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <h4>Networking</h4>

                        <p>
                            Connect with beauty entrepreneurs, influencers,
                            professionals, and industry leaders.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==================================
        EVENT HIGHLIGHTS
===================================-->

    <section class="event-highlights py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    EVENT HIGHLIGHTS
                </span>

                <h2 class="section-title mt-3">
                    What Awaits You at <span>Luxe Beauty Expo</span>
                </h2>

                <p class="section-description mx-auto">
                    Discover an extraordinary beauty experience featuring luxury
                    brands, live demonstrations, expert-led sessions, and exclusive
                    networking opportunities—all under one roof.
                </p>

            </div>

            <div class="row g-4">

                <!-- Highlight 1 -->

                <div class="col-lg-4 col-md-6">

                    <div class="highlight-card">

                        <img src="https://i.pinimg.com/736x/31/5b/a8/315ba84392bbc43c56aedc016f42c9da.jpg" class="img-fluid" alt="Luxury Brands">

                        <div class="highlight-content">

                            <h4>Luxury Brand Showcase</h4>

                            <p>
                                Explore premium skincare, cosmetics, fragrances,
                                and wellness collections from globally renowned
                                beauty brands.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Highlight 2 -->

                <div class="col-lg-4 col-md-6">

                    <div class="highlight-card">

                        <img src="https://i.pinimg.com/control1/736x/a3/dc/56/a3dc563dd5a8420f86a2e65219de2a80.jpg" class="img-fluid" alt="Masterclasses">

                        <div class="highlight-content">

                            <h4>Beauty Masterclasses</h4>

                            <p>
                                Learn professional makeup, skincare, and styling
                                techniques from industry-leading beauty experts.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Highlight 3 -->

                <div class="col-lg-4 col-md-6">

                    <div class="highlight-card">

                        <img src="https://i.pinimg.com/736x/3d/e1/ae/3de1ae594cb711d80f8084279d4cdf2e.jpg" class="img-fluid" alt="Networking">

                        <div class="highlight-content">

                            <h4>Networking Events</h4>

                            <p>
                                Build meaningful connections with influencers,
                                entrepreneurs, beauty professionals, and luxury
                                brands.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Highlight 4 -->

                <div class="col-lg-4 col-md-6">

                    <div class="highlight-card">

                        <img src="https://i.pinimg.com/736x/38/99/f1/3899f11bf7f1ba3489ad201ede5841ca.jpg" class="img-fluid" alt="Live Demo">

                        <div class="highlight-content">

                            <h4>Live Product Demonstrations</h4>

                            <p>
                                Watch exclusive launches and experience innovative
                                beauty products through engaging live showcases.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Highlight 5 -->

                <div class="col-lg-4 col-md-6">

                    <div class="highlight-card">

                        <img src="https://i.pinimg.com/736x/16/48/d4/1648d446a1d4e9a8a1bc00e4a5db20c2.jpg" class="img-fluid" alt="Workshops">

                        <div class="highlight-content">

                            <h4>Interactive Workshops</h4>

                            <p>
                                Participate in hands-on sessions designed to inspire
                                creativity and enhance your beauty expertise.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Highlight 6 -->

                <div class="col-lg-4 col-md-6">

                    <div class="highlight-card">

                        <img src="https://i.pinimg.com/1200x/09/8b/9a/098b9a36bcfe6c56fc81053940361d16.jpg" class="img-fluid" alt="VIP Lounge">

                        <div class="highlight-content">

                            <h4>VIP Experience</h4>

                            <p>
                                Enjoy premium access, exclusive gifts, and luxury
                                experiences curated especially for VIP attendees.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==================================
            STATISTICS
===================================-->

    <section class="statistics py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    OUR ACHIEVEMENTS
                </span>

                <h2 class="section-title mt-3">
                    Beauty by the <span>Numbers</span>
                </h2>

                <p class="section-description mx-auto">
                    Every edition of Luxe Beauty Expo continues to inspire thousands
                    of beauty professionals, luxury brands, and enthusiasts from
                    across the country.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <i class="bi bi-gem"></i>

                        <h2>100+</h2>

                        <p>Luxury Brands</p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <i class="bi bi-people-fill"></i>

                        <h2>15K+</h2>

                        <p>Visitors</p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <i class="bi bi-mic-fill"></i>

                        <h2>50+</h2>

                        <p>Industry Experts</p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="stat-card">

                        <i class="bi bi-award-fill"></i>

                        <h2>25+</h2>

                        <p>Masterclasses</p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==================================
            EVENT TIMELINE
===================================-->

    <section class="event-timeline py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    EVENT TIMELINE
                </span>

                <h2 class="section-title mt-3">
                    Your Journey Through the <span>Expo</span>
                </h2>

                <p class="section-description mx-auto">
                    Experience a full day of inspiration, learning, networking,
                    and luxury beauty innovations.
                </p>

            </div>

            <div class="timeline">

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-content">

                        <span class="timeline-time">
                            09:00 AM
                        </span>

                        <h4>Registration & Welcome</h4>

                        <p>
                            Collect your event pass, welcome kit, and explore the
                            exhibition hall.
                        </p>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-content">

                        <span class="timeline-time">
                            10:30 AM
                        </span>

                        <h4>Opening Ceremony</h4>

                        <p>
                            Official inauguration with keynote speeches from
                            renowned beauty experts.
                        </p>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-content">

                        <span class="timeline-time">
                            12:00 PM
                        </span>

                        <h4>Beauty Masterclasses</h4>

                        <p>
                            Learn professional makeup, skincare, and styling
                            techniques through live sessions.
                        </p>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-content">

                        <span class="timeline-time">
                            02:30 PM
                        </span>

                        <h4>Luxury Product Launches</h4>

                        <p>
                            Discover exclusive collections and experience new
                            beauty innovations firsthand.
                        </p>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-content">

                        <span class="timeline-time">
                            04:00 PM
                        </span>

                        <h4>Networking Session</h4>

                        <p>
                            Meet beauty professionals, influencers, and premium
                            brands from across the industry.
                        </p>

                    </div>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-content">

                        <span class="timeline-time">
                            06:00 PM
                        </span>

                        <h4>Closing Ceremony</h4>

                        <p>
                            Awards, thank-you address, and a memorable conclusion
                            to the Luxe Beauty Expo.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==================================
            GALLERY
===================================-->

    <section class="gallery py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    GALLERY
                </span>

                <h2 class="section-title mt-3">
                    Moments from <span>Luxe Beauty Expo</span>
                </h2>

                <p class="section-description mx-auto">
                    Relive the elegance, innovation, and unforgettable experiences
                    from our previous beauty exhibitions through these captivating
                    moments.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-item">

                        <img src="https://i.pinimg.com/control1/1200x/da/ed/f3/daedf3581285c4d65829a4b8ac47bf70.jpg" alt="Gallery Image" class="img-fluid">

                        <div class="gallery-overlay">

                            <h5>Luxury Showcase</h5>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-item">

                        <img src="https://i.pinimg.com/control1/1200x/86/61/8e/86618ec48ff10f7bd76506a65f8aafda.jpg" alt="Gallery Image" class="img-fluid">

                        <div class="gallery-overlay">

                            <h5>Beauty Masterclass</h5>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-item">

                        <img src="https://i.pinimg.com/736x/f7/34/96/f73496fdd9500c60dc04ecfb8a02802e.jpg" alt="Gallery Image" class="img-fluid">

                        <div class="gallery-overlay">

                            <h5>Live Demonstration</h5>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-item">

                        <img src="https://i.pinimg.com/control1/1200x/71/15/78/711578dff474a626fef088af65905493.jpg" alt="Gallery Image" class="img-fluid">

                        <div class="gallery-overlay">

                            <h5>Networking</h5>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-item">

                        <img src="https://i.pinimg.com/control1/1200x/01/89/54/01895465caa195d720273e8beb5367ce.jpg" alt="Gallery Image" class="img-fluid">

                        <div class="gallery-overlay">

                            <h5>Product Launch</h5>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-item">

                        <img src="https://i.pinimg.com/control1/1200x/9f/35/f4/9f35f430410fa406bfc6d255d4cadf01.jpg" alt="Gallery Image" class="img-fluid">

                        <div class="gallery-overlay">

                            <h5>VIP Experience</h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--==================================
            FOOTER
===================================-->

    <footer class="footer">

        <div class="container">

            <div class="row gy-5">

                <!-- About -->

                <div class="col-lg-4 col-md-6">

                    <a href="index.php" class="footer-logo">
                        Luxe Beauty Expo
                    </a>

                    <p class="footer-text">
                        Luxe Beauty Expo is India's premier luxury beauty exhibition,
                        bringing together world-renowned beauty brands, industry
                        experts, and beauty enthusiasts under one roof to celebrate
                        innovation, elegance, and excellence.
                    </p>

                    <div class="social-icons">

                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>

                    </div>

                </div>

                <!-- Quick Links -->

                <div class="col-lg-2 col-md-6">

                    <h5>Quick Links</h5>

                    <ul class="footer-links">

                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contacts.php">Contact</a></li>

                    </ul>

                </div>

                <!-- Event -->

                <div class="col-lg-3 col-md-6">

                    <h5>Event</h5>

                    <ul class="footer-links">

                        <li><a href="#">Speakers</a></li>
                        <li><a href="#">Workshops</a></li>
                        <li><a href="#">Exhibitors</a></li>
                        <li><a href="#">Register</a></li>

                    </ul>

                </div>

                <!-- Contact -->

                <div class="col-lg-3 col-md-6">

                    <h5>Contact Us</h5>

                    <ul class="contact-info">

                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            Kolkata, West Bengal
                        </li>

                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            info@luxebeautyexpo.com
                        </li>

                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            +91 98765 43210
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