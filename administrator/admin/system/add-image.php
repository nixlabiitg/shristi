<?php

include('includes/header.php');
ini_set('display_errors', 1);

if(isset($_POST['upload_news'])) {
    $category = $_POST['category'];
    $title    = $_POST['title']; 

    @mkdir("lib/images/gallery/");

    $ext = explode(".", $_FILES['gallery_img']['name']);
    $ext = end($ext);
    $ext = strtolower($ext);

     // Generate a unique and encrypted name for the image
     $encryptedName = md5(uniqid(rand(), true)) . '.' . $ext;
     $path = "lib/images/gallery/" . $encryptedName;

    // Check if the file size is less than or equal to 200 KB
   $maxFileSize =  300 * 1024; // 200 KB in bytes
   $fileSize = $_FILES['gallery_img']['size'];
    if ($fileSize <= $maxFileSize) {
        $flag_1 = 0;
        
        if ($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "bmp" || $ext == "gif" || $ext == "pdf") {
            move_uploaded_file($_FILES['gallery_img']['tmp_name'], $path);
            $flag_1 = 1;
        } else {
            return "4";
        }

        if ($flag_1 == 1) {
            $data = [
                'category' => $category,
                'title' => $title,
                'image' => $path,
            ];
            $query = $crud->Create($data, "gallery");
            if ($query) {
                echo "<script>alert('Image inserted successfully');  window.location='add-image';</script>";
            }
        }
    } else {
        echo "<script>alert('File size exceeds the maximum limit of 300 KB.');  window.location='add-image';</script>";

    }
}
?>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php include('includes/navbar.php'); ?>
    <!-- #Top Bar -->

    <section class="content">
        <div class="container-fluid">
            <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                            <h2>Upload Gallery Image</h2>


                        </div>
                        <div class="body">
                            <center>
                                <font>
                                    <?php

                                      if (!empty($msg))
                                        print $msg; //Message print
                                    ?>
                                </font>
                            </center>
                            <form id="form_validate" method="POST" enctype="multipart/form-data">

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <label class="form-label">Title</label>
                                        <input required="" id="summernote" type="text" class="form-control" name="title"  placeholder="Gallery Title">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Choose Category</label>
                                        <select name="category" id="" class="form-control">
                                            <option value="" selected disabled>Choose an option</option>
                                            <?php
                                                //Retriving Users
                                                try{
                                                    //Database Connection Open
                                                    $conn = new Connection();
                                                    $con  = $conn->Open();

                                                    if ($con) {
                                                    //echo "<script>alert('$id')</script>";
                                                        $news_retr_sql = "select *  from `category` where `status` = 1";
                                                        $pre = $con->prepare($news_retr_sql);
                                                        if($pre->execute()){
                                                            while ($row = $pre->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                                <option value="<?= $row['id'] ?>"><?= $row['category'] ?></option>
                                            <?php 
                                                }}}
                                                //Close Database Connection
                                                $conn->Close();
                                            }
                                            catch(PDOException $e){

                                            }
                                            //End of Category
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Upload image <span style="color: orange; font-size : 13px;">(Max. image size : 300 KB)</span></label>
                                        <input required="" type="file" class="form-control" name="gallery_img"
                                            accept="image/x-png,image/gif,image/jpeg">
                                    </div>

                                </div>

                                <button class="btn btn-primary waves-effect" type="submit" name="upload_news">Upload
                                    Image</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
        </div>
    </section>
    <?php

//Include footer page
require_once('includes/footer.php');

?>