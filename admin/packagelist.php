<?php include 'common/header.php';  include 'config.php';?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Package List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Package List</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="package.php" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</a>
        
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Package</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    <th>Type</th>
                    <th>Tour Category</th>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Price</th>
                    <th>Place</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=mysqli_query($con,"SELECT * FROM `package` ORDER BY ID DESC");
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
                $qq = mysqli_query($con,"SELECT * FROM `tour_category` WHERE id ='$tour_id'");
                $rs =mysqli_fetch_array($qq);
                $type =$rs['tour_name']; 
             ?>
                <tr>
                    <td><?php echo $main_category; ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $package_name; ?></td>
                    <td><?php echo $package_desc; ?></td>
                    <td><?php echo $package_price; ?></td>
                    <td><?php echo $package_place; ?></td>
                    <td>
                        <form action="package.php?id='<?php echo $id; ?>'" method="get">
                            <input type="hidden" name="package_id" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-sm btn-dark" name="edit" value="EDIT">
                        </form>
                    </td>

                    <td>
                        <form action="controller/categoryController.php" method="post">
                            <input type="hidden" name="cid" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-sm btn-warning" name="deletCat" value="Delete">
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