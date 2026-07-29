<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery | Luxe Beauty Expo</title>

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
            background: rgba(73, 22, 50, .88);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 18px 0;
            transition: .35s ease;
            z-index: 999;
        }

        .navbar.scrolled {
            background: #491632;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .15);
        }

        /* Logo */

        .navbar-brand {
            font-family: "Cormorant Garamond", serif;
            font-size: 38px;
            font-weight: 700;
            color: #D4AF37;
            text-decoration: none;
            transition: .3s;
        }

        .navbar-brand:hover {
            color: #fff;
        }

        /* Navigation */

        .navbar-nav {
            gap: 8px;
        }

        .navbar-nav .nav-link {
            position: relative;
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-size: 15px;
            font-weight: 500;
            padding: 10px 18px !important;
            transition: .3s;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #D4AF37;
        }

        .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 2px;
            width: 0;
            height: 2px;
            background: #D4AF37;
            transform: translateX(-50%);
            transition: .35s;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 65%;
        }

        /* Register Button */

        .navbar .btn {
            background: #C93C78;
            color: #fff;
            padding: 12px 28px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            transition: .35s;
        }

        .navbar .btn:hover {
            background: #D4AF37;
            color: #491632;
            transform: translateY(-3px);
        }

        /* Toggler */

        .navbar-toggler {
            border: none;
            box-shadow: none !important;
        }

        .navbar-toggler:focus {
            box-shadow: none !important;
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
                margin-top: 18px;
                background: #491632;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 15px 40px rgba(0, 0, 0, .2);
            }

            .navbar-nav {
                gap: 0;
                align-items: flex-start !important;
            }

            .navbar-nav .nav-link {
                width: 100%;
                padding: 12px 0 !important;
            }

            .navbar-nav .nav-link::after {
                display: none;
            }

            .navbar .btn {
                margin-top: 15px;
                width: 100%;
            }

        }

        @media(max-width:576px) {

            .navbar-brand {
                font-size: 30px;
            }

        }

        /*==================================
            GALLERY HERO
==================================*/

        .gallery-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url("https://i.pinimg.com/736x/c2/f0/e4/c2f0e421c6c1a3b5ef6c0a4ffa537b55.jpg") center center/cover no-repeat;
            overflow: hidden;
        }

        .gallery-hero .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(73, 22, 50, .78),
                    rgba(73, 22, 50, .78));
        }

        .gallery-hero .container {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            padding: 10px 24px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, .25);
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(12px);
            color: #D4AF37;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .hero-title {
            font-family: "Cormorant Garamond", serif;
            font-size: 72px;
            font-weight: 700;
            line-height: 1.15;
            color: #fff;
        }

        .hero-title span {
            color: #D4AF37;
        }

        .hero-text {
            max-width: 760px;
            margin: auto;
            color: #f5f5f5;
            font-size: 18px;
            line-height: 1.9;
        }

        .hero-buttons .btn {
            padding: 15px 38px;
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

            .gallery-hero {
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
        FEATURED COLLECTION
==================================*/

        .featured-collection {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .section-description {
            max-width: 700px;
            color: #666;
            line-height: 1.9;
        }

        .featured-large,
        .featured-small {
            position: relative;
            overflow: hidden;
            border-radius: 25px;
            cursor: pointer;
        }

        .featured-large {
            height: 100%;
            min-height: 650px;
        }

        .featured-small {
            height: 310px;
        }

        .featured-large img,
        .featured-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .6s;
        }

        .featured-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 35px;
            background: linear-gradient(transparent,
                    rgba(73, 22, 50, .92));
        }

        .featured-overlay span {
            color: #D4AF37;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .featured-overlay h3 {
            font-family: "Cormorant Garamond", serif;
            color: #fff;
            font-size: 42px;
            margin: 0;
        }

        .featured-overlay h5 {
            font-family: "Cormorant Garamond", serif;
            color: #fff;
            font-size: 28px;
            margin: 0;
        }

        .featured-large:hover img,
        .featured-small:hover img {
            transform: scale(1.1);
        }

        .featured-large::before,
        .featured-small::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(201, 60, 120, .15);
            opacity: 0;
            transition: .4s;
            z-index: 1;
        }

        .featured-large:hover::before,
        .featured-small:hover::before {
            opacity: 1;
        }

        .featured-overlay {
            z-index: 2;
        }

        @media(max-width:991px) {

            .featured-collection {
                padding: 80px 0;
            }

            .featured-large {
                min-height: 500px;
            }

        }

        @media(max-width:768px) {

            .featured-large {
                min-height: 420px;
            }

            .featured-small {
                height: 260px;
            }

            .featured-overlay {
                padding: 25px;
            }

            .featured-overlay h3 {
                font-size: 34px;
            }

            .featured-overlay h5 {
                font-size: 24px;
            }

        }

        /*==================================
        EVENT MOMENTS GALLERY
==================================*/

        .event-gallery {
            padding: 100px 0;
            background: #ffffff;
        }

        .gallery-card {
            position: relative;
            overflow: hidden;
            border-radius: 22px;
            height: 320px;
            cursor: pointer;
        }

        .gallery-card.tall {
            height: 664px;
        }

        .gallery-card.wide {
            height: 320px;
        }

        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .6s ease;
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 25px;
            background: linear-gradient(transparent,
                    rgba(73, 22, 50, .92));
            opacity: 0;
            transition: .4s;
        }

        .gallery-card:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-card:hover img {
            transform: scale(1.12);
        }

        .gallery-overlay h5 {
            color: #fff;
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .gallery-overlay a {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #D4AF37;
            color: #491632;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            transition: .3s;
        }

        .gallery-overlay a:hover {
            background: #fff;
            transform: rotate(90deg);
        }

        .gallery-overlay i {
            font-size: 20px;
        }

        .gallery-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(201, 60, 120, .12);
            opacity: 0;
            transition: .4s;
            z-index: 1;
        }

        .gallery-card:hover::before {
            opacity: 1;
        }

        .gallery-overlay {
            z-index: 2;
        }

        @media(max-width:991px) {

            .event-gallery {
                padding: 80px 0;
            }

            .gallery-card,
            .gallery-card.tall,
            .gallery-card.wide {
                height: 320px;
            }

        }

        @media(max-width:768px) {

            .gallery-card,
            .gallery-card.tall,
            .gallery-card.wide {
                height: 260px;
            }

            .gallery-overlay h5 {
                font-size: 24px;
            }

        }

        /*==================================
        VIDEO HIGHLIGHTS
==================================*/

        .video-highlights {
            padding: 100px 0;
            background: #FFF8FB;
        }

        .video-card {
            position: relative;
            overflow: hidden;
            border-radius: 25px;
            background: #fff;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
            transition: .4s;
        }

        .video-card:hover {
            transform: translateY(-10px);
        }

        .video-card img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: .5s;
        }

        .video-card:hover img {
            transform: scale(1.08);
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 280px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(73, 22, 50, .45);
            opacity: 0;
            transition: .35s;
        }

        .video-card:hover .video-overlay {
            opacity: 1;
        }

        .play-btn {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #D4AF37;
            color: #491632;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 34px;
            transition: .35s;
        }

        .play-btn:hover {
            background: #fff;
            color: #491632;
            transform: scale(1.12);
        }

        .video-content {
            padding: 30px;
        }

        .video-content span {
            color: #C93C78;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .video-content h4 {
            margin-top: 10px;
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #491632;
            line-height: 1.3;
        }

        @media(max-width:991px) {

            .video-highlights {
                padding: 80px 0;
            }

        }

        @media(max-width:768px) {

            .video-card img,
            .video-overlay {
                height: 240px;
            }

            .play-btn {
                width: 65px;
                height: 65px;
                font-size: 28px;
            }

            .video-content {
                padding: 22px;
            }

            .video-content h4 {
                font-size: 26px;
            }

        }

        /*==================================
        INSTAGRAM SHOWCASE
==================================*/

        .instagram-showcase {
            padding: 100px 0;
            background: #ffffff;
        }

        .instagram-card {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            cursor: pointer;
        }

        .instagram-card img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            transition: .5s;
        }

        .instagram-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(73, 22, 50, .75);
            opacity: 0;
            transition: .35s;
        }

        .instagram-card:hover .instagram-overlay {
            opacity: 1;
        }

        .instagram-card:hover img {
            transform: scale(1.12);
        }

        .instagram-overlay a {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: #D4AF37;
            color: #491632;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 28px;
            transition: .3s;
        }

        .instagram-overlay a:hover {
            background: #fff;
            transform: rotate(15deg) scale(1.1);
        }

        .instagram-btn {
            background: #C93C78;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            transition: .35s;
        }

        .instagram-btn:hover {
            background: #491632;
            color: #fff;
            transform: translateY(-4px);
        }

        @media(max-width:991px) {

            .instagram-showcase {
                padding: 80px 0;
            }

        }

        @media(max-width:768px) {

            .instagram-overlay a {
                width: 55px;
                height: 55px;
                font-size: 24px;
            }

            .instagram-btn {
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
        }

        .footer h4 {
            font-family: "Cormorant Garamond", serif;
            font-size: 30px;
            color: #D4AF37;
            margin-bottom: 25px;
        }

        .footer-links,
        .footer-contact {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links li a {
            color: rgba(255, 255, 255, .8);
            text-decoration: none;
            transition: .3s;
        }

        .footer-links li a:hover {
            color: #D4AF37;
            padding-left: 8px;
        }

        .footer-contact li {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, .8);
            line-height: 1.8;
        }

        .footer-contact i {
            color: #D4AF37;
            font-size: 20px;
            margin-top: 3px;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-social a {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .1);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
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
            color: rgba(255, 255, 255, .75);
        }

        .footer-policy {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-policy span {
            color: rgba(255, 255, 255, .4);
        }

        .footer-policy a {
            color: rgba(255, 255, 255, .75);
            text-decoration: none;
            transition: .3s;
        }

        .footer-policy a:hover {
            color: #D4AF37;
        }

        @media(max-width:991px) {

            .footer {
                padding: 70px 0 25px;
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
            }

            .footer-policy {
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

                        <a class="nav-link active" href="gallery.php">
                            Gallery
                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="contacts.php">
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
            GALLERY HERO
    ==================================-->

    <!--==================================
            GALLERY HERO
===================================-->

    <section class="gallery-hero d-flex align-items-center">

        <div class="hero-overlay"></div>

        <div class="container position-relative">

            <div class="row justify-content-center">

                <div class="col-lg-9 text-center">

                    <span class="hero-badge">
                        OUR GALLERY
                    </span>

                    <h1 class="hero-title mt-4">
                        Moments of
                        <span>Beauty & Elegance</span>
                    </h1>

                    <p class="hero-text mt-4">
                        Step into the world of Luxe Beauty Expo through our curated
                        gallery featuring exclusive product launches, inspiring
                        masterclasses, luxury brand showcases, live demonstrations,
                        and unforgettable moments from our spectacular event.
                    </p>

                    <div class="hero-buttons mt-5">

                        <a href="#featured-collection" class="btn btn-primary me-lg-3 mb-3 mb-lg-0">

                            Explore Gallery

                        </a>

                        <a href="#videos" class="btn btn-outline-light">

                            Watch Highlights

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==================================
        FEATURED COLLECTION
    ==================================-->

    <!--==================================
        FEATURED COLLECTION
===================================-->

    <section class="featured-collection py-5" id="featured-collection">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    FEATURED COLLECTION
                </span>

                <h2 class="section-title mt-3">
                    Capturing Every
                    <span>Elegant Moment</span>
                </h2>

                <p class="section-description mx-auto">
                    From glamorous product launches to inspiring masterclasses, explore
                    the unforgettable experiences that define Luxe Beauty Expo.
                </p>

            </div>

            <div class="row g-4 align-items-stretch">

                <!-- Large Featured Image -->

                <div class="col-lg-6">

                    <div class="featured-large">

                        <img src="https://i.pinimg.com/736x/15/40/d6/1540d6576e606beda3aa78a66e47a773.jpg" alt="Featured Image" class="img-fluid">

                        <div class="featured-overlay">

                            <span>Beauty Showcase</span>

                            <h3>
                                Luxury Brands &
                                Exclusive Launches
                            </h3>

                        </div>

                    </div>

                </div>

                <!-- Small Images -->

                <div class="col-lg-6">

                    <div class="row g-4">

                        <div class="col-md-6">

                            <div class="featured-small">

                                <img src="https://i.pinimg.com/control1/1200x/81/70/a2/8170a233c5964cfd01f02ebeab0e4f08.jpg" alt="Gallery Image" class="img-fluid">

                                <div class="featured-overlay">

                                    <h5>Masterclasses</h5>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="featured-small">

                                <img src="https://i.pinimg.com/control1/1200x/a5/e1/fe/a5e1fe6011fa191146818ecf1e40fe62.jpg" alt="Gallery Image" class="img-fluid">

                                <div class="featured-overlay">

                                    <h5>Makeup Artists</h5>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="featured-small">

                                <img src="https://i.pinimg.com/control1/1200x/33/41/7f/33417fa77d45271a6439822bd5446b83.jpg" alt="Gallery Image" class="img-fluid">

                                <div class="featured-overlay">

                                    <h5>Live Demonstrations</h5>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="featured-small">

                                <img src="https://i.pinimg.com/control1/1200x/a9/b5/be/a9b5bed4d72854346cb7a1ad2a213673.jpg" alt="Gallery Image" class="img-fluid">

                                <div class="featured-overlay">

                                    <h5>Luxury Products</h5>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==================================
        EVENT MOMENTS GALLERY
    ==================================-->
    <!--==================================
        EVENT MOMENTS GALLERY
===================================-->

    <section class="event-gallery py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    EVENT MOMENTS
                </span>

                <h2 class="section-title mt-3">
                    Relive the
                    <span>Beautiful Memories</span>
                </h2>

                <p class="section-description mx-auto">
                    Every picture tells a story of creativity, elegance, and unforgettable
                    experiences from Luxe Beauty Expo.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/1200x/24/4f/59/244f5937699abb1b7b1f78d16c8f6ac8.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Luxury Collection</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-card tall">

                        <img src="https://i.pinimg.com/736x/15/f1/9e/15f19ebdc980f6a167ec437bc7a630fd.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Beauty Workshop</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/1200x/b8/2b/53/b82b53df9194a57211914f5d2ee6f531.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Exclusive Launch</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/736x/cd/87/2b/cd872b192f7e39749fe84e4b4715e891.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Networking</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/control1/1200x/54/4e/66/544e6638ac9b719ea38ed1d814bfe713.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Beauty Experts</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/736x/e7/5d/ef/e75def7f44b300c575227be3fd41da96.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Makeup Studio</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/736x/07/d4/8e/07d48e0e35ea12ae176ce0ae86b11b7e.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Skincare Zone</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="gallery-card wide">

                        <img src="https://i.pinimg.com/736x/e5/8f/6d/e58f6dc2a8992999fecdfaf860764f2a.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Premium Experience</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/736x/2d/4c/ed/2d4ced24ac276d29e82ecd9b4473a11c.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Fragrance Lounge</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="gallery-card">

                        <img src="https://i.pinimg.com/736x/ff/c2/2d/ffc22d49596a8f13941a5d372afb949d.jpg" class="img-fluid" alt="Gallery Image">

                        <div class="gallery-overlay">

                            <h5>Beauty Trends</h5>

                            <a href="#">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
        VIDEO HIGHLIGHTS
    ==================================-->
    <!--==================================
        VIDEO HIGHLIGHTS
===================================-->

    <section class="video-highlights py-5" id="videos">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    VIDEO HIGHLIGHTS
                </span>

                <h2 class="section-title mt-3">
                    Watch the
                    <span>Magic Unfold</span>
                </h2>

                <p class="section-description mx-auto">
                    Relive the excitement through captivating videos featuring
                    product launches, beauty masterclasses, runway showcases,
                    celebrity appearances, and memorable event moments.
                </p>

            </div>

            <div class="row g-4">

                <!-- Video 1 -->

                <div class="col-lg-4 col-md-6">

                    <div class="video-card">

                        <img src="https://i.pinimg.com/736x/16/7e/49/167e49c97473062df7b3c1d28b291843.jpg" alt="Video Thumbnail" class="img-fluid">

                        <div class="video-overlay">

                            <a href="#" class="play-btn">

                                <i class="bi bi-play-fill"></i>

                            </a>

                        </div>

                        <div class="video-content">

                            <span>Opening Ceremony</span>

                            <h4>
                                Grand Opening Highlights
                            </h4>

                        </div>

                    </div>

                </div>

                <!-- Video 2 -->

                <div class="col-lg-4 col-md-6">

                    <div class="video-card">

                        <img src="https://i.pinimg.com/736x/d6/57/71/d6577116f9be99db9e16a512f673115d.jpg" alt="Video Thumbnail" class="img-fluid">

                        <div class="video-overlay">

                            <a href="#" class="play-btn">

                                <i class="bi bi-play-fill"></i>

                            </a>

                        </div>

                        <div class="video-content">

                            <span>Masterclass</span>

                            <h4>
                                Celebrity Makeup Session
                            </h4>

                        </div>

                    </div>

                </div>

                <!-- Video 3 -->

                <div class="col-lg-4 col-md-6">

                    <div class="video-card">

                        <img src="https://i.pinimg.com/736x/95/ae/39/95ae393fd4e2a746093b76ba8549bac7.jpg" alt="Video Thumbnail" class="img-fluid">

                        <div class="video-overlay">

                            <a href="#" class="play-btn">

                                <i class="bi bi-play-fill"></i>

                            </a>

                        </div>

                        <div class="video-content">

                            <span>Product Launch</span>

                            <h4>
                                Luxury Beauty Showcase
                            </h4>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!--==================================
        INSTAGRAM SHOWCASE
    ==================================-->

    <!--==================================
        INSTAGRAM SHOWCASE
===================================-->

    <section class="instagram-showcase py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    FOLLOW OUR JOURNEY
                </span>

                <h2 class="section-title mt-3">
                    Follow Us On
                    <span>Instagram</span>
                </h2>

                <p class="section-description mx-auto">
                    Stay inspired with the latest beauty trends, behind-the-scenes
                    moments, exclusive product launches, and highlights from
                    Luxe Beauty Expo.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-lg-2 col-md-4 col-6">

                    <div class="instagram-card">

                        <img src="https://i.pinimg.com/control1/1200x/a5/02/85/a50285e9a637bf0ce3705dc56992c044.jpg" alt="Instagram Image" class="img-fluid">

                        <div class="instagram-overlay">

                            <a href="#">

                                <i class="bi bi-instagram"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-6">

                    <div class="instagram-card">

                        <img src="https://i.pinimg.com/736x/2a/48/d4/2a48d467c179ff738e9cec1bd705280c.jpg" alt="Instagram Image" class="img-fluid">

                        <div class="instagram-overlay">

                            <a href="#">

                                <i class="bi bi-instagram"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-6">

                    <div class="instagram-card">

                        <img src="https://i.pinimg.com/736x/96/e7/04/96e704d23b290eb095cea3ea20bfcef8.jpg" alt="Instagram Image" class="img-fluid">

                        <div class="instagram-overlay">

                            <a href="#">

                                <i class="bi bi-instagram"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-6">

                    <div class="instagram-card">

                        <img src="https://i.pinimg.com/control1/1200x/50/ca/12/50ca123525394fe1e2c06fb16b94ba05.jpg" alt="Instagram Image" class="img-fluid">

                        <div class="instagram-overlay">

                            <a href="#">

                                <i class="bi bi-instagram"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-6">

                    <div class="instagram-card">

                        <img src="https://i.pinimg.com/control1/1200x/1a/05/bf/1a05bfc9ed3fb0c23f7aba58007d59f8.jpg" alt="Instagram Image" class="img-fluid">

                        <div class="instagram-overlay">

                            <a href="#">

                                <i class="bi bi-instagram"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-6">

                    <div class="instagram-card">

                        <img src="https://i.pinimg.com/736x/49/25/ae/4925aeb76e537abf45bd99521940ab4c.jpg" alt="Instagram Image" class="img-fluid">

                        <div class="instagram-overlay">

                            <a href="#">

                                <i class="bi bi-instagram"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="text-center mt-5">

                <a href="#" class="btn instagram-btn">

                    <i class="bi bi-instagram me-2"></i>

                    @LuxeBeautyExpo

                </a>

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

                <!-- About -->

                <div class="col-lg-4">

                    <a href="index.php" class="footer-logo">
                        Luxe Beauty Expo
                    </a>

                    <p class="footer-text mt-4">
                        Luxe Beauty Expo is India's premier beauty exhibition,
                        bringing together world-renowned brands, beauty experts,
                        influencers, and enthusiasts to celebrate innovation,
                        luxury, and elegance in the beauty industry.
                    </p>

                    <div class="footer-social mt-4">

                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-twitter-x"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>

                    </div>

                </div>

                <!-- Quick Links -->

                <div class="col-lg-2 col-md-6">

                    <h4>Quick Links</h4>

                    <ul class="footer-links">

                        <li><a href="index.php">Home</a></li>

                        <li><a href="about.php">About</a></li>

                        <li><a href="gallery.php">Gallery</a></li>

                        <li><a href="login.php">Register</a></li>

                        <li><a href="contacts.php">Contact</a></li>

                    </ul>

                </div>

                <!-- Event -->

                <div class="col-lg-3 col-md-6">

                    <h4>Event Highlights</h4>

                    <ul class="footer-links">

                        <li><a href="#">Beauty Brands</a></li>

                        <li><a href="#">Masterclasses</a></li>

                        <li><a href="#">Live Demonstrations</a></li>

                        <li><a href="#">Networking</a></li>

                        <li><a href="#">Product Launches</a></li>

                    </ul>

                </div>

                <!-- Contact -->

                <div class="col-lg-3">

                    <h4>Contact Info</h4>

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

                <div class="footer-policy">

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