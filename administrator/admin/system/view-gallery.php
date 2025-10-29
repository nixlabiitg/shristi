  <?php
    include('includes/header.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $data = [
            'status' => 0
        ];
        $update =  $crud->Update("gallery",$data,"`id`='$id'");
        if($update){
            echo "<script>alert('Image Disabled successfully'); window.location='view-gallery';</script>";
            // header("Location: view-gallery");
        }
    }

    if(isset($_GET['did'])){
        $id=$_GET['did'];
        $data = [
            'status' => 1
        ];
        $update =  $crud->Update("gallery",$data,"`id`='$id'");
        if($update){
            echo "<script>alert('Image enabled successfully'); window.location='view-gallery';</script>";
            // header("Location: view-gallery");
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
                                  All Gallery Image
                              </h2>
                              <ul class="header-dropdown m-r--5">
                                  <li class="dropdown">
                                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                          role="button" aria-haspopup="true" aria-expanded="false">
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
                                              <th>Image</th>
                                              <th class="text-center">Category</th>
                                               <th class="text-center">Title</th> 
                                              <th>Added on</th>
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
                                                $news_retr_sql = "select *  from `gallery` where `id`<> 0";

                                                $pre = $con->prepare($news_retr_sql);

                                                $i = 0;

                                                if($pre->execute()){

                                                    while ($row = $pre->fetch(PDO::FETCH_ASSOC)){

                                                        $i++;
                                                        ?>

                                          <tr>
                                              <td class="text-center"><?php echo $i; ?></td>
                                              <td><a href="<?php echo $row['image'] ?>" target="_blank"><img
                                                          src="<?php echo $row['image'] ?>" width="100px;"></a></td>
                                              <td class="text-center">
                                                <?php
                                                    $catid = $row['category'];
                                                    $category_sql = "select *  from `category` where `id`='$catid'";
                                                    $data = $con->prepare($category_sql);
                                                    if($data->execute()){
                                                        while($key = $data->fetch(PDO::FETCH_ASSOC)) {
                                                            echo $key['category'];
                                                        }
                                                    }
                                                ?>
                                              </td>
                                              <td class="text-center"><?php echo $row['title']; ?></td>
                                                </td>
                                              <td><?php echo date('d M Y h:i A', strtotime($row['added_on']))?></td>
                                              <th>
                                                  <?php if($row['status'] == 1){ ?>
                                                  <span class="badge" style="background:green;">Active</span>
                                                  <?php }else if($row['status'] == 0){ ?>
                                                  <span class="badge" style="background:orange;">Inactive</span>
                                                  <?php } ?>
                                              </th>
                                              <th>
                                                  <?php if($row['status'] == 1){ ?>
                                                  <a href="view-gallery?id=<?php echo $row['id']?>"
                                                      class="btn btn-success">Block</a>
                                                  <?php }else if($row['status'] == 0){ ?>
                                                  <a href="view-gallery?did=<?php echo $row['id']?>"
                                                      class="btn btn-warning">Unblock</a>
                                                  <?php } ?>
                                              </th>
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