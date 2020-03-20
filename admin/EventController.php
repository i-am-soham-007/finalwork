
<?php 
session_start();
include 'config.php';
extract($_POST);

if(isset($Add))
{
	$image = $_FILES['img']['name'];

	if(move_uploaded_file($_FILES['img']['tmp_name'],"../event/".$image))
	{
		$edesc = trim($edesc);
		$start_date = date('d-m-Y',strtotime($start));
		$end_date = date('d-m-Y',strtotime($end));
		$today = date('d-m-Y');
		$insert = mysqli_query($con,"INSERT INTO event(ename,edesc,start,`end`,image,event_created_date) VALUES('$ename','$edesc','$start_date','$end_date','$image','$today')");

		if($insert)
		{
			echo "<script>alert('Event Added') 
			window.location.href ='eventlist.php'
			</script>";
		}else{
			echo "<script>alert('Event Not Added')</script>";
		}
	}
	else{
			echo "<script>alert('Image Not Uploaded')</script>";
	}
}



if(isset($update))
{
	$image = $_FILES['img']['name'];
	$edesc = trim($edesc);
	
	if($_FILES['img']['error'])
	{
		$update = mysqli_query($con,"UPDATE `event` SET ename ='$ename', edesc ='$edesc' WHERE id ='$eid'");
	
	}else{

		$img = $_FILES['img']['name'];
		$image = str_replace(" ","",$img);

		move_uploaded_file($_FILES['img']['tmp_name'],"../event/".$image);

			$update = mysqli_query($con,"UPDATE `event` SET ename ='$ename', edesc ='$edesc', image ='$image' WHERE id ='$eid'");		
		}

		if($update)
		{
			echo "<script>alert('Event updated') 
			window.location.href ='eventlist.php'
			</script>";
		}else{
				echo "<script>alert('Event Not Updated')
				window.location.href ='eventlist.php'
				</script>";
		}
}



if(isset($delete))
{

$del = mysqli_query($con,"DELETE FROM `event` WHERE id ='$eid'");

	if($del)
	{
			echo "<script>alert('Event Deleted')
					window.location.href ='eventlist.php'
					</script>";
	}else{
			echo "<script>alert('Event Not Deleted')
				window.location.href ='eventlist.php'
				</script>";
	}

}
?>