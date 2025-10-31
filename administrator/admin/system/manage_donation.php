  <?php
include('includes/header.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $data = [
        'status' => 0
    ];
    $update =  $crud->Update("donation",$data,"`id`='$id'");
    if($update){
        echo "<script>alert('donation Disabled successfully');  window.location='manage_donation';</script>";
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


            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All donation
                            </h2>
                      <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Goal</th>
                                            <th>Raised</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                       <?php
                                        //Retriving Users
                                        try{

                                            //Database Connection Open
                                            $conn = new Connection();
                                            $con  = $conn->Open();

                                            if ($con) {
                                             //echo "<script>alert('$id')</script>";
                                                $donation_retr_sql = "select *  from `donation` where `status`=1";

                                                $pre = $con->prepare($donation_retr_sql);

                                                $i = 0;

                                                if($pre->execute()){

                                                    while ($row = $pre->fetch(PDO::FETCH_ASSOC)){

                                                        $i++;
                                                        ?>

                                                        <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row['heading']?></td>

                                                        <td><?php echo $row['description']?></td>

                                                        <td><a href="<?php echo $row['post_image'] ?>" target="_blank"><img src="<?php echo $row['post_image'] ?>" width="100px;"></a></td>
                                                        <td><?php echo $row['goal_amount']?></td>

                                                        <td><?php echo $row['raised_amount']?></td>

                                                        <td nowrap>
                                                            <a href="edit_donation?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                                            <a href="manage_donation?id=<?php echo $row['id']; ?>" class="btn btn-danger">Unpublish</a>
                                                            <a href="delete_donation?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                                        </td>

                                                 <?php }
                                                }
                                            }

                                            //Close Database Connection
                                            $conn->Close();
                                        }
                                        catch(PDOException $e){

                                        }
                                        //End of Category
                                        ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <?php

//Include footer page
require_once('lib/footer.php');
?>
