<?php

include('includes/header.php');
ini_set('display_errors', 1);

//If add_category button click
if(isset($_POST['upload_category'])) {
    $category=$_POST['category'];
    $category_count_sql = "select count(*) from `press_category` where `category`='$category'";

    $pree = $con->prepare($category_count_sql);

     if ($pree->execute()) {
         $number_of_rows = $pree->fetchColumn();

        if ($number_of_rows > 0)
        {
            echo "<script>alert('Category already inserted')</script>";
        }else {
            $data=[
                'category' =>$category,
            ];
            $query = $crud->Create($data,"press_category");
            if($query)
            {
                echo "<script>alert('Category inserted successfully'); window.location='press-category';</script>";
                // header("Location: press-category");
            }
        }
     }

 }

 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $data = [
        'status' => 0
    ];
    $update =  $crud->Update("press_category",$data,"`id`='$id'");
    if($update){
        echo "<script>alert('Category Disabled successfully'); window.location='press-category';</script>";
        // header("Location: press-category");
    }
}

if(isset($_GET['did'])){
    $id=$_GET['did'];
    $data = [
        'status' => 1
    ];
    $update =  $crud->Update("press_category",$data,"`id`='$id'");
    if($update){
        echo "<script>alert('Category enabled successfully'); window.location='press-category';</script>";
        // header("Location: press-category");
    }
}

if(isset($_GET['delid'])){
    $id = $_GET['delid'];
    $delete = $crud->Delete("press_category", "`id`='$id'");
    if($delete){
        echo "<script>alert('Category deleted successfully'); window.location='press-category';</script>";
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
                            <h2>Press Release</h2>
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
                                    <div class="col-sm-6">
                                        <label class="form-label">Category Name</label>
                                        <input required="" type="text" class="form-control" name="category"
                                            placeholder="Category name">
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="upload_category">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All Categories
                            </h2>
                      <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sl No.</th>
                                            <th>Category</th>
                                            <th>Added On</th>
                                            <th>Status</th>
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
                                                $news_retr_sql = "select *  from `press_category` where `id`<>0 ORDER BY `category` ASC";
                                                $pre = $con->prepare($news_retr_sql);
                                                $i = 0;
                                                if($pre->execute()){
                                                    while ($row = $pre->fetch(PDO::FETCH_ASSOC)){
                                                        $i++;
                                    ?>
                                       <tr>
                                        <th class="text-center"><?= $i ?></th>
                                        <th><?= $row['category'] ?></th>
                                        <th><?= date('d M Y h:i A', strtotime($row['added_on'])) ?></th>
                                        <th>
                                            <?php if($row['status'] == 1){ ?>
                                                <span class="badge" style="background:green;">Active</span>
                                            <?php }else if($row['status'] == 0){ ?>
                                                <span class="badge" style="background:orange;">Inactive</span>
                                            <?php } ?>
                                        </th>
                                        <th>
                                            <?php if($row['status'] == 1){ ?>
                                                <a href="press-category?id=<?php echo $row['id']?>" class="btn btn-success">Block</a>
                                            <?php }else if($row['status'] == 0){ ?>
                                                <a href="press-category?did=<?php echo $row['id']?>" class="btn btn-warning">Unblock</a>
                                            <?php } ?>
                                            <a href="press-category?delid=<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">Delete</a>
                                        </th>
                                       </tr>
                                       <?php 
                                            }}}
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
        </div>
    </section>
    <?php

//Include footer page
require_once('includes/footer.php');

?>