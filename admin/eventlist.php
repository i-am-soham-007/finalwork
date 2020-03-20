<?php include 'common/header.php';  include 'config.php';?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Event List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Event List</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="event.php" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</a>
        
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Events</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Photo</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=mysqli_query($con,"SELECT * FROM `event` ORDER BY ID DESC");
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             ?>
                <tr>
                    <td><?php echo $ename; ?></td>
                    <td><?php echo $edesc; ?></td>
                    <td><?php echo $start; ?></td>
                    <td><?php echo $end; ?></td>
                    <td><img width="50" height="50" src="../event/<?php echo $image; ?>"></td>

                    <td>
                        <!-- <form action="event.php?edit='<?php echo $id; ?>'" method="get">
                            <input type="submit" class="btn btn-sm btn-dark" name="edit" value="EDIT">
                        </form> -->
                        <a href="event.php?edit=<?php echo $id; ?>" class="btn btn-sm btn-dark" name="edit">EDIT</a>
                    </td>

                    <td>
                        <form action="controller/EventController.php" method="post">
                            <input type="hidden" name="eid" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-sm btn-warning" name="delete" value="Delete">
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