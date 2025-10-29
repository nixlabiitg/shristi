<?php
//Add Userfunction

//Add Userfunction
  function add_users ($id1,$sponsor_id,$fname,$town,$po,$pin,$ph,$email,$pan,$epin) {


    try{

        //Database Connection Open
        $conn = new Connection();
        $con  = $conn->Open();

        if ($con) {
           $users_count_sql = "select count(*) from `users` where `name`=:fname_1";

            $pree = $con->prepare($users_count_sql);

            $fname = ucwords($fname);
            $pree->bindParam(':fname_1', $fname);

            if ($pree->execute()) {

                $number_of_rows = $pree->fetchColumn();

                if ($number_of_rows > 0)
                    return "5";
                else {
                   // ------------------COUNT PIN--------------

             $count_id1="select count(*) from `pin_list` where epin='$epin' and status='0'";
             $res1 = $con->prepare($count_id1);
             if($res1->execute())
             {
                 $no_of_rows1 = $res1->fetchColumn();
                if($no_of_rows1 > 0)
                    {

                            $date = date("Y-m-d");
                           $pass = rand(100000,999999);
                            //Insert in users table
                            $users_sql = "Insert into `users` (`id`,`sponsor_id`,`name`,`amount`,`town`,`po`,`pin`,`ph`,`email`,`username`,`password`,`pan`,`date`,`status`)
                                          values(:id1_1,:sponsor_id_1,:fname_1,'1000',:town_1,:po_1,:pin_1,:ph_1,:email_1,:epin_1,:pass_1,:pan_1,:date1,:status1)";


                            $pre = $con->prepare($users_sql);

                            $fname = ucwords($fname);

                            $pre->bindParam(':id1_1', $id1);
                            $pre->bindParam(':sponsor_id_1', $sponsor_id);
                            $pre->bindParam(':fname_1', $fname);
                            $pre->bindParam(':town_1', $town);
                            $pre->bindParam(':po_1', $po);
                            $pre->bindParam(':pin_1', $pin);
                            $pre->bindParam(':ph_1', $ph);
                            $pre->bindParam(':email_1', $email);
                            $pre->bindParam(':pan_1', $pan);
                            $pre->bindParam(':epin_1', $epin);
                            $pre->bindParam(':pass_1', $pass);
                            $pre->bindParam(':date1', $date);
                            $pre->bindValue(':status1', '0');

                          if ($pre->execute()){
                                move_uploaded_file($post_img_tmp_name, $path);

                                return "2";
                            }
                            else
                                return "3";
                            //End of cate_name in category

                    }
                else
                   return "9";
                   }
                }
            }
        }
        else
            return "3";

        //Close Database Connection
        $conn->Close();
    }
    catch(PDOException $e){

        return "3";
    }

}
//End of USERS insertion function


//Add Kyc
//   function add_kyc ($post_img_name,$post_img_tmp_name,$bank_name,$user_id,$ac_no,$ifsc,$ac_name) {


   function add_kyc ($bank_name,$user_id,$ac_no,$ifsc,$ac_name,$pan) {
//   @mkdir("lib/images/");
//   $path = "lib/images/".time().".jpg";

//   $ext = explode(".", $post_img_name);
//   $ext = end($ext);
//   $ext = strtolower($ext);

//   $flag_1 = 0;
//   if( $ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="bmp" || $ext=="gif" )
//       $flag_1 = 1;
//   else
//       return "4";

//   if ($flag_1 == 1) {

    try{

        //Database Connection Open
        $conn = new Connection();
        $con  = $conn->Open();

        if ($con) {
                   //Update  kyc
                    //   $users_sql = "update `users` set `kyc`=:source_file_1,`bank_name`=:bank_name_1,`ac_no`=:ac_no_1,`ifsc`=:ifsc_1,`ac_name`=:ac_name_1
                    //               where `id`='$user_id'";

                    $users_sql = "update `users` set `bank_name`=:bank_name_1,`ac_no`=:ac_no_1,`ifsc`=:ifsc_1,`ac_name`=:ac_name_1,`pan`=:pan_1
                                  where `id`='$user_id'";

                    $pre = $con->prepare($users_sql);


                    // $pre->bindParam(':source_file_1', $path);
                    $pre->bindParam(':bank_name_1', $bank_name);
                    $pre->bindParam(':ac_no_1', $ac_no);
                    $pre->bindParam(':ifsc_1', $ifsc);
                    $pre->bindParam(':ac_name_1', $ac_name);
                    $pre->bindParam(':pan_1', $pan);


                  if ($pre->execute()){
                        // move_uploaded_file($post_img_tmp_name, $path);

                        return "2";
                    }
                    else
                        return "3";
                    //End of cate_name in category
                }
                else
                    return "3";



        //Close Database Connection
        $conn->Close();
    }
    catch(PDOException $e){

        return "3";
    }
  //}
}
//End of Category insertion function



//Update Pay function
function update_pay ($userid,$post_img_name,$post_img_tmp_name,$amt) {



        @mkdir("lib/images/pay_receipt");

        $path = "lib/images/pay_receipt/".time().".jpg";

        $ext = explode(".", $post_img_name);
        $ext = end($ext);
        $ext = strtolower($ext);

        $flag_1 = 0;

        if( $ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="bmp" || $ext=="gif" )
            $flag_1 = 1;
        else
            return "4";

        if ($flag_1 == 1) {

            try{

                //Database Connection Open
                $conn = new Connection();
                $con  = $conn->Open();

                if ($con) {

                      $date = date("Y-m-d");


                    //Update data in post table
                    $pay_update_sql = "update `payment` set `amount`='$amt',`receipt_photo`=:post_img1,`date`='$date',`transfer_date`='$date' where `userid`='$userid'";

                    $pre = $con->prepare($pay_update_sql);

                    $pre->bindParam(':post_img1', $path);

                    if ($pre->execute()){

                        move_uploaded_file($post_img_tmp_name, $path);

                        return "2";
                        }
                        else
                            return "3";
                    //End of registration in user
                }
                else
                    return "3";

                //Close Database Connection
                $conn->Close();
            }
            catch(PDOException $e){

                return "3";
            }
        }

}
//End of Update Epin Details function


function update_epin_photo ($userid,$post_img_name,$post_img_tmp_name) {



        @mkdir("lib/images/epin_details");

        $path = "lib/images/epin_details/".time().".jpg";

        $ext = explode(".", $post_img_name);
        $ext = end($ext);
        $ext = strtolower($ext);

        $flag_1 = 0;

        if( $ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="bmp" || $ext=="gif" )
            $flag_1 = 1;
        else
            return "4";

        if ($flag_1 == 1) {

            try{

                //Database Connection Open
                $conn = new Connection();
                $con  = $conn->Open();

                if ($con) {
                    //Update data in post table
                    $pay_update_sql = "update `epin_request` set `ac_photo`=:post_img1 where `userid`='$epin_id'";

                    $pre = $con->prepare($pay_update_sql);

                    $pre->bindParam(':post_img1', $path);

                    if ($pre->execute()){

                        move_uploaded_file($post_img_tmp_name, $path);

                        return "2";
                    }
                    else
                        return "3";
                    //End of registration in user
                }
                else
                    return "3";

                //Close Database Connection
                $conn->Close();
            }
            catch(PDOException $e){

                return "3";
            }
        }

}
//End of Update epin details function

//Edit Category function
/*function edit_category_info ($category_id, $cate_name) {

    try{

        //Database Connection Open
        $conn = new Connection();
        $con  = $conn->Open();

        if ($con) {

            //update category in category table
            $category_edit_sql = "update `category` set `cate_name`=:cate_name1 where `cate_id`=:cate_id1";

            $pre = $con->prepare($category_edit_sql);

            //Convert to upper case some field value
            $cate_name = ucwords($cate_name);

            $pre->bindParam(':cate_name1', $cate_name);
            $pre->bindParam(':cate_id1', $category_id);

            if ($pre->execute())
                return true;
            else
                return false;
        }
        else
            return false;

        //Close Database Connection
        $conn->Close();
    }
    catch(PDOException $e){

        return false;
    }
}*/
//End of Category updation function



?>
