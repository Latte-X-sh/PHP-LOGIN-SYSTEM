<?php
session_start();
require 'lib/functions.php';
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: signin.php");
  exit;
}
$mixes= mix_feed(0); //gets all the mixes
$mixes = array_reverse($mixes);
// $json = json_encode($mixes , JSON_PRETTY_PRINT);
// //write json to file
// if (file_put_contents("data.json", $json))
//     echo "JSON file created successfully...";
// else 
//     echo "Oops! Error creating json file...";

// var_dump($mixes);die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords"content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Moses Odalo">
    <meta name="robots" content="noindex, nofollow">
    <title>Home</title>
        
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

<link rel="stylesheet" href="assets/css/style.css">


<!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- The navbar section is modular and will be called when needed. -->
<?php require 'layout/header.php'; ?>
<!-- sidebar section 310 to 597 .Inside the layout folder and we will require it -->
<?php require 'layout/sidemenu.php'; ?>
<!-- main page -->
<div class="page-wrapper">
<div class="container ">
  <br>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style=" height: 50% !important;">
      <div class="carousel-item active">
        <img class="d-block w-100" src="storage/7475bbeae4fa57aab0bdcf6638c1dfef.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>AD Space</h5>
          <p>#1</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="storage/1585563457389.jpg"alt="Second slide">
        <div class="carousel-caption ">
          <h5>AD Space</h5>
          <p>#2</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="storage/1fda4a36562f007eddffe0033de7f130.jpg"alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>AD Space</h5>
          <p>#3</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="content container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="file-wrap">
<div class="file-cont-inner">
<div class="file-content">
<div class="file-body">
<div class="file-scroll">
<div class="file-content-inner">
<h4>Feed</h4>
<div class="row row-sm">
    <!-- for loop inside the col -->
  <?php foreach ($mixes as $mix) { ?>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
    <div class="card card-file">
      <div class="dropdown-file">
      <a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
      <div class="dropdown-menu dropdown-menu-right">
      <a href="#" class="dropdown-item">View Details</a>
      <a href="#" class="dropdown-item">Share</a>
      <a href="#" class="dropdown-item">Download</a>
      </div>
      </div>
      <div class="card-file-thumb">
      <i class="fa fa-file-audio-o"></i>
      </div>
      <div class="card-body">
      <h6><a href=""><?php echo $mix["title"];?></a></h6>
      <span><?php echo $mix["size"];?></span>
      </div>
      <div class="card-footer">
      <span class="d-none d-sm-inline">Date Uploaded: </span><?php echo $mix["date-created"];?>
</div>
</div>
</div>
<?php } ?>
</div>
<h4>Uploads</h4>
<div class="row row-sm">
  <?php foreach ($mixes as $mix) { ?>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
    <div class="card card-file">
      <div class="dropdown-file">
      <a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
      <div class="dropdown-menu dropdown-menu-right">
      <a href="#" class="dropdown-item">View Details</a>
      <a href="#" class="dropdown-item">Share</a>
      <a href="#" class="dropdown-item">Download</a>
      </div>
      </div>
      <div class="card-file-thumb">
      <i class="fa fa-file-audio-o"></i>
      </div>
      <div class="card-body">
      <h6><a href=""><?php echo $mix["title"];?></a></h6>
      <span><?php echo $mix["size"];?></span>
      </div>
      <div class="card-footer">
      <span class="d-none d-sm-inline">Date Uploaded: </span><?php echo $mix["date-created"];?>
</div>
</div>
</div>
<?php } ?>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-powerpoint-o"></i>
</div>
<div class="card-body">
<h6><a href="">Vision.ppt</a></h6>
<span>72.50kb</span>
</div>
<div class="card-footer">6 Aug 11:42 AM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-audio-o"></i>
</div>
<div class="card-body">
<h6><a href="">Voice.mp3</a></h6>
<span>2.17mb</span>
</div>
<div class="card-footer">
<span class="d-none d-sm-inline">Last Modified: </span>30 Jul 9:00 PM
</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-pdf-o"></i>
</div>
<div class="card-body">
<h6><a href="">Tutorials.pdf</a></h6>
<span>8.2mb</span>
</div>
<div class="card-footer">21 Jul 10:45 PM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-excel-o"></i>
</div>
<div class="card-body">
<h6><a href="">Tasks.xls</a></h6>
<span>92.82kb</span>
</div>
<div class="card-footer">16 Jun 4:59 PM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
 <i class="fa fa-file-image-o"></i>
</div>
<div class="card-body">
<h6><a href="">Page.psd</a></h6>
<span>118.71mb</span>
</div>
<div class="card-footer">14 Jun 9:00 AM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-text-o"></i>
</div>
<div class="card-body">
<h6><a href="">License.txt</a></h6>
<span>18.7kb</span>
</div>
<div class="card-footer">5 May 8:21 PM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-word-o"></i>
</div>
<div class="card-body">
<h6><a href="">Expenses.docx</a></h6>
<span>66.2kb</span>
</div>
<div class="card-footer">24 Apr 7:50 PM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-audio-o"></i>
</div>
<div class="card-body">
<h6><a href="">Music.mp3</a></h6>
<span>3.6mb</span>
</div>
<div class="card-footer">13 Mar 2:00 PM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-text-o"></i>
</div>
<div class="card-body">
<h6><a href="">Installation.txt</a></h6>
<span>43.9kb</span>
</div>
<div class="card-footer">26 Feb 5:01 PM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-video-o"></i>
</div>
<div class="card-body">
<h6><a href="">Workflow.mp4</a></h6>
<span>47.65mb</span>
</div>
<div class="card-footer">3 Jan 11:35 AM</div>
</div>
</div>
<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
<div class="card card-file">
<div class="dropdown-file">
<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item">View Details</a>
<a href="#" class="dropdown-item">Share</a>
<a href="#" class="dropdown-item">Download</a>
<a href="#" class="dropdown-item">Rename</a>
<a href="#" class="dropdown-item">Delete</a>
</div>
</div>
<div class="card-file-thumb">
<i class="fa fa-file-code-o"></i>
</div>
<div class="card-body">
<h6><a href="">index.html</a></h6>
<span>23.7kb</span>
</div>
<div class="card-footer">1 Jan 8:55 AM</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- </div> -->

</div>
</div>
</div>

</div>

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>