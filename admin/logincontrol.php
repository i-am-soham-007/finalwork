<?php 
session_start();
include 'config.php';
extract($_POST);

if(isset($loginAdmin))
 {
	$query = mysqli_query($con,"SELECT * FROM `admin` WHERE username ='' AND password =''");
	$data=mysqli_fetch_array($q);
	if($data==TRUE)
	{
		$_SESSION['admin_id'] = $data['id'];
		$_SESSION['admin_name'] = $data['username'];
		$_SESSION['admin_mobile'] = $data['mobile'];
		$_SESSION['admin_email'] = $data['email'];
		$_SESSION['admin_profile'] = $data['profile'];
		$_SESSION['successMsg'] = "Welcome ".$data['username'];
	//// for single notification
		//$n->noti("d77ywJPn1P4:APA91bHf4s4q3B-zjyVzPXE0kDLgOSkWqvSLWC022pxOK_apWo9TAGA_X8KKYxBjfUKxAbaMWUfOYRMrzURKW5GU9Hn-S4SGexatDGlrdjvENl5D5_4n7BKGbaQP9IDy3EOF8AGKixry","this is title","this descripion","","","");
		
	header("location:index.php?msg=login Success..");

	} else {
		header("location:login.php?msg=Wrong details..");
	}
	
}


 ?>