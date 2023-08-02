<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('UTF-8')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html <?php language_attributes(); ?>>



    <!-- Title -->
    <title><?php bloginfo('mega - HTML5 Template')?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/fevicon.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/owl.carousel.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/magnific-popup.css">
    
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/slicknav.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/perfect-scrollbar.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/responsive.css">
    
    <!-- jQuery -->
    <script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-1.11.3.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
       
    <!-- Preloader starts -->
    <div class="mega-site-preloader-wrap">
        <div class="cont">
            <div class="line square"></div>
            <div class="line square2"></div>
            <div class="line square3"></div>
            <div class="line square4"></div>
        </div>
    </div>
    <!-- Preloader ends -->
    
    
    <div class="header-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <h1><a href="<?= home_url(); ?>">Mega Logo</a></h1>
                    </div>
                    
                    <div class="responsive-menu-wrap"></div>
                </div>
                
                <div class="col-md-9">
                    <div class="mainmenu">
                        <ul id="navigation">
                            <li class="current_page_item"><a href="<?= home_url(); ?>">Homepages</a>
                                <ul>
                                    <li><a href="<?= home_url('agency') ?>">Homepage Agency</a></li>
                                    <li><a href="<?= home_url('startup') ?>">Homepage Startup</a></li>
                                    <li><a href="<?= home_url('construction') ?>">Homepage Construction</a></li>
                                    <li><a href="<?= home_url('education') ?>">Homepage Education</a></li>
                                    <li><a href="<?= home_url('finance') ?>">Homepage Finance</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= home_url('about') ?>">About us</a>
                                <ul>
                                    <li><a href="<?= home_url('about') ?>">About Us Agency</a></li>
                                    <li><a href="<?= home_url('about-startup') ?>">About Us Startup</a></li>
                                    <li><a href="<?= home_url('about-construction') ?>">About Us Construction</a></li>
                                    <li><a href="<?= home_url('about-education') ?>">About Us Education</a></li>
                                    <li><a href="<?= home_url('about-finance') ?>">About Us Finance</a></li>
                                </ul>
                            </li>
                            <li class="semi-mega-menu"><a href="<?= home_url('service') ?>">Services</a>
                                <ul>
                                    <li><a href="<?= home_url('service') ?>">Services <span>Our Awesome Services</span></a>
                                        <ul>
                                            <li><a href="<?= home_url('services-agency') ?>">Services - Agency</a></li>
                                            <li><a href="<?= home_url('services-startup') ?>">Services - Startup</a></li>
                                            <li><a href="<?= home_url('services-construction') ?>">Services - Construction</a></li>
                                            <li><a href="<?= home_url('courses-education') ?>">Courses - Education</a></li>
                                            <li><a href="<?= home_url('services-finance') ?>">Services - Finance</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= home_url('single-services') ?>">Single Services <span>Get very details</span></a>
                                        <ul>
                                            <li><a href="<?= home_url('single-service1') ?>">Single Service 1</a></li>
                                            <li><a href="<?= home_url('single-service2') ?>">Single Service 2</a></li>
                                            <li><a href="<?= home_url('single-service3') ?>">Single Service 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?= home_url('case') ?>">Works</a>
                                <ul>
                                    <li><a href="<?= home_url('cases-agency') ?>">Works - Agency</a></li>
                                    <li><a href="<?= home_url('cases-startup') ?>">Works - Startup</a></li>
                                    <li><a href="<?= home_url('cases-construction') ?>">Works - Construction</a></li>
                                    <li><a href="<?= home_url('cases-education') ?>">Subjects - Education</a></li>
                                    <li><a href="<?= home_url('cases-finance') ?>">Works - Finance</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= home_url('category/post') ?>">Blog</a>
                                <ul>
                                    <li><a href="<?= home_url('category/post') ?>">Blog posts</a></li>
                                    <li><a href="<?= home_url('post-hello') ?>">Single post</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu"><a href="<?= home_url('login1') ?>">Pages</a>
                                <ul>
                                    <li><a href="<?= home_url('login') ?>">Account <span>Login &amp; user panel pages</span></a>
                                        <ul>
                                            <li><a href="<?= home_url('login1') ?>">Login 1</a></li>
                                            <li><a href="<?= home_url('login2') ?>">Login 2</a></li>
                                            <li><a href="<?= home_url('login3') ?>">Login 3</a></li>
                                            <li><a href="<?= home_url('create-account') ?>">Create an account</a></li>
                                            <li><a href="<?= home_url('user-details') ?>">User details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= home_url('pricing') ?>">Pricing <span>Pricing &amp; quote pages</span></a>
                                        <ul>
                                            <li><a href="<?= home_url('pricing1') ?>">Pricing 1</a></li>
                                            <li><a href="<?= home_url('pricing2') ?>">Pricing 2</a></li>
                                            <li><a href="<?= home_url('pricing3') ?>">Pricing 3</a></li>
                                            <li><a href="<?= home_url('get-a-quote1') ?>">Get a quote 1</a></li>
                                            <li><a href="<?= home_url('get-a-quete2') ?>">Get a quote 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= home_url('special-pages') ?>">Special pages <span>More pages coming</span></a>
                                        <ul>
                                            <li><a href="<?= home_url('404') ?>">404 not found</a></li>
                                            <li><a href="<?= home_url('faqs') ?>">FAQs</a></li>
                                            <li><a href="<?= home_url('coming-soon') ?>">Coming soon</a></li>
                                            <li><a href="<?= home_url('thank-you') ?>">Thank you</a></li>
                                            <li><a href="<?= home_url('career1') ?>">Career 1</a></li>
                                            <li><a href="<?= home_url('career2') ?>">Career 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?= home_url('contact-us') ?>">Contact Us</a>
                                <ul>
                                    <li><a href="<?= home_url('contact-us') ?>">Contact Us Agency</a></li>
                                    <li><a href="<?= home_url('contact-startup') ?>">Contact Us Startup</a></li>
                                    <li><a href="<?= home_url('contact-construction') ?>">Contact Us Construction</a></li>
                                    <li><a href="<?= home_url('contact-education') ?>">Contact Us Education</a></li>
                                    <li><a href="<?= home_url('contact-finance') ?>">Contact Us Finance</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

