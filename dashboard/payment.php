<!DOCTYPE html>
<!-- saved from url=(0029)https://norbit.ltd/?a=deposit -->
<html lang="en" class="mdl-js">

<head>
	

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1200, initial-scale=0.0">
	<meta name="description" content="Responsive Admin Template">
	<!----------------- www.hyipcustomize.com ----------->
	<meta name="designer" href="https://hyipcustomize.com/">
	<title>Essone | Bitcoin Investment Company</title>
	<!-- google font -->
	<link href="./deposit_files/css" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="./deposit_files/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="./deposit_files/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--bootstrap -->
	<link href="./deposit_files/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="./deposit_files/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="./deposit_files/material.min.css">
	<link rel="stylesheet" href="./deposit_files/material_style.css">
	<!-- inbox style -->
	<link href="./deposit_files/inbox.min.css" rel="stylesheet" type="text/css">
	<!-- Theme Styles -->
	<link href="./deposit_files/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="./deposit_files/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="./deposit_files/style.css" rel="stylesheet" type="text/css">
	<link href="./deposit_files/responsive.css" rel="stylesheet" type="text/css">
	<link href="./deposit_files/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<link rel="shortcut icon" href="https://norbit.ltd/1/assets/img/favicon.ico">
	<style type="text/css">
		.jqstooltip {
			position: absolute;
			left: 0px;
			top: 0px;
			visibility: hidden;
			background: rgb(0, 0, 0) transparent;
			background-color: rgba(0, 0, 0, 0.6);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
			-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
			color: white;
			font: 10px arial, san serif;
			text-align: left;
			white-space: nowrap;
			padding: 5px;
			border: 1px solid white;
			z-index: 10000;
		}

		.jqsfield {
			color: white;
			font: 10px arial, san serif;
			text-align: left;
		}
	</style>
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme"
	data-new-gr-c-s-check-loaded="14.994.0" data-gr-ext-installed="">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="/">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default"></span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="deposit.php#" class="menu-toggler sidebar-toggler"><i
								class="icon-menu"></i></a></li>
				</ul>

				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<?php include "top-menu.php"; ?>
                <?php
            include "../include/config.php";
if(!isset($_GET['id']) AND !isset($_SESSION['token'])){
    header("location:../login.php");
}elseif(isset($_GET['id']) AND !isset($_SESSION['token'])){
    header("location:../login.php");
}else{
 $id = $_GET['id'] ;

$get_plan = "select * from plans where id = '$id'";
$run_plan = mysqli_query($connect, $get_plan);
$row_plan = mysqli_fetch_array($run_plan);
$name = $row_plan['name'];
$lower = $row_plan['lower_amount'];
$upper = $row_plan['upper_amount'];
$percentage = $row_plan['percentage'];
$day = $row_plan['day'];
$_SESSION['name'] = $name;
}
include("include/convert.php");
?>
			</div>
		</div>
		<!-- end header -->

		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php 
				include "sidebar.php";
			?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content" style="min-height:563px">
					<div class="page-bar">
						<div class="page-bar">
							<div class="page-title-breadcrumb">
								
							</div>
						</div>

<div class="container">
	<div class="row">
	<div class="col-lg-12">
                  <div class="card card-nav-tabs text-center">
  <h4 class="card-header card-header-info">Payment</h4>
  <div class="card-body">
  <h3>Plan: <?php echo"$name";?></h3>
                      <h3>Range: <?php echo"$$lower - $$upper";?></h3>
                      <h3>ROI: <?php echo"$percentage% after $day day(s)";?> </h3>
  </div>
</div>
                      
                  </div>
                  <div class="col-lg-12">
                  <div class="card">
  <div class="card-body">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="form1">
      <div class="form-group">
        <label for="exampleInputEmail1">Amount</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="amount" aria-describedby="emailHelp" placeholder="Enter Amount($USD)" min ="<?php echo"$lower";?>" max ="<?php echo"$upper";?>">
        <input type="hidden" class="form-control" id = "exmapleInputEmail1" name = "id" value="<?php echo"$_GET[id]"?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your transactions with anyone else.</small>
      </div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Proceed</button> 
        <!-- start of modal -->
        <div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Generate Investment Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to generate the investment request?.</p>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary" onclick="submitForms()" name="click">Yes</button>
      </div>
    </div>
  </div>
</div>
                            <!-- end of modal -->
    </form>
   
  </div>
</div>

	</div>
</div>

					

					</div>
				</div>

			</div>
			<!-- end page container -->
			<!-- start footer -->
			<?php include "footer.php"; ?>
			<!-- end footer -->
		</div>
		<!-- start js include path -->
		<script src="./deposit_files/jquery.min.js.download"></script>
		<script src="./deposit_files/popper.js.download"></script>
		<script src="./deposit_files/jquery.blockui.min.js.download"></script>
		<script src="./deposit_files/jquery.slimscroll.js.download"></script>
		<!-- bootstrap -->
		<script src="./deposit_files/bootstrap.min.js.download"></script>
		<script src="./deposit_files/bootstrap-switch.min.js.download"></script>
		<script src="./deposit_files/jquery.sparkline.js.download"></script>
		<script src="./deposit_files/sparkline-data.js.download"></script>
		<!-- Common js-->
		<script src="./deposit_files/app.js.download"></script>
		<script src="./deposit_files/layout.js.download"></script>
		<script src="./deposit_files/theme-color.js.download"></script>
		<!-- material -->
		<script src="./deposit_files/material.min.js.download"></script>
		<!-- chart js -->
		<script src="./deposit_files/Chart.bundle.js.download"></script>
		<script src="./deposit_files/utils.js.download"></script>
		<script src="./deposit_files/home-data.js.download"></script>
		<!-- summernote -->
		<script src="./deposit_files/summernote.js.download"></script>
		<script src="./deposit_files/summernote-data.js.download"></script>
		<!-- end js include path -->


	</div>
</body>

</html>