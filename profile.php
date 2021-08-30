﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Smarthr - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Employee Profile - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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

<div class="main-wrapper">
<!-- navbar 36 to 308  -->
<div class="header">
<!-- LOGO OF THE PAGE -->
<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" width="40" height="40" alt="">
</a>
</div>

<a id="toggle_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<div class="page-title-box">
<h3>Account settings</h3>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

<ul class="nav user-menu">

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="search.html">
<input class="form-control" type="text" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</li>


<li class="nav-item dropdown has-arrow flag-nav">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/us.png" alt="" height="16"> English
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/fr.png" alt="" height="16"> French
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/de.png" alt="" height="16"> German
</a>
</div>
</li>


<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-06.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.html">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Messages</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-09.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author">John Doe</span>
<span class="message-time">6 Mar</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author"> Tarah Shropshire </span>
<span class="message-time">5 Mar</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-05.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author">Mike Litorus</span>
<span class="message-time">3 Mar</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-08.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author"> Catherine Manseau </span>
<span class="message-time">27 Feb</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="chat.html">View all Messages</a>
</div>
</div>
</li>

<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
<span class="status online"></span></span>
<span>Admin</span> 
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</div>

</div>

<!-- sidebar sectopn 310 to 597 -->
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main</span>
</li>
<li class="submenu">
<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="index.html">Admin Dashboard</a></li>
<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="chat.html">Chat</a></li>
<li class="submenu">
<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="voice-call.html">Voice Call</a></li>
<li><a href="video-call.html">Video Call</a></li>
<li><a href="outgoing-call.html">Outgoing Call</a></li>
<li><a href="incoming-call.html">Incoming Call</a></li>
</ul>
</li>
<li><a href="events.html">Calendar</a></li>
<li><a href="contacts.html">Contacts</a></li>
<li><a href="inbox.html">Email</a></li>
<li><a href="file-manager.html">File Manager</a></li>
</ul>
</li>
<li class="menu-title">
<span>Employees</span>
</li>
<li class="submenu">
<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="employees.html">All Employees</a></li>
<li><a href="holidays.html">Holidays</a></li>
<li><a href="leaves.html">Leaves (Admin) <span class="badge badge-pill bg-primary float-right">1</span></a></li>
<li><a href="leaves-employee.html">Leaves (Employee)</a></li>
<li><a href="leave-settings.html">Leave Settings</a></li>
<li><a href="attendance.html">Attendance (Admin)</a></li>
<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
<li><a href="departments.html">Departments</a></li>
<li><a href="designations.html">Designations</a></li>
<li><a href="timesheet.html">Timesheet</a></li>
<li><a href="shift-scheduling.html">Shift & Schedule</a></li>
<li><a href="overtime.html">Overtime</a></li>
</ul>
</li>
<li>
<a href="clients.html"><i class="la la-users"></i> <span>Clients</span></a>
</li>
<li class="submenu">
<a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="projects.html">Projects</a></li>
<li><a href="tasks.html">Tasks</a></li>
<li><a href="task-board.html">Task Board</a></li>
</ul>
</li>
<li>
<a href="leads.html"><i class="la la-user-secret"></i> <span>Leads</span></a>
</li>
<li>
<a href="tickets.html"><i class="la la-ticket"></i> <span>Tickets</span></a>
</li>
<li class="menu-title">
<span>HR</span>
</li>
<li class="submenu">
<a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="estimates.html">Estimates</a></li>
<li><a href="invoices.html">Invoices</a></li>
<li><a href="payments.html">Payments</a></li>
<li><a href="expenses.html">Expenses</a></li>
<li><a href="provident-fund.html">Provident Fund</a></li>
<li><a href="taxes.html">Taxes</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="categories.html">Categories</a></li>
<li><a href="budgets.html">Budgets</a></li>
<li><a href="budget-expenses.html">Budget Expenses</a></li>
<li><a href="budget-revenues.html">Budget Revenues</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="salary.html"> Employee Salary </a></li>
<li><a href="salary-view.html"> Payslip </a></li>
<li><a href="payroll-items.html"> Payroll Items </a></li>
</ul>
</li>
<li>
<a href="policies.html"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
</li>
<li class="submenu">
<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="expense-reports.html"> Expense Report </a></li>
<li><a href="invoice-reports.html"> Invoice Report </a></li>
<li><a href="payments-reports.html"> Payments Report </a></li>
<li><a href="project-reports.html"> Project Report </a></li>
<li><a href="task-reports.html"> Task Report </a></li>
<li><a href="user-reports.html"> User Report </a></li>
<li><a href="employee-reports.html"> Employee Report </a></li>
<li><a href="payslip-reports.html"> Payslip Report </a></li>
<li><a href="attendance-reports.html"> Attendance Report </a></li>
<li><a href="leave-reports.html"> Leave Report </a></li>
<li><a href="daily-reports.html"> Daily Report </a></li>
</ul>
</li>
<li class="menu-title">
<span>Performance</span>
</li>
<li class="submenu">
<a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="performance-indicator.html"> Performance Indicator </a></li>
<li><a href="performance.html"> Performance Review </a></li>
<li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="goal-tracking.html"> Goal List </a></li>
<li><a href="goal-type.html"> Goal Type </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="training.html"> Training List </a></li>
<li><a href="trainers.html"> Trainers</a></li>
<li><a href="training-type.html"> Training Type </a></li>
</ul>
</li>
<li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
<li><a href="resignation.html"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
<li><a href="termination.html"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
<li class="menu-title">
<span>Administration</span>
</li>
<li>
<a href="assets.html"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
</li>
<li class="submenu">
<a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="user-dashboard.html"> User Dasboard </a></li>
<li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
<li><a href="jobs.html"> Manage Jobs </a></li>
<li><a href="manage-resumes.html"> Manage Resumes </a></li>
<li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
<li><a href="interview-questions.html"> Interview Questions </a></li>
<li><a href="offer_approvals.html"> Offer Approvals </a></li>
<li><a href="experiance-level.html"> Experience Level </a></li>
<li><a href="candidates.html"> Candidates List </a></li>
<li><a href="schedule-timing.html"> Schedule timing </a></li>
<li><a href="apptitude-result.html"> Aptitude Results </a></li>
</ul>
</li>
<li>
<a href="knowledgebase.html"><i class="la la-question"></i> <span>Knowledgebase</span></a>
</li>
<li>
<a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
</li>
<li>
<a href="users.html"><i class="la la-user-plus"></i> <span>Users</span></a>
</li>
<li>
<a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class="submenu">
<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class="active" href="profile.html"> Employee Profile </a></li>
<li><a href="client-profile.html"> Client Profile </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="login.html"> Login </a></li>
<li><a href="register.html"> Register </a></li>
<li><a href="forgot-password.html"> Forgot Password </a></li>
<li><a href="otp.html"> OTP </a></li>
<li><a href="lock-screen.html"> Lock Screen </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="error-404.html">404 Error </a></li>
<li><a href="error-500.html">500 Error </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="subscriptions.html"> Subscriptions (Admin) </a></li>
<li><a href="subscriptions-company.html"> Subscriptions (Company) </a></li>
<li><a href="subscribed-companies.html"> Subscribed Companies</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="search.html"> Search </a></li>
<li><a href="faq.html"> FAQ </a></li>
<li><a href="terms.html"> Terms </a></li>
<li><a href="privacy-policy.html"> Privacy Policy </a></li>
<li><a href="blank-page.html"> Blank Page </a></li>
</ul>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li>
<a href="components.html"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html"> Form Mask </a></li>
<li><a href="form-validation.html"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="menu-title">
<span>Extras</span>
</li>
<li>
<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
</li>
<li>
<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>

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
<h3 class="user-name m-t-0 mb-0">John Doe</h3>
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
<h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
<ul class="personal-info">
<li>
<div class="title">Passport No.</div>
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
</div>
<div class="col-md-6 d-flex">
<div class="card profile-box flex-fill">
<div class="card-body">
<h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
<h5 class="section-title">Primary</h5>
<ul class="personal-info">
<li>
<div class="title">Name</div>
<div class="text">John Doe</div>
</li>
<li>
<div class="title">Relationship</div>
<div class="text">Father</div>
</li>
<li>
<div class="title">Phone </div>
<div class="text">9876543210, 9876543210</div>
</li>
</ul>
<hr>
<h5 class="section-title">Secondary</h5>
<ul class="personal-info">
<li>
<div class="title">Name</div>
<div class="text">Karen Wills</div>
</li>
<li>
<div class="title">Relationship</div>
<div class="text">Brother</div>
</li>
<li>
<div class="title">Phone </div>
<div class="text">9876543210, 9876543210</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 d-flex">
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
</div>
<div class="col-md-6 d-flex">
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
<div class="row">
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
</div>
</div>


<!-- nav-traget 2  was here will import -->


<!-- nav-target 3 was here will import. -->

</div>
</div>


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
<div class="col-md-12">
<div class="profile-img-wrap edit-img">
<img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="user">
<div class="fileupload btn">
<span class="btn-text">edit</span>
<input class="upload" type="file">
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" value="John">
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
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" value="4487 Snowbird Lane">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>State</label>
<input type="text" class="form-control" value="New York">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Country</label>
<input type="text" class="form-control" value="United States">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Pin Code</label>
<input type="text" class="form-control" value="10523">
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
<label>Department <span class="text-danger">*</span></label>
<select class="select">
<option>Select Department</option>
<option>Web Development</option>
<option>IT Management</option>
<option>Marketing</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Designation <span class="text-danger">*</span></label>
<select class="select">
<option>Select Designation</option>
<option>Web Designer</option>
<option>Web Developer</option>
<option>Android Developer</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Reports To <span class="text-danger">*</span></label>
<select class="select">
<option>-</option>
<option>Wilmer Deluna</option>
<option>Lesley Grauer</option>
<option>Jeffery Lalor</option>
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


<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
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
<div class="card">
<div class="card-body">
<h3 class="card-title">Primary Contact</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name <span class="text-danger">*</span></label>
<input type="text" class="form-control">
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
<label>Phone <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone 2</label>
<input class="form-control" type="text">
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<h3 class="card-title">Primary Contact</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name <span class="text-danger">*</span></label>
<input type="text" class="form-control">
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
<label>Phone <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone 2</label>
<input class="form-control" type="text">
</div>
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