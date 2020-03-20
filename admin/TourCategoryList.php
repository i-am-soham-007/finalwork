<?php include 'common/header.php';  include 'config.php';?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Categories</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="TourCategory.php" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</a>
        
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Users</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    <th>Tour TYPE</th>
                    <th>Category</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=mysqli_query($con,"SELECT * FROM `tour_category` ORDER BY ID DESC");
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             ?>
                <tr>
                    <td><?php echo $main_category; ?></td>
                    <td><?php echo $tour_name; ?></td>
                    <td>
                        <form action="TourCategory.php?id='<?php echo $id; ?>'" method="get">
                            <input type="hidden" name="tid" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-sm btn-dark" name="edit" value="EDIT">
                        </form>
                    </td>

                    <td>
                        <form action="controller/TourCategoryController.php" method="post">
                            <input type="hidden" name="tid" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-sm btn-warning" name="delet" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php } ?>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
	<?php include 'common/footer.php'; ?>