

<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>    - Payment Method</title>
    <!-- Favicon icon -->
   
    <link rel="shortcut icon"
    href="./images/amano-financial-website-favicon-color.png"
    type=image/x-icon>
    <!-- Favicon icon -->
   
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" src="../css/images/coinicon.jpg" />
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
                    <b class="logo-abbr"></b>
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
                                       
                                        <li><a href="auth.php?logout=true"><i class="icon-key"></i> <span>Logout</span></a></li>
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
                        <li><a href="charts.php"><i class="icon-chart menu-icon"></i><span class="nav-text">Charts</span></a></li>
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
                            <li><a href="deposits.php" aria-expanded="false">Deposits</a></li>
                            <li><a href="withdrawals.php" aria-expanded="false">Withdrawals</a></li>
                        </ul>
                    </li>
                    <li>
                        <li><a href="auth.php?logout=true"><i class="icon-key menu-icon"></i><span class="nav-text">Logout</span></a></li>
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Payment method</a></li>
                        
                    </ol>
                </div>
            </div>
            <!-- row -->
        <div class="container">
            
            <center >
                
                
            </center><hr>
            <h3>How much do you want to Stake</h3>
           
          
            
           
        <div class='row'>
            <div class="col col-md-6 mx-auto">
                <center>
                    <div class="card">
                <form method="post" class="card-body">
                    <div class="form-group ">
                        <label>Your Investment Package:</label>
                        
                                    <input type="text" class="form-control" value="Retirement Plan" readonly/><hr>
                                    <a href="packages.php" >
                    <div class="badge bg-primary p-2 text-white">
                        Change your staking plan here
                    </div>
                </a>
                    </div>
                    <div class="form-group">
                        <label>Stake Amount: &nbsp;<small>$15000 - $200000</small></label>
                        <input type="number" class="form-control" name="stake-amount" min="15000" max="200000" required/>
                    </div>
                    <button class="btn btn-dark" type="submit" name="set-amount">Stake Funds</button>
                </form>
                </div>
        </center>
                
            </div>
        

      
                   
                    
                </div>
        </div>
            
              
            </div>
            
                <script>
                window.location.replace('payment-method.php');
                </script>
                            <!-- #/ container -->
        </div>




        <div class="modal fade" id="mymodal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                Confirm Payment
              </div>
              <div class="modal-body">
                
              
              <form method="post">
                <div class="form-group">
                  <label>Invoice ID</label>
                  <input class="form-control" name="client-address" placeholder="Enter Invoice ID" required>
                  <br><br>
                  <button type="submit" class="btn btn-primary">
                    Confirm
                  </button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy;   RobinHoodTs 2023</p>
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
    <script src="//code.tidio.co/0pik3vtdp1bg6liue6a1ppz1zs3urnvo.js" async></script>
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