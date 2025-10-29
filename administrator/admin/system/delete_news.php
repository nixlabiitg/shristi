<?php
include('includes/header.php');
$news=$con->prepare("select * from `news` where `id`='".$_GET['id']."'");
$news->execute();
$row = $news->fetch(PDO::FETCH_ASSOC);
$post_image = $row['post_image'];

// $pan_ph = $row['pan_photo'];


 //If add_user button click
if (isset($_GET['id'])) {

  unlink($post_image);
  $delete_news = $con->prepare("delete  from `news`  where id='".$_GET['id']."'");

    if($delete_news->execute())
        {
          echo '<script>alert("news Deleted Successfully");window.location.assign("manage_news"); </script>';

        }
  }


?>
