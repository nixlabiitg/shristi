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


            $sub_category_retr_sql = "select * from `sub_category` where `sub_cate_id` = :sub_cate_id1";

            $pre = $con->prepare($sub_category_retr_sql);

            $pre->bindParam(':sub_cate_id1', $_GET['sub_category_id']);

            if($pre->execute()){

                $row = $pre->fetch(PDO::FETCH_ASSOC);

                if ($row['status'] == "0") {
                    
                    //update deactive in sub_category table
                    $sub_category_update_sql = "update `sub_category` set `status`=:status1 where `sub_cate_id`=:sub_cate_id1";

                    $pre = $con->prepare($sub_category_update_sql);

                    $pre->bindValue(':status1', "1"); 
                    $pre->bindParam(':sub_cate_id1', $_GET['sub_category_id']);  
                        
                    if ($pre->execute())
                        header('location:all_sub_category.php');
                    else
                        header('location:all_sub_category.php');
                    //End of desctive in sub category
                }
                else {

                    //update deactive in sub_category table
                    $sub_category_update_sql = "update `sub_category` set `status`=:status1 where `sub_cate_id`=:sub_cate_id1";

                    $pre = $con->prepare($sub_category_update_sql);

                    $pre->bindValue(':status1', "0"); 
                    $pre->bindParam(':sub_cate_id1', $_GET['sub_category_id']);  
                        
                    if ($pre->execute())
                        header('location:all_sub_category.php');
                    else
                        header('location:all_sub_category.php');
                    //End of desctive in sub category
                }
            }
        }
        else
            header('location:all_sub_category.php');

        //Close Database Connection
        $conn->Close();
    }
    catch(PDOException $e){

        header('location:all_sub_category.php');
    } 
}
//End of Verify User
?>