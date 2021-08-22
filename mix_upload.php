<?php
// Initialize the session
session_start();
require 'lib/functions.php';
require 'lib/imageprocessing.php';
$user_id = $_SESSION['id'];
$user_email = $_SESSION['email'];
// var_dump($_SESSION);die();
// echo $user_email ; die();
$profile_data = fetch_user_data($user_id);//Fetches db data
// var_dump($_SESSION);die();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mixTitle = null;
    $mixFile = null;



    if(isset($_POST['mix-title'])){
        $mixTitle = $_POST['mix-title'];
    }


    if(isset($_POST['mix-file'])){
        $mixFile = $_POST['mix-file'];
    }

    handle_audio($mixTitle,$mixFile);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
          content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>DJ Mmix Upload</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

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

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Profile</h3>
                    <!-- Breadcrumb on the page -->
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Mix Upload</li>
                    </ul>
                </div>
            </div>
        </div>


        <form method="post" action="mix_upload.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label>Mix Title</label>
                        <input class="form-control" name="mix-title" type="text">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Upload Files</label>
                <input class="form-control" name="mix-file" accept="audio/*" type="file">
            </div>
            <div class="submit-section">
                <button class="btn btn-primary submit-btn">Upload</button>
            </div>
        </form>


    </div>


</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>