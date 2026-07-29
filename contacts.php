<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | Luxe Beauty Expo</title>

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

        .navbar {
            background: rgba(73, 22, 50, .85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 18px 0;
            transition: .35s ease;
            z-index: 999;
        }

        .navbar-brand {
            font-family: "Cormorant Garamond", serif;
            font-size: 34px;
            font-weight: 700;
            color: #D4AF37;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: #D4AF37;
        }

        .navbar-nav {
            gap: 10px;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-size: 15px;
            font-weight: 500;
            padding: 10px 18px !important;
            position: relative;
            transition: .3s;
        }

        .navbar-nav .nav-link:hover {
            color: #D4AF37;
        }

        .navbar-nav .nav-link.active {
            color: #D4AF37;
        }

        /* Underline Animation */

        .navbar-nav .nav-link::after {

            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 0;
            height: 2px;
            background: #D4AF37;
            transition: .35s;
            transform: translateX(-50%);

        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {

            width: 65%;

        }

        /* Register Button */

        .navbar .btn {

            background: #C93C78;
            border: none;
            color: #fff;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-family: "Poppins", sans-serif;
            transition: .35s;

        }

        .navbar .btn:hover {

            background: #D4AF37;
            color: #491632;
            transform: translateY(-3px);

        }

        /* Navbar Toggler */

        .navbar-toggler {

            border: none;
            box-shadow: none !important;

        }

        .navbar-toggler:focus {

            box-shadow: none;

        }

        .navbar-toggler-icon {

            filter: brightness(0) invert(1);

        }

        /* Mobile Menu */

        @media(max-width:991px) {

            .navbar {

                padding: 15px 0;

            }

            .navbar-collapse {

                background: #491632;
                margin-top: 20px;
                border-radius: 15px;
                padding: 20px;

            }

            .navbar-nav {

                gap: 0;

            }

            .navbar-nav .nav-link {

                padding: 12px 0 !important;

            }

            .navbar .btn {

                margin-top: 15px;
                width: 100%;

            }

        }

        /* Sticky Navbar on Scroll */

        .navbar.scrolled {

            background: #491632;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .15);

        }

        /*==================================
        CONTACT HERO
==================================*/

        .contact-hero {
            position: relative;
            min-height: 100vh;
            background: url("https://i.pinimg.com/control1/1200x/1d/68/c2/1d68c28eed615d142fed592ba14f52bd.jpg") center center/cover no-repeat;
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(73, 22, 50, .75),
                    rgba(73, 22, 50, .75));
        }

        .contact-hero .container {
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
            padding: 14px 34px;
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

            .contact-hero {
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
    CONTACT INFORMATION
==================================*/

        .contact-info-section {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .contact-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
            transition: .35s;
            height: 100%;
            border: 1px solid rgba(201, 60, 120, .08);
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: #491632;
            color: #D4AF37;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 25px;
            font-size: 32px;
            transition: .35s;
        }

        .contact-card:hover .contact-icon {
            background: #C93C78;
            transform: rotate(360deg);
        }

        .contact-card h4 {
            font-family: "Cormorant Garamond", serif;
            color: #491632;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .contact-card p {
            font-family: "Poppins", sans-serif;
            color: #666;
            line-height: 1.8;
            margin: 0;
        }

        @media(max-width:991px) {

            .contact-info-section {
                padding: 80px 0;
            }

        }

        @media(max-width:768px) {

            .contact-card {
                padding: 35px 25px;
            }

        }

        /*==================================
            CONTACT FORM
==================================*/

        .contact-form-section {
            padding: 100px 0;
            background: #ffffff;
        }

        .contact-form-card {
            background: #FFF8FB;
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .08);
        }

        .contact-form-card .form-control {
            height: 58px;
            border-radius: 12px;
            border: 1px solid #ddd;
            padding: 15px 20px;
            font-family: "Poppins", sans-serif;
            box-shadow: none;
        }

        .contact-form-card textarea.form-control {
            height: auto;
            resize: none;
        }

        .contact-form-card .form-control:focus {
            border-color: #C93C78;
            box-shadow: 0 0 0 .2rem rgba(201, 60, 120, .15);
        }

        .contact-form-card .btn {
            background: #C93C78;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            transition: .35s;
        }

        .contact-form-card .btn:hover {
            background: #491632;
            transform: translateY(-3px);
        }

        .contact-form-section img {
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .15);
        }

        @media(max-width:991px) {

            .contact-form-section {
                padding: 80px 0;
            }

            .contact-form-card {
                padding: 35px;
            }

        }

        @media(max-width:768px) {

            .contact-form-card {
                padding: 25px;
            }

        }

        /*==================================
            LOCATION
==================================*/

        .location-section {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .map-card {
            overflow: hidden;
            border-radius: 25px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .10);
            border: 6px solid #fff;
        }

        .map-card iframe {
            width: 100%;
            height: 100%;
            transition: .4s;
        }

        .map-card:hover iframe {
            transform: scale(1.02);
        }

        @media(max-width:991px) {

            .location-section {
                padding: 80px 0;
            }

        }

        /*==================================
            CALL TO ACTION
==================================*/

        .contact-cta {
            padding: 100px 0;
            background: #ffffff;
        }

        .cta-box {

            background: linear-gradient(135deg, #491632, #C93C78);
            border-radius: 30px;
            padding: 70px 60px;
            color: #fff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 45px rgba(73, 22, 50, .25);

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
            background: rgba(255, 255, 255, .05);
            border-radius: 50%;
            bottom: -100px;
            left: -80px;

        }

        .contact-cta .section-subtitle {
            color: #D4AF37;
        }

        .contact-cta .section-title {
            color: #fff;
        }

        .contact-cta .section-title span {
            color: #D4AF37;
        }

        .contact-cta .section-description {
            color: #f5f5f5;
            max-width: 650px;
        }

        .cta-btn {

            background: #D4AF37;
            color: #491632;
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-family: "Poppins", sans-serif;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: .35s;

        }

        .cta-btn:hover {

            background: #fff;
            color: #491632;
            transform: translateY(-5px);

        }

        @media(max-width:991px) {

            .contact-cta {
                padding: 80px 0;
            }

            .cta-box {
                padding: 50px 35px;
                text-align: center;
            }

        }

        @media(max-width:768px) {

            .cta-box {
                padding: 40px 25px;
            }

            .cta-btn {
                width: 100%;
                justify-content: center;
            }

        }

        /*==================================
            FOOTER
==================================*/

        .footer {
            background: #491632;
            padding: 90px 0 30px;
            color: #fff;
        }

        .footer-logo {
            text-decoration: none;
            font-family: "Cormorant Garamond", serif;
            font-size: 38px;
            font-weight: 700;
            color: #D4AF37;
        }

        .footer-logo:hover {
            color: #D4AF37;
        }

        .footer-text {
            color: #ddd;
            line-height: 1.9;
            font-size: 15px;
        }

        .footer h4 {
            font-family: "Cormorant Garamond", serif;
            color: #D4AF37;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 15px;
        }

        .footer ul li a {
            color: #ddd;
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
            color: #ddd;
        }

        .footer-contact i {
            color: #D4AF37;
            font-size: 18px;
            margin-top: 3px;
        }

        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .footer-social a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .1);
            display: flex;
            justify-content: center;
            align-items: center;
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
            margin: 60px 0 30px;
            border-color: rgba(255, 255, 255, .15);
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-bottom p {
            margin: 0;
            color: #ccc;
        }

        .footer-bottom a {
            color: #ccc;
            text-decoration: none;
            transition: .3s;
        }

        .footer-bottom a:hover {
            color: #D4AF37;
        }

        .footer-bottom span {
            margin: 0 10px;
            color: #777;
        }

        @media(max-width:991px) {

            .footer {
                padding: 70px 0 25px;
            }

        }

        @media(max-width:768px) {

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

        }
    </style>
</head>

<body>

    <!--==================================
                NAVBAR
    ==================================-->

    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container">

            <a class="navbar-brand" href="index.php">
                Luxe Beauty Expo
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
                        <a class="nav-link active" href="contacts.php">
                            Contact
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">

                        <a href="login.php" class="btn">
                            Register Now
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!--==================================
            CONTACT HERO
    ==================================-->

    <section class="contact-hero d-flex align-items-center">

        <div class="hero-overlay"></div>

        <div class="container position-relative">

            <div class="row justify-content-center">

                <div class="col-lg-8 text-center">

                    <span class="hero-badge">
                        CONTACT US
                    </span>

                    <h1 class="hero-title mt-4">
                        We'd Love to
                        <span>Hear From You</span>
                    </h1>

                    <p class="hero-text mt-4">
                        Whether you're a beauty enthusiast, exhibitor, sponsor,
                        or media partner, our team is here to assist you.
                        Reach out to us and let's make your Luxe Beauty Expo
                        experience truly unforgettable.
                    </p>

                    <div class="hero-buttons mt-5">

                        <a href="#contact-form" class="btn btn-primary me-lg-3 mb-3 mb-lg-0">
                            Send Message
                        </a>

                        <a href="#contact-info" class="btn btn-outline-light">
                            Contact Details
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==================================
        CONTACT INFORMATION
    ==================================-->
    <!--==================================
        CONTACT INFORMATION
===================================-->

    <section class="contact-info-section py-5" id="contact-info">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    GET IN TOUCH
                </span>

                <h2 class="section-title mt-3">
                    Contact <span>Information</span>
                </h2>

                <p class="section-description mx-auto">
                    Have questions or need assistance? Our team is always ready to
                    help you with registrations, partnerships, sponsorships, and
                    event-related inquiries.
                </p>

            </div>

            <div class="row g-4">

                <!-- Address -->

                <div class="col-lg-3 col-md-6">

                    <div class="contact-card">

                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>

                        <h4>Visit Us</h4>

                        <p>
                            Biswa Bangla Convention Centre<br>
                            New Town, Kolkata<br>
                            West Bengal, India
                        </p>

                    </div>

                </div>

                <!-- Phone -->

                <div class="col-lg-3 col-md-6">

                    <div class="contact-card">

                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>

                        <h4>Call Us</h4>

                        <p>
                            +91 98765 43210<br>
                            +91 91234 56789
                        </p>

                    </div>

                </div>

                <!-- Email -->

                <div class="col-lg-3 col-md-6">

                    <div class="contact-card">

                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>

                        <h4>Email Us</h4>

                        <p>
                            info@luxebeautyexpo.com<br>
                            support@luxebeautyexpo.com
                        </p>

                    </div>

                </div>

                <!-- Working Hours -->

                <div class="col-lg-3 col-md-6">

                    <div class="contact-card">

                        <div class="contact-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>

                        <h4>Working Hours</h4>

                        <p>
                            Monday - Saturday<br>
                            10:00 AM - 6:00 PM
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
            CONTACT FORM
===================================-->

    <section class="contact-form-section py-5" id="contact-form">

        <div class="container">

            <div class="row align-items-center g-5">

                <!-- Left Side -->

                <div class="col-lg-5">

                    <span class="section-subtitle">
                        SEND A MESSAGE
                    </span>

                    <h2 class="section-title mt-3">
                        Let's Start a
                        <span>Conversation</span>
                    </h2>

                    <p class="section-description mt-4">
                        Whether you're interested in exhibiting, sponsoring, attending,
                        or collaborating with Luxe Beauty Expo, we'd love to hear from
                        you. Fill out the form and our team will get back to you shortly.
                    </p>

                    <img src="beauty12.jpg" class="img-fluid rounded-4 mt-4" alt="Beauty Consultation">

                </div>

                <!-- Right Side -->

                <div class="col-lg-7">

                    <div class="contact-form-card">

                        <form>

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <input type="text" class="form-control" placeholder="Full Name">

                                </div>

                                <div class="col-md-6 mb-4">

                                    <input type="email" class="form-control" placeholder="Email Address">

                                </div>

                                <div class="col-md-6 mb-4">

                                    <input type="tel" class="form-control" placeholder="Phone Number">

                                </div>

                                <div class="col-md-6 mb-4">

                                    <input type="text" class="form-control" placeholder="Subject">

                                </div>

                                <div class="col-12 mb-4">

                                    <textarea class="form-control" rows="6"
                                        placeholder="Write Your Message..."></textarea>

                                </div>

                                <div class="col-12">

                                    <button type="submit" class="btn btn-primary">

                                        Send Message
                                        <i class="bi bi-arrow-right ms-2"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
            GOOGLE MAP
    ==================================-->
    <!--==================================
            LOCATION
===================================-->

    <section class="location-section py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    FIND US
                </span>

                <h2 class="section-title mt-3">
                    Visit Our <span>Venue</span>
                </h2>

                <p class="section-description mx-auto">
                    Luxe Beauty Expo will be hosted at one of Kolkata's most
                    prestigious convention venues. We look forward to welcoming
                    you for an unforgettable beauty experience.
                </p>

            </div>

            <div class="map-card">

                <div class="ratio ratio-21x9">

                    <iframe
                        src="https://www.google.com/maps?q=Biswa%20Bangla%20Convention%20Centre%20Kolkata&output=embed"
                        style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>

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

    <section class="contact-cta">

        <div class="container">

            <div class="cta-box">

                <div class="row align-items-center">

                    <div class="col-lg-8">

                        <span class="section-subtitle">
                            JOIN THE EXPERIENCE
                        </span>

                        <h2 class="section-title mt-3">
                            Ready to Experience
                            <span>Luxury Beauty?</span>
                        </h2>

                        <p class="section-description mt-4">
                            Become part of India's most prestigious beauty exhibition.
                            Discover luxury brands, connect with industry experts,
                            attend exclusive masterclasses, and experience the future
                            of beauty—all in one extraordinary event.
                        </p>

                    </div>

                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                        <a href="login.php" class="btn cta-btn">
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
                        bringing together renowned beauty brands, industry leaders,
                        and beauty enthusiasts to celebrate innovation, elegance,
                        and excellence in the world of beauty and wellness.
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

                    </ul>

                </div>

                <!-- Event -->

                <div class="col-lg-3 col-md-6">

                    <h4>Event</h4>

                    <ul>

                        <li><a href="#">Beauty Brands</a></li>

                        <li><a href="#">Masterclasses</a></li>

                        <li><a href="#">Live Demonstrations</a></li>

                        <li><a href="login.php">Register Now</a></li>

                    </ul>

                </div>

                <!-- Contact -->

                <div class="col-lg-3">

                    <h4>Contact Us</h4>

                    <ul class="footer-contact">

                        <li>

                            <i class="bi bi-geo-alt-fill"></i>

                            <span>
                                Biswa Bangla Convention Centre,
                                New Town, Kolkata
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