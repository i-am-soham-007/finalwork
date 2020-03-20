<?php include 'common/header.php';  include 'config.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">

<?php
extract($_GET);


if(isset($edit))
{
    $edit_id = $_GET['edit'];
    $query = mysqli_query($con,"SELECT * FROM `event` WHERE id ='$edit_id'");
    $fetch = mysqli_fetch_array($query);

}
 ?>  
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title"> <?php if(isset($edit)){ echo 'Edit Event'; } else{ echo 'Add Event'; } ?></h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php if(isset($edit)){ echo 'Edit Event'; } else{ echo 'Add Event'; } ?></li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="EventController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-podcast"></i>
                  <?php if(isset($edit)){ echo 'Edit Event'; } else{ echo 'Add Event'; } ?>
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Event Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="ename"
                     value="<?php if(isset($edit)){ echo $fetch['ename']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>
               
               <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Start Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="input-1"   name="start"
                     value="<?php if(isset($edit)){ echo $fetch['start']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">End Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="input-1"   name="end"
                     value="<?php if(isset($edit)){ echo $fetch['end']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="input-1" name="edesc" 
                    <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                    <?php if(isset($edit)){ echo $fetch['edesc']; } else{ } ?>
                  </textarea>
                  </div>
                </div>

                  <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-4"  name="img" 
                    value="<?php if(isset($edit)){ echo $fetch['image']; } else{ } ?>"
                    <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>
                
                <div class="form-footer">
                    <?php if(isset($edit))
                    {
                      echo '<input type="hidden" name="eid" value="'.$fetch['id'].'">';
                     echo '<button name="update" type="submit" class="btn btn-dark">
                     UPDATE</button>'; 
                  }else{ 
                    echo '<button name="Add" type="submit" class="btn btn-success">
                    <i class="fa fa-check-square-o"></i> SAVE</button>'; } ?>
                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

     
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
}

<?php include 'common/footer.php'; ?>