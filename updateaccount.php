<?php
  include_once 'dbConnect.php';
  session_start();

  // if (isset($_SESSION['room_id']))

  //   $id= $_SESSION['room_id'];
  //   $query="Select * from room_masterfile WHERE room_id = '{$id}'";
  //   $select_profile_user_query=mysqli_query($connection,$query);

  //   while ($row=myqsqli_fetch_array($select_user_profile_query)){

  //       $room_id=$row['room_id'];
  //       $room_type=$row['room_type'];
  //       $room_description=$row['room_description'];
  //       $room_capacity=$row['room_capacity'];
  //       $room_rate=$row['room_rate'];
  //       $room_number=$row['room_number'];
  //       $room_status=$row['room_status'];



  //   }

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modify Discounts</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Lautech Hotel - Admin Module</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<style>
table{
  
  margin-top:10px;
}
table {
    border-collapse: collapse;

}

table, th, td {
    border: 2px solid black;
    text-align: center;
}
table{
  color: black;
}

</style>
<body>        <form method = "POST" action = "RoomsAdd.php" id = "addRoomsForm">
        
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Lautech Hotel Ogbomoso - Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        <!-- </li> -->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts"> -->
          <!-- <a class="nav-link" href="charts.php"> -->
            <!-- <i class="fa fa-fw fa-area-chart"></i> -->
            <!-- <span class="nav-link-text">Charts</span> -->
          <!-- </a> -->
        <!-- </li> -->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables"> -->
          <!-- <a class="nav-link" href="tables.php"> -->
            <!-- <i class="fa fa-fw fa-table"></i> -->
            <!-- <span class="nav-link-text">Tables</span> -->
          <!-- </a> -->
        <!-- </li> -->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components"> -->
          <!-- <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion"> -->
            <!-- <i class="fa fa-fw fa-wrench"></i> -->
            <!-- <span class="nav-link-text">Components</span> -->
          <!-- </a> -->
          <!-- <ul class="sidenav-second-level collapse" id="collapseComponents"> -->
            <!-- <li> -->
              <!-- <a href="navbar.php">Navbar</a> -->
            <!-- </li> -->
            <!-- <li> -->
              <!-- <a href="cards.php">Cards</a> -->
            <!-- </li> -->
          <!-- </ul> -->
        <!-- </li> -->
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages"> -->
          <!-- <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion"> -->
            <!-- <i class="fa fa-fw fa-file"></i> -->
            <!-- <span class="nav-link-text">Admin Controls</span> -->
          <!-- </a> -->
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <!-- <li>
              <a href="login.php">Login Page</a>
            </li>
            <li>
              <a href="register.php">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.php">Forgot Password Page</a>
            </li>
            <li>
              <a href="rooms.php">Update Rooms</a>
            </li> -->
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti22" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Manage Account</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti22">
            <li style = "color: #007bff">
              Admin Account
            </li> 
            <li>
              <a href="register.php">Add Account</a>
            </li>
            <li>
              <a href="adminusermodify.php">Modify Account</a>
            </li>
            
            <li>
          </li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti001">Customer Account</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti001">
                <li>
                  <a href="registerCustomer.php">Add Account</a>
                </li>
                <li>
                  <a href="">Modify Account</a>
                </li>
                
              </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti100" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Manage Rooms</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti100">
            <li>
              <a href="RoomsAdd.php">Add Rooms</a>
            </li>
            
            <li>
              <a href="RoomsDelete.php">Modify Rooms</a>
            </li>
            <li>
          </li>
        </li>
        
  

             <!--  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a> -->
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <!-- <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li> -->
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti10000" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Manage Discounts</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti10000">
            <li>
              <a href="DiscountAdd.php">Add Discounts</a>
            </li>
            <li>
              <a href="DiscountModify.php">Modify Discounts</a>
            </li>
            
            <li>
          </li>
        </li>
        
  

             <!--  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a> -->
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <!-- <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li> -->
              </ul>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti1000" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Manage Add-ons</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti1000">
            <li>
              <a href="#">Add Add-ons</a>
            </li>
            <li>
              <a href="#">Edit Add-ons</a>
            </li>
            <li>
              <a href="#">Delete Add-ons</a>
            </li>
            <li>
          </li>
         -->  
  

             <!--  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a> -->
  <!--             <ul class="sidenav-third-level collapse" id="collapseMulti2"> -->
                <!-- <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li> --><!-- 
              </ul>
            </li>
          </ul>
        </li> -->

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti100000" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Reports</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti100000">
            <li>
              <a href="ReportOccupancy.php">Occupancy Report</a>
            </li>
            <li>
              <a href="ReportReservationSummary.php">Reservation Summary</a>
            </li>
            <li>
              <a href="ReportDiscount.php">Discount Report</a>
            </li>
            <li>
              <a href="ReportEarningsSummary">Summary of Earnings</a>
            </li>
            <li>
              <a href="ReportAveRoomIncome.php">Average Room Income</a>
            </li>
            <li>
          </li>
        </li>
        
  

             <!--  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a> -->
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <!-- <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li> -->
              </ul>
            </li>
          </ul>
        </li>
        
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li> -->
      <!-- </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
                <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method = "POST" action = "registerCustomer.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input  required class="form-control" id="exampleInputName" name = "firstName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" pattern = "[a-z A-Z]+" onkeypress="return isLetter(event)">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input required class="form-control" id="exampleInputLastName" name = "lastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" pattern = "[a-z A-Z ]+" onkeypress="return isLetter(event)">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputEmail1">Email address</label>
                <input required class="form-control" id="exampleInputEmail1" name = "email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="col-md-6">
                <label for="exampleInputContactNum1">Contact Number</label>
                <input required class="form-control" id="exampleInputEmail1" name = "contactNumber" type="text" aria-describedby="emailHelp" placeholder="Enter Contact Number">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input required class="form-control" id="exampleInputPassword1" name = "password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input required class="form-control" id="exampleConfirmPassword" name = "confirmPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Address">Address</label>
                <input required class="form-control" id="exampleAddress" name = "address" type="text" placeholder="Address">
              </div>
              <div class="col-md-6">
                <label for="country">Country</label><br>
                <select required name="country">
                  <option value="Australia">Australia</option>
                  <option value="China">China</option>
                  <option value="HongKong">Hong Kong</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Japan">Japan</option>
                  <option value="Korea">Korea</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Philippines" selected="selected">Philippines</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Thailand">Thailand</option>
                  <option value="UAE">United Arab Emirates</option>
                  <option value="UK">United Kingdom</option>
                  <option value="USA">United States</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>
          </div>


          <button class="btn btn-primary btn-block" name = "submit" type = "submit">Register Customer</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

     
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Lautech Hotel Ogbomoso</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>

</body>
</html>