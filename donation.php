<?php 
$page = 'donation';
include("administrator/admin/system/classes/Crud.php");
$crud = new Crud();
ini_set('display_errors', 1);
include("include/header.php"); ?>
    <!--============================== Breadcumb ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Donations</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Donations</li>
                </ul>
            </div>
        </div>
    </div>
    <!--============================== Donation Area ==============================-->
    <section class="space" id="donation-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title before-none after-none"><i class="far fa-heart text-theme"></i> Lets Start Donating</span>
                        <h2 class="sec-title">See Your Impact: Transparent
                            Donation Causes</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <?php
                    $readdonations = $crud->Read("donation", "`status`='1' order by id desc");
                    if (!empty($readdonations)) {
                        foreach ($readdonations as $key) {
                            $date = strtotime($key['upload_date']);
                ?>
                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="administrator/admin/system/<?php echo htmlspecialchars($key['post_image']); ?>" alt="image">
                            <div class="donation-card-tag">85%</div>
                            <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><?= htmlspecialchars(substr($key['heading'], 0, 60)); ?></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <a href="donate-now" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                
                <?php
                        }
                    }
                ?>
                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2-2.png" alt="image">
                            <div class="donation-card-tag bg-theme2">85%</div>
                            <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="donation-details.html">Help Children poor Insurance & Medical</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <a href="donation-details.html" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2-3.png" alt="image">
                            <div class="donation-card-tag">85%</div>
                            <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="donation-details.html">Help us touch their lives of these youths</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <a href="donation-details.html" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2-4.png" alt="image">
                            <div class="donation-card-tag bg-theme2">85%</div>
                            <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="donation-details.html">Raise Fund for Clean & Healthy Water</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <a href="donation-details.html" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2-5.png" alt="image">
                            <div class="donation-card-tag">85%</div>
                            <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="donation-details.html">Be hungry no more & Leave no one behind</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <a href="donation-details.html" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2-6.png" alt="image">
                            <div class="donation-card-tag bg-theme2">85%</div>
                            <div class="donation-card-shape" data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="donation-details.html">Medical Health or People React Acuter.</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <a href="donation-details.html" class="th-btn style6">Donate Now <i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include("include/footer.php"); ?>