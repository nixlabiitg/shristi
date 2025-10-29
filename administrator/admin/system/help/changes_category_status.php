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


            $category_retr_sql = "select * from `category` where `cate_id` = :category_id1";

            $pre = $con->prepare($category_retr_sql);

            $pre->bindParam(':category_id1', $_GET['category_id']);

            if($pre->execute()){

                $row = $pre->fetch(PDO::FETCH_ASSOC);

                if ($row['status'] == "0") {
                    
                    //update deactive in category table
                    $category_update_sql = "update `category` set `status`=:status1 where `cate_id`=:category_id1";

                    $pre = $con->prepare($category_update_sql);

                    $pre->bindValue(':status1', "1"); 
                    $pre->bindParam(':category_id1', $_GET['category_id']);  
                        
                    if ($pre->execute())
                        header('location:all_category.php');
                    else
                        header('location:all_category.php');
                    //End of desctive in category
                }
                else {

                    //update deactive in category table
                    $category_update_sql = "update `category` set `status`=:status1 where `cate_id`=:category_id1";

                    $pre = $con->prepare($category_update_sql);

                    $pre->bindValue(':status1', "0"); 
                    $pre->bindParam(':category_id1', $_GET['category_id']);  
                        
                    if ($pre->execute())
                        header('location:all_category.php');
                    else
                        header('location:all_category.php');
                    //End of desctive in category
                }
            }
        }
        else
            header('location:all_category.php');

        //Close Database Connection
        $conn->Close();
    }
    catch(PDOException $e){

        header('location:all_category.php');
    } 
}
//End of Verify User
?>