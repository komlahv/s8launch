<!DOCTYPE html>
<?php

  $cookie_name = "passed";
  if(!isset($_COOKIE[$cookie_name])) {
    header("Location: login.html");
  }
   /*session_start();
   echo $_SESSION["passed"];
   echo "xjnjnj";
   */
  /*if (!isset($_SESSION['passed']))
  {
    header("Location: login.html");
  }*/

 ?>
<html lang=en-US ng-app="MtnApp">
<meta charset=UTF-8>
<meta content="IE=edge" http-equiv=X-UA-Compatible>
<meta content="width=device-width,initial-scale=1" name=viewport>
<title>MTN Pre-order</title>
<link rel="shortcut icon" href="images/mtn.png">
<link href=css/font-awesome.min.css rel=stylesheet media=all>
<link href=css/bootstrap.min.css rel=stylesheet media=all>
<link href=flaticon/flaticon.css rel=stylesheet>
<link href=css/owl.carousel.min.css rel=stylesheet>
<link href=css/animate.min.css rel=stylesheet>
<link href=css/reset.css rel=stylesheet>
<link href=style.min.css rel=stylesheet media=all>
<link href=css/responsive.css rel=stylesheet media=all>
<!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
<link href=css/colors/default.css rel=stylesheet title=default>
<link href=css/colors/red.css rel="alternate stylesheet" title=red>
<link href=css/colors/blue.css rel="alternate stylesheet" title=blue>
<link href=css/colors/green.css rel="alternate stylesheet" title=green>
<link href=switcher-assets/switcher-style.css rel=stylesheet>
<style>
    .slider {
        background: #ffffff;
    }
    .slider-overlay {
      background: linear-gradient(99deg, rgba(1,172,138,0) 0%,rgba(1,172,138,0) 54%,rgb(255, 203, 9) 54%,rgb(255, 203, 9) 100%);
    }
    .sticky {
    background: #ffcb09;
    }
    .slider-text a {
    background: #006890;
    }
    .footer {
    background: #006890;
}
</style>
<body class=js data-offset=50 data-spy=scroll data-target=.navbar ng-controller="OrdersController" ng-cloak>

    <header class=menubar id=menu>
        <nav class="navbar navbar-fixed-top">
            <div class=container>
                <div class=navbar-header>
                    <button type=button aria-expanded=false class="collapsed navbar-toggle" data-target=#bs-example-navbar-collapse-1 data-toggle=collapse><span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span>
                    </button> <a href=#menu class=navbar-brand><img src="images/mtn.png" ></a>
                </div>
                <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-1>

                </div>
            </div>
        </nav>
    </header>
    <section class=blog id=blog>
        <div class=container>
            <div class=row>
                <div class="text-center col-md-12">
                    <div class=blog-top>
                        <h2 class=head-two>Orders</h2>
                        <div class=top-head-before><i class="fa fa-dot-circle-o" aria-hidden=true></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class=row>
                <div class=col-md-12>
                    <div class="wow zoomIn blog-content">
                        <div class="carousel slide" id=quote-carousel data-ride=carousel>
                            <div class="text-center carousel-inner">
                                <div class="item active" style="padding: 10px">
                                    <div class="row ">
                                    <div class="col-md-12">
                                      <span class="pull-right">
                                      <a class="btn btn-primary" target="_blank" href="Scripts/excel.php">Export Orders to Excel</a>
                                      <a class="btn btn-primary" href="Scripts/logout.php">Log Out</a>
                                      <!--<a class="btn btn-primary">Add Users</a>-->
                                    </span>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-md-12">

                                      <table class="table-striped" style="min-width: 100%;">
                                        <tr><td>First Name</td><td>Last Name</td><td>Phone Number</td><td>Email</td><td>Address</td><td>Order Type</td><td>Model</td><td>Color</td></tr>
                                        <tr dir-paginate="order in orders | itemsPerPage: 20"><td>{{order.firstname}}</td><td>{{order.lastname}}</td><td>{{order.phoneNumber}}</td><td>{{order.email}}</td><td>{{order.address}}</td><td>{{order.type}}</td><td>{{order.model}}</td><td>{{order.color}}</td></tr>
                                      </table>
                                      <dir-pagination-controls></dir-pagination-controls>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class=footer>
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <div class=footer-content>
                        <p class=pull-left>© 2017 MTN GHANA <i class="fa fa-heart" aria-hidden=true></i>
                            <div class="pull-right footer-icon">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div><a href=# class="text-center scrollToTop"><i class="fa fa-angle-up scroll-fa"aria-hidden=true></i></a>
    </div>
    <script src=js/jquery.min.js></script>
    <script src=js/bootstrap.min.js></script>
    <script src="app/angular.min.js"></script>
    <script src="app/dirPagination.js"></script>
    <script src="app/app.js"></script>
    <script src=js/owl.carousel.min.js></script>
    <script src=../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js></script>
    <script src=js/jquery.counterup.min.js></script>
    <script src=js/progressbar.min.js></script>
    <script src=js/parallax.min.js></script>
    <script src=js/wow-1.3.0.min.js></script>
    <script src=js/main.min.js></script>
    <script src=switcher-assets/styleswitcher.js></script>
    <script src=switcher-assets/switcher-active.js></script>
  </body>
  </html>
