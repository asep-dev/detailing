<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="keywords" content>
    <meta name="description" content>
    <!-- Open Graph -->
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:keywords" content />
    <meta property="og:description" content />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= base_url() ?>" />
    <meta property="og:site_name" content="Bunglon Steel" />
    <meta property="og:image" content="<?= base_url() ?>public/image/default/logo.png" />
    <link rel="canonical" href="<?= base_url() ?>">
    <link rel="shortcut icon" href="<?= base_url() ?>public/image/default/favicon.png">
    <!-- Bootstrap 4.5 -->
    <link rel="stylesheet" href="<?= base_url()?>public/front/assets/css/bootstrap.min.css" type="text/css" />
    <!-- animate -->
    <link rel="stylesheet" href="<?= base_url()?>public/front/assets/css/animate.css" type="text/css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="<?= base_url()?>public/front/assets/css/swiper.min.css" />
    <!-- aos -->
    <link rel="stylesheet" href="<?= base_url()?>public/front/assets/css/aos.css" type="text/css" />
    <!-- icons -->
    <link rel="stylesheet" href="<?= base_url()?>public/front/assets/css/icons.css" type="text/css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url()?>public/front/assets/css/main.css" type="text/css" />
    <!-- normalize -->
    <link rel="stylesheet" href="<?= base_url()?>public/front/assets/css/normalize.css" type="text/css" />
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <style>
        @media(max-width: 600px) {
            .column-reversed{
                flex-direction: column-reverse !important;
            }
        }
        .banner_title h1{
            font-size:2.5rem;
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
                        <img class="w-100" src="<?= base_url() ?>public/image/default/logo.png" alt="logo" style="max-width:100px;" />
                    </a>

                    <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <a href="#contact-us" class="btn btn_sm_primary bg-black c-white effect-letter rounded-8">
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