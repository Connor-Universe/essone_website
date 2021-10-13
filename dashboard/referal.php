<!DOCTYPE html>
<!-- saved from url=(0029)https://norbit.ltd/?a=deposit -->
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
				<a href="dashboard.php">
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
                <h3>Referal List</h3>
                
            </div>
            <div class="col-lg-12">
            <table class="table" id="refer">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Country</th>
            <th class="text-right">Amount Invested</th>
            <th class="text-right">Comission</th>
        </tr>
    </thead>
    <tbody>
      <?php
       $get_refer = "select * from investment_request where referal_code = '$referal_code' and verified = 1 ";
       $run_refer = mysqli_query($connect,$get_refer);
       $num_refer="";

       while($row_refer = mysqli_fetch_array($run_refer)){
        
         $first_name_refer = $row_refer['first_name'];
         $last_name_refer = $row_refer['last_name'];
         $country_refer = $row_refer['country'];
         $amount_invest_refer = $row_refer['amount_invest'];
         $comssion_refer = $amount_invest_refer / 5;
        
       

         echo" <tr>
         <td class='text-center'></td>
         <td>$first_name_refer</td>
         <td>$last_name_refer</td>
         <td>$country_refer</td>
         <td class='text-right'>&dollar; $amount_invest_refer</td>
         <td class='td-actions text-right'>
            $comssion_refer
         </td>
     </tr>";
       }
      ?>
      
    </tbody>
</table>
<?php
if($GLOBALS['num_refer'] > 0){
  $refers = "";
}else{
  $refers = "
  <div class='card card-nav-tabs text-center'>
  <div class='card-body'>
    <h4 class='card-title'>NO REFERALS YET</h4>
  </div>
</div>
  ";
  echo"$refers";
}
?>

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