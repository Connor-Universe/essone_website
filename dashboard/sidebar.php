

<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll" class="left-sidemenu">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 575px;">
				<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
					data-auto-scroll="true" data-slide-speed="200"
					style="padding-top: 20px; overflow: hidden; width: auto; height: 575px;">
					<li class="sidebar-toggler-wrapper hide">
						<div class="sidebar-toggler">
							<span></span>
						</div>
					</li>
					<li class="sidebar-user-panel">
						<div class="user-panel">
							<div class="pull-left image">
							<!--	<img src="../asset/images/logo.jpg" class="img-circle user-img-circle" alt="User Image"> -->
							</div>
							<div class="pull-left info">
								<p> <?php echo"$username";?></p>
								<a href="dashboard.php#"><i class="fa fa-circle user-online"></i><span
										class="txtOnline">
										Online</span></a>
							</div>
						</div>
					</li>

					<li class="nav-item">
						<a href="dashboard.php" class="nav-link nav-toggle"> <i class="material-icons">airplay</i>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="deposit.php" class="nav-link nav-toggle"> <i class="material-icons">account_balance_wallet</i>
							<span class="title">Investment</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="include/wallet_process.php" class="nav-link nav-toggle"> <i class="material-icons">list</i>
							<span class="title">Wallet</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="withdrawal.php" class="nav-link nav-toggle"> <i class="material-icons">eject</i>
							<span class="title">Withdraw</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="history.php" class="nav-link nav-toggle">
							<i class="material-icons">restore</i>
							<span class="title">History</span>
							<span class="selected"></span>
							<span class="arrow open"></span>
						</a>
						
					</li>
					<li class="nav-item">
						<a href="referal.php" class="nav-link nav-toggle"> <i class="material-icons">group</i>
							<span class="title">Referals</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="profile.php" class="nav-link nav-toggle"> <i
								class="material-icons">settings_applications</i>
							<span class="title">Profile</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="edit-account.php" class="nav-link nav-toggle"> <i class="material-icons">person_add</i>
							<span class="title">Edit Account</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="settings.php" class="nav-link nav-toggle"> <i class="material-icons">lock_outline</i>
							<span class="title">Security</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="?logout" class="nav-link nav-toggle"> <i
								class="material-icons">power_settings_new</i>
							<span class="title">Logout</span>
						</a>
					</li>

				</ul>
				<div class="slimScrollBar"
					style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 468.307px;">
				</div>
				<div class="slimScrollRail"
					style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
				</div>
			</div>
		</div>
	</div>
</div>