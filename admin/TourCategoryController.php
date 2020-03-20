<?php 
session_start();
include 'config.php';
extract($_POST);

if(isset($add))
{
	
	$insert = mysqli_query($con,"INSERT INTO tour_category(main_category,tour_name) VALUES('$main_category','$tname')");

		if($insert)
		{
			echo "<script>alert('TourCategory Added') 
			window.location.href ='TourCategoryList.php'
			</script>";
		}else{
			echo "<script>alert('TourCategory Not Added')</script>";
		}

}



if(isset($update))
{
	

	$update = mysqli_query($con,"UPDATE `tour_category` SET main_category ='$main_category', tour_name ='$tname' WHERE id ='$tid'");		
		
		if($update)
		{
			echo "<script>alert('TourCategory updated') 
			window.location.href ='TourCategoryList.php'
			</script>";
		}else{
				echo "<script>alert('TourCategory Not Updated')
				window.location.href ='TourCategoryList.php'
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