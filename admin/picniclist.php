<?php include 'common/header.php';  include 'config.php';?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Picnic List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Picnic List</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="picnic.php" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</a>
        
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Picnic</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Place</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Photo</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=mysqli_query($con,"SELECT * FROM `picnic` ORDER BY ID DESC");
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             ?>
                <tr>
                    <td><?php echo $picnic_name; ?></td>
                    <td><?php echo $picnic_desc; ?></td>
                    <td><?php echo $place; ?></td>
                    <td><?php echo $pickup_time; ?></td>
                    <td><?php echo $picnic_date; ?></td>
                    <td><img width="50" height="50" src="../picnic/<?php echo $image; ?>"></td>

                    <td>
                        <form action="picnic.php?pid='<?php echo $id; ?>'" method="get">
                            <input type="hidden" name="pid" value="<?php echo $id; ?>">
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