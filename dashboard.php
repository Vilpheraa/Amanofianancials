
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>    - Dashboard</title>
    
 <link rel="icon" type="image/x-icon" href="../css/images/favicon.png">
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" src="../css/images/coinicon.jpg" />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader" style="background:black;">
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
          <style>
            #mylogo, .mylogo{
              width:200px;
              height:30px;
            }
          </style>
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
                            <li><a href="" aria-expanded="false">Deposits</a></li>
                            <li><a href="" aria-expanded="false">Withdrawals</a></li>
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
        <div class="content-body ">

            <div class="container-fluid mt-3 ">
                <div class="card bg-dark shadow-none">
                     <!-- TradingView Widget BEGIN -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    },
    {
      "description": "Solana",
      "proName": "BINANCE:SOLUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:AVAXUSDT"
    },
    {
      "description": "Ripple",
      "proName": "BINANCE:XRPUSDT"
    },
    {
      "description": "Polkadot",
      "proName": "BINANCE:DOTUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:ADAUSDT"
    },
    {
      "description": "Shiba Inu",
      "proName": "BINANCE:SHIBUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:GALAUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:BNBUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:SANDUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:DOGEUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:LTCUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:WAVESUSDT"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-dark shadow-none">
                            <div class="card-body">
                                <h3 class="card-title text-white">Amount Staked in Active plan</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 0</h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-none bg-dark">
                            <div class="card-body">
                                <h3 class="card-title text-white">Wallet balance</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 0</h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-none bg-dark">
                            <div class="card-body">
                                <h3 class="card-title text-white">Net Profit</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 0</h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card bg-dark shadow-none" style="height: 170vh;">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                       <!-- TradingView Widget BEGIN -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": true,
  "showSymbolLogo": true,
  "showFloatingTooltip": true,
  "width": "100%",
  "height": "100%",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(17, 85, 204, 1)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "tabs": [
    {
      "title": "Tokens",
      "symbols": [
        {
          "s": "BITSTAMP:BTCUSD"
        },
        {
          "s": "BINANCE:ETHUSDT"
        },
        {
          "s": "BINANCE:SOLUSDT"
        },
        {
          "s": "BINANCE:LUNAUSDT"
        },
        {
          "s": "BINANCE:XRPUSDT"
        },
        {
          "s": "BINANCE:DOTUSDT"
        },
        {
          "s": "BINANCE:GALAUSDT"
        },
        {
          "s": "BINANCE:SHIBUSDT"
        },
        {
          "s": "BINANCE:ADAUSDT"
        },
        {
          "s": "BINANCE:LTCUSDT"
        },
        {
          "s": "BINANCE:BNBUSDT"
        }
      ]
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
  <!-- TradingView Widget END -->
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

  
            </div>
               <div class="card bg-dark shadow-none" style="height:70vh">
               <div class="card-body">
                   <!-- TradingView Widget BEGIN -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": "100%",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "dark",
  "locale": "en",
  "isTransparent": true
}
  </script>
</div>
<!-- TradingView Widget END -->
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
            <p>Copyright &copy;   Amano Financials 2023</p>
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