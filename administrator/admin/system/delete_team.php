<?php
include('includes/header.php');
$team=$con->prepare("select * from `team` where `id`='".$_GET['id']."'");
$team->execute();
$row = $team->fetch(PDO::FETCH_ASSOC);
$post_image = $row['post_image'];

// $pan_ph = $row['pan_photo'];


 //If add_user button click
if (isset($_GET['id'])) {

  unlink($post_image);
  $delete_team = $con->prepare("delete  from `team`  where id='".$_GET['id']."'");

    if($delete_team->execute())
        {
          echo '<script>alert("Team Member Deleted Successfully");window.location.assign("manage_team"); </script>';

        }
  }

?>
