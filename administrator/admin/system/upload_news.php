<?php

include('includes/header.php');
ini_set('display_errors', 1);

//If add_category button click
if(isset($_POST['upload_news'])) {

    $news_desc=$_POST['news_desc'];
    $heading=$_POST['heading'];
    $news_count_sql = "select count(*) from `news` where `heading`='$heading'";

     $pree = $con->prepare($news_count_sql);

     

     if ($pree->execute()) {
         $number_of_rows = $pree->fetchColumn();

         if ($number_of_rows > 0)
         {
            echo "<script>alert('news already inserted')</script>";
             }
         else {

                @mkdir("lib/images/news/");
                @mkdir("lib/images/news/images/");
                $path2 = "lib/images/news/images/".basename($_FILES['post_image']['name']);
                
                $ext = explode(".", $_FILES['post_image']['name']);
                $ext = end($ext);
                $ext = strtolower($ext);

                $flag_1 = 0;
                if( $ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="bmp" || $ext=="gif" || $ext=="pdf")
                {
                    move_uploaded_file($_FILES['post_image']['tmp_name'], $path2);
                        $flag_1 = 1;
                }

                else
                return "4";

            if ($flag_1 == 1) {

                
                $data=[
                    'heading' =>$heading,
                    'description' =>$news_desc,
                    'post_image' =>$path2,
                    'upload_date' =>$today,
                    'upload_time' =>date('Y-m-d H:i:s'),
                    'status' =>1
                ];
                $query = $crud->Create($data,"news");
                 if($query)
                 {
                     echo "<script>alert('news inserted successfully')</script>";
                 }
        }
     }

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

                                <h2>Upload news</h2>

                                
                        </div>
                        <div class="body">
                            <center>
                                <font>
                                    <?php

                                      if (!empty($msg))
                                        print $msg; //Message print
                                    ?>
                                </font>
                            </center><br>
                            <form id="form_validate" method="POST" enctype="multipart/form-data">

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <label class="form-label">news Heading</label>
                                        <input required="" type="text" class="form-control" name="heading"  placeholder="news Heading">
                                    </div>
                                  <div class="col-sm-12">
                                      <label class="form-label">Description</label>
                                        <textarea required="" id="summernote" type="text" class="form-control" rows="10" name="news_desc" placeholder="news Description"></textarea>
                                  </div>

                                </div>

                                    <div class="row clearfix">

                                        <div class="col-sm-6">
                                            <label class="form-label">Upload image</label>
                                                <input required="" type="file" name="post_image" accept="image/x-png,image/gif,image/jpeg" >
                                        </div>
                                </div>

                               <button class="btn btn-primary waves-effect" type="submit" name="upload_news">Upload news</button><br><br>
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
