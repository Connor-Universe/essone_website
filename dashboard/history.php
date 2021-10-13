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
	<link href="./history_files/css" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="./history_files/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="./history_files/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--bootstrap -->
	<link href="./history_files/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="./history_files/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="./history_files/material.min.css">
	<link rel="stylesheet" href="./history_files/material_style.css">
	<!-- inbox style -->
	<link href="./history_files/inbox.min.css" rel="stylesheet" type="text/css">
	<!-- Theme Styles -->
	<link href="./history_files/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="./history_files/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="./history_files/style.css" rel="stylesheet" type="text/css">
	<link href="./history_files/responsive.css" rel="stylesheet" type="text/css">
	<link href="./history_files/theme-color.css" rel="stylesheet" type="text/css">
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
					<li><a href="history.php#" class="menu-toggler sidebar-toggler"><i
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
				<div class="page-content" style="min-height:506px">
					<div class="page-bar">
						<div class="page-bar">
							<div class="page-title-breadcrumb">
							
							</div>
						</div>

					


					

						<br><br>

<?php

 $get_info ="select * from users where token = $_SESSION[token]";
 $run_info = mysqli_query($connect,$get_info);
 $row_info = mysqli_fetch_array($run_info);
 $first_name2 = $row_info['first_name'];
 $last_name2 = $row_info['last_name'];
 $id_no = $row_info['id_no'];
 $get_user = "select * from investment_request where id_no = $id_no AND verified = 1";
 $run_user = mysqli_query($connect,$get_user);
 $get_users = "select * from withdraw_request where id_no = $id_no AND verified = 1";
 $run_users = mysqli_query($connect,$get_users);
 $get_referal = "select * from users where id_no=$id_no";
 $run_referal = mysqli_query($connect,$get_referal);
 $row_referal = mysqli_fetch_array($run_referal);
 $referal_code = $row_referal['promo_code'];
 $get_userss = "select * from users where referal_code = '$referal_code'";
 $run_userss = mysqli_query($connect,$get_userss);
 
?>
						 <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="first">
                          <?php echo"$first_name $last_name's";?> Transaction History
                        </h3>
                        
                       
                    </div>

                </div>
                <!-- end of row -->
                <div class="row">
                 <div class="col-lg-12">
                 <h3>Investment History</h3>
                 <table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>email</th>
            <th>wallet</th>
            <th>plan</th>
            <th>reference Id</th>
            <th>btc</th>
            <th>country</th>
           
        </tr>
    </thead>
    <tbody>
    
        <?php
        while($row_user = mysqli_fetch_array($run_user)){
            $id = $row_user['id'];
          $email = $row_user['email'];
          $wallet = $row_user['wallet'];
          $plan = $row_user['plan'];
          $reference = $row_user['reference_id'];
          $btc = $row_user['btc'];
          $country = $row_user['country'];
         $id_no = $row_user['id_no'];
          echo"
          <tr>
           <td>$id</td>
           <td>$email</td>
           <td>$wallet</td>
           <td>$plan</td>
           <td>$reference</td>
           <td>$btc</td>
           <td>$country</td>
     
          </tr>
          ";
        }
        ?>
       
    </tbody>
</table>
                 </div>
                   <div class="col-lg-12">
                   <h3>Withdrawal History</h3>
                   <table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>

            <th>wallet</th>
            <th>amount</th>
            <th>reference Id</th>
            <th>btc</th>
            <th>transaction id</th>
           
        </tr>
    </thead>
    <tbody>
    
        <?php
        while($row_users = mysqli_fetch_array($run_users)){
            $id1 = $row_users['id'];
  
          $wallet1 = $row_users['wallet'];
          $amount = $row_users['amount'];
          $reference1 = $row_users['reference_no'];
          $btc1 = $row_users['btc'];
          $transaction = $row_users['transaction_id'];

          echo"
          <tr>
           <td>$id1</td>

           <td>$wallet1</td>
           <td>$amount</td>
           <td>$reference1</td>
           <td>$btc1</td>
           <td>$transaction</td>
     
          </tr>
          ";
        }
        ?>
       
    </tbody>
</table>
                   </div>
                   <div class="col-lg-12">
                   <h3>Referal History</h3>
                   <table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>

            <th>Name</th>
            <th>email</th>
            <th>country</th>
            <th>wallet</th>
            <th>id_no</th>
           
        </tr>
    </thead>
    <tbody>
    
        <?php
        while($row_refer = mysqli_fetch_array($run_refer)){
            $id_refer = $row_refer['id'];
  
            $wallet_refer = $row_refer['wallet'];
            $id_no_refer= $row_refer['id_no'];
            $first_refer = $row_refer['first_name'];
            $last_refer = $row_refer['last_name'];
            $email_refer = $row_refer['email'];
            $country_refer  = $row_refer['country'];

          echo"
          <tr>
           <td>$id_refer</td>

           <td>$first_refer $last_refer</td>
           <td>$email_refer</td>
           <td>$country_refer</td>
           <td>$wallet_refer</td>
           <td>$id_no_refer</td>
     
          </tr>
          ";
        }
        ?>
       
    </tbody>
</table>
                   </div>
                  <!--end -->
                </div>
                <!--end of row -->
            </div>



						<ul class="pagination">
							<li class="page-item"><a class="prev page-link disabled">&lt;&lt;</a></li>
							<li class="page-item active"><a class="page-link">1</a></li>
							<li class="page-item"><a class="next page-link disabled">&gt;&gt;</a></li>
						</ul>
					</div>
				</div>

			</div>
			<!-- end page container -->
			<!-- start footer -->
			<?php include "footer.php"; ?>
			<!-- end footer -->
		</div>
		<!-- start js include path -->
		<script src="./history_files/jquery.min.js.download"></script>
		<script src="./history_files/popper.js.download"></script>
		<script src="./history_files/jquery.blockui.min.js.download"></script>
		<script src="./history_files/jquery.slimscroll.js.download"></script>
		<!-- bootstrap -->
		<script src="./history_files/bootstrap.min.js.download"></script>
		<script src="./history_files/bootstrap-switch.min.js.download"></script>
		<script src="./history_files/jquery.sparkline.js.download"></script>
		<script src="./history_files/sparkline-data.js.download"></script>
		<!-- Common js-->
		<script src="./history_files/app.js.download"></script>
		<script src="./history_files/layout.js.download"></script>
		<script src="./history_files/theme-color.js.download"></script>
		<!-- material -->
		<script src="./history_files/material.min.js.download"></script>
		<!-- chart js -->
		<script src="./history_files/Chart.bundle.js.download"></script>
		<script src="./history_files/utils.js.download"></script>
		<script src="./history_files/home-data.js.download"></script>
		<!-- summernote -->
		<script src="./history_files/summernote.js.download"></script>
		<script src="./history_files/summernote-data.js.download"></script>
		<!-- end js include path -->


	</div>
</body>

</html>