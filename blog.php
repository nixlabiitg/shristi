<?php 
$page = 'blog';
include("administrator/admin/system/classes/Crud.php");
$crud = new Crud();
ini_set('display_errors', 1);
include("include/header.php"); ?>
    <!--============================== Breadcumb ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Blog</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Our Blog</li>
                </ul>
            </div>
        </div>
    </div><!--============================== Blog Area ==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40 justify-content-center">
                <?php
                    $readblogs = $crud->Read("blog", "`status`='1' order by id desc");
                    if (!empty($readblogs)) {
                        foreach ($readblogs as $key) {
                            $date = strtotime($key['upload_date']);
                ?>
                <div class="col-xxl-4 col-lg-4">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details?blog-id=<?= $key['id'] ?>" data-cursor-text="View"><img style="width:100%; height:250px; object-fit:cover;" src="administrator/admin/system/<?php echo htmlspecialchars($key['post_image']); ?>" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <i class="fas fa-calendar-days"></i><?= date('d F Y', $date); ?>
                                <i class="fas fa-tags"></i>Education
                                
                            </div>
                            <h2 class="blog-title"><a href="blog-details?blog-id=<?= $key['id'] ?>"><?= htmlspecialchars(substr($key['heading'], 0, 60)); ?></a>
                            </h2>
                            <a href="blog-details?blog-id=<?= $key['id'] ?>" class="th-btn btn-sm">Read More <i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
                
            </div>
        </div>
    </section>
    <?php include("include/footer.php"); ?>