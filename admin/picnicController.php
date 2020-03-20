<?php 
session_start();
include 'config.php';
extract($_POST);

if(isset($add))
{
	$image = $_FILES['img']['name'];

	if(move_uploaded_file($_FILES['img']['tmp_name'],"../picnic/".$image))
	{
		$pdesc = trim($pdesc);

		$insert = mysqli_query($con,"INSERT INTO picnic(cid,picnic_name,picnic_desc,pickup_time,pickup_stand,place,picnic_date,image) VALUES('$cid','$pname','$pdesc','$ptime','$pstand','$place','$pdate','$image')");

		if($insert)
		{
			echo "<script>alert('Picnic Added') 
			window.location.href ='picniclist.php'
			</script>";
		}else{
			echo "<script>alert('Picnic Not Added')</script>";
		}
	}
	else{
			echo "<script>alert('Image Not Uploaded')</script>";
	}
}



if(isset($update))
{
	$image = $_FILES['img']['name'];
	$pdesc = trim($pdesc);
	
	if($_FILES['img']['error'])
	{
		$update = mysqli_query($con,"UPDATE `picnic` SET picnic_name ='$pname', picnic_desc ='$pdesc' WHERE id ='$pid'");
	
	}else{

		$img = $_FILES['img']['name'];
		$image = str_replace(" ","",$img);

		move_uploaded_file($_FILES['img']['tmp_name'],"../picnic/".$image);

			$update = mysqli_query($con,"UPDATE `picnic` SET picnic_name ='$pname', picnic_desc ='$pdesc', image ='$image' WHERE id ='$pid'");		
		}

		if($update)
		{
			echo "<script>alert('pinic updated') 
			window.location.href ='picniclist.php'
			</script>";
		}else{
				echo "<script>alert('picnic Not Updated')
				window.location.href ='picniclist.php'
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