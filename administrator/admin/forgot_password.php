<?php
    //Database Connection
    require_once('system/dbConfig/dbconfig.php');
    $conn = new Connection();
    $con  = $conn->Open();

    if(isset($_POST['forgotPassword'])) {
        $user = $_POST['user'];
        $sql = $con -> prepare("SELECT count(u_name),u_name,password,ph FROM admin WHERE u_name = '$user'");
        $sql -> execute();
        $rows = $sql -> fetch(PDO:: FETCH_ASSOC);
        $dynamicstring = $rows['ph'];
        $name = $rows['u_name'];
        $password = $rows['password'];
        $lastTwoMobileNumber = substr($dynamicstring, -2);
        
    if($rows['count(u_name)'] > 0) {
        echo "<script>alert('Password sent to registered mobile number: +91-********".$lastTwoMobileNumber."');</script>";
        //SMS
           $message = "Hi ".$name.", Your login details are: Id - ".$user."\r\n Password - ".$password."\r\n";
           $message .= 'Login here: http://helpinlife.in/cms/mlm/admin';
                $mobile_no = $dynamicstring;
               $xml_data = '<?xml version="1.0"?>
               <parent>
               <child>
               <user>hil123</user>
               <key>30ac038c2cXX</key>
               <mobile>+91'.$dynamicstring.'</mobile>
               <message>'.$message.'</message>
               <accusage>1</accusage>
               <senderid>HELPIL</senderid>
               </child>
               </parent>';

                $URL = "http://login.otechnix.in/submitsms.jsp?";
               
                $ch = curl_init($URL);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
                curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);
               // print_r($output);

               //End of Enquiry SMS
            //   mysqli_query($mysqli,"update users set password = '$passNew' where username='$epin'");
               echo "<script>window.location.assign('index');</script>";
    }
   else
     $msg="Invalid credentials";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Assam Pickelball Association</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="system/lib/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="system/lib/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="system/lib/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="system/lib/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="system/lib/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <style>
        .container{
            width: 80%;
            padding: 20px;
            height: 20%;
        }
    </style>
</head>

<body>
    
 <div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h2>Forgot Password</h2>
            <font><?php print $msg;//Message print ?></font>
        </div>

            <div class="panel-body">
                <form role="form" method="POST" autocomplete="off">
                    <div class="form-group form-float">
                         <div class="form-line">
                            <label for="email">Enter Username</label>
                            <input type="text" name="user" class="form-control" maxlength = "5">
                         </div>
                    </div>
                    <a href = "index.php">Login</a>
                  <button type="submit" class="btn btn-success btn-lg pull-right" name="forgotPassword">Send Password!</button>
            </form>
    </div>
</div>
</div>

    <!-- Jquery Core Js -->
    <script src="system/lib/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="system/lib/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="system/lib/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="system/lib/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="system/lib/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="system/lib/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="system/lib/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="system/lib/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="system/lib/js/admin.js"></script>
    <script src="system/lib/js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="system/lib/js/demo.js"></script>
</body>

</html>
