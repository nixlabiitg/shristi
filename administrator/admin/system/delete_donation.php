<?php
include('includes/header.php');
$donation=$con->prepare("select * from `donation` where `id`='".$_GET['id']."'");
$donation->execute();
$row = $donation->fetch(PDO::FETCH_ASSOC);
$post_image = $row['post_image'];

// $pan_ph = $row['pan_photo'];


 //If add_user button click
if (isset($_GET['id'])) {

  unlink($post_image);
  $delete_donation = $con->prepare("delete  from `donation`  where id='".$_GET['id']."'");

    if($delete_donation->execute())
        {
          echo '<script>alert("donation Deleted Successfully");window.location.assign("manage_donation"); </script>';

        }
  }


?>
