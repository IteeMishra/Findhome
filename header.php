

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <script src="~/Content/bootstrap/js/jquery-3.6.1.min.js"></script>
    <link rel="apple-touch-icon" sizes="76x76" href="~/Content/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="~/Content/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="~/Content/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="~/Content/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="~/Content/assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="~/Content/assets/img/sidebar-5.jpg" >

            <div class="sidebar-wrapper" style="background-image: linear-gradient(to right,#68392a 0%, #f7f7f7 180%,#f7f7f7 100%); ">
                <div class="logo">
                    <a href="http://www.wedding_planner.com" class="simple-text">
                       Real Time Wedding Planner
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="CustDashBoard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="UserProfile">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="FeedBack">
                            <i class="nc-icon nc-notes"></i>
                            <p>Feedback</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="Complaints">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Complain</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="SendEmail">
                            <i class="nc-icon nc-email-83"></i>
                            <p>Send SMS/Email</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="MyBooking">
                            <i class="nc-icon  nc-single-copy-04"></i>
                           
                            <p>My Booking</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ChangePassword">
                            <i class="nc-icon nc-key-25"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Show Bill </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500" >
                <div class="container-fluid">
                    
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                       
                        <ul class="navbar-nav ml-auto">
                             
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img  src="~/Content/User_Profile_Pics/@ViewBag.UserPicName" style="max-height:40px;max-width:40px; border-radius:50%;border:1px solid lightgreen;" alt="user-profile-pic"/>&nbsp;&nbsp;
                                    <span class="no-icon">@ViewBag.UserName</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="UserProfile">Profile</a>
                                    <a class="dropdown-item" href="ChangePassword">Change Password</a>
                                    
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="/Customer/Logout">Log Out</a>
                                </div>
                            </li>
                           
                               
                           
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            @RenderBody()
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="/General/Home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/General/Services">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="/General/Gallery">
                                    Gallery
                                </a>
                            </li>
                            <li>
                                <a href="/General/ContactUs">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Team</a>, Wedding Planner
                        </p>
                    </nav>
                </div>
            </footer>
        </div>

    </div>
</body>
<!--   Core JS Files   -->
<script src="~/Content/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="~/Content/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="~/Content/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="~/Content/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="~/Content/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="~/Content/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="~/Content/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="~/Content/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

       // demo.showNotification();

    });
</script>

</html>


