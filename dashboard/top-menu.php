<?php 
session_start();
 include("../include/config.php");

 $get_user = "select * from users where token = '$_SESSION[token]'";
 $run_user = mysqli_query($connect,$get_user);
 $row_user = mysqli_fetch_array($run_user);

 $first_name = $row_user['first_name'];
 $last_name = $row_user['last_name'];
 $email = $row_user['email'];
 $wallet = $row_user['wallet'];
 $username = $row_user['username'];
 $country = $row_user['country'];
 $password = $row_user['password_user'];

 $id_no = $row_user['id_no'];
 $referal_code = $row_user['promo_code'];
 if(!isset($_SESSION['token'])){
	 // not logged in
	 header("location:../login.php");
	 echo"<script>alert('you need to login first! !')</script>";

 }elseif(isset($_GET['logout'])){
	 session_destroy();
	 unset($_SESSION['token']);
	 header("location:../login.php");
	 echo"<script>alert('Your are logging out!')</script>";
 }
?>
<div class="top-menu">
	<ul class="nav navbar-nav pull-right">

		<!-- start manage user dropdown -->
		<li class="dropdown dropdown-user">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
				data-close-others="true" aria-expanded="false">
			
				<span class="username username-hide-on-mobile"> <?php echo"$username";?> </span>
				<i class="fa fa-angle-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-menu-default">
				<li>
					<a href="profile.php">
						<i class="icon-user"></i> Profile </a>
				</li>
				<li>
					<a href="profile.php">
						<i class="icon-settings"></i> Settings
					</a>
				</li>
				<li>
					<a href="contact.php">
						<i class="icon-directions"></i> Help
					</a>
				</li>
				<li class="divider"> </li>
				<li>
					<a href="?logout=true">
						<i class="icon-logout"></i> Log Out </a>
				</li>
			</ul>
		</li>
		<!-- end manage user dropdown -->
		<li class="dropdown dropdown-quick-sidebar-toggler">

		</li>
	</ul>
</div>