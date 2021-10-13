<!DOCTYPE html>

<html lang="en" class="mdl-js">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1200, initial-scale=0.0">
	<meta name="description" content="Responsive Admin Template">
	<!----------------- www.hyipcustomize.com ----------->
	<meta name="designer" href="https://hyipcustomize.com/">
	<title>Essone | Bitcoin Investment Company</title>
	<!-- google font -->
	<link href="./dashboard_files/css" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="./dashboard_files/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="./fontawesome/css/fontawesome.min.css" rel="stylesheet" type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--bootstrap -->
	<link href="./dashboard_files/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="./dashboard_files/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="./dashboard_files/material.min.css">
	<link rel="stylesheet" href="./dashboard_files/material_style.css">
	<!-- inbox style -->
	<link href="./dashboard_files/inbox.min.css" rel="stylesheet" type="text/css">
	<!-- Theme Styles -->
	<link href="./dashboard_files/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="./dashboard_files/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="./dashboard_files/style.css" rel="stylesheet" type="text/css">
	<link href="./dashboard_files/responsive.css" rel="stylesheet" type="text/css">
	<link href="./dashboard_files/theme-color.css" rel="stylesheet" type="text/css">
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
					<a href="dashboard.php">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default"></span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="./dashboard.php#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a>
					</li>
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
include("../include/config.php");
 $get_total_invest = "SELECT SUM(amount_invest) AS value_sum FROM investment_request WHERE verified = 1 AND id_no = $id_no";
  $run_total_invest = mysqli_query($connect,$get_total_invest);
  $total_invest = mysqli_fetch_assoc($run_total_invest);
  $get_total_withdraw = "SELECT SUM(amount) AS value_sum FROM withdraw_request WHERE verified = 1 AND id_no = $id_no";
  $run_total_withdraw = mysqli_query($connect,$get_total_withdraw);
  $total_withdraw = mysqli_fetch_assoc($run_total_withdraw);
  $get_investment_total = "SELECT SUM(amount) AS value_invest FROM investments WHERE id_no = $id_no";
  $run_investment_total = mysqli_query($connect,$get_investment_total);
  $invest_total = mysqli_fetch_assoc($run_investment_total);
  $get_wallet = "select amount from wallet where id_no = $id_no";
  $run_wallet = mysqli_query($connect,$get_wallet);
  $row_wallet = mysqli_fetch_array($run_wallet);
  $amount = $row_wallet['amount'];

  if(!isset($total_invest['value_sum'])){
    $total_invest['value_sum'] = 0;
  }
  if(!isset($total_withdraw['value_sum'])){
    $total_withdraw['value_sum'] = 0;
  }
  if(!isset($invest_total['value_invest'])){
	  $invest_total['value_invest'] = 0;
  }
  if(!isset($amount)){
    $amount = 0;
  }
  if(!isset($_SESSION['token']))
  {
      // not logged in
      header("location:../../indexc30b.php");
      echo"<script>alert('you need to login first! !')</script>";
      exit();
  }elseif(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['token']);
      header("location:../../indexc30b.php");
      echo"<script>alert('Your are logging out!')</script>";
  }
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
								<div class=" pull-left">
									<div class="page-title">Dashboard</div>
								</div>
							</div>
						</div>
						<div class="state-overview">
							<div class="row">
								<div class="col-xl-3 col-md-6 col-12">
									<div class="info-box bg-b-green">
										<span class="info-box-icon push-bottom"><i
												class="material-icons">monetization_on</i></span>
										<div class="info-box-content">
											<span class="info-box-text">Total Deposit</span>
											<span class="info-box-number"><?php echo"$total_invest[value_sum]";?></span><span>$</span>
											<div class="progress">
												<div class="progress-bar" style="width: 100%"></div>
											</div>

										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</div>
								<!-- /.col -->
								<div class="col-xl-3 col-md-6 col-12">
									<div class="info-box bg-b-yellow">
										<span class="info-box-icon push-bottom"><i
												class="material-icons">monetization_on</i></span>
										<div class="info-box-content">
											<span class="info-box-text">Total Withdraw</span>
											<span class="info-box-number"><?php echo"$total_withdraw[value_sum]";?></span><span>$</span>
											<div class="progress">
												<div class="progress-bar" style="width: 100%"></div>
											</div>

										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</div>
								<!-- /.col -->
								<div class="col-xl-3 col-md-6 col-12">
									<div class="info-box bg-b-blue">
										<span class="info-box-icon push-bottom"><i
												class="material-icons">monetization_on</i></span>
										<div class="info-box-content">
											<span class="info-box-text">Active Deposit</span>
											<span class="info-box-number"><?php echo"$total_invest[value_sum]";?></span><span>$</span>
											<div class="progress">
												<div class="progress-bar" style="width: 100%"></div>
											</div>

										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</div>
								<!-- /.col -->
								<div class="col-xl-3 col-md-6 col-12">
									<div class="info-box bg-b-pink">
										<span class="info-box-icon push-bottom"><i
												class="material-icons">monetization_on</i></span>
										<div class="info-box-content">
											<span class="info-box-text">Pending Withdraw</span>
											<span class="info-box-number"><?php echo"$total_withdraw[value_sum]";?></span><span>$</span>
											<div class="progress">
												<div class="progress-bar" style="width: 100%"></div>
											</div>

										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</div>
								<!-- /.col -->
							</div>
						</div>


						<div class="table-responsive">
							<table class="table table-striped custom-table table-hover">
								<tbody>
									<tr>
										<td>User:</td>
										<td><?php echo"$username";?></td>
									</tr>
									<tr>
										<td>Registration Date:</td>
										<td></td>
									</tr>
									<tr>
										<td valign="top">Account Balance:</td>
										<td>$<b><?php echo"$amount";?></b><br>
											<small>
											</small>
										</td>
									</tr>
									<tr>
										<td>Earned Total:</td>
										<td>$<b><?php echo"$invest_total[value_invest]";?></b></td>
									</tr>
									<tr>

									</tr>
								</tbody>
							</table>
						</div>

						<br><br>
						<br>



					</div>
				</div>

			</div>
			<!-- end page container -->
			<!-- start footer -->
			<?php include "footer.php"; ?>
			<!-- end footer -->
		</div>
		<!-- start js include path -->
		<script src="./dashboard_files/jquery.min.js.download"></script>
		<script src="./dashboard_files/popper.js.download"></script>
		<script src="./dashboard_files/jquery.blockui.min.js.download"></script>
		<script src="./dashboard_files/jquery.slimscroll.js.download"></script>
		<!-- bootstrap -->
		<script src="./dashboard_files/bootstrap.min.js.download"></script>
		<script src="./dashboard_files/bootstrap-switch.min.js.download"></script>
		<script src="./dashboard_files/jquery.sparkline.js.download"></script>
		<script src="./dashboard_files/sparkline-data.js.download"></script>
		<!-- Common js-->
		<script src="./dashboard_files/app.js.download"></script>
		<script src="./dashboard_files/layout.js.download"></script>
		<script src="./dashboard_files/theme-color.js.download"></script>
		<!-- material -->
		<script src="./dashboard_files/material.min.js.download"></script>
		<!-- chart js -->
		<script src="./dashboard_files/Chart.bundle.js.download"></script>
		<script src="./dashboard_files/utils.js.download"></script>
		<script src="./dashboard_files/home-data.js.download"></script>
		<!-- summernote -->
		<script src="./dashboard_files/summernote.js.download"></script>
		<script src="./dashboard_files/summernote-data.js.download"></script>
		<!-- end js include path -->


	</div>
</body>

</html>