<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php

include('includes/header.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
if($id != '') {
    $readdonation = $crud->Read("donation", "`id`='$id'");
    if (!empty($readdonation)) {
        $donation = $readdonation[0];
    } else {
        echo "<script>alert('donation not found');window.location.assign('manage_donation.php');</script>";
        exit;
    }
} else {
    echo "<script>alert('No donation ID specified');window.location.assign('manage_donation.php');</script>";
    exit;
}
if (isset($_POST['update_donation'])) {
    $heading = $_POST['heading'];
    $description = $_POST['donation_desc'];
    $goal_amount   = $_POST['goal_amount'];
    $raised_amount = $_POST['raised_amount'];
    $old_image = $_POST['old_image'];
    $today = date("Y-m-d");
    $time = date("H:i:s");

    // Handle image
    $new_image_path = $old_image;
    if (!empty($_FILES['donation_image']['name'])) {
        @mkdir("lib/images/donation/");
        @mkdir("lib/images/donation/images/");
        $ext = strtolower(end(explode(".", $_FILES['donation_image']['name'])));
        $file_name = basename($_FILES['donation_image']['name']);
        $new_image_path = "lib/images/donation/images/" . $file_name;

        if (in_array($ext, ["jpg", "jpeg", "png", "bmp", "gif"])) {
            if (!move_uploaded_file($_FILES['donation_image']['tmp_name'], $new_image_path)) {
                echo "<script>alert('Failed to upload new image. Keeping old image.');</script>";
                $new_image_path = $old_image;
            }
        } else {
            echo "<script>alert('Invalid file type. Keeping old image.');</script>";
            $new_image_path = $old_image;
        }
    }

    // Prepare data & update
    $data = [
        'heading' => $heading,
        'description' => $description,
        'post_image' => $new_image_path,
        'raised_amount' => $raised_amount,
        'goal_amount' => $goal_amount,
        'upload_date' => $today,
        'upload_time' => $time,
    ];

    $query = $crud->Update('donation', $data, "`id`='$id'");
    if ($query) {
        echo "<script>alert('donation updated successfully'); window.location='manage_donation';</script>";
        exit;
    } else {
        echo "<script>alert('Failed to update donation.');</script>";
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

                                <h2>Edit donation</h2>

                                
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
                                    <label class="form-label">donation Heading</label>
                                    <input required type="text" class="form-control" name="heading"
                                        value="<?php echo isset($donation['heading']) ? htmlspecialchars($donation['heading']) : ''; ?>"
                                        placeholder="donation Heading">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Goal Amount</label>
                                    <input required type="text" class="form-control" name="goal_amount" 
                                    value="<?php echo isset($donation['goal_amount']) ? htmlspecialchars($donation['goal_amount']) : ''; ?>" placeholder="goal">
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label">Raised Amount</label>
                                    <input required type="text" class="form-control" name="raised_amount"  
                                    value="<?php echo isset($donation['raised_amount']) ? htmlspecialchars($donation['raised_amount']) : ''; ?>" placeholder="raised">
                                </div>

                                <div class="col-sm-12">
                                    <label class="form-label">Description</label>
                                    <textarea required class="form-control" name="donation_desc" rows="5"
                                            placeholder="donation Description"><?php echo isset($donation['description']) ? htmlspecialchars($donation['description']) : ''; ?></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">Current Image</label><br>
                                    <?php if(!empty($donation['post_image'])) { ?>
                                        <img src="<?php echo $donation['post_image']; ?>" style="width:200px; height:auto;">
                                    <?php } else { ?>
                                        <p>No image uploaded.</p>
                                    <?php } ?>
                                </div>

                                <div class="col-sm-12">
                                    <label class="form-label">Change Image</label>
                                    <input type="file" class="form-control" name="donation_image">
                                    <input type="hidden" name="old_image" value="<?php echo isset($donation['post_image']) ? $donation['post_image'] : ''; ?>">
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit" name="update_donation">Update</button><br><br>
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
