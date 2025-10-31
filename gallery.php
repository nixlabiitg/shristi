<?php
$page = 'gallery';
include("administrator/admin/system/classes/Crud.php");
$crud = new Crud();
ini_set('display_errors', 1);
include("include/header.php"); 

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';
?>


    <!--============================== Breadcumb ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!--============================== Gallery Area  ==============================-->
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row gy-30 gx-30 filter-active">
                <?php 
                    if ($category_id != '') {
                        $gallery = $crud->Read("gallery", "`status`='1' AND `category`='$category_id' ORDER BY id DESC");
                    } else {
                        $gallery = $crud->Read("gallery", "`status`='1' ORDER BY id DESC");
                    }

                    if (!empty($gallery)) {
                        foreach($gallery as $img){
                ?>
                <div class="col-md-6 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="administrator/admin/system/<?= $img['image'] ?>" alt="gallery image">
                            <a href="administrator/admin/system/<?= $img['image'] ?>" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
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
   <?php include("include/footer.php"); ?>