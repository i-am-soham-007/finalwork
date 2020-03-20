<?php 
session_start();
if(isset($_SESSION['admin_id'])) {
  header("location:index.php?msg=Login Success.");
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Login</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <style>
span
{
	display: none;
}
  </style>
}
</head>

<body class="bg-dark">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img style="height: 120px;width: 220px;" src="assets/images/logo.jpg" alt="logo icon">
		 	</div>
		    <form action="" method="post">
			  <div class="form-group">
			  <label class="">username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" class="form-control input-shadow" placeholder="Enter Username" name="username" required>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				</div>
					<span class="erroruser"></span>
			   </div>
			  </div>
			  <div class="form-group" id="show_hide_password">
			  <label for="exampleInputPassword" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="password" id="admin_password" class="form-control input-shadow" placeholder="Enter Password" name="password" data-toggle="admin_password">
				 <div class="form-control-position">
					  <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-primary">
               </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="forgot.php">Reset Password</a>
			 </div>
			</div>
			 <button type="submit" name="loginAdmin" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Log in</button>
			  
			 
			 </form>
		   </div>
		  </div>
		  
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-show-password.min.js"></script>
  
  <script type="text/javascript">
	$("#admin_password").admin_password('toggle');
	

</script>

</body>
</html>

<?php

include 'config.php';

extract($_POST);

if(isset($loginAdmin))
 {
 	

	$query = mysqli_query($con,"SELECT * FROM `admin` WHERE username ='$username' AND password ='$password'");

	$data=mysqli_fetch_array($query);

	if(mysqli_num_rows($query) > 0)
	{
		$_SESSION['id'] = $data['id'];
		$_SESSION['admin_name'] = $data['username'];
		$_SESSION['admin_mobile'] = $data['mobile'];
		$_SESSION['admin_email'] = $data['email'];
		$_SESSION['admin_profile'] = $data['profile'];
		$_SESSION['successMsg'] = "Welcome ".$data['username'];
		
		header("location:index.php?msg=login Success..");

	}
	else
	{
		header("location:login.php?msg=Wrong details..");
	}
	
}
?>