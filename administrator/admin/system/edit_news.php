<?php

include('includes/header.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
if($id != '') {
    $readnews = $crud->Read("news", "`id`='$id'");
    if (!empty($readnews)) {
        $news = $readnews[0];
    } else {
        echo "<script>alert('news not found');window.location.assign('view_news.php');</script>";
        exit;
    }
} else {
    echo "<script>alert('No news ID specified');window.location.assign('view_news.php');</script>";
    exit;
}
if (isset($_POST['update_news'])) {
    $heading = $_POST['heading'];
    $description = $_POST['news_desc'];
    $old_image = $_POST['old_image'];
    $today = date("Y-m-d");
    $time = date("H:i:s");

    // Handle image
    $new_image_path = $old_image;
    if (!empty($_FILES['news_image']['name'])) {
        @mkdir("lib/images/news/");
        @mkdir("lib/images/news/images/");
        $ext = strtolower(end(explode(".", $_FILES['news_image']['name'])));
        $file_name = basename($_FILES['news_image']['name']);
        $new_image_path = "lib/images/news/images/" . $file_name;

        if (in_array($ext, ["jpg", "jpeg", "png", "bmp", "gif"])) {
            if (!move_uploaded_file($_FILES['news_image']['tmp_name'], $new_image_path)) {
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
        'upload_date' => $today,
        'upload_time' => $time
    ];

    $query = $crud->Update('news', $data, "`id`='$id'");
    if ($query) {
        echo "<script>alert('news updated successfully'); window.location='manage_news';</script>";
        exit;
    } else {
        echo "<script>alert('Failed to update news.');</script>";
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

                                <h2>Edit news</h2>

                                
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
                                    <input required type="text" class="form-control" name="heading"
                                        value="<?php echo isset($news['heading']) ? htmlspecialchars($news['heading']) : ''; ?>"
                                        placeholder="news Heading">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                </div>

                                <div class="col-sm-12">
                                    <label class="form-label">Description</label>
                                    <textarea required class="form-control" name="news_desc" rows="5"
                                            placeholder="news Description"><?php echo isset($news['description']) ? htmlspecialchars($news['description']) : ''; ?></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">Current Image</label><br>
                                    <?php if(!empty($news['post_image'])) { ?>
                                        <img src="<?php echo $news['post_image']; ?>" style="width:200px; height:auto;">
                                    <?php } else { ?>
                                        <p>No image uploaded.</p>
                                    <?php } ?>
                                </div>

                                <div class="col-sm-12">
                                    <label class="form-label">Change Image</label>
                                    <input type="file" class="form-control" name="news_image">
                                    <input type="hidden" name="old_image" value="<?php echo isset($news['post_image']) ? $news['post_image'] : ''; ?>">
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit" name="update_news">Update</button><br><br>
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
