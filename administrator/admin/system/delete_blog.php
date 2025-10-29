<?php
include('includes/header.php');
$blog=$con->prepare("select * from `blog` where `id`='".$_GET['id']."'");
$blog->execute();
$row = $blog->fetch(PDO::FETCH_ASSOC);
$post_image = $row['post_image'];

// $pan_ph = $row['pan_photo'];


 //If add_user button click
if (isset($_GET['id'])) {

  unlink($post_image);
  $delete_blog = $con->prepare("delete  from `blog`  where id='".$_GET['id']."'");

    if($delete_blog->execute())
        {
          echo '<script>alert("Blog Deleted Successfully");window.location.assign("manage_blog"); </script>';

        }
  }


?>
