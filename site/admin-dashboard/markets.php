<?php  
 $connect = mysqli_connect("localhost", "root", "","final");  
 $query ="select owner_name,zone_name,market_name from demand_1";  
 $result = mysqli_query($connect, $query);

 ?> 



 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>NMC - Admin Panel</title>
  <link rel="icon" type="image/x-icon" href="../images-favicon.png">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'>
<link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/416491/timeline.css'>
<link rel="stylesheet" href="./css/style.css">

<!-- <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/bootstrap.min.css" rel="stylesheet" /> -->
<link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/DT_bootstrap.css" rel="stylesheet" />
<link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/style.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


</head>
<body>
<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
      <a class="navbar-brand" href="index.html"><img src="../images-favicon.png" alt="NMC logo" width="35px" height="35px"> &nbsp; Admin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
          <li>
            <a href="#">
              <div>
                <strong>Elon Bhai Musk</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
              </div>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <strong>Elon Bhai Musk</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
              </div>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <strong>Elon Bhai Musk</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
              </div>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>Read All Messages</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        <!-- /.dropdown-messages -->
      </li>
      <!-- /.dropdown -->
      
      
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
          </li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
            </div>
            <!-- /input-group -->
          </li>
          <li>
            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
          </li>
          <li>
            <a href="tenants.php"><i class="fa fa-users fa-fw"></i> Tenants</a>
            
            <!-- /.nav-second-level -->
          </li>
          <li>
            <a href="markets.html"><i class="fa fa-map-marker fa-fw"></i> Markets</a>
            
        
            <a href="invoices.php"><i class="fa fa-wrench fa-fw"></i> Invoices</a>
            <!-- <ul class="nav nav-second-level">
              <li>
                <a href="panels-wells.html">Panels and Wells</a>
              </li>
              <li>
                <a href="buttons.html">Buttons</a>
              </li>
              <li>
                <a href="notifications.html">Notifications</a>
              </li>
              <li>
                <a href="typography.html">Typography</a>
              </li>
              <li>
                <a href="icons.html"> Icons</a>
              </li>
              <li>
                <a href="grid.html">Grid</a>
              </li>
            </ul> -->
            <!-- /.nav-second-level -->
          </li>
          <li>
            <a href="payments.html"><i class="fa fa-sitemap fa-fw"></i>Payments</a>
            
            <!-- /.nav-second-level -->
          </li>
          <!-- <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i> More<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="#">Support</a>
              </li>
              <li>
                <a href="#">Manage Users</a>
              </li>
            </ul>
          </li> -->
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Market Details</h1>
      
      <div class="row">
      <!--main content start-->
              <!-- page start-->
              <section class="panel ">
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group">
                                <button id="editable-sample_new" class="btn green">
                                    Add New 
<i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space15"></div>

<div class="table-responsive">

<table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>Owner Name</th>
                                <th>Zone name</th>
                                <th>Market</th>
                                <th>View</th>
                         <th>EDIT</th>
                         <th>DELETE</th>
                            </tr>
                            </thead>

                            <?php  
		if(mysqli_num_rows($result)>0){

		
		while($row = mysqli_fetch_array($result))  
		{  
		echo '  
		  <tr>  
		  
		  	   <td>'.$row["owner_name"].'</td> 
           <td>'.$row["zone_name"].'</td>
			   <td>'.$row["market_name"].'</td>  
         <td><a class="view" href="javascript:;">view</a></td>
               <td><a class="edit" href="javascript:;">Edit</a></td>
<td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
		 </tr>  
		   ';  
	 }  
		}
	 ?>  
                            <!-- <tbody>
<tr class="">
<td>Rose</td>
<td>Alfred </td>
<td>01/09/1978</td>
<td class="center">super user</td>
<td><a class="edit" href="javascript:;">Edit</a></td>
<td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                          
</tbody> -->
</table>

                        </div>
                    </div>
                </div>
            
            </section>
            </div>
        </div>
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.1/raphael.js'></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js'></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/js/sb-admin-2.js'></script>
<script src='https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js'></script>
<script  src="./javascript/script.js"></script>
<script src="javascript\chart1.js"></script>  
<script src="javascript\chart2.js"></script>
<script src="javascript\chart3.js"></script>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/jquery.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/jquery-ui-1.9.2.custom.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/jquery.nicescroll.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/bootstrap.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/jquery.dataTables.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/DT_bootstrap.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/jquery-migrate-1.2.1.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/respond.min.js"></script>
<script src="./javascript/editable_table.js"></script>
<script>
              jQuery(document).ready(function() {
              EditableTable.init();
          });
</script>

</body>
</html>
