<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
if(!isset($_SESSION['user_email'])){
    header('location:login_form.php');
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> - Profile</title>
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
    <link rel="icon" src="../css/images/coinicon.jpg" />

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
          <style>

            #mylogo, .mylogo{

              width:200px;
              height:30px;
            }
          </style>
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
                        <li><a href=""><i class="icon-chart menu-icon"></i><span class="nav-text">Charts</span></a></li>
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
                            <li><a href="#" aria-expanded="false">Deposits</a></li>
                            <li><a href="#" aria-expanded="false">Withdrawals</a></li>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="" style="border-radius:50%;">
                                    <div class="clearfix">
                                        
                                    </div>
                                    <div class="media-body">
                                        <h3 class="mb-0"><?php echo $_SESSION['user_name'] ?></h3>
                                        <p class="text-muted mb-0">No address specified</p>
                                    </div>
                                    <div class="float-end">
                                        <a href="#"><button class="btn btn-light border btn-sm"><i class="icon-key"></i> <span>Change password</span></button></a>
                                        </div>
                                </div>
                                
                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-success"><i class="fa fa-money"></i></span>
                                            <h3 class="mb-0">$0</h3>
                                            <p class="text-muted px-4">Balance</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-warning"><i class="fa fa-money"></i></span>
                                            <h3 class="mb-0">$0</h3>
                                            <p class="text-muted">Amount Deposit</p>
                                        </div>
                                        
                                    </div>
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-danger"><i class="fa fa-heart"></i></span>
                                            <h3 class="mb-0">Your Plan</h3>
                                            <p class="text-muted">Plan</p>
                                        </div>
                                    </div>

                                    
                                    <div class="col-12 text-center">
                                    <a href="set-amount.php">
                                        <button class="btn btn-danger px-5">Fund my account</button>
                                        </a>
                                    </div>
                                </div>

                                
                                
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>Null</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span><?php echo $_SESSION['user_email'] ?></span></li><hr>
                                    <li><strong class="text-dark mr-4">Referral link</strong><span>
                                        <input type="text" class="form-control" value="https://amanofinancials/register.php?ref=273" readonly/>
                                    </span></li>
                                
                                </ul>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="#" class="form-profile" enctype="multipart/form-data" method="POST">
                                   

                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input class="form-control" name="full-name" id="full-name"  placeholder="Full name" value="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" name="phone" id="phone"  placeholder="Phone number" value=""  required> 
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <textarea class="form-control" name="address" id="address"  placeholder="Contact address"  cols="30" rows="2" >No address specified</textarea>
                                    </div>
                                    <div class="form-group">
                                    <label>Plan</label>
                                    <select name="plan" class="form-control">
                                        
                                            <option value='2'>Student package </option>
                                            
                                            <option value='3'>Standard plan</option>
                                            
                                            <option value='4'>Premium Plan</option>
                                            
                                            <option value='24'selected>Retirement Plan</option>
                                                                                    
                                        
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <center>
                                    <img src="images/avatar/11.png" height="100" width="100" alt="" style="border-radius:50%;"><br>
                                        <input class="form-control-file " name="fileToUpload" type="file" accept="image/*">
                                        </center>
                                    </div>



                                    <div class="d-grid">
                                        <button class="d-none sweet-success"  id="profile-success"></button>
                                        <button class="btn btn-primary btn-block" type="submit" name="update">Update profile</button>
                                    </div>
                                </form>
                                                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
              
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy;  2023</p>
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