
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
                            <h4 class="subscribe-box_title">Have a quick question?</h4>
                            <p class="subscribe-box_text">Message us directly on WhatsApp!</p>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <form class="newsletter-form" onsubmit="sendWhatsApp(event)">
                                <div class="form-group">
                                    <input id="waMessage" class="form-control" type="text" placeholder="Type your query..." required="">
                                </div>
                                <button type="submit" class="th-btn style3">
                                    <i class="fab fa-whatsapp"></i>
                                </button>
                            </form>

                            <script>
                            function sendWhatsApp(e) {
                                e.preventDefault(); // Prevent actual form submission
                                const phone = '919435109844'; // Your WhatsApp number
                                const message = document.getElementById('waMessage').value.trim() || 'Hello, I have a query.';
                                const encoded = encodeURIComponent(message);
                                const url = `https://wa.me/${phone}?text=${encoded}`;
                                window.open(url, '_blank', 'noopener');
                            }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index" style="display: flex; align-items: center; text-decoration: none; gap: 10px;">
                                        <img src="assets/img/logo/logo-dark.png" alt="Donat" style="height: 110px; width: 110px;">
                                        <span style="font-size: 1.4rem; font-weight: 600; color: #1A685B;">Shristi International Society</span>
                                    </a>
                                </div>
                                <p class="about-text">Founded in 2013, Shristi International Society is a nonprofit government organization dedicated to driving positive change in society.</p>
                                <a href="contact.html" class="th-btn"><i class="fas fa-heart me-2"></i>Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xl-2">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="history">History of the NGO</a></li>
                                    <li><a href="leader">Team & Leadership</a></li>
                                    <li><a href="collab">Partners & Collaborations</a></li>
                                    <li><a href="legal">Legal Status & Certifications</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xl-2">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Supports</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="donation">Donations</a></li>
                                    <li><a href="#">Donate Now</a></li>
                                    <li><a href="work">Our Works</a></li>
                                    <li><a href="gallery">Gallery</a></li>
                                    <li><a href="blog">Blogs</a></li>
                                    <li><a href="faq">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
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
                                        <h4 class="box-title"><a href="tel:+919435109844">943-510-9844</a></h4>
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
                                        <h6 class="box-title"><a
                                href="mailto:sshristiinternationalsociety555@gmail.com">sshristiinternational<wbr>society555@gmail.com</a></h6>
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
                            <i class="fal fa-copyright"></i> Copyright 2025 <a href="index">Donat</a>. All Rights Reserved.
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

</html>