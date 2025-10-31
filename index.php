<?php
$page = 'gallery';
include("administrator/admin/system/classes/Crud.php");
$crud = new Crud();
ini_set('display_errors', 1);
include("include/header.php"); 

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';
?>

    <!--============================== Hero Area ==============================-->
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider1" id="heroSlide1" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="assets/img/hero/hero_bg_1_1.jpg" data-overlay="black4" data-opacity="5">
                        <div class="hero-bg-shape1-1">
                            <img src="assets/img/home/home.png" alt="img">
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup" data-ani-delay="0.2s">Give Hope For Homeless</span>
                                        <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Helping Each Other Can </span>
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Make World Better </span>
                                        </h1>
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                            <a href="contact" class="th-btn style4">Discover Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                            <a href="about" class="th-btn style5"><i class="fas fa-play me-2"></i>Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="assets/img/hero/hero_bg_1_2.jpg" data-overlay="black4" data-opacity="5">
                        <div class="hero-bg-shape1-1">
                            <img src="assets/img/hero/hero-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup" data-ani-delay="0.2s">Welcome to Donat Charity</span>
                                        <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Every Donation Counts </span>
                                            <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                Every Heart Matters </span>
                                        </h1>
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                            <a href="contact" class="th-btn style4">Discover Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                            <a href="about" class="th-btn style5 popup-video"><i class="fas fa-play me-2"></i> Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--============================== Service Area ==============================-->
    <section class="overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/gray-bg1.png" data-overlay="gray" data-opacity="6">
        <div class="shape-mockup service-bg-shape1-1 d-xxl-inline-block d-none" data-top="15%" data-left="0">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="assets/img/shape/hand-shape1.png"></div>
                <img src="assets/img/shape/hand-shape1.png" alt="img">
            </div>
        </div>
        <div class="shape-mockup service-bg-shape1-2 d-xxl-inline-block d-none" data-top="35%" data-left="0">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="assets/img/shape/hand-shape2.png"></div>
                <img src="assets/img/shape/hand-shape2.png" alt="img">
            </div>
        </div>
        <div class="service-bg-shape1-3 d-xxl-inline-block d-none"></div>
        <div class="service-bg-shape1-4 d-xxl-inline-block d-none"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area text-center">
                        <span class="sub-title">Charity Services</span>
                        <h2 class="sec-title">Support for Every Life</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 gx-30 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="box-icon">
                            <img src="assets/img/icon/service-icon/service-card-icon1-1.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Health Initiatives</h3>
                            <p class="box-text">Promoting better well-being by providing healthcare support, awareness programs, and essential medical assistance to underserved communities.</p>
                            <a href="about" class="th-btn">Learn More<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="box-icon">
                            <img src="assets/img/icon/service-icon/service-card-icon1-2.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Education Support</h3>
                            <p class="box-text">Enabling access to quality learning through scholarships, resource distribution, and guidance for students from disadvantaged backgrounds.</p>
                            <a href="about" class="th-btn">Learn More<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="box-icon">
                            <img src="assets/img/icon/service-icon/service-card-icon1-3.svg" alt="Icon">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Aid for Poor & Homeless</h3>
                            <p class="box-text">Offering food, shelter, and relief assistance to individuals in need, ensuring dignity and support during vulnerable times with care, compassion, and hope.</p>
                            <a href="about" class="th-btn">Learn More<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================== About Area ==============================-->
    <div class="overflow-hidden mb-50" id="about-sec">
        <div class="shape-mockup about-bg-shape1-1 jump-reverse" data-top="10%" data-right="5%">
            <img src="assets/img/shape/heart-shape1.png" alt="shape">
        </div>
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-7">
                    <div class="img-box1">
                        <div class="img1" data-mask-src="assets/img/normal/about_1_1-mask.png">
                            <img src="assets/img/normal/about_1_1.png" alt="About">
                        </div>
                        <div class="about-shape1-1 jump">
                            <img src="assets/img/shape/about_shape1_1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-wrap1">
                        <div class="title-area mb-30">
                            <span class="sub-title before-none">About Us</span>
                            <h2 class="sec-title">Shristi International Society: Empowering Communities, Enriching Lives</h2>
                            <p class="">Established in 2013, Shristi International Society is a non-profit government organization
                            founded with a vision to serve society through meaningful initiatives across diverse fields.
                            We believe that when people come together with a shared purpose, the power to bring change
                            grows exponentially. Guided by this belief, Shristi acts as a platform that unites
                            communities to support those in need and work collectively toward building a better, more
                            compassionate world.</p>
                        </div>
                        <div class="checklist style2 list-two-column">
                            <ul>
                                <li data-theme-color="#FF5528">Health Initiatives</li>
                                <li data-theme-color="#122F2A">Women Empowerment</li>
                                <li data-theme-color="#122F2A">Environmental Action</li>
                                <li data-theme-color="#FF5528">Education Support</li>
                                <li data-theme-color="#FF5528">Aid for Poor & Homeless</li>
                                <li data-theme-color="#122F2A">Art & Culture Promotion</li>
                                <li data-theme-color="#122F2A">Classical Music Promotion</li>
                            </ul>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about" class="th-btn">About More<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============================== Cta Area ==============================-->
    <div class="cta-area-1">
        <div class="container z-index-common mt-40 pt-40" data-pos-for="#donation-sec" data-sec-pos="bottom-half">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="cta-card" data-bg-src="assets/img/bg/cta-bg1-1.jpg">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0" data-mask-src="assets/img/shape/cta_shape1_1.png">
                            <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                        </div>
                        <h3 class="box-title">Reach Us Anytime</h3>
                        <p class="box-text">Whenever you need us, we are here — reach out to us anytime for questions, assistance, or opportunities to get involved, and we will be happy to help with dedication and respect.</p>
                        <a href="tel:+919435109844" class="th-btn style5">Contact Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-card style2" data-bg-src="assets/img/bg/cta-bg1-2.jpg">
                        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0" data-mask-src="assets/img/shape/cta_shape1_1.png">
                            <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                        </div>
                        <h3 class="box-title">Be a Part of the Change</h3>
                        <p class="box-text">With your kind support, we can provide help where it's needed most—bringing education, nourishment, shelter, and care to those facing hardship. One act of kindness can inspire countless lives.</p>
                        <a href="#" class="th-btn style5">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Donation Area ==============================-->
    <section class="space bg-gray" data-bg-src="assets/img/bg/donation-bg1-1.png" id="donation-sec">
        <div class="shape-mockup donation-bg-shape1-1" data-bottom="0" data-right="0"><img src="assets/img/shape/donation-shape1-1.png" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title">Lets Start Donating</span>
                        <h2 class="sec-title">See Your Impact: Transparent
                            Donation Causes</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="donationSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="">
                                <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-1.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details">Big charity: build school for poor children</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 5M</span>
                                            <span class="donation-card_goal">Goal - $10M</span>
                                        </div>
                                    </div>
                                    <a href="blog-details" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="var(--theme-color2)">
                                <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-2.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details">Give health support for every homeless poor children</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 5M</span>
                                            <span class="donation-card_goal">Goal - $10M</span>
                                        </div>
                                    </div>
                                    <a href="blog-details" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="#FF5528">
                                <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-3.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details">Construct Dwellings African Impoverished Women</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 5M</span>
                                            <span class="donation-card_goal">Goal - $10M</span>
                                        </div>
                                    </div>
                                    <a href="blog-details" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="">
                                <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-1.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details">Big charity: build school for poor children</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 5M</span>
                                            <span class="donation-card_goal">Goal - $10M</span>
                                        </div>
                                    </div>
                                    <a href="blog-details" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="var(--theme-color2)">
                                <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-2.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details">Give health support for every homeless poor children</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 5M</span>
                                            <span class="donation-card_goal">Goal - $10M</span>
                                        </div>
                                    </div>
                                    <a href="blog-details" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="donation-card" data-theme-color="#FF5528">
                                <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-bg-shape1-1.png"></div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-3.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="blog-details">Construct Dwellings African Impoverished Women</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Raised - 5M</span>
                                            <span class="donation-card_goal">Goal - $10M</span>
                                        </div>
                                    </div>
                                    <a href="blog-details" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================== Cta Area ==============================-->
    <section class="cta-area-2 space overflow-hidden bg-theme-dark" id="contact-sec">
        <div class="cta-bg-shape2-1 shape-mockup jump d-lg-block d-none" data-top="-22%" data-left="2%"><img src="assets/img/shape/cta_shape2_1.png" alt="img"></div>
        <div class="cta-bg-shape2-2 shape-mockup jump-reverse d-lg-block d-none" data-top="-12%" data-right="-5%"><img src="assets/img/shape/cta_shape2_2.png" alt="img"></div>
        <div class="cta-bg-shape2-3 shape-mockup jump-reverse d-md-block d-none" data-bottom="5%" data-left="0"><img src="assets/img/shape/cta_shape2_3.png" alt="img"></div>
        <div class="cta-bg-shape2-4 shape-mockup jump d-md-block d-none" data-bottom="5%" data-right="0"><img src="assets/img/shape/cta_shape2_4.png" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area text-center mb-0">
                        <h2 class="sec-title text-white">Our Door Are Always Open to More People Who Want to Support Each Others!</h2>
                        <a href="#" class="th-btn style5 mt-40">Donate Now<i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================== Story Area ==============================-->
    <div class="story-area-1 overflow-hidden space">
        <div class="container">
            <div class="row gy-40 justify-content-between flex-row-reverse align-items-center">
                <div class="col-xl-7">
                    <div class="story-img-box1">
                        <div class="box-wrap d-inline-block">
                            <div class="img1">
                                <img src="assets/img/normal/story_1_1.png" alt="img">
                            </div>
                            <div class="story-shape1-1 jump-reverse">
                                <img src="assets/img/shape/story_shape1_1.png" alt="img">
                            </div>
                            <div class="story-card movingX">
                                <h5 class="box-title">Adam Cruz</h5>
                                <p class="box-text">Our success stories highlight the
                                    real life impact of your donations &
                                    the resilience of those we help.
                                    These narratives showcase the
                                    power of compassion.</p>
                                <div class="quote-icon" data-mask-src="assets/img/icon/quote.svg"></div>
                            </div>
                            <div class="year-counter">
                                <p class="year-counter_text">Years of <span>Experience</span></p>
                                <div class="year-counter_number"><span class="counter-number">12</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="story-wrap1">
                        <div class="title-area mb-0">
                            <span class="sub-title before-none">Success Story</span>
                            <h2 class="sec-title">We Help Fellow Nonprofits Access the Funding Tools, Training</h2>
                            <p class="mt-30">Our secure online donation platform allows you to make contributions quickly and safely. Choose from various payment methods and set up one-time.exactly.</p>
                            <div class="btn-wrap mt-35">
                                <a href="about" class="th-btn style-border">Our Success Story <i class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============================== Team Area ==============================-->
    <section class="space-bottom team-area-1">
        <div class="shape-mockup team-bg-shape1-1 spin d-xxl-block d-none" data-top="0%" data-right="3%"><img src="assets/img/shape/hand-group-shape1.png" alt="img"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Volunteer</span>
                <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow team-slider1" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_1.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Michel Connor</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_2.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Joseph Alexander</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_3.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Jessica Lauren</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_4.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Daniel Thomas</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_1.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Michel Connor</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_2.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Joseph Alexander</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_3.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Jessica Lauren</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_4.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details">Daniel Thomas</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section><!--============================== Video Area ==============================-->
    <div class="video-area-1 space bg-theme overflow-hidden">
        <div class="shape-mockup video-bg-shape1-1" data-top="0" data-left="0">
            <img src="assets/img/shape/video_shape1_1.png" alt="img">
        </div>
        <div class="shape-mockup video-bg-shape1-2" data-bottom="0" data-right="0">
            <img src="assets/img/shape/video_shape1_2.png" alt="img">
        </div>
        <div class="container">
            <div class="row gy-40 justify-content-between">
                <div class="col-xl-5">
                    <div class="title-area mb-35">
                        <h2 class="sec-title text-white">Transforming Hardship Into Hope</h2>
                        <p class="text-white">Explore how our initiatives are transforming lives by offering vital support, meaningful opportunities, and long-term empowerment to those who are navigating challenging situations.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-theme2"><span class="counter-number">15</span>k<span class="fw-light">+</span></h2>
                                <p class="box-text text-white">Incredible Volunteers</p>
                            </div>
                        </div>
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-white"><span class="counter-number">1</span>k<span class="fw-light">+</span></h2>
                                <p class="box-text text-white">Successful Campaigns</p>
                            </div>
                        </div>
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-white"><span class="counter-number">400</span><span class="fw-light">+</span></h2>
                                <p class="box-text text-white">Monthly Donors</p>
                            </div>
                        </div>
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-theme2"><span class="counter-number">35</span>k<span class="fw-light">+</span></h2>
                                <p class="box-text text-white">Team Support</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="video-thumb1-1 video-box-center">
                        <img src="assets/img/normal/video-thumb1-1.png" alt="img">
                        <a href="about" class="play-btn style2"><i class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--============================== Testimonial Area ==============================-->
    <section class="testi-area-1 space overflow-hidden" id="testi-sec">
        <div class="shape-mockup testi-bg-shape1-1 jump-reverse d-xl-block d-none" data-top="5%" data-right="0">
            <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
        </div>
        <div class="shape-mockup testi-bg-shape1-2" data-top="28%" data-left="5%">
            <img src="assets/img/shape/testimonial_shape1_1.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <span class="sub-title">Testimonials</span>
                        <h2 class="sec-title">What People Say About
                            Our Charity</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-end">
                <div class="col-lg-5">
                    <div class="swiper th-slider testi-thumb-slider1" data-slider-options='{"effect":"fade","loop":false}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testi-slider1">
                        <div class="swiper th-slider testimonial-slider1" id="testiSlide1" data-slider-options='{"loop":false,"paginationType":"progressbar","effect":"fade", "autoHeight": "true", "thumbs":{"swiper":".testi-thumb-slider1"}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns. Whether it's a fundraising gala, a charity run, or a community outreach program, there are plenty of ways to get involved and support our cause. Check our event calendar for details. We prioritize your security. Our donation process uses the latest encryption technology to protect your personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption technology to protect your personal and financial information. Donate with confidence knowing Stay informed about our upcoming events and campaigns. Whether it's a fundraising gala, a charity run, or a community outreach program, there are plenty of ways to get involved and support our cause. Check our event calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns. Whether it's a fundraising gala, a charity run, or a community outreach program, there are plenty of ways to get involved and support our cause. Check our event calendar for details. We prioritize your security. Our donation process uses the latest encryption technology to protect your personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption technology to protect your personal and financial information. Donate with confidence knowing Stay informed about our upcoming events and campaigns. Whether it's a fundraising gala, a charity run, or a community outreach program, there are plenty of ways to get involved and support our cause. Check our event calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-pagination"></div>
                            <div class="slider-pagination2"></div>
                        </div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide1" class="slider-arrow default style-border slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide1" class="slider-arrow default style-border slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================== Gallery Area ==============================-->
    <section class="overflow-hidden">
        <div class="project-wrap1 space th-radius overflow-hidden" data-bg-src="assets/img/bg/gray-bg2.png" data-overlay="gray" data-opacity="5">
            <div class="shape-mockup project-bg-shape1-1" data-top="0" data-right="0">
                <img src="assets/img/shape/project-shape1-1.png" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-md-between align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="title-area">
                            <span class="sub-title before-none">Journey of Change</span>
                            <h2 class="sec-title">Our Work in Pictures</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn">
                            <a href="gallery" class="th-btn">View All Pictures<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider" id="ProjectSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            <?php 
                                if ($category_id != '') {
                                    $gallery = $crud->Read("gallery", "`status`='1' AND `category`='$category_id' ORDER BY id DESC");
                                } else {
                                    $gallery = $crud->Read("gallery", "`status`='1' ORDER BY id DESC");
                                }

                                if (!empty($gallery)) {
                                    foreach($gallery as $img){
                            ?>
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="project-card">
                                    <div class="project-img">
                                        <a href="administrator/admin/system/<?= $img['image'] ?>" class="popup-image"><img style="width:100%; height:250px; object-fit:cover; border-radius:6px;" src="administrator/admin/system/<?= $img['image'] ?>" alt="gallery image"></a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                    }
                                } else {
                                    echo "<div class='col-12 text-center'><h5>No images found for this category.</h5></div>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================== Faq Area ==============================-->
    <div class="overflow-hidden space-top">
        <div class="shape-mockup faq-bg-shape1-1 jump" data-mask-src="assets/img/normal/faq_1_3.png" data-top="15%" data-right="2%">
            <img src="assets/img/normal/faq_1_3.png" alt="img">
        </div>
        <div class="container">
            <div class="row gx-80 justify-content-between">
                <div class="col-xl-5">
                    <div class="faq-img-box1">
                        <div class="img1">
                            <img src="assets/img/normal/faq_1_1.png" alt="img">
                        </div>
                        <div class="mask-shape" data-mask-src="assets/img/normal/faq_1_1-mask.png"></div>
                        <div class="img2 jump">
                            <img src="assets/img/normal/faq_1_2.png" alt="img">
                        </div>
                        <div class="img3 spin">
                            <img src="assets/img/shape/hand-group-shape1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="faq-wrap1">
                        <div class="title-area">
                            <span class="sub-title before-none">Frequently Asked Questions</span>
                            <h2 class="sec-title">Have Any Questions For Us?</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What is Shristi International Society?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Shristi International Society is a non-profit organization founded in 2013 focused on serving underprivileged communities through initiatives in health, education, women empowerment, culture, music, and environmental action.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Is Shristi International Society a government-registered NGO?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes. Shristi International Society is a government-registered nonprofit organization working to create positive social impact across India.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How can I donate to Shristi International Society?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">You can donate online through our official donation page. We also accept contributions via bank transfer and offline donations. Every donation supports our social projects.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">How are donations used?</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Donations are allocated to support education, health drives, food distribution, women empowerment initiatives, environmental programs, and cultural development projects. We ensure complete transparency in fund utilization.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Blog Area ==============================-->
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">News & Articles</span>
                <h2 class="sec-title">Our Latest News & Articles</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <?php
                            $readblogs = $crud->Read("blog", "`status`='1' order by id desc");
                            if (!empty($readblogs)) {
                                foreach ($readblogs as $key) {
                                    $date = strtotime($key['upload_date']);
                        ?>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="blog-details?blog-id=<?= $key['id'] ?>" data-cursor-text="View"><img style="width:100%; height:250px; object-fit:cover;" src="administrator/admin/system/<?php echo htmlspecialchars($key['post_image']); ?>" alt="Blog Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-card-shape" data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
                                    <div class="blog-meta">
                                        <i class="fas fa-calendar"></i> <?= date('d F Y', $date); ?>
                                        <i class="fas fa-tags"></i> Education
                                    </div>
                                    <h3 class="box-title"><a href="blog-details?blog-id=<?= $key['id'] ?>"><?= htmlspecialchars(substr($key['heading'], 0, 60)); ?></a></h3>
                                    <a href="blog-details?blog-id=<?= $key['id'] ?>" class="th-btn">Read More <i class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                </div>
                <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

<?php include("include/footer.php"); ?>