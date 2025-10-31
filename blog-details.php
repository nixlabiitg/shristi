<?php
$page = 'blog';
include("administrator/admin/system/classes/Crud.php");
$crud = new Crud();
ini_set('display_errors', 1);
$blog_id = $_GET['blog-id'];
$readblog = $crud->Read("blog", "`status`='1' AND `id` = '$blog_id' order by id desc");
include("include/header.php");
?>
    <!--============================== Breadcumb ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><?php echo substr($readblog[0]['heading'], 0, 29); ?>...</li>
                </ul>
            </div>
        </div>
    </div>
    <!--============================== Blog Area ==============================-->
    <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-12">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img src="administrator/admin/system/<?php echo $readblog[0]['post_image']; ?>" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <i class="fas fa-calendar-days"></i>July 05, 2025
                                <i class="fas fa-tags"></i>Education
                            </div>
                            <h2 class="blog-title"><?= $readblog[0]['heading'] ?></h2>
                            <p><?php echo $readblog[0]['description']; ?></p>
                            <blockquote class="bg-white">
                                <p>Specialized cleaning to remove construction dust, debris, and residues left after renovation or remodeling projects.</p>
                                <cite>Michel Clarck</cite>
                            </blockquote>
                            <p>Our secure online donation platform allows you to make contributions quickly and safely. Choose from various payment methods and set up one-time or recurring donations with ease. Your support helps us continue our mission and reach those in need.</p>
                            <div class="row gx-30 mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="blog-radius-img">
                                        <img class="w-100" src="assets/img/blog/blog_inner_1.jpg" alt="Blog Image">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="blog-radius-img">
                                        <img class="w-100" src="assets/img/blog/blog_inner_2.jpg" alt="Blog Image">
                                    </div>
                                </div>
                            </div>
                            <p>We prioritize your security. Our donation process uses the latest encryption technology to protect your personal and financial information. Donate with confidence knowing your data is secure and your contribution is directly benefiting those in need.</p>
                            <div class="share-links clearfix ">
                                <div class="row justify-content-between">
                                    <div class="col-md-auto">
                                        <span class="share-links-title">Tags:</span>
                                        <div class="tagcloud">
                                            <a href="blog.html">Donations</a>
                                            <a href="blog.html">Educations</a>
                                        </div>
                                    </div>
                                    <div class="col-md-auto text-xl-end">
                                        <span class="share-links-title">Share:</span>
                                        <div class="th-social align-items-center">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div><!-- Share Links Area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
	Footer Area
==============================-->
    <footer class="footer-wrapper footer-default" data-bg-src="assets/img/bg/footer-default-bg-mask.png">
        <div class="footer-bg-shape2 shape-mockup jump" data-top="20%" data-right="0">
            <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
        </div>
        <div class="footer-bg-shape3 shape-mockup d-none" data-bottom="0" data-right="0">
            <img src="assets/img/shape/footer-bg-shape2.png" alt="img">
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="subscribe-box">
                    <div class="row gy-40 align-items-center justify-content-center">
                        <div class="col-xl-6">
                            <h4 class="subscribe-box_title">Subscribe to Our Newsletter</h4>
                            <p class="subscribe-box_text">Regular inspections and feedback mechanisms</p>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Enter Email Address" required="">
                                </div>
                                <button type="submit" class="th-btn style3"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="assets/img/logo-white.svg" alt="Donat"></a>
                                </div>
                                <p class="about-text"> Our secure online donation platform allows you to make contributions quickly and safely. Choose from various.</p>
                                <a href="contact.html" class="th-btn"><i class="fas fa-heart me-2"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog.html">Our News</a></li>
                                    <li><a href="about.html">Our Campaign</a></li>
                                    <li><a href="contact.html">Privacy policy</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Service</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="donate-now.html">Give Donation</a></li>
                                    <li><a href="faq.html">Education Support</a></li>
                                    <li><a href="faq.html">Food Support</a></li>
                                    <li><a href="faq.html">Health Support</a></li>
                                    <li><a href="gallery.html">Our Campaign </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-contact">
                                <h3 class="widget_title">Contact Us</h3>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-phone"></i>
                                        <div class="bg-shape1" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                                        <div class="bg-shape2" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Call us any time:</p>
                                        <h4 class="box-title"><a href="tel:16336547896">+163-3654-7896</a></h4>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-envelope-open"></i>
                                        <div class="bg-shape1" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                                        <div class="bg-shape2" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Email us any time:</p>
                                        <h4 class="box-title"><a href="mailto:info@donat.com">info@donat.com</a></h4>
                                    </div>
                                </div>
                                <div class="th-social style2">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center gy-3 align-items-center">
                    <div class="col-lg-12">
                        <p class="copyright-text text-center">
                            <i class="fal fa-copyright"></i> Copyright 2025 <a href="index.html">Donat</a>. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from html.themehour.net/donat/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Oct 2025 08:33:26 GMT -->
</html>