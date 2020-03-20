<?php 
session_start();
include 'config.php';
extract($_POST);

if(isset($addCat))
{
	$image = $_FILES['img']['name'];
	$pdesc = trim($pdesc);

	if(move_uploaded_file($_FILES['img']['tmp_name'],"../category_img/".$image))
	{
		$insert = mysqli_query($con,"INSERT INTO podcast(pname,purl,pdesc,image) VALUES('$pname','$purl','$pdesc','$image')");

		if($insert)
		{
			echo "<script>alert('Podcast Added') 
			window.location.href ='podcast.php'
			</script>";
		}else{
			echo "<script>alert('Podcast Not Added')
			window.location.href ='podcast.php'
			</script>";
		}
	}
	else{
			echo "<script>alert('Image Not Uploaded')
			window.location.href ='podcast.php'
			</script>";
	}
}



if(isset($update))
{
	$image = $_FILES['img']['name'];
	$pdesc = trim($pdesc);
	
	if($_FILES['img']['error'])
	{
		$update = mysqli_query($con,"UPDATE `podcast` SET pname ='$pname', pdesc ='$pdesc' WHERE id ='$pid'");
	
	}else{

		$img = $_FILES['img']['name'];
		$image = str_replace(" ","",$img);

		move_uploaded_file($_FILES['img']['tmp_name'],"../category_img/".$image);

			$update = mysqli_query($con,"UPDATE `category` SET cname ='$cname', cdesc ='$cdesc', image ='$image' WHERE id ='$pid'");		
		}

		if($update)
		{
			echo "<script>alert('Podcast updated') 
			window.location.href ='podcastlist.php'
			</script>";
		}else{
				echo "<script>alert('Podcast Not Updated')
				window.location.href ='podcastlist.php'
				</script>";
		}
}


if(isset($delete))
{

$del = mysqli_query($con,"DELETE FROM `podcast` WHERE id ='$pid'");

	if($del)
	{
			echo "<script>alert('Podcast Deleted')
					window.location.href ='podcastlist.php'
					</script>";
	}else{
			echo "<script>alert('Podcast Not Deleted')
				window.location.href ='podcastlist.php'
				</script>";
	}

}
?>