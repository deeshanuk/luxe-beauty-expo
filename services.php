<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Services | Luxe Beauty Expo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
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
            text-decoration-style: wavy;
        }

        .logo-text h2 {
            font-family: "Cormorant Garamond", serif;
            font-size: 2rem;
            font-weight: 700;
            color: #f4e2ec;
            margin: 0;
        }

        .logo-text h2 span {
            color: #C93C78;
        }

        .logo-text small {
            display: block;
            font-size: 11px;
            letter-spacing: 3px;
            color: #be4293;
        }

        .navbar-nav {
            gap: 18px;
        }

        .nav-link {
            position: relative;
            color: #e7a2c8;
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
            SERVICES HERO
==================================*/

        .services-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            background: url("https://i.pinimg.com/736x/0e/34/37/0e3437e467dafdad8b34ec62f4709909.jpg") center/cover no-repeat;
        }

        .services-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(73, 22, 50, .80),
                    rgba(73, 22, 50, .65));
        }

        .services-hero .container {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            padding: 10px 22px;
            border-radius: 50px;
            background: rgba(212, 175, 55, .15);
            color: #D4AF37;
            border: 1px solid rgba(212, 175, 55, .4);
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .services-hero h1 {
            font-family: "Cormorant Garamond", serif;
            font-size: 72px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.15;
            margin-bottom: 25px;
        }

        .services-hero p {
            max-width: 700px;
            margin: 0 auto 40px;
            color: rgba(255, 255, 255, .9);
            font-size: 18px;
            line-height: 1.9;
        }

        .hero-btn {
            background: #C93C78;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            transition: .35s ease;
        }

        .hero-btn:hover {
            background: #D4AF37;
            color: #491632;
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(212, 175, 55, .35);
        }

        @media(max-width:991px) {

            .services-hero {
                min-height: 80vh;
                padding: 120px 0 80px;
            }

            .services-hero h1 {
                font-size: 54px;
            }

            .services-hero p {
                font-size: 17px;
            }

        }

        @media(max-width:767px) {

            .services-hero h1 {
                font-size: 40px;
            }

            .services-hero p {
                font-size: 16px;
            }

            .hero-btn {
                width: 100%;
                max-width: 280px;
            }

        }

        /*==============================
        REGISTER BUTTON
===============================*/

        .register-btn {
            background: #C93C78;
            color: #fff;
            padding: 10px 26px;
            border-radius: 50px;
            font-weight: 600;
            transition: .35s;
        }

        .register-btn:hover {
            background: #D4AF37;
            color: #fff;
            transform: translateY(-3px);
        }

        /*==================================
            OUR SERVICES
==================================*/

        .services {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .section-subtitle {
            display: inline-block;
            color: #C93C78;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-title {
            font-family: "Cormorant Garamond", serif;
            font-size: 52px;
            font-weight: 700;
            color: #491632;
        }

        .section-title span {
            color: #C93C78;
        }

        .section-description {
            max-width: 650px;
            color: #666;
            line-height: 1.8;
        }

        .service-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: .35s;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .12);
        }

        .service-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #491632;
            color: #D4AF37;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            transition: .35s;
        }

        .service-card:hover .service-icon {
            background: #C93C78;
            color: #fff;
        }

        .service-card h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #491632;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 0;
        }

        @media(max-width:991px) {

            .services {
                padding: 80px 0;
            }

            .section-title {
                font-size: 42px;
            }

        }

        @media(max-width:767px) {

            .section-title {
                font-size: 34px;
            }

            .service-card {
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
            border-radius: 20px;
            text-align: center;
            height: 100%;
            transition: .35s;
            border: 1px solid rgba(201, 60, 120, .12);
        }

        .choose-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
        }

        .choose-card i {
            font-size: 52px;
            color: #C93C78;
            margin-bottom: 20px;
            display: inline-block;
            transition: .35s;
        }

        .choose-card:hover i {
            color: #D4AF37;
            transform: scale(1.1);
        }

        .choose-card h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 28px;
            color: #491632;
            margin-bottom: 15px;
        }

        .choose-card p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 0;
        }

        @media(max-width:991px) {

            .why-choose {
                padding: 80px 0;
            }

        }

        @media(max-width:767px) {

            .choose-card {
                padding: 35px 25px;
            }

        }

        /*==================================
            SERVICE PROCESS
==================================*/

        .service-process {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .process-card {
            position: relative;
            background: #fff;
            padding: 45px 30px;
            border-radius: 20px;
            text-align: center;
            height: 100%;
            overflow: hidden;
            transition: .35s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
        }

        .process-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .12);
        }

        .process-number {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 50px;
            font-weight: 700;
            color: rgba(201, 60, 120, .08);
            font-family: "Cormorant Garamond", serif;
            line-height: 1;
        }

        .process-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #491632;
            color: #D4AF37;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 34px;
            transition: .35s;
        }

        .process-card:hover .process-icon {
            background: #C93C78;
            color: #fff;
            transform: rotate(8deg);
        }

        .process-card h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #491632;
            margin-bottom: 15px;
        }

        .process-card p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 0;
        }

        @media(max-width:991px) {

            .service-process {
                padding: 80px 0;
            }

        }

        @media(max-width:767px) {

            .process-card {
                padding: 40px 25px;
            }

            .process-number {
                font-size: 42px;
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
                        <a class="nav-link active" href="services.php">
                            Services
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
            SERVICES HERO
    ===================================-->

    <section class="services-hero">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8 text-center">

                    <span class="hero-badge">
                        OUR SERVICES
                    </span>

                    <h1>
                        Premium Beauty Experiences
                    </h1>

                    <p>
                        From luxury product launches to expert-led masterclasses, we create unforgettable beauty
                        experiences that connect brands with beauty enthusiasts.
                    </p>

                    <a href="login.php" class="btn hero-btn">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- Our Services -->
    <!--==================================
            OUR SERVICES
===================================-->

    <section class="services py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    WHAT WE OFFER
                </span>

                <h2 class="section-title mt-3">
                    Our Premium
                    <span>Services</span>
                </h2>

                <p class="section-description mx-auto">
                    Discover a curated range of experiences designed to inspire,
                    educate, and connect beauty lovers with the industry's leading
                    brands and professionals.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-stars"></i>
                        </div>

                        <h4>Luxury Product Launches</h4>

                        <p>
                            Experience exclusive beauty product unveilings from
                            premium national and international brands.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-palette2"></i>
                        </div>

                        <h4>Beauty Masterclasses</h4>

                        <p>
                            Learn advanced makeup, skincare, and styling techniques
                            from industry-leading professionals.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-camera-reels"></i>
                        </div>

                        <h4>Live Demonstrations</h4>

                        <p>
                            Watch real-time product showcases and expert beauty
                            transformations on stage.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <h4>Networking Events</h4>

                        <p>
                            Connect with beauty professionals, entrepreneurs,
                            influencers, and leading brands.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-shop-window"></i>
                        </div>

                        <h4>Brand Exhibitions</h4>

                        <p>
                            Explore innovative beauty products and interact directly
                            with exhibitors from across the industry.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-camera"></i>
                        </div>

                        <h4>Influencer Meet & Greet</h4>

                        <p>
                            Meet beauty creators, attend exclusive sessions, and
                            capture memorable moments with your favorites.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Why Choose Us -->
    <!--==================================
            WHY CHOOSE US
===================================-->

    <section class="why-choose py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    WHY CHOOSE US
                </span>

                <h2 class="section-title mt-3">
                    Experience the
                    <span>Luxe Difference</span>
                </h2>

                <p class="section-description mx-auto">
                    We bring together innovation, luxury, and expertise to create
                    an unforgettable beauty experience for every visitor.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <i class="bi bi-award"></i>

                        <h4>Premium Brands</h4>

                        <p>
                            Discover luxury beauty brands from India and around the world.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <i class="bi bi-person-video3"></i>

                        <h4>Industry Experts</h4>

                        <p>
                            Learn directly from renowned beauty professionals and artists.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <i class="bi bi-stars"></i>

                        <h4>Exclusive Launches</h4>

                        <p>
                            Be the first to explore the newest beauty products and trends.
                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="choose-card">

                        <i class="bi bi-heart"></i>

                        <h4>Luxury Experience</h4>

                        <p>
                            Enjoy a premium event filled with inspiration and elegance.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Service Process -->
    <!--==================================
            SERVICE PROCESS
===================================-->

    <section class="service-process py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    HOW IT WORKS
                </span>

                <h2 class="section-title mt-3">
                    Your Journey in
                    <span>3 Simple Steps</span>
                </h2>

                <p class="section-description mx-auto">
                    Getting started is quick and easy. Register, attend the event,
                    and enjoy an unforgettable beauty experience.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="process-card">

                        <div class="process-number">
                            01
                        </div>

                        <div class="process-icon">
                            <i class="bi bi-person-plus"></i>
                        </div>

                        <h4>Register</h4>

                        <p>
                            Secure your spot online by choosing your preferred
                            ticket and completing the registration form.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="process-card">

                        <div class="process-number">
                            02
                        </div>

                        <div class="process-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>

                        <h4>Attend the Expo</h4>

                        <p>
                            Explore luxury beauty brands, live demonstrations,
                            and interactive masterclasses throughout the event.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="process-card">

                        <div class="process-number">
                            03
                        </div>

                        <div class="process-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <h4>Connect & Grow</h4>

                        <p>
                            Build valuable connections with beauty experts,
                            influencers, exhibitors, and fellow enthusiasts.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Footer -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>