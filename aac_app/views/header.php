<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php

    if ($current_page == "login" || $current_page == "site") {
        echo "<title>AAC - Login</title>";
    } else if ($current_page == "user") {
        echo "<title>AAC - Registration</title>";
    }
    ?>

    <!-- Bootstrap Core CSS -->
    <link href="<?= RES_URL; ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= RES_URL; ?>css/datepicker.css">

    <!-- MetisMenu CSS -->
    <link href="<?= RES_URL; ?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= RES_URL; ?>css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= RES_URL; ?>css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?= RES_URL; ?>css/dataTables.responsive.css" rel="stylesheet">
    <link href="<?= RES_URL; ?>css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= RES_URL; ?>css/style1.css" type="text/css">
    <link rel="stylesheet" href="<?= RES_URL; ?>css/vanillaModal.css">
    <link rel="stylesheet" href="<?= RES_URL; ?>css/demo1.css">
    <link rel="stylesheet" href="<?= RES_URL; ?>css/style_color.css"/>

    <!-- Custom Fonts -->
    <link href="<?= RES_URL; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header>

    <div id="headerContent" class="container">
        <div class="row"> <!--RKU logo-->
            <div id="crest" class="col-xs-12 col-sm-5 col-md-4 col-lg-3"><a href="#">
                    <img src="<?= RES_URL; ?>images/original.png" width="173" height="90" class="noprint"></a></div>
            <div id="siteName" class="col-xs-12 col-sm-4 col-md-5 col-lg-7">
                <div class="site__header">
                    <center>
                        <h2>AAC Portal</h2>
                    </center>
                    <!--<h2 style="text-shadow:1px 0px 0px #ffffff; ">Central Library</h2>  -->
                </div>
            </div>
        </div>
    </div>
    <!-- end of headerContent -->
</header>
<?php

if ($current_page == "login" || $current_page == "user" || $current_page=="site") {

    ?>
    <div class="site__title1">
        <div class="container">
            <div class="row">
                <ul class="primary-nav js-primary-nav site__title1">
                    <li class="home">&nbsp;</li>
                </ul>
            </div>
        </div>
        <!--end of main menu-->
    </div>
    <?php
} elseif($current_page=="faculty") {
?>

    <!--main menu start-->
    <div class="site__title1">
        <div class="container">
            <div class="row">
                <ul class="primary-nav js-primary-nav site__title1">
                    <li><a href="index" class="home">Dashboard</a></li>
                    <li><a href="newapp" class="home">New Application</a></li>
                    <li><a href="" class="home">View Application</a></li>
                    <li><a href="" class="home">Submit Application</a></li>
                    <li><a href="" class="home">Peer-Review</a></li>
                    <li><a href="" class="home">Logout</a></li>
                    <li><a href="" class="home">Welcome, </a></li>
                </ul>
            </div>
        </div>
        <!--end of main menu-->
    </div>
    <?php
} else {}
?>

<div class="container">
    <div class="row">

        <div class="container page-content">
            <div class="row">
                <?php
                if($current_page=="faculty" && $current_action=="newapp") {
                    ?>
                    <!--New Applicaiton Side Menu-->
                    <div id="sideMenu" class="col-md-2" style="width:17%">
                        <h3>Section Contents</h3>

                        <div class="site__title">

                            <img src="<?= RES_URL; ?>images/rk_logo_small.png" alt="" height="20px"/><a
                                href="app_part_A.php">Part A</a><br/>
                            <img src="<?= RES_URL; ?>images/rk_logo_small.png" alt="" height="20px"/><a
                                href="app_part_B.php">Part B</a><br>
                            <img src="<?= RES_URL; ?>images/rk_logo_small.png" alt="" height="20px"/><a
                                href="app_part_C.php">Part C</a><br/>
                            <ul>
                                <li style="list-style:inline;list-style-type:none;"><img
                                        src="<?= RES_URL; ?>images/rk_logo_middle.png" alt="" height="20px"/><a
                                        href="app_part_C_Sec_I.php">Section I</a></li>
                                <li style="list-style:inline;list-style-type:none;"><img
                                        src="<?= RES_URL; ?>images/rk_logo_middle.png" alt="" height="20px"/><a
                                        href="app_part_C_Sec_II.php">Section II</a></li>
                                <li style="list-style:inline;list-style-type:none;"><img
                                        src="<?= RES_URL; ?>images/rk_logo_middle.png" alt="" height="20px"/><a
                                        href="app_part_C_Sec_III.php">Section III</a></li>
                                <li style="list-style:inline;list-style-type:none;"><img
                                        src="<?= RES_URL; ?>images/rk_logo_middle.png" alt="" height="20px"/><a
                                        href="app_part_C_Sec_IV.php">Section IV</a></li>
                                <li style="list-style:inline;list-style-type:none;"><img
                                        src="<?= RES_URL; ?>images/rk_logo_middle.png" alt="" height="20px"/><a
                                        href="app_part_C_Sec_V.php">Section V</a></li>
                                <li style="list-style:inline;list-style-type:none;"><img
                                        src="<?= RES_URL; ?>images/rk_logo_middle.png" alt="" height="20px"/><a
                                        href="app_part_C_Sec_VI.php">Section VI</a></li>
                            </ul>
                            <img src="<?= RES_URL; ?>images/rk_logo_small.png" alt="" height="20px"/><a
                                href="app_part_D.php">Part D</a>
                        </div>
                        <br/>

                    </div>
                    <?php
                }
?>

