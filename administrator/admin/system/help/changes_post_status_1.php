<?php
//Verify User
session_start();

//Database Connection
require_once('dbConfig/dbconfig.php');

//Check user login or not
if(empty($_SESSION["username"]))
  header('location:../index.php');
else {

    try{

        //Database Connection Open
        $conn = new Connection();
        $con  = $conn->Open();

        if ($con) {


            $post_retr_sql = "select * from `post` where `post_id` = :post_id1";

            $pre = $con->prepare($post_retr_sql);

            $pre->bindParam(':post_id1', $_GET['post_id']);

            if($pre->execute()){

                $row = $pre->fetch(PDO::FETCH_ASSOC);

                if ($row['post_status'] == "1") {
                    
                    //update deactive in post table
                    $post_update_sql = "update `post` set `post_status`=:post_status1 where `post_id`=:post_id1";

                    $pre = $con->prepare($post_update_sql);

                    $pre->bindValue(':post_status1', "0"); 
                    $pre->bindParam(':post_id1', $_GET['post_id']);  
                        
                    if ($pre->execute())
                        header('location:unpublish.php');
                    else
                        header('location:unpublish.php');
                    //End of desctive in post
                }
                else
                    header('location:unpublish.php');
            }
        }
        else
            header('location:unpublish.php');

        //Close Database Connection
        $conn->Close();
    }
    catch(PDOException $e){

        header('location:unpublish.php');
    } 
}
//End of Verify User
?>