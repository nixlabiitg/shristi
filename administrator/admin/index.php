<?php
session_start();
if(isset($_SESSION["PDCUSER"])){
    header("location:system/dashboard");
}
$msg = "";

if(isset($_GET['s'])){
    $msg = "Access Denied";
}
//Database Connection
require_once('system/dbConfig/dbconfig.php');

//Device Info. retriving file
require_once('deviceInfo/deviceInfo.php');
if(isset($_POST['login'])){

	//echo 'olsld';
	//get input value
	$username=$_POST['username'];
	$password=$_POST['password'];
  try{

      //Database Connection Open
      $conn = new Connection();
      $con  = $conn->Open();

      if ($con) {

	//validate user credentials
	$stmt=$con->prepare("select * from `admin` where u_name='$username' and password='$password'");
	$stmt->execute();

	if($rows=$stmt->fetch(PDO::FETCH_ASSOC))
	{
			//set session attributes
			$_SESSION['username']=$username;
			$_SESSION["PDCUSER"] = $username;
			$_SESSION['user_id']=$rows['id'];
			header("location:system/dashboard");

			exit;

	}

	else{
        $_SESSION['login_error']='<p style="color:red">Invalid username or password</p>';
		$msg='<h3 style="color:#d1d538">Invalid username or password</h3>';



   	}


}
else
    $msg = "Database connection error.";

//Close Database Connection
$conn->Close();
}
catch(PDOException $e){

$msg = "Something wrong.";
}
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Spectra Travel Agency</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
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
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h4>Spectra Travel Agency</h4>
                        <h2>Admin Login</h2>
                        <font><?php echo $msg; ?></font>
                    </div>

                    <div class="panel-body">
                        <form role="form" method="POST" autocomplete="off">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="email">Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="pwd">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block btn-lg pull-right"
                                name="login">Login</button>
                        </form>
                    </div>
                    <div style="margin-bottom : 20px !important;">
                        <a href="../../index" style="margin: 20px; font-size: 17px; text-decoration : none;">
                            <i class="material-icons" style="font-size: 15px;">arrow_back</i>
                            Back to site
                        </a>
                    </div>
                </div>
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