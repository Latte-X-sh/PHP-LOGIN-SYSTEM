<?php
// Initialize the session
session_start();
// var_dump($_SESSION);die();
 
//Check if the user is logged in, if not then redirect him to login page
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: signin.php");
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Smarthr - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Employee Profile - HRMS admin template</title>

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
<li class="breadcrumb-item active">Profile</li>
</ul>
</div>
</div>
</div>

<div class="card mb-0">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="profile-view">
<div class="profile-img-wrap">
<div class="profile-img">
<a href="#"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</div>
</div>
<div class="profile-basic">
<div class="row">
<div class="col-md-5">
<div class="profile-info-left">
<!-- from the Database -->
<h3 class="user-name m-t-0 mb-0"><?php echo htmlspecialchars($_SESSION["name"]); ?></h3>
<h6 class="text-muted">UI/UX Design Team</h6>
<small class="text-muted">Web Designer</small>
<div class="staff-id">Employee ID : FT-0001</div>
<div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
<div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>
</div>
</div>
<div class="col-md-7">
<ul class="personal-info">
<li>
<div class="title">Phone:</div>
<div class="text"><a href="">9876543210</a></div>
</li>
<li>
<div class="title">Email:</div>
<div class="text"><a href=""><span class="__cf_email__" data-cfemail="a1cbcec9cfc5cec4e1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</span></a></div>
</li>
<li>
<div class="title">Birthday:</div>
<div class="text">24th July</div>
</li>
<li>
<div class="title">Address:</div>
<div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
</li>
<li>
<div class="title">Gender:</div>
<div class="text">Male</div>
</li>
<li>
<div class="title">Reports to:</div>
<div class="text">
<div class="avatar-box">
<div class="avatar avatar-xs">
<img src="assets/img/profiles/avatar-16.jpg" alt="">
</div>
</div>
<a href="profile.html">
Jeffery Lalor
</a>
</div>
</li>
</ul>
</div>
</div>
</div>
<!-- pencil where you can edit you profile content -->
<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
</div>
</div>
</div>
</div>
</div>
<!-- next section below it its a boostrap collapse -->
<div class="card tab-box">
<div class="row user-tabs">
<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
	<!-- more tabs addition -->
<ul class="nav nav-tabs nav-tabs-bottom">
<li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>
<!-- <li class="nav-item"><a href="#" data-toggle="tab" class="nav-link">#N A-will add</a></li>
<li class="nav-item"><a href="#" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li> -->
</ul>
</div>
</div>
</div>
<div class="tab-content">

<div id="emp_profile" class="pro-overview tab-pane fade show active">
<div class="row">
<div class="col-md-6 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Personal information</h3>
<ul class="list-group notification-list">
<li class="list-group-item">
Enable 2FA Authentication
<div class="status-toggle">
<input type="checkbox" id="2fa_module" class="check">
<label for="2fa_module" class="checktoggle">checkbox</label>
</div>
</li>
<li class="list-group-item">
Change your Password
<a href="#" class="edit-icon" data-toggle="modal" data-target="#password_change_modal"><i class="fa fa-pencil"></i></a>
</li>
<li class="list-group-item">
Enable 2FA Authentication
<div class="status-toggle">
<input type="checkbox" id="staff_module" class="check">
<label for="staff_module" class="checktoggle">checkbox</label>
</div>
</li>
</ul>
</div>
</div>
</div>
<!-- previous implementation.commented for future use maybe -->
<!-- <div class="col-md-6 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Personal Information<a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
<ul class="personal-info">
<li>
<div class="title">ID NO.</div>
<div class="text">9876543210</div>
</li>
<li>
<div class="title">Passport Exp Date.</div>
<div class="text">9876543210</div>
</li>
<li>
<div class="title">Tel</div>
<div class="text"><a href="">9876543210</a></div>
</li>
<li>
<div class="title">Nationality</div>
<div class="text">Indian</div>
</li>
<li>
<div class="title">Religion</div>
<div class="text">Christian</div>
</li>
<li>
<div class="title">Marital status</div>
<div class="text">Married</div>
</li>
<li>
<div class="title">Employment of spouse</div>
<div class="text">No</div>
</li>
<li>
<div class="title">No. of children</div>
<div class="text">2</div>
</li>
</ul>
</div>
</div>
</div> -->
<div class="col-md-6 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Social Account Intergration <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
<h5 class="section-title">Social media</h5>
<ul class="personal-info">
<li>
<div class="title">Facebook</div>
<div class="text">From DB</div>
</li>
<li>
<div class="title">Twitter</div>
<div class="text">From DB</div>
</li>
<li>
<div class="title">Instagram </div>
<div class="text">From DB</div>
</li>
</ul>
<hr>
<h5 class="section-title">Dj Platforms</h5>
<ul class="personal-info">
<li>
<div class="title">Mixcloud</div>
<div class="text">From DB</div>
</li>
<li>
<div class="title">Hearthis</div>
<div class="text">From DB</div>
</li>
<li>
<div class="title">Soundcloud </div>
<div class="text">From DB</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
	<!-- the 1st column  -->
<!-- <div class="col-md-6 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Bank information</h3>
<ul class="personal-info">
<li>
<div class="title">Bank name</div>
<div class="text">ICICI Bank</div>
</li>
<li>
<div class="title">Bank account No.</div>
<div class="text">159843014641</div>
</li>
<li>
<div class="title">IFSC Code</div>
<div class="text">ICI24504</div>
</li>
<li>
<div class="title">PAN No</div>
<div class="text">TC000Y56</div>
</li>
</ul>
</div>
</div>
</div> -->
<div class="col-md-12 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#family_info_modal"><i class="fa fa-pencil"></i></a></h3>
<div class="table-responsive">
<table class="table table-nowrap">
<thead>
<tr>
<th>Name</th>
<th>Relationship</th>
<th>Date of Birth</th>
<th>Phone</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>Leo</td>
<td>Brother</td>
<td>Feb 16th, 2019</td>
<td>9876543210</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- The last row of columns. -->
<!-- <div class="row">
<div class="col-md-6 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">International College of Arts and Science (UG)</a>
<div>Bsc Computer Science</div>
<span class="time">2000 - 2003</span>
</div>
</div>
</li>
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">International College of Arts and Science (PG)</a>
<div>Msc Computer Science</div>
<span class="time">2000 - 2003</span>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Experience <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
<div class="experience-box">
<ul class="experience-list">
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">Web Designer at Zen Corporation</a>
<span class="time">Jan 2013 - Present (5 years 2 months)</span>
</div>
</div>
</li>
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">Web Designer at Ron-tech</a>
<span class="time">Jan 2013 - Present (5 years 2 months)</span>
</div>
</div>
</li>
<li>
<div class="experience-user">
<div class="before-circle"></div>
</div>
<div class="experience-content">
<div class="timeline-content">
<a href="#/" class="name">Web Designer at Dalt Technology</a>
<span class="time">Jan 2013 - Present (5 years 2 months)</span>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->
</div>


<!-- nav-traget 2  was here will import -->


<!-- nav-target 3 was here will import. -->

</div>
</div>

<!-- Profile information form is present here -->
<div id="profile_info" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Profile Information</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-md-6">
<div class="profile-img-wrap edit-img">
<img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="user">
<div class="fileupload btn">
<span class="btn-text">edit</span>
<input class="upload" type="file">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<br>
	<br>
<label>Username</label>
<input type="text" class="form-control" value="Latte-x">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" value="<?php echo htmlspecialchars($_SESSION["name"]); ?>">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" value="Doe">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Birth Date</label>
<div class="cal-icon">
<input class="form-control datetimepicker" type="text" value="05/06/1985">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Gender</label>
<select class="select form-control">
<option value="male selected">Male</option>
<option value="female">Female</option>
</select>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" value="New York">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Country</label>
<input type="text" class="form-control" value="New York">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control" value="United States">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone Number</label>
<input type="text" class="form-control" value="631-889-3206">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Interests <span class="text-danger">*</span></label>
<select class="select">
<option>What's your interest</option>
<option>Web Designer</option>
<option>Web Developer</option>
<option>Android Developer</option>
</select>
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- modal number 2 -->
<div id="password_change_modal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title">Change your password</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<h5 class="mx-auto">Enter your old password and your current password.</h5>
	<div class="modal-body">
	<form>
	<div class="row">
	<div class="col-md-12">
	<div class="form-group">
	<label>Old Password</label>
	<input type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12">
	<div class="form-group">
	<label>New Password</label>
	<input type="text" class="form-control">
	</div>
	</div>
	</div>
	<!-- <div class="col-md-6">
	<div class="form-group">
	<label>Passport Expiry Date</label>
	<div class="cal-icon">
	<input class="form-control datetimepicker" type="text">
	</div>
	</div>
	</div> -->
	<!-- <div class="col-md-6">
	<div class="form-group">
	<label>Tel</label>
	<input class="form-control" type="text">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	<label>Nationality <span class="text-danger">*</span></label>
	<input class="form-control" type="text">
	</div>
	</div> -->
	<!-- <div class="col-md-6">
	<div class="form-group">
	<label>Religion</label>
	<div class="cal-icon">
	<input class="form-control" type="text">
	</div>
	</div>
	</div> -->
	<!-- <div class="col-md-6">
	<div class="form-group">
	<label>Marital status <span class="text-danger">*</span></label>
	<select class="select form-control">
	<option>-</option>
	<option>Single</option>
	<option>Married</option>
	</select>
	</div>
	</div> -->
	<!-- <div class="col-md-6">
	<div class="form-group">
	<label>Employment of spouse</label>
	<input class="form-control" type="text">
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	<label>No. of children </label>
	<input class="form-control" type="text">
	</div>
	</div> -->

	<div class="submit-section">
	<button type="reset" class="btn btn-danger submit-btn" >Cancel</button>
	<button class="btn btn-primary submit-btn">Submit</button>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
<!-- modal number 3 -->
<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Personal Information</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Passport No</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Passport Expiry Date</label>
<div class="cal-icon">
<input class="form-control datetimepicker" type="text">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tel</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Nationality <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Religion</label>
<div class="cal-icon">
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Marital status <span class="text-danger">*</span></label>
<select class="select form-control">
<option>-</option>
<option>Single</option>
<option>Married</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Employment of spouse</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>No. of children </label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"> Family Informations</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-scroll">
<div class="card">
<div class="card-body">
<h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Relationship <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Date of birth <span class="text-danger">*</span></label>
 <input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Relationship <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Date of birth <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="add-more">
<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
</div>
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- Social Account intergration modal -->
<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Social Accounts Information</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="card">
<div class="card-body">
<h3 class="card-title">Social Media</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>URL <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<!-- WILL EDIT LATER WHEN MORE IDEAS COME -->
<!-- <div class="col-md-6">
<div class="form-group">
<label>Phone <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone 2</label>
<input class="form-control" type="text">
</div>
</div> -->
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<h3 class="card-title">Dj Platform</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name <span class="text-danger">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>URL <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<!-- MORE OPTIONS WILL BE ADDED HERE -->
<!-- <div class="col-md-6">
<div class="form-group">
<label>Phone <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone 2</label>
<input class="form-control" type="text">
</div>
</div> -->
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div id="education_info" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"> Education Informations</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-scroll">
<div class="card">
<div class="card-body">
<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
<div class="row">
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="Oxford University" class="form-control floating">
<label class="focus-label">Institution</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="Computer Science" class="form-control floating">
<label class="focus-label">Subject</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<div class="cal-icon">
<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
</div>
<label class="focus-label">Starting Date</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<div class="cal-icon">
<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
</div>
<label class="focus-label">Complete Date</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="BE Computer Science" class="form-control floating">
<label class="focus-label">Degree</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="Grade A" class="form-control floating">
<label class="focus-label">Grade</label>
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
<div class="row">
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="Oxford University" class="form-control floating">
<label class="focus-label">Institution</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="Computer Science" class="form-control floating">
<label class="focus-label">Subject</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<div class="cal-icon">
<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
</div>
<label class="focus-label">Starting Date</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<div class="cal-icon">
<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
</div>
<label class="focus-label">Complete Date</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="BE Computer Science" class="form-control floating">
<label class="focus-label">Degree</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus focused">
<input type="text" value="Grade A" class="form-control floating">
<label class="focus-label">Grade</label>
</div>
</div>
</div>
<div class="add-more">
<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
</div>
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div id="experience_info" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Experience Informations</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-scroll">
<div class="card">
<div class="card-body">
<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
<div class="row">
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Digital Devlopment Inc">
<label class="focus-label">Company Name</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="United States">
<label class="focus-label">Location</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Web Developer">
<label class="focus-label">Job Position</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<div class="cal-icon">
<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
</div>
<label class="focus-label">Period From</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<div class="cal-icon">
<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
</div>
<label class="focus-label">Period To</label>
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
<div class="row">
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Digital Devlopment Inc">
<label class="focus-label">Company Name</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="United States">
<label class="focus-label">Location</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<input type="text" class="form-control floating" value="Web Developer">
<label class="focus-label">Job Position</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<div class="cal-icon">
<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
</div>
<label class="focus-label">Period From</label>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-focus">
<div class="cal-icon">
<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
</div>
<label class="focus-label">Period To</label>
</div>
</div>
</div>
<div class="add-more">
<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
</div>
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>

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