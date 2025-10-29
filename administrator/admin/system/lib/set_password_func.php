<?php

function set_password($username, $new_password, $con_password) {

	if ($new_password == $con_password) {
		
		try{

	        //Database Connection Open
	        $conn = new Connection();
	        $con  = $conn->Open();

	        if ($con) {

	            //update password in admin table
	            $admin_update_sql = "update `admin` set `password`=:password1 where `u_name`=:username1";

	            $pre = $con->prepare($admin_update_sql);

	            //Hashing the password
    			$pass = hash('sha256', $new_password);

	            $pre->bindParam(':password1', $pass);
	            $pre->bindParam(':username1', $username);
	                
	            if ($pre->execute()){

	                return true;
	            }
	            else
	                return false;
	            //End of password in admin
	        }
	        else
	            return false;

	        //Close Database Connection
	        $conn->Close();
	    }
	    catch(PDOException $e){

	        return false;
	    } 
	}
	else
		return false;
}
?>