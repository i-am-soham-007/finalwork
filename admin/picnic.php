<?php include 'common/header.php';  include 'config.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">

<?php
extract($_GET);


if(isset($edit))
{
    $edit_id = $_GET['pid'];
    $query = mysqli_query($con,"SELECT * FROM `picnic` WHERE id ='$edit_id'");
    $fetch = mysqli_fetch_array($query);

}
 ?>  
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title"> <?php if(isset($edit)){ echo 'Edit Picnic'; } else{ echo 'Add Picnic'; } ?></h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php if(isset($edit)){ echo 'Edit Picnic'; } else{ echo 'Add Picnic'; } ?></li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="picnicController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                  <?php if(isset($edit)){ echo 'Edit Picnic'; } else{ echo 'Add Picnic'; } ?>
                </h4>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Cateogry</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="basic-select" name="cid">
                      <?php
                      $qq = mysqli_query($con,"SELECT * FROM `category`");
                      echo "<option> select Cateogry</option>";
                      while($result = mysqli_fetch_array($qq))
                      {
                      // echo "<option value='".$result['id']."'>".$result['cname']."</option>";
                        extract($result);

                       if(isset($edit))
                       { 
                          $cid = $fetch['cid'];
                        ?>
                        <option value="<?php echo $id; ?>"
                       <?php  if($id == $cid) { echo 'selected'; } else{ echo '';} ?> > <?php echo $cname; ?></option>   
                      <?php 
                      }else{
                            echo "<option value='".$id."'>".$cname."</option>";
                      }

                    }
                       ?>
                    
                         </select>
                     
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Picnic Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="pname"
                     value="<?php if(isset($edit)){ echo $fetch['picnic_name']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>
               

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="input-1" name="pdesc" 
                    <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                    <?php if(isset($edit)){ echo $fetch['picnic_desc']; } else{ } ?>
                  </textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Picnic Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" id="input-1"   name="ptime"
                     value="<?php if(isset($edit)){ echo $fetch['pickup_time']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Pickup stand</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="pstand"
                     value="<?php if(isset($edit)){ echo $fetch['pickup_stand']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Picnic Place</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="place"
                     value="<?php if(isset($edit)){ echo $fetch['place']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>

                     <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Picnic Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="input-1"   name="pdate"
                     value="<?php if(isset($edit)){ echo $fetch['picnic_date']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
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
                      echo '<input type="hidden" name="pid" value="'.$fetch['id'].'">';
                     echo '<button name="update" type="submit" class="btn btn-dark">
                     UPDATE</button>'; 
                  }else{ 
                    echo '<button name="add" type="submit" class="btn btn-success">
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