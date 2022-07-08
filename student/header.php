<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Announcements</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="page-top" style="min-height: 625px;">
    <div id="wrapper">
        <nav class="navbar navbar-dark text-nowrap align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: url(&quot;assets/img/ccnav.png&quot;) center left / cover, rgb(0,46,88);box-shadow: 0px 0px 13px rgb(0,0,0);">
            <div class="container-fluid d-flex flex-column p-0"><?php
                                                session_start();
                                                $con = new mysqli('localhost','root','','voshes');
                                                $id = $_SESSION['user_id'];
                                                $file_query_header = "select * from user_info where user_id = '$id'";
                                                $result = $con->query($file_query_header);
                                                $row_header = $result->fetch_assoc();
                                                echo '<img class="rounded-circle img-fluid" style="border-radius: 0px;width: 90px;margin: 0px 0px 0px;margin-top: 16px;" alt src="../images/'.$row_header['profile_pic'].'">';
                                          ?><span style="margin-top: 6px;color: rgb(255,255,255);font-size: 23px;"><strong><?php
                    
                    echo $_SESSION['user_id'];
                ?></strong></span>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <hr style="margin: 8px 0px;margin-bottom: 4px;margin-top: 9px;max-width: none;margin-right: 15px;margin-left: 15px;background: #6001fb;border-radius: 50px;border-width: 2px;border-top-color: rgb(248,;border-right-color: 249,;border-bottom-width: 0px;border-bottom-color: 252);border-left-color: 249,;">
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fa fa-bullhorn"></i><span>Announcements</span></a></li>
                    <li class="nav-item dropdown show"><a class="dropdown-toggle nav-link" aria-expanded="true" data-toggle="dropdown" href="student-dean-section.php"><i class="fa fa-users"></i><span>Messages</span>
                            <div class="collapse navbar-collapse" id="navcol-1" style="width: 100%;height: 100%;">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link active" href="#">Dean</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Guidance Counselor</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Students</a></li>
                                </ul>
                            </div>
                        </a>
                        <div class="dropdown-menu" style="background: rgba(255,255,255,0.55);width: 100%;height: 100%;"><a class="dropdown-item" href="student-dean-section.php" style="color: rgb(0,0,0);width: 100%;height: 100%;"><strong>Dean</strong></a><a class="dropdown-item" href="student-guidance-section.php" style="color: rgb(0,0,0);width: 100%;height: 100%;"><strong>Guidance Counselor</strong></a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="student-appointment.php"><i class="fa fa-calendar-plus-o"></i><span style="text-align: center;">Set an Appointment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="student-calendar.php"><i class="fa fa-calendar"></i><span style="text-align: center;">Calendar</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="student-change-pass.php"><i class="fa fa-exchange"></i><span style="text-align: left;">Change Password</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.html"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background: #fcf9ff;margin-bottom: 0px;padding-bottom: 36px;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="/*background: rgb(255, 255, 255);*/">
                    <div class="container-fluid"><img src="assets/img/col.png" style="width: 50px;filter: blur(0px);">
                        <hgroup class="d-none d-sm-block" style="margin-left: 8px;margin-top: -7px;">
                            <h4 style="margin-top: 17px;color: rgb(46,107,180);text-shadow: 0px 0px 16px;"><strong>Columban College, Inc.</strong></h4>
                            <h6 style="margin-top: -12px;margin-left: 2px;color: rgb(113,127,237);">Student Helpline System</h6>
                        </hgroup>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">
                                    <?php include('../header_process.php'); ?>
                                        
                                    </span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>