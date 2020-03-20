<?php 
session_start();
include 'config.php';
extract($_POST);

if(isset($addCat))
{
	$image = $_FILES['img']['name'];

	if(move_uploaded_file($_FILES['img']['tmp_name'],"../category_img/".$image))
	{
		$cdesc = trim($cdesc);

		$insert = mysqli_query($con,"INSERT INTO category(cname,cdesc,image) VALUES('$cname','$cdesc','$image')");

		if($insert)
		{
			echo "<script>alert('Category Added') 
			window.location.href ='category.php'
			</script>";
		}else{
			echo "<script>alert('Category Not Added')</script>";
		}
	}
	else{
			echo "<script>alert('Image Not Uploaded')</script>";
	}
}



if(isset($update))
{
	$image = $_FILES['img']['name'];
	$cdesc = trim($cdesc);
	
	if($_FILES['img']['error'])
	{
		$update = mysqli_query($con,"UPDATE `category` SET cname ='$cname', cdesc ='$cdesc' WHERE id ='$cid'");
	
	}else{

		$img = $_FILES['img']['name'];
		$image = str_replace(" ","",$img);

		move_uploaded_file($_FILES['img']['tmp_name'],"../category_img/".$image);

			$update = mysqli_query($con,"UPDATE `category` SET cname ='$cname', cdesc ='$cdesc', image ='$image' WHERE id ='$cid'");		
		}

		if($update)
		{
			echo "<script>alert('Category updated') 
			window.location.href ='categories.php'
			</script>";
		}else{
				echo "<script>alert('Category Not Updated')
				window.location.href ='categories.php'
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