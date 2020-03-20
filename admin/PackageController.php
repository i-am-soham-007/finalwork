<?php 
session_start();
include 'config.php';
extract($_POST);

if(isset($add))
{
		$package_desc = trim($package_desc);

		$insert = mysqli_query($con,"INSERT INTO package(main_category,tour_id,package_name,package_desc,
			package_price,package_place) VALUES('$main_category','$tour_id','$package_name','$package_desc',
			'$package_price','$package_place')");

		if($insert)
		{
			echo "<script>alert('Package Added') 
			window.location.href ='packagelist.php'
			</script>";
		}else{
			echo "<script>alert('Package Not Added')</script>";
		}
}



if(isset($update))
{
	$update = mysqli_query($con,"UPDATE `package` SET package_name ='$package_name', package_desc ='$package_desc' WHERE id ='$package_id'");		
		


		if($update)
		{
			echo "<script>alert('Package updated') 
			window.location.href ='packagelist.php'
			</script>";
		}else{
				echo "<script>alert('Package Not Updated')
				window.location.href ='packagelist.php'
				</script>";
		}
}



if(isset($delete))
{

$del = mysqli_query($con,"DELETE FROM `category` WHERE id ='$cid'");

	if($del)
	{
			echo "<script>alert('Category Deleted')
					window.location.href ='categories.php'
					</script>";
	}else{
			echo "<script>alert('Category Not Deleted')
				window.location.href ='categories.php'
				</script>";
	}

}
?>