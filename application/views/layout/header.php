<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="keywords" content>
    <meta name="description" content="<?= $description ?>">
    <!-- Open Graph -->
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:keywords" content />
    <meta property="og:description" content="<?= $description ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= base_url() ?>" />
    <meta property="og:site_name" content="Bunglon Steel" />
    <meta property="og:image" content="<?= base_url() ?>public/image/default/logo-bunglon-steel.webp" />
    <link rel="canonical" href="<?= base_url() ?>">
    <link rel="shortcut icon" href="<?= base_url() ?>public/image/default/favicon.png">
    <!-- Bootstrap 4.5 -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url() ?>public/front/assets/css/bootstrap.min.css" type="text/css" />
    <!-- animate -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="stylesheet" href="<?= base_url() ?>public/front/assets/css/animate.css" type="text/css" />
    <!-- Swiper -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="stylesheet" href="<?= base_url() ?>public/front/assets/css/swiper.min.css" />
    <!-- aos -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="stylesheet" href="<?= base_url() ?>public/front/assets/css/aos.css" type="text/css" />
    <!-- icons -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="stylesheet" href="<?= base_url() ?>public/front/assets/css/icons.css" type="text/css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url() ?>public/front/assets/css/main.css" type="text/css" />
    <!-- normalize -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="stylesheet" href="<?= base_url() ?>public/front/assets/css/normalize.css" type="text/css" />
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <style>
        @media(max-width: 600px) {
            .column-reversed {
                flex-direction: column-reverse !important;
            }

            .navbar-brand img {
                max-width: 120px !important;
            }
        }

        .navbar-brand img {
            max-width: 180px;
        }

        .banner_title h1 {
            font-size: 2.5rem;
        }

        .bg-bunglon {
            background-color: #2e8c33 !important;
        }

        .active-blue .navbar .navbar-collapse .navbar-nav .nav-item .nav-link:hover,
        .active-blue .navbar .navbar-collapse .navbar-nav .nav-item .nav-link.active,
        .c-bunglon {
            color: #2e8c33 !important;
        }

        .defalut-footer .heading {
            display: block;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 1.875rem;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="content">
            <!-- Start header -->
            <header class="header-nav-center active-blue" id="myNavbar">
                <div class="container">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img width="100" height="100" class="w-100 h-100" src="<?= base_url() ?>public/image/default/logo-bunglon-steel.webp" alt="logo" />
                        </a>

                        <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <svg viewBox="0 0 64 48">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                            </svg>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#projects">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-us">Contact</a>
                                </li>
                            </ul>
                            <div class="nav_account btn_demo2 pb-0">
                                <a href="#contact-us" class="btn scale btn_sm_primary bg-bunglon c-white effect-letter rounded-8">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
                <!-- end container -->
            </header>
            <!-- End header -->