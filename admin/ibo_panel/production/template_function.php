<?php
//cho "fsdxasmxxz";

function top_structure($title, $n, $n_level, $n_heading, $n_message){
    global $con, $date, $time, $d_detail;
    ?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://i.postimg.cc/yNnXqtPQ/YDC-250.gif" type="image/ico" />

    <title><?php echo $title;?></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
   <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <?php

    if($n=='1'){
        $script="new PNotify({
             title: '".$n_heading."',
             text: '".$n_message."',
             type: '".$n_level."',
             styling: 'bootstrap3'
      });";
    }
    ?>
  </head>

  <body class="nav-md" onLoad="<?php echo $script;?>">
    <div class="container body">
      <div class="main_container">
    
    <?php
}


function sidebar(){
    global $con, $date, $time, $d_detail;
    ?>
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title">&nbsp;&nbsp;<span>Inward-Outward<br>by EIBO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                  
                <img src="" alt="..." class="img-circle profile_img" style="height:50px;">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <!--<li><a href="bank_details.php"><i class="fa fa-bank"></i> Bank Account Details</a>-->
                  </li>
                  </li>
                  <!--<li><a><i class="fa fa-sitemap"></i> My Network <span class="fa fa-chevron-down"></span></a>-->
                  <!--  <ul class="nav child_menu">-->
                  <!--    <li><a href="./level1.php">Level View</a></li>-->
                  <!--    <li><a href="./network_list.php">Network List</a></li>-->
                  <!--    <li><a href="./automatrix_list.php">Automatrix List</a></li>-->
                      
                  <!--  </ul>-->
                  <!--</li>-->
                  <!--<li><a href="activate_plan.php"><i class="fa fa-circle"></i> Activate Plan</a>-->
                  <!--</li>-->
                </ul>
              </div>
              <!--<div class="menu_section">-->
              <!--  <h3>Live On</h3>-->
              
              <!--  <ul class="nav side-menu">-->
              <!--    <li><a><i class="fa fa-money"></i>Income View <span class="fa fa-chevron-down"></span></a>-->
              <!--      <ul class="nav child_menu">-->
              <!--        <li><a href="level_income.php">Level Commission</a></li>-->
              <!--         <li><a href="auto_matrix_income.php">Auto Matrix Bonus</a></li>-->
              <!--         <li><a href="reward_bonus.php">Reward Bonus</a></li>-->
              <!--         <li><a href="travel_incentives.php">Travel Incenntives</a></li>-->
              <!--         <li><a href="lucky_draw.php">Lucky Draws</a></li>-->
                      
              <!--      </ul>-->
              <!--    </li>-->
              <!--    <li><a><i class="fa fa-plane"></i>Tour <span class="fa fa-chevron-down"></span></a>-->
              <!--      <ul class="nav child_menu">-->
              <!--        <li><a href="national_tour.php">National </a></li>-->
              <!--         <li><a href="international_tour.php">International</a></li>-->
                        
                      
              <!--      </ul>-->
              <!--    </li>-->
              <!--   <li><a><i class="fa fa-bank"></i>Wallet <span class="fa fa-chevron-down"></span></a>-->
              <!--      <ul class="nav child_menu">-->
              <!--        <li><a href="yem_wallet_ledger.php">YEM Wallet</a></li>-->
              <!--         <li><a href="withdrawl_wallet_ledger.php">INR Wallet </a></li>-->
                        
              <!--      </ul>-->
              <!--    </li>-->
                   
              <!--     <li><a><i class="fa fa-bank"></i>Withdrawal <span class="fa fa-chevron-down"></span></a>-->
              <!--      <ul class="nav child_menu">-->
                 
              <!--         <li><a href="yem_withdrawl_request_history.php">INR Withdrawal</a></li>-->
                      
                      
              <!--      </ul>-->
              <!--    </li>-->
              <!--    <li><a><i class="fa fa-user"></i>Profile<span class="fa fa-chevron-down"></span></a>-->
              <!--      <ul class="nav child_menu">-->
                        
              <!--          <li><a href="change_wallet_id.php">Digital Wallet Address</a></li>-->
                        
              <!--          <li><a href="./changePassword.php">Change Password</a></li>-->
              <!--          <li><a href="./updateProfile.php">Update Profile</a></li>-->
              <!--          <li><a href="./kyc.php">KYC</a></li>-->
                        
              <!--      </ul>-->
              <!--    </li>                         -->
                  
              <!--  </ul>-->
              <!--</div>-->

            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

 <?php   
}
function header_bar(){
    global $con, $date, $time, $d_detail;
    ?>
    <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                     
                    <img src="" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="changePassword.php"> Change Password</a>
                      <!--<a class="dropdown-item"  href="javascript:;">-->
                      <!--  <span class="badge bg-red pull-right">50%</span>-->
                      <!--  <span>Settings</span>-->
                      <!--</a>-->
                  <!--<a class="dropdown-item"  href="javascript:;">Help</a>-->
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <!--<li role="presentation" class="nav-item dropdown open">-->
                <!--  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">-->
                <!--    <i class="fa fa-envelope-o"></i>-->
                <!--    <span class="badge bg-green">6</span>-->
                <!--  </a>-->
                <!--  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">-->
                <!--    <li class="nav-item">-->
                <!--      <a class="dropdown-item">-->
                <!--        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>-->
                <!--        <span>-->
                <!--          <span>John Smith</span>-->
                <!--          <span class="time">3 mins ago</span>-->
                <!--        </span>-->
                <!--        <span class="message">-->
                <!--          Film festivals used to be do-or-die moments for movie makers. They were where...-->
                <!--        </span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--      <a class="dropdown-item">-->
                <!--        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>-->
                <!--        <span>-->
                <!--          <span>John Smith</span>-->
                <!--          <span class="time">3 mins ago</span>-->
                <!--        </span>-->
                <!--        <span class="message">-->
                <!--          Film festivals used to be do-or-die moments for movie makers. They were where...-->
                <!--        </span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--      <a class="dropdown-item">-->
                <!--        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>-->
                <!--        <span>-->
                <!--          <span>John Smith</span>-->
                <!--          <span class="time">3 mins ago</span>-->
                <!--        </span>-->
                <!--        <span class="message">-->
                <!--          Film festivals used to be do-or-die moments for movie makers. They were where...-->
                <!--        </span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--      <a class="dropdown-item">-->
                <!--        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>-->
                <!--        <span>-->
                <!--          <span>John Smith</span>-->
                <!--          <span class="time">3 mins ago</span>-->
                <!--        </span>-->
                <!--        <span class="message">-->
                <!--          Film festivals used to be do-or-die moments for movie makers. They were where...-->
                <!--        </span>-->
                <!--      </a>-->
                <!--    </li>-->
                <!--    <li class="nav-item">-->
                <!--      <div class="text-center">-->
                <!--        <a class="dropdown-item">-->
                <!--          <strong>See All Alerts</strong>-->
                <!--          <i class="fa fa-angle-right"></i>-->
                <!--        </a>-->
                <!--      </div>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
              </ul>
            </nav>
          </div>
        </div>
    
    <?php
}

function bottom_structure($footer_heading){
    ?>
    
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <?php echo $footer_heading;?>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>

    
    
    
    
    <?php
    
}
?>