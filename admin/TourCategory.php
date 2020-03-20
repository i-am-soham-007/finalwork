<?php include 'common/header.php';  include 'config.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">

<?php
extract($_GET);


if(isset($edit))
{
    $edit_id = $_GET['tid'];
    $query = mysqli_query($con,"SELECT * FROM `tour_category` WHERE id ='$edit_id'");
    $fetch = mysqli_fetch_array($query);

}
 ?>  
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title"> <?php if(isset($edit)){ echo 'Edit Tour Category'; } else{ echo 'Add Tour Category'; } ?></h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php if(isset($edit)){ echo 'Edit Tour Category'; } else{ echo 'Add Tour Category'; } ?></li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="TourCategoryController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                  <?php if(isset($edit)){ echo 'Edit Tour Category'; } else{ echo 'Add Tour Category'; } ?>
                </h4>
               
               <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Tour Type</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="basic-select" name="main_category">
                      <?php
                       if(isset($edit))
                       { 
                          $main = $fetch['main_category'];
                        ?>
                        <option value="domestic" <?php if('domestic' == $main) { echo 'selected'; }
                        else{ echo ''; } ?> > <?php echo 'Domestic'; ?></option> 

                       <option value="international" <?php if('International' == $main) { echo 'selected'; }
                       else{ echo '';} ?> > <?php echo 'International'; ?></option>  
                      <?php 
                      }else{
                            echo "<option value='domestic'> Domestic</option>";
                            echo "<option value='international'> International</option>";
                      }
                       ?>                    
                    </select> 
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="tname"
                     value="<?php if(isset($edit)){ echo $fetch['tour_name']; } else{ } ?>"
                      <?php if(isset($edit)){ echo ''; } else{ echo 'required'; } ?>>
                  </div>
                </div>
                
                <div class="form-footer">
                    <?php if(isset($edit))
                    {
                      echo '<input type="hidden" name="tid" value="'.$fetch['id'].'">';
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