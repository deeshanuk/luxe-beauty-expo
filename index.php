<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Luxe Beauty Expo</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <style>
        /*==============================
        HERO SECTION
===============================*/

.hero {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(rgba(34, 15, 25, 0.55),
            rgba(34, 15, 25, 0.55)),
        url("hero1.png") center center/cover no-repeat;
    overflow: hidden;
}

/*==============================
        NAVBAR
===============================*/
.dropdown-menu{
    border: none;
    border-radius: 12px;
    padding: 8px 0;
}

.dropdown-item{
    padding: 10px 18px;
    font-weight: 500;
}

.dropdown-item:hover{
    background: #FFF2F7;
    color: #C93C78;
}

.dropdown-toggle::after{
    margin-left: 8px;
}
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

/*==============================
        HERO CONTENT
===============================*/

.hero-content {
    position: relative;
    z-index: 5;
}

.hero-content .row {
    min-height: 100vh;
}

.hero-subtitle {
    display: inline-block;
    color: #FFD8EA;
    background: rgba(255,255,255,.12);
    padding: 8px 20px;
    border-radius: 50px;
    font-family: "Poppins", sans-serif;
    margin-bottom: 25px;
    letter-spacing: 1px;
}

.hero-content h1 {
    font-family: "Cormorant Garamond", serif;
    font-size: 78px;
    font-weight: 700;
    line-height: 1.1;
    color: #fff;
}

.hero-content h1 span {
    color: #D4AF37;
}

.hero-content p {
    color: #f2f2f2;
    font-size: 18px;
    line-height: 1.9;
    max-width: 600px;
    margin: 30px 0;
}

/*==============================
        BUTTONS
===============================*/

.hero-buttons {
    display: flex;
    gap: 18px;
    flex-wrap: wrap;
}

.hero-btn {
    background: #C93C78;
    border: none;
    padding: 14px 34px;
    border-radius: 50px;
    font-weight: 600;
    transition: .35s;
}

.hero-btn:hover {
    background: #D4AF37;
    transform: translateY(-4px);
}

.hero-btn-outline {
    border: 2px solid #fff;
    color: #fff;
    padding: 14px 34px;
    border-radius: 50px;
    transition: .35s;
}

.hero-btn-outline:hover {
    background: #fff;
    color: #491632;
}

/*==============================
        SOCIAL ICONS
===============================*/

.hero-social {
    position: absolute;
    left: 35px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 5;

    display: flex;
    flex-direction: column;
    gap: 18px;
}

.hero-social a {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: rgba(255,255,255,.15);

    display: flex;
    justify-content: center;
    align-items: center;

    color: #fff;
    text-decoration: none;
    transition: .35s;
}

.hero-social a:hover {
    background: #D4AF37;
    transform: translateX(6px);
}

/*==============================
        SCROLL INDICATOR
===============================*/

.scroll-down {
    position: absolute;
    bottom: 35px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: #fff;
    z-index: 5;

    animation: bounce 2s infinite;
}

.scroll-down span {
    display: block;
    font-size: 14px;
    letter-spacing: 2px;
    margin-bottom: 8px;
}

.scroll-down i {
    font-size: 24px;
}

/*==============================
        ANIMATION
===============================*/

@keyframes bounce {

    0%,
    100% {
        transform: translate(-50%, 0);
    }

    50% {
        transform: translate(-50%, 10px);
    }

}

/*==============================
        RESPONSIVE
===============================*/

@media (max-width:991px) {

    .custom-navbar {
        width: 96%;
    }

    .hero-content h1 {
        font-size: 56px;
    }

    .hero-social {
        display: none;
    }

    .hero-content {
        text-align: center;
    }

    .hero-content p {
        margin: 25px auto;
    }

    .hero-buttons {
        justify-content: center;
    }

}

@media (max-width:768px) {

    .hero-content h1 {
        font-size: 42px;
    }

    .hero-content p {
        font-size: 16px;
    }

    .hero-subtitle {
        font-size: 14px;
    }

    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }

    .hero-btn,
    .hero-btn-outline {
        width: 220px;
    }

}

/*==================================
        ABOUT SECTION
==================================*/

.about-section {
    padding: 100px 0;
    background: #FFF8FB;
    overflow: hidden;
}

/*==============================
        IMAGE
===============================*/

.about-image {
    position: relative;
}

.about-image img {
    width: 100%;
    border-radius: 20px;
    object-fit: cover;
    transition: 0.5s ease;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
}

.about-image img:hover {
    transform: scale(1.03);
}

/* Decorative Shape */

.about-image::before {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    background: rgba(201, 60, 120, 0.12);
    border-radius: 50%;
    top: -30px;
    left: -30px;
    z-index: -1;
}

.about-image::after {
    content: "";
    position: absolute;
    width: 140px;
    height: 140px;
    background: rgba(212, 175, 55, 0.15);
    border-radius: 50%;
    bottom: -25px;
    right: -20px;
    z-index: -1;
}

/*==============================
        SUBTITLE
===============================*/

.section-subtitle {
    display: inline-block;
    padding: 8px 20px;
    background: rgba(201, 60, 120, 0.12);
    color: #C93C78;
    font-size: 14px;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
    letter-spacing: 2px;
    border-radius: 50px;
}

/*==============================
        TITLE
===============================*/

.section-title {
    font-family: "Cormorant Garamond", serif;
    font-size: 52px;
    font-weight: 700;
    color: #491632;
    line-height: 1.2;
}

/*==============================
        PARAGRAPH
===============================*/

.about-section p {
    color: #666;
    font-size: 17px;
    line-height: 1.9;
    font-family: "Poppins", sans-serif;
}

/*==============================
        FEATURES
===============================*/

.feature-item {
    display: flex;
    align-items: center;
    gap: 15px;

    padding: 16px 20px;

    background: #fff;

    border-radius: 12px;

    box-shadow: 0 10px 25px rgba(0,0,0,.05);

    transition: .35s;
}

.feature-item:hover {
    transform: translateY(-5px);
    background: #C93C78;
}

.feature-item i {
    font-size: 22px;
    color: #C93C78;
    transition: .35s;
}

.feature-item span {
    font-weight: 500;
    color: #444;
    transition: .35s;
    font-family: "Poppins", sans-serif;
}

.feature-item:hover i,
.feature-item:hover span {
    color: #fff;
}

/*==============================
        BUTTONS
===============================*/

.about-section .btn {
    padding: 14px 32px;
    border-radius: 50px;
    font-weight: 600;
    transition: .35s;
    font-family: "Poppins", sans-serif;
}

.about-section .btn-primary {
    background: #C93C78;
    border: none;
}

.about-section .btn-primary:hover {
    background: #D4AF37;
    transform: translateY(-4px);
}

.about-section .btn-outline-dark {
    border: 2px solid #491632;
    color: #491632;
}

.about-section .btn-outline-dark:hover {
    background: #491632;
    color: #fff;
    transform: translateY(-4px);
}

/*==============================
        RESPONSIVE
===============================*/

@media (max-width: 991px) {

    .about-section {
        text-align: center;
    }

    .section-title {
        font-size: 42px;
    }

    .feature-item {
        justify-content: center;
    }

    .about-image {
        margin-bottom: 40px;
    }

}

@media (max-width: 768px) {

    .about-section {
        padding: 70px 0;
    }

    .section-title {
        font-size: 34px;
    }

    .about-section p {
        font-size: 16px;
    }

    .about-section .btn {
        width: 100%;
        margin-bottom: 15px;
    }

}

/*==================================
      EVENT HIGHLIGHTS
==================================*/

.event-highlights {
    padding: 100px 0;
    background: #ffffff;
    overflow: hidden;
}

/*==============================
      SECTION DESCRIPTION
===============================*/

.section-description {
    max-width: 650px;
    margin: 20px auto 0;
    color: #666;
    font-size: 17px;
    line-height: 1.8;
    font-family: "Poppins", sans-serif;
}

/*==============================
      HIGHLIGHT CARD
===============================*/

.highlight-card {
    background: #FFF8FB;
    padding: 45px 30px;
    border-radius: 20px;
    height: 100%;
    transition: all .4s ease;
    box-shadow: 0 12px 35px rgba(0, 0, 0, .05);
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.highlight-card::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 0;
    left: 0;
    bottom: 0;
    background: linear-gradient(135deg, #C93C78, #491632);
    transition: .45s;
    z-index: -1;
}

.highlight-card:hover::before {
    height: 100%;
}

.highlight-card:hover {
    transform: translateY(-12px);
}

/*==============================
        ICON
===============================*/

.highlight-icon {
    width: 90px;
    height: 90px;
    margin: 0 auto 25px;

    background: rgba(201, 60, 120, .12);

    border-radius: 50%;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .4s;
}

.highlight-icon i {
    font-size: 38px;
    color: #C93C78;
    transition: .4s;
}

.highlight-card:hover .highlight-icon {
    background: rgba(255,255,255,.15);
}

.highlight-card:hover .highlight-icon i {
    color: #D4AF37;
    transform: rotate(12deg) scale(1.15);
}

/*==============================
        TITLE
===============================*/

.highlight-card h4 {
    font-family: "Cormorant Garamond", serif;
    font-size: 30px;
    font-weight: 700;
    color: #491632;
    margin-bottom: 18px;
    transition: .4s;
}

/*==============================
        PARAGRAPH
===============================*/

.highlight-card p {
    font-family: "Poppins", sans-serif;
    color: #666;
    line-height: 1.8;
    transition: .4s;
}

/*==============================
      HOVER TEXT
===============================*/

.highlight-card:hover h4,
.highlight-card:hover p {
    color: #fff;
}

/*==============================
      RESPONSIVE
===============================*/

@media (max-width:991px){

    .event-highlights{
        padding:80px 0;
    }

    .highlight-card{
        padding:40px 25px;
    }

}

@media (max-width:768px){

    .event-highlights{
        padding:70px 0;
    }

    .highlight-card h4{
        font-size:26px;
    }

    .section-description{
        font-size:16px;
    }

    .highlight-icon{
        width:75px;
        height:75px;
    }

    .highlight-icon i{
        font-size:32px;
    }

}

/*==================================
      BEAUTY CATEGORIES
==================================*/

.beauty-categories {
    padding: 100px 0;
    background: #FFF8FB;
    overflow: hidden;
}

/*==============================
      CATEGORY CARD
===============================*/

.category-card {
    text-align: center;
    transition: .4s ease;
}

.category-card:hover {
    transform: translateY(-10px);
}

/*==============================
        IMAGE
===============================*/

.category-card img {
    width: 180px;
    height: 180px;
    object-fit: cover;

    border-radius: 50%;
    border: 6px solid #fff;

    box-shadow: 0 15px 35px rgba(0,0,0,.12);

    transition: .4s ease;
}

.category-card:hover img {
    transform: scale(1.08);
    border-color: #D4AF37;
    box-shadow: 0 20px 40px rgba(201,60,120,.25);
}

/*==============================
        TITLE
===============================*/

.category-card h5 {
    margin-top: 22px;
    font-family: "Cormorant Garamond", serif;
    font-size: 28px;
    font-weight: 700;
    color: #491632;
    transition: .35s;
}

.category-card:hover h5 {
    color: #C93C78;
}

/*==============================
    OPTIONAL DECORATIVE RING
===============================*/

.category-card {
    position: relative;
}

.category-card::before {
    content: "";
    position: absolute;
    width: 195px;
    height: 195px;
    border: 2px dashed rgba(212,175,55,.45);
    border-radius: 50%;
    left: 50%;
    top: -8px;
    transform: translateX(-50%) scale(.9);
    opacity: 0;
    transition: .4s;
}

.category-card:hover::before {
    opacity: 1;
    transform: translateX(-50%) scale(1);
}

/*==============================
      RESPONSIVE
===============================*/

@media (max-width:991px){

    .beauty-categories{
        padding:80px 0;
    }

    .category-card img{
        width:160px;
        height:160px;
    }

    .category-card::before{
        width:175px;
        height:175px;
    }

}

@media (max-width:768px){

    .beauty-categories{
        padding:70px 0;
    }

    .category-card{
        margin-bottom:20px;
    }

    .category-card img{
        width:130px;
        height:130px;
    }

    .category-card::before{
        width:145px;
        height:145px;
        top:-7px;
    }

    .category-card h5{
        font-size:24px;
    }

}

/*==================================
      FEATURED SPEAKERS
==================================*/

.featured-speakers {
    padding: 100px 0;
    background: #ffffff;
    overflow: hidden;
}

/*==============================
        SPEAKER CARD
===============================*/

.speaker-card {
    background: #FFF8FB;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,.08);
    transition: all .4s ease;
    height: 100%;
}

.speaker-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 45px rgba(0,0,0,.15);
}

/*==============================
        IMAGE
===============================*/

.speaker-card img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    transition: .5s;
}

.speaker-card:hover img {
    transform: scale(1.08);
}

/*==============================
        CONTENT
===============================*/

.speaker-content {
    padding: 30px;
    text-align: center;
}

/*==============================
        ROLE
===============================*/

.speaker-role {
    display: inline-block;
    background: rgba(201,60,120,.12);
    color: #C93C78;
    padding: 8px 18px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
    font-family: "Poppins", sans-serif;
    margin-bottom: 18px;
}

/*==============================
        NAME
===============================*/

.speaker-content h4 {
    font-family: "Cormorant Garamond", serif;
    font-size: 32px;
    font-weight: 700;
    color: #491632;
    margin-bottom: 15px;
}

/*==============================
        DESCRIPTION
===============================*/

.speaker-content p {
    font-family: "Poppins", sans-serif;
    color: #666;
    line-height: 1.8;
    margin-bottom: 25px;
}

/*==============================
        SOCIAL ICONS
===============================*/

.speaker-social {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.speaker-social a {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: #fff;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #C93C78;
    font-size: 18px;

    text-decoration: none;

    box-shadow: 0 8px 20px rgba(0,0,0,.08);

    transition: .35s;
}

.speaker-social a:hover {
    background: #C93C78;
    color: #fff;
    transform: translateY(-5px);
}

/*==============================
      VIEW ALL BUTTON
===============================*/

.featured-speakers .btn-primary {
    background: #C93C78;
    border: none;
    padding: 14px 36px;
    border-radius: 50px;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    transition: .35s;
}

.featured-speakers .btn-primary:hover {
    background: #D4AF37;
    color: #fff;
    transform: translateY(-4px);
}

/*==============================
        RESPONSIVE
===============================*/

@media (max-width:991px){

    .featured-speakers{
        padding:80px 0;
    }

    .speaker-card img{
        height:380px;
    }

}

@media (max-width:768px){

    .featured-speakers{
        padding:70px 0;
    }

    .speaker-card img{
        height:320px;
    }

    .speaker-content{
        padding:25px;
    }

    .speaker-content h4{
        font-size:28px;
    }

}

/*==================================
         WHY ATTEND
==================================*/

.why-attend {
    padding: 100px 0;
    background: #FFF8FB;
    overflow: hidden;
}

/*==============================
        COUNTER BOX
===============================*/

.counter-box {
    background: #fff;
    padding: 40px 25px;
    border-radius: 20px;
    text-align: center;
    height: 100%;
    transition: .4s ease;
    box-shadow: 0 12px 30px rgba(0,0,0,.06);
}

.counter-box:hover {
    transform: translateY(-10px);
    background: linear-gradient(135deg, #C93C78, #491632);
}

.counter-box h2 {
    font-family: "Cormorant Garamond", serif;
    font-size: 58px;
    font-weight: 700;
    color: #C93C78;
    margin-bottom: 10px;
    transition: .4s;
}

.counter-box h5 {
    font-family: "Cormorant Garamond", serif;
    font-size: 28px;
    color: #491632;
    margin-bottom: 15px;
    transition: .4s;
}

.counter-box p {
    font-family: "Poppins", sans-serif;
    color: #666;
    line-height: 1.8;
    transition: .4s;
}

.counter-box:hover h2,
.counter-box:hover h5,
.counter-box:hover p {
    color: #fff;
}

/*==============================
        IMAGE
===============================*/

.why-attend img {
    width: 100%;
    border-radius: 20px;
    object-fit: cover;
    transition: .5s ease;
    box-shadow: 0 20px 40px rgba(0,0,0,.12);
}

.why-attend img:hover {
    transform: scale(1.04);
}

/*==============================
        RIGHT TITLE
===============================*/

.why-attend h3 {
    font-family: "Cormorant Garamond", serif;
    font-size: 44px;
    font-weight: 700;
    color: #491632;
    margin-bottom: 35px;
}

/*==============================
        BENEFIT ITEM
===============================*/

.benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 18px;

    padding: 20px;

    background: #fff;

    border-radius: 15px;

    margin-bottom: 20px;

    transition: .35s;

    box-shadow: 0 10px 25px rgba(0,0,0,.05);
}

.benefit-item:hover {
    transform: translateX(10px);
    background: #C93C78;
}

.benefit-item i {
    font-size: 28px;
    color: #C93C78;
    transition: .35s;
    margin-top: 5px;
}

.benefit-item h5 {
    font-family: "Cormorant Garamond", serif;
    font-size: 28px;
    color: #491632;
    margin-bottom: 8px;
    transition: .35s;
}

.benefit-item p {
    font-family: "Poppins", sans-serif;
    color: #666;
    line-height: 1.7;
    margin: 0;
    transition: .35s;
}

.benefit-item:hover i,
.benefit-item:hover h5,
.benefit-item:hover p {
    color: #fff;
}

/*==============================
        RESPONSIVE
===============================*/

@media (max-width:991px){

    .why-attend{
        padding:80px 0;
        text-align:center;
    }

    .why-attend h3{
        font-size:38px;
        margin-top:20px;
    }

    .benefit-item{
        text-align:left;
    }

}

@media (max-width:768px){

    .why-attend{
        padding:70px 0;
    }

    .counter-box{
        padding:30px 20px;
    }

    .counter-box h2{
        font-size:46px;
    }

    .counter-box h5{
        font-size:24px;
    }

    .why-attend h3{
        font-size:32px;
    }

    .benefit-item{
        flex-direction:column;
        align-items:center;
        text-align:center;
    }

    .benefit-item i{
        margin-top:0;
    }

}

/*==================================
         TESTIMONIALS
==================================*/

.testimonials {
    padding: 100px 0;
    background: #ffffff;
    overflow: hidden;
}

/*==============================
      TESTIMONIAL CARD
===============================*/

.testimonial-card {
    background: #FFF8FB;
    border-radius: 20px;
    padding: 35px 30px;
    text-align: center;
    height: 100%;
    position: relative;
    transition: .4s ease;
    box-shadow: 0 15px 35px rgba(0,0,0,.08);
}

.testimonial-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 45px rgba(0,0,0,.15);
}

/* Decorative Quote */

.testimonial-card::before {
    content: "\201C";
    position: absolute;
    top: 15px;
    left: 25px;
    font-size: 90px;
    font-family: serif;
    color: rgba(201,60,120,.12);
    line-height: 1;
}

/*==============================
        IMAGE
===============================*/

.testimonial-image {
    margin-bottom: 25px;
}

.testimonial-image img {
    width: 110px;
    height: 110px;
    object-fit: cover;
    border: 5px solid #D4AF37;
    transition: .4s ease;
    box-shadow: 0 10px 25px rgba(0,0,0,.12);
}

.testimonial-card:hover .testimonial-image img {
    transform: scale(1.08);
    border-color: #C93C78;
}

/*==============================
        RATING
===============================*/

.rating {
    margin-bottom: 18px;
}

.rating i {
    color: #D4AF37;
    font-size: 18px;
    margin: 0 2px;
}

/*==============================
      TESTIMONIAL TEXT
===============================*/

.testimonial-content p {
    font-family: "Poppins", sans-serif;
    color: #666;
    line-height: 1.9;
    font-style: italic;
    margin-bottom: 25px;
}

/*==============================
        NAME
===============================*/

.testimonial-content h5 {
    font-family: "Cormorant Garamond", serif;
    font-size: 30px;
    font-weight: 700;
    color: #491632;
    margin-bottom: 5px;
}

/*==============================
        ROLE
===============================*/

.testimonial-content span {
    display: inline-block;
    color: #C93C78;
    font-family: "Poppins", sans-serif;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: .5px;
}

/*==============================
      HOVER EFFECT
===============================*/

.testimonial-card:hover {
    background: linear-gradient(135deg, #C93C78, #491632);
}

.testimonial-card:hover p,
.testimonial-card:hover h5,
.testimonial-card:hover span {
    color: #fff;
}

.testimonial-card:hover .rating i {
    color: #D4AF37;
}

/*==============================
        RESPONSIVE
===============================*/

@media (max-width:991px){

    .testimonials{
        padding:80px 0;
    }

    .testimonial-card{
        padding:35px 25px;
    }

}

@media (max-width:768px){

    .testimonials{
        padding:70px 0;
    }

    .testimonial-card{
        padding:30px 20px;
    }

    .testimonial-image img{
        width:90px;
        height:90px;
    }

    .testimonial-content h5{
        font-size:26px;
    }

    .testimonial-content p{
        font-size:15px;
    }

    .testimonial-card::before{
        font-size:70px;
        left:18px;
        top:12px;
    }

}

/*==================================
        CALL TO ACTION
==================================*/

.cta-section {
    padding: 90px 0;
    background: linear-gradient(135deg, #C93C78, #491632);
    position: relative;
    overflow: hidden;
}

/* Decorative Elements */

.cta-section::before {
    content: "";
    position: absolute;
    width: 320px;
    height: 320px;
    background: rgba(255,255,255,.06);
    border-radius: 50%;
    top: -120px;
    left: -120px;
}

.cta-section::after {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    background: rgba(212,175,55,.12);
    border-radius: 50%;
    bottom: -80px;
    right: -80px;
}

.cta-section .container{
    position: relative;
    z-index: 2;
}

/*==============================
        TEXT
===============================*/

.cta-section h2{
    font-family: "Cormorant Garamond", serif;
    font-size: 52px;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
}

.cta-section p{
    font-family: "Poppins", sans-serif;
    font-size: 17px;
    line-height: 1.9;
    color: rgba(255,255,255,.9);
    max-width: 700px;
}

/*==============================
        BUTTONS
===============================*/

.cta-section .btn{
    padding: 15px 36px;
    border-radius: 50px;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-size: 16px;
    transition: .35s ease;
}

/* Primary Button */

.cta-section .btn-primary{
    background: #D4AF37;
    border: none;
    color: #fff;
    box-shadow: 0 10px 25px rgba(0,0,0,.18);
}

.cta-section .btn-primary:hover{
    background: #fff;
    color: #491632;
    transform: translateY(-4px);
}

/* Outline Button */

.cta-section .btn-outline-light{
    border: 2px solid #fff;
    color: #fff;
    background: transparent;
}

.cta-section .btn-outline-light:hover{
    background: #fff;
    color: #491632;
    border-color: #fff;
    transform: translateY(-4px);
}

/*==============================
        RESPONSIVE
===============================*/

@media (max-width:991px){

    .cta-section{
        padding: 80px 0;
        text-align: center;
    }

    .cta-section h2{
        font-size: 42px;
    }

    .cta-section p{
        margin: 20px auto 0;
    }

    .cta-section .text-lg-end{
        text-align: center !important;
    }

}

@media (max-width:768px){

    .cta-section{
        padding: 70px 0;
    }

    .cta-section h2{
        font-size: 34px;
    }

    .cta-section p{
        font-size: 16px;
    }

    .cta-section .btn{
        display: block;
        width: 100%;
        margin: 12px 0 !important;
    }

}

/*==================================
             FOOTER
==================================*/

.footer{
    background: #491632;
    color: rgba(255,255,255,.85);
    padding: 90px 0 30px;
    position: relative;
    overflow: hidden;
}

/* Decorative Background */

.footer::before{
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    background: rgba(255,255,255,.04);
    top: -150px;
    left: -150px;
}

.footer::after{
    content: "";
    position: absolute;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: rgba(212,175,55,.08);
    bottom: -120px;
    right: -120px;
}

.footer .container{
    position: relative;
    z-index: 2;
}

/*==============================
          LOGO
===============================*/

.footer-logo{
    display: inline-block;
    font-family: "Cormorant Garamond", serif;
    font-size: 38px;
    font-weight: 700;
    color: #fff;
    text-decoration: none;
    margin-bottom: 22px;
    transition: .35s;
}

.footer-logo:hover{
    color: #D4AF37;
}

/*==============================
        DESCRIPTION
===============================*/

.footer-description{
    font-family: "Poppins", sans-serif;
    line-height: 1.9;
    color: rgba(255,255,255,.75);
    margin-bottom: 30px;
}

/*==============================
        FOOTER TITLES
===============================*/

.footer h5{
    font-family: "Cormorant Garamond", serif;
    font-size: 30px;
    color: #fff;
    margin-bottom: 25px;
}

/*==============================
        SOCIAL ICONS
===============================*/

.social-icons{
    display: flex;
    gap: 15px;
}

.social-icons a{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: rgba(255,255,255,.08);

    display: flex;
    justify-content: center;
    align-items: center;

    color: #fff;
    text-decoration: none;
    font-size: 18px;

    transition: .35s;
}

.social-icons a:hover{
    background: #D4AF37;
    color: #491632;
    transform: translateY(-5px);
}

/*==============================
        FOOTER LINKS
===============================*/

.footer-links{
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li{
    margin-bottom: 14px;
}

.footer-links a{
    text-decoration: none;
    color: rgba(255,255,255,.75);
    font-family: "Poppins", sans-serif;
    transition: .35s;
}

.footer-links a:hover{
    color: #D4AF37;
    padding-left: 8px;
}

/*==============================
      CONTACT INFO
===============================*/

.footer-contact{
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-contact li{
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 18px;

    color: rgba(255,255,255,.75);
    font-family: "Poppins", sans-serif;
    line-height: 1.7;
}

.footer-contact i{
    color: #D4AF37;
    font-size: 18px;
    margin-top: 4px;
}

/*==============================
        DIVIDER
===============================*/

.footer hr{
    margin: 60px 0 30px;
    border-color: rgba(255,255,255,.15);
}

/*==============================
        COPYRIGHT
===============================*/

.copyright{
    margin: 0;
    color: rgba(255,255,255,.65);
    font-family: "Poppins", sans-serif;
}

/* Bottom Links */

.footer .text-md-end a{
    color: rgba(255,255,255,.75);
    text-decoration: none;
    margin: 0 8px;
    font-family: "Poppins", sans-serif;
    transition: .35s;
}

.footer .text-md-end a:hover{
    color: #D4AF37;
}

/*==============================
        RESPONSIVE
===============================*/

@media (max-width:991px){

    .footer{
        padding: 80px 0 30px;
    }

    .footer h5{
        margin-top: 10px;
    }

}

@media (max-width:768px){

    .footer{
        padding: 70px 0 25px;
        text-align: center;
    }

    .footer-logo{
        font-size: 34px;
    }

    .footer h5{
        font-size: 28px;
    }

    .social-icons{
        justify-content: center;
    }

    .footer-contact li{
        justify-content: center;
        text-align: left;
    }

    .footer hr{
        margin: 40px 0 25px;
    }

    .footer .text-md-end{
        text-align: center !important;
        margin-top: 12px;
    }

}
    </style>
</head>

<body>

<section class="hero">

    <!-- ======= Navbar ======= -->

   <nav class="navbar navbar-expand-lg custom-navbar">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand logo-text" href="index.php">
            <h2>Luxe <span>Beauty</span></h2>
            <small>BEAUTY EXPO 2026</small>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Navigation -->
        <div class="collapse navbar-collapse justify-content-end"
             id="navbarNav">

            <ul class="navbar-nav align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <?php if(isset($_SESSION['user'])) { ?>

                <li class="nav-item dropdown ms-lg-3">

                    <a class="btn register-btn dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        👤 <?php echo htmlspecialchars($_SESSION['fullname']); ?>

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow">

                        <li>
                            <a class="dropdown-item" href="profile.php">
                                👤 My Profile
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item text-danger" href="logout.php">
                                🚪 Logout
                            </a>
                        </li>

                    </ul>

                </li>

                <?php } else { ?>

                <li class="nav-item ms-lg-3">
                    <a href="login.php" class="btn register-btn">
                        Register Now
                    </a>
                </li>

                <?php } ?>

            </ul>

        </div>

    </div>

</nav>

    <!-- ======= Hero Content ======= -->

    <div class="container hero-content">

        <div class="row align-items-center min-vh-100">

            <!-- Left Content -->

            <div class="col-lg-6">

                <span class="hero-subtitle">
                    ✨ Luxury Beauty Event • 2026
                </span>

                <h1>
                    Discover
                    <span>Beauty.</span><br>

                    Experience
                    <span>Luxury.</span>
                </h1>

                <p>

                    Join the most anticipated beauty expo featuring
                    world-renowned brands, expert-led masterclasses,
                    exclusive product launches, live demonstrations,
                    and unforgettable networking experiences.

                </p>

                <div class="hero-buttons">

                    <a href="login.php"
                        class="btn btn-primary hero-btn">

                        Register Now

                    </a>

                    <a href="about.php"
                        class="btn btn-outline-light hero-btn-outline">

                        Explore More

                    </a>

                </div>

            </div>

            <!-- Right Side (Empty for Background Image) -->

            <div class="col-lg-6">

            </div>

        </div>

    </div>

    <!-- ======= Social Icons ======= -->

    <div class="hero-social">

        <a href="#"><i class="bi bi-facebook"></i></a>

        <a href="#"><i class="bi bi-instagram"></i></a>

        <a href="#"><i class="bi bi-twitter-x"></i></a>

        <a href="#"><i class="bi bi-youtube"></i></a>

    </div>

    <!-- ======= Scroll Down ======= -->

    <div class="scroll-down">

        <span>Scroll</span>

        <i class="bi bi-chevron-double-down"></i>

    </div>

</section>
   <!-- ==========================================
            ABOUT THE EVENT
=========================================== -->

<section class="about-section py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Left Image -->

            <div class="col-lg-6">

                <div class="about-image">

                    <img src="https://i.pinimg.com/736x/ec/82/35/ec82355581adbd109b24f89a6e2c3fa6.jpg"
                         alt="Luxe Beauty Expo"
                         class="img-fluid rounded-4">

                </div>

            </div>

            <!-- Right Content -->

            <div class="col-lg-6">

                <span class="section-subtitle">
                    ABOUT THE EVENT
                </span>

                <h2 class="section-title mt-3">
                    Where Beauty Meets Innovation &
                    Luxury
                </h2>

                <p class="mt-4">

                    Luxe Beauty Expo is a premier beauty and wellness
                    exhibition that brings together internationally
                    recognized beauty brands, skincare specialists,
                    makeup artists, wellness experts, and beauty
                    enthusiasts under one roof. Discover the latest
                    trends, experience live demonstrations, participate
                    in expert-led masterclasses, and connect with
                    industry professionals in an atmosphere of elegance
                    and inspiration.

                </p>

                <!-- Features -->

                <div class="row mt-4">

                    <div class="col-md-6 mb-3">

                        <div class="feature-item">

                            <i class="bi bi-check-circle-fill"></i>

                            <span>Premium Beauty Brands</span>

                        </div>

                    </div>

                    <div class="col-md-6 mb-3">

                        <div class="feature-item">

                            <i class="bi bi-check-circle-fill"></i>

                            <span>Expert Beauty Sessions</span>

                        </div>

                    </div>

                    <div class="col-md-6 mb-3">

                        <div class="feature-item">

                            <i class="bi bi-check-circle-fill"></i>

                            <span>Live Product Demonstrations</span>

                        </div>

                    </div>

                    <div class="col-md-6 mb-3">

                        <div class="feature-item">

                            <i class="bi bi-check-circle-fill"></i>

                            <span>Networking Opportunities</span>

                        </div>

                    </div>

                </div>

                <!-- Buttons -->

                <div class="mt-4">

                    <a href="about.php" class="btn btn-primary me-3">

                        Learn More

                    </a>

                    <a href="login.php" class="btn btn-outline-dark">

                        Register Today

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



    <!-- ==========================
         EVENT HIGHLIGHTS
    =========================== -->

   <!-- ==========================================
            EVENT HIGHLIGHTS
=========================================== -->

<section class="event-highlights py-5">

    <div class="container">

        <!-- Section Heading -->

        <div class="text-center mb-5">

            <span class="section-subtitle">
                WHAT TO EXPECT
            </span>

            <h2 class="section-title mt-3">
                Experience the Best of Beauty
            </h2>

            <p class="section-description">

                Explore exciting activities designed to inspire,
                educate, and connect beauty enthusiasts and
                professionals from around the world.

            </p>

        </div>

        <!-- Highlight Cards -->

        <div class="row g-4">

            <!-- Card 1 -->

            <div class="col-lg-4 col-md-6">

                <div class="highlight-card text-center">

                    <div class="highlight-icon">

                        <i class="bi bi-gem"></i>

                    </div>

                    <h4>Luxury Product Launches</h4>

                    <p>
                        Discover newly launched premium beauty,
                        skincare, and wellness products before
                        they reach the market.
                    </p>

                </div>

            </div>

            <!-- Card 2 -->

            <div class="col-lg-4 col-md-6">

                <div class="highlight-card text-center">

                    <div class="highlight-icon">

                        <i class="bi bi-brush"></i>

                    </div>

                    <h4>Beauty Masterclasses</h4>

                    <p>
                        Learn advanced techniques from renowned
                        makeup artists and beauty professionals.
                    </p>

                </div>

            </div>

            <!-- Card 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="highlight-card text-center">

                    <div class="highlight-icon">

                        <i class="bi bi-camera-video"></i>

                    </div>

                    <h4>Live Demonstrations</h4>

                    <p>
                        Watch experts perform live beauty,
                        skincare, and styling demonstrations
                        throughout the event.
                    </p>

                </div>

            </div>

            <!-- Card 4 -->

            <div class="col-lg-4 col-md-6">

                <div class="highlight-card text-center">

                    <div class="highlight-icon">

                        <i class="bi bi-people"></i>

                    </div>

                    <h4>Networking Lounge</h4>

                    <p>
                        Meet beauty professionals, influencers,
                        entrepreneurs, and leading industry
                        experts.
                    </p>

                </div>

            </div>

            <!-- Card 5 -->

            <div class="col-lg-4 col-md-6">

                <div class="highlight-card text-center">

                    <div class="highlight-icon">

                        <i class="bi bi-gift"></i>

                    </div>

                    <h4>Exclusive Giveaways</h4>

                    <p>
                        Receive luxury beauty samples, premium
                        gift hampers, and exciting event prizes.
                    </p>

                </div>

            </div>

            <!-- Card 6 -->

            <div class="col-lg-4 col-md-6">

                <div class="highlight-card text-center">

                    <div class="highlight-icon">

                        <i class="bi bi-stars"></i>

                    </div>

                    <h4>Brand Showcase</h4>

                    <p>
                        Explore exclusive collections from
                        internationally recognized beauty
                        and wellness brands.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



    <!-- ==========================
          BEAUTY CATEGORIES
    =========================== -->

 <!-- ==========================================
            BEAUTY CATEGORIES
=========================================== -->

<section class="beauty-categories py-5">

    <div class="container">

        <!-- Section Heading -->

        <div class="text-center mb-5">

            <span class="section-subtitle">
                BEAUTY CATEGORIES
            </span>

            <h2 class="section-title mt-3">
                Explore the World of Beauty
            </h2>

            <p class="section-description">

                Discover the latest innovations, luxury products,
                and expert solutions across every category of beauty
                and wellness.

            </p>

        </div>

        <!-- Categories -->

        <div class="row g-4 justify-content-center">

            <!-- Category 1 -->

            <div class="col-lg-2 col-md-4 col-6">

                <div class="category-card text-center">

                    <img src="beauty23.jpg"
                        alt="Skincare"
                        class="img-fluid rounded-circle">

                    <h5 class="mt-3">Skincare</h5>

                </div>

            </div>

            <!-- Category 2 -->

            <div class="col-lg-2 col-md-4 col-6">

                <div class="category-card text-center">

                    <img src="beauty22.jpg"
                        alt="Makeup"
                        class="img-fluid rounded-circle">

                    <h5 class="mt-3">Makeup</h5>

                </div>

            </div>

            <!-- Category 3 -->

            <div class="col-lg-2 col-md-4 col-6">

                <div class="category-card text-center">

                    <img src="beauty24.jpg"
                        alt="Haircare"
                        class="img-fluid rounded-circle">

                    <h5 class="mt-3">Haircare</h5>

                </div>

            </div>

            <!-- Category 4 -->

            <div class="col-lg-2 col-md-4 col-6">

                <div class="category-card text-center">

                    <img src="beauty25.jpg"
                        alt="Fragrance"
                        class="img-fluid rounded-circle">

                    <h5 class="mt-3">Fragrance</h5>

                </div>

            </div>

            <!-- Category 5 -->

            <div class="col-lg-2 col-md-4 col-6">

                <div class="category-card text-center">

                    <img src="beauty26.jpg"
                        alt="Wellness"
                        class="img-fluid rounded-circle">

                    <h5 class="mt-3">Wellness</h5>

                </div>

            </div>

            <!-- Category 6 -->

            <div class="col-lg-2 col-md-4 col-6">

                <div class="category-card text-center">

                    <img src="beauty27.jpg"
                        alt="Luxury Brands"
                        class="img-fluid rounded-circle">

                    <h5 class="mt-3">Luxury Brands</h5>

                </div>

            </div>

        </div>

    </div>

</section>


    <!-- ==========================
        FEATURED SPEAKERS
<!-- ==========================================
            FEATURED SPEAKERS
=========================================== -->

<section class="featured-speakers py-5">

    <div class="container">

        <!-- Section Heading -->

        <div class="text-center mb-5">

            <span class="section-subtitle">
                MEET OUR EXPERTS
            </span>

            <h2 class="section-title mt-3">
                Industry Leaders & Beauty Professionals
            </h2>

            <p class="section-description">

                Learn from renowned beauty experts, celebrity makeup
                artists, skincare specialists, and influential
                professionals shaping the future of beauty.

            </p>

        </div>

        <!-- Speaker Cards -->

        <div class="row g-4">

            <!-- Speaker 1 -->

            <div class="col-lg-4 col-md-6">

                <div class="speaker-card">

                    <img src="beauty29.png"
                        class="img-fluid"
                        alt="Speaker">

                    <div class="speaker-content">

                        <span class="speaker-role">
                            Celebrity Makeup Artist
                        </span>

                        <h4>Emma Williams</h4>

                        <p>

                            International makeup artist known for
                            luxury bridal and fashion runway looks.

                        </p>

                        <div class="speaker-social">

                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Speaker 2 -->

            <div class="col-lg-4 col-md-6">

                <div class="speaker-card">

                    <img src="beauty30.png"
                        class="img-fluid"
                        alt="Speaker">

                    <div class="speaker-content">

                        <span class="speaker-role">
                            Dermatologist
                        </span>

                        <h4>Sophia Carter</h4>

                        <p>

                            Award-winning skincare expert specializing
                            in advanced cosmetic treatments and skin
                            health.

                        </p>

                        <div class="speaker-social">

                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Speaker 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="speaker-card">

                    <img src="beauty28.png"
                        class="img-fluid"
                        alt="Speaker">

                    <div class="speaker-content">

                        <span class="speaker-role">
                            Beauty Influencer
                        </span>

                        <h4>Olivia Bennett</h4>

                        <p>

                            Beauty content creator inspiring millions
                            through skincare routines, tutorials, and
                            luxury beauty reviews.

                        </p>

                        <div class="speaker-social">

                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- View All Button -->

        <div class="text-center mt-5">

            <a href="about.php" class="btn btn-primary">

                View All Speakers

            </a>

        </div>

    </div>

</section>

 <!-- ==========================================
            WHY ATTEND
=========================================== -->

<section class="why-attend py-5">

    <div class="container">

        <!-- Section Heading -->

        <div class="text-center mb-5">

            <span class="section-subtitle">
                WHY ATTEND
            </span>

            <h2 class="section-title mt-3">
                Experience Beauty Beyond Expectations
            </h2>

            <p class="section-description">

                Join thousands of beauty enthusiasts, professionals,
                and luxury brands for an inspiring experience filled
                with innovation, education, and unforgettable moments.

            </p>

        </div>

        <!-- Statistics -->

        <div class="row text-center g-4 mb-5">

            <div class="col-lg-3 col-md-6">

                <div class="counter-box">

                    <h2>50+</h2>

                    <h5>Luxury Brands</h5>

                    <p>
                        Discover exclusive collections from
                        premium beauty brands.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="counter-box">

                    <h2>20+</h2>

                    <h5>Industry Experts</h5>

                    <p>
                        Learn directly from internationally
                        recognized professionals.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="counter-box">

                    <h2>100+</h2>

                    <h5>Live Sessions</h5>

                    <p>
                        Attend masterclasses, product launches,
                        and live demonstrations.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="counter-box">

                    <h2>5000+</h2>

                    <h5>Expected Visitors</h5>

                    <p>
                        Network with beauty lovers and
                        professionals from across the country.
                    </p>

                </div>

            </div>

        </div>

        <!-- Benefits -->

        <div class="row align-items-center g-5">

            <!-- Left -->

            <div class="col-lg-6">

                <img src="https://i.pinimg.com/1200x/9e/d7/46/9ed7465cb87c9e2c9665153965bce731.jpg"
                     class="img-fluid rounded-4"
                     alt="Why Attend">

            </div>

            <!-- Right -->

            <div class="col-lg-6">

                <h3 class="mb-4">
                    Everything You Need in One Luxury Event
                </h3>

                <div class="benefit-item mb-4">

                    <i class="bi bi-check-circle-fill"></i>

                    <div>

                        <h5>Exclusive Product Launches</h5>

                        <p>
                            Be among the first to discover innovative
                            beauty and wellness products.
                        </p>

                    </div>

                </div>

                <div class="benefit-item mb-4">

                    <i class="bi bi-check-circle-fill"></i>

                    <div>

                        <h5>Hands-on Beauty Workshops</h5>

                        <p>
                            Participate in interactive sessions led by
                            industry professionals.
                        </p>

                    </div>

                </div>

                <div class="benefit-item mb-4">

                    <i class="bi bi-check-circle-fill"></i>

                    <div>

                        <h5>Networking Opportunities</h5>

                        <p>
                            Connect with brands, influencers,
                            entrepreneurs, and fellow beauty enthusiasts.
                        </p>

                    </div>

                </div>

                <div class="benefit-item">

                    <i class="bi bi-check-circle-fill"></i>

                    <div>

                        <h5>Luxury Gift Bags & Giveaways</h5>

                        <p>
                            Take home premium beauty products and
                            exclusive event merchandise.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

 <!-- ==========================================
                TESTIMONIALS
=========================================== -->

<section class="testimonials py-5">

    <div class="container">

        <!-- Section Heading -->

        <div class="text-center mb-5">

            <span class="section-subtitle">
                TESTIMONIALS
            </span>

            <h2 class="section-title mt-3">
                What Our Visitors Say
            </h2>

            <p class="section-description">

                Hear from beauty professionals, influencers, and
                attendees who experienced the elegance and innovation
                of Luxe Beauty Expo.

            </p>

        </div>

        <div class="row g-4">

            <!-- Testimonial 1 -->

            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="testimonial-image">

                        <img src="https://i.pinimg.com/736x/29/40/7a/29407a250491670ebccfcff5aa4b6915.jpg"
                             class="img-fluid rounded-circle"
                             alt="Visitor">

                    </div>

                    <div class="testimonial-content">

                        <div class="rating">

                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>

                        </div>

                        <p>

                            "The Luxe Beauty Expo exceeded every
                            expectation. From premium product launches
                            to expert-led masterclasses, every moment
                            was inspiring."

                        </p>

                        <h5>Emma Wilson</h5>

                        <span>Beauty Blogger</span>

                    </div>

                </div>

            </div>

            <!-- Testimonial 2 -->

            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="testimonial-image">

                        <img src="https://i.pinimg.com/1200x/b0/b4/3d/b0b43de8dc6a38254f6a14622e1108c4.jpg"
                             class="img-fluid rounded-circle"
                             alt="Visitor">

                    </div>

                    <div class="testimonial-content">

                        <div class="rating">

                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>

                        </div>

                        <p>

                            "A perfect opportunity to network with
                            industry professionals and discover
                            innovative beauty brands all in one place."

                        </p>

                        <h5>Sophia Carter</h5>

                        <span>Makeup Artist</span>

                    </div>

                </div>

            </div>

            <!-- Testimonial 3 -->

            <div class="col-lg-4">

                <div class="testimonial-card">

                    <div class="testimonial-image">

                        <img src="https://i.pinimg.com/control1/1200x/91/7c/de/917cdea169b847662b77ed8d5b965f96.jpg"
                             class="img-fluid rounded-circle"
                             alt="Visitor">

                    </div>

                    <div class="testimonial-content">

                        <div class="rating">

                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>

                        </div>

                        <p>

                            "The atmosphere was luxurious, the speakers
                            were exceptional, and I left with valuable
                            knowledge and unforgettable experiences."

                        </p>

                        <h5>Olivia Bennett</h5>

                        <span>Skincare Specialist</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
    <!-- ==========================
            CTA
    =========================== -->
<!-- ==========================================
            CALL TO ACTION
=========================================== -->

<section class="cta-section py-5">

    <div class="container">

        <div class="row align-items-center">

            <!-- Left Content -->

            <div class="col-lg-8">

                <span class="section-subtitle">

                    JOIN THE EXPERIENCE

                </span>

                <h2 class="mt-3">

                    Ready to Experience the Ultimate
                    Luxury Beauty Event?

                </h2>

                <p class="mt-4">

                    Don't miss your chance to connect with industry
                    experts, discover premium beauty brands, attend
                    exclusive masterclasses, and enjoy a day filled
                    with innovation, inspiration, and luxury.

                </p>

            </div>

            <!-- Right Buttons -->

            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                <a href="login.php"
                    class="btn btn-primary me-3">

                    Register Now

                </a>

                <a href="contacts.php"
                    class="btn btn-outline-light">

                    Contact Us

                </a>

            </div>

        </div>

    </div>

</section>



    <!-- ==========================
            FOOTER
    =========================== -->

<!-- ==========================================
                    FOOTER
=========================================== -->

<footer class="footer">

    <div class="container">

        <div class="row gy-5">

            <!-- Company Info -->

            <div class="col-lg-4">

                <a href="index.php" class="footer-logo">

                    Luxe Beauty Expo

                </a>

                <p class="footer-description">

                    Luxe Beauty Expo is a premier destination for
                    beauty enthusiasts, professionals, and leading
                    brands to connect, discover innovations, and
                    celebrate the future of beauty in an elegant
                    and inspiring environment.

                </p>

                <div class="social-icons">

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

                <h5>Quick Links</h5>

                <ul class="footer-links">

                    <li><a href="index.php">Home</a></li>

                    <li><a href="about.php">About</a></li>

                    <li><a href="services.php">Services</a></li>

                    <li><a href="contacts.php">Contact</a></li>

                    <li><a href="login.php">Register</a></li>

                </ul>

            </div>

            <!-- Event Links -->

            <div class="col-lg-3 col-md-6">

                <h5>Event Highlights</h5>

                <ul class="footer-links">

                    <li><a href="#">Product Launches</a></li>

                    <li><a href="#">Masterclasses</a></li>

                    <li><a href="#">Beauty Workshops</a></li>

                    <li><a href="#">Guest Speakers</a></li>

                    <li><a href="#">Networking Lounge</a></li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="col-lg-3">

                <h5>Contact Info</h5>

                <ul class="footer-contact">

                    <li>

                        <i class="bi bi-geo-alt-fill"></i>

                        123 Luxury Avenue,
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

                    <li>

                        <i class="bi bi-clock-fill"></i>

                        Mon - Sat : 9:00 AM - 6:00 PM

                    </li>

                </ul>

            </div>

        </div>

        <hr>

        <div class="row align-items-center">

            <div class="col-md-6">

                <p class="copyright">

                    © 2026 Luxe Beauty Expo. All Rights Reserved.

                </p>

            </div>

            <div class="col-md-6 text-md-end">

                <a href="#">Privacy Policy</a>

                |

                <a href="#">Terms & Conditions</a>

            </div>

        </div>

    </div>

</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>