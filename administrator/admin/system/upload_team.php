<?php

include('includes/header.php');
ini_set('display_errors', 1);

//If add_category button click
if(isset($_POST['upload_team'])) {

    $heading=$_POST['heading'];
    $team_count_sql = "select count(*) from `team` where `heading`='$heading'";

     $pree = $con->prepare($team_count_sql);

     

     if ($pree->execute()) {
         $number_of_rows = $pree->fetchColumn();

         if ($number_of_rows > 0)
         {
            echo "<script>alert('team already inserted')</script>";
             }
         else {

                @mkdir("lib/images/team/");
                @mkdir("lib/images/team/images/");
                $path2 = "lib/images/team/images/".basename($_FILES['post_image']['name']);
                
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
                    'post_image' =>$path2,
                    'added_on' => date('Y-m-d H:i:s'),
                    'status' =>1
                ];
                $query = $crud->Create($data,"team");
                 if($query)
                 {
                     echo "<script>alert('team inserted successfully')</script>";
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
                            <h2>Upload Team</h2>
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
                                        <label class="form-label">Team Heading</label>
                                        <input required="" type="text" class="form-control" name="heading"  placeholder="team Heading">
                                    </div>
                                </div>
                                    <div class="row clearfix">

                                        <div class="col-sm-6">
                                            <label class="form-label">Upload image</label>
                                                <input required="" type="file" name="post_image" accept="image/x-png,image/gif,image/jpeg" >
                                        </div>
                                </div>

                               <button class="btn btn-primary waves-effect" type="submit" name="upload_team">Upload team</button><br><br>
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
