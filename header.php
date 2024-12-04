<?php session_start();
  require_once("configs/config.php");
  require_once("helpers/helper.php");
  require_once("libraries/library.php");
  require_once("models/model.php");
  require_once("controllers/controller.php");
  
  if(!isset($_SESSION["uid"])) header("location:$base_url");
  $uid=$_SESSION["uid"];
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/tocly/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 04:17:20 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Tocly - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo $base_url;?>/assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="<?php echo $base_url;?>/assets/libs/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout Js -->
    <script src="<?php echo $base_url;?>/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo $base_url;?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo $base_url;?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo $base_url;?>/assets/css/app.min.css"  rel="stylesheet" type="text/css" />



</head>

<body data-sidebar="colored">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
    <?php include_once "views/layout/topbar.php" ?>
    <?php include_once "views/layout/sidebar.php" ?>
    
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">