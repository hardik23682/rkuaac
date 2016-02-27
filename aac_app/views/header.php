<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php

    if ($current_page == "login") {
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
