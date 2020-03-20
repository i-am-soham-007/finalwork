<?php include 'common/header.php';
?>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
	  
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-bloody">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Total Users</p>
                <h4 id="totaluser" class="text-white line-height-5">
                  value 1
                </h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-users text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-scooter">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Total vendor</p>
                <h4 id="totalvendor" class="text-white line-height-5">   value 2</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-users text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-blooker">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Total Package</p>
                <h4 id="totalpackage" class="text-white line-height-5"> value 3</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-list-ul text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ohhappiness">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Hotels</p>
                <h4 class="text-white line-height-5">12.80%</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-building text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="card">
            <div class="card-header">
                Last 7 Days Report
                <div class="card-action">
                 <div class="dropdown">
                 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="icon-options"></i>
                 </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void();">Action</a>
                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                   </div>
                  </div>
                 </div>
                </div>
                <div class="card-body"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <canvas id="dashboard-chart-1" style="display: block; width: 299px; height: 149px;" width="299" height="149" class="chartjs-render-monitor"></canvas>
                </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="card">
            <div class="card-header">
                Most Selling Items
                <div class="card-action">
                 <div class="dropdown">
                 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="icon-options"></i>
                 </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void();">Action</a>
                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                   </div>
                  </div>
                 </div>
                </div>
                <div class="card-body"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <canvas id="dashboard-chart-2" style="display: block; width: 299px; height: 149px;" width="299" height="149" class="chartjs-render-monitor"></canvas>
                </div>
          </div>
        </div>
      </div>


      <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <?php include 'common/footer.php'; ?>