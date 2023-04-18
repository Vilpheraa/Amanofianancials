
<!DOCTYPE html>
<html lang="en">

<head>
<link href="plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> - Withdrawals</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon"
    href="./images/amano-financial-website-favicon-color.png"
    type=image/x-icon>
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
          <style>

            #mylogo, .mylogo{

              width:200px;
              height:30px;
            }
          </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header bg-light">
            <div class="brand-logo bg-light">
                <a href="dashboard.php">
                    <b class="logo-abbr"> </b>
                  <span class="logo-compact"></span>
                    <span class="brand-title">
                        
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    
                </div>
                <div class="header-right">
                    
                            
                       
                      
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/avatar/11.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="profile.php"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                       
                                        
                                        <hr class="my-2">
                                       
                                        <li><a href="./index.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>
                    <li>
                            <li><a href="dashboard.php"><i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span></a></li>
                    </li>
                    <li>
                     <li><a href="profile.php"><i class="menu-icon icon-user"></i><span class="nav-text"> Profile</span></a></li>
                    </li>   
                    <li>
                        <li><a href="set-amount.php"><i class="icon-graph menu-icon"></i><span class="nav-text">Fund wallet</span></a></li>
                    </li>
                    <li>
                        <li><a href="withdraw.php"><i class="fa fa-money menu-icon"></i><span class="nav-text">Withdraw</span></a></li>
                    </li>
                    <li>
                        <li><a href="#"><i class="icon-chart menu-icon"></i><span class="nav-text">Charts</span></a></li>
                    </li>
                     <li>
                        <li><a href="packages.php"><i class="icon-chart menu-icon"></i><span class="nav-text">Staking plans</span></a></li>
                    </li>  
                
                    <li class="nav-label">Transactions</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Transactions</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="set-amount.php" aria-expanded="false">Deposits</a></li>
                            <li><a href="withdraw.php" aria-expanded="false">Withdrawals</a></li>
                        </ul>
                    </li>
                    <li>
                        <li><a href="./index.html"><i class="icon-key menu-icon"></i><span class="nav-text">Logout</span></a></li>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

        <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Withdraw</a></li>
                        
                    </ol>
                </div>
            </div>
            <!-- row -->
        <div class="container">
            <center>
            <div class="card col-md-6 col-lg-4">
                <div class="card-header">
                   <h3> Balance: $0</h3>
                   
                </div>
                <div class="card-body">
                <form id="contact-form" method="post" >
 <div class="form" method="post">
     <label>Amount to withdraw</label>
    <input class="form-control" type="number" placeholder="Amount to be withdrawn" name="w-amount" required>
  <br>
  <label>Choose your currency</label>
  <select class="form-control" name="currency" required>
      <option selected hidden value="">Select currency</option>
       
    <option value='Bitcoin'>Bitcoin </option>
    
    
    <option value='USDT'>USDT </option>
    
    
    <option value='Ethereum'>Ethereum </option>
    
    
    <option value='Binance coin'>Binance coin </option>
    
      </select>
  
  <br>
  
  <label>Wallet address</label>
  <input type="text" class="form-control" placeholder="Enter wallet address" name="btc_address" autocomplete="false" required>
  <input type="text" class="" style="width: 0; height:0;" name="hidden" autocomplete="false" >
  <br>
  <label>Account password</label>
  <input class="form-control" type="password" placeholder="Password" name="password" required>
  <br>
  <div class="form-group d-grid">
  <button class="btn btn-primary btn-block" type="submit" name="submit"   data-target="#mymodal" data-toggle="modal">Withdraw funds</button>
  
  
  </div>
   
 </div>
 </form>
                </div>
            </div>
            <style>
                .card-img{
                    height: 60px;
                }
            </style>
            </center>
           
        </div>
            
              
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
         <!--**********************************
            Content body end
        ***********************************-->
        <div class="modal fade" id="mymodal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                Withdraw Failure!            </div>
              <div class="modal-body">
                
              
              <form method="post">
                <div class="form-group">
                  <label>Your account do not have an active Staking Plan.</label>
                  
                  <br><br>
                  <button type="submit" class="btn btn-primary" style="margin-right: 5%;">
                    Close
                  </button>
                  
                  <a href="packages.php"><button type="submit" class="btn btn-primary">
                    Staking plans
                  </button></a>

                </div>
              </form>
              </div>
            </div>
          </div>
       
        </div>
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="./plugins/sweetalert/js/sweetalert.init.js"></script>
    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>
</html>


