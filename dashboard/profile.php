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
                <?php include "top-menu.php"; 
                       
        
                ?>
			</div>
		</div>
		<!-- end header -->

		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php 
                include "sidebar.php";
                include "include/profile_change.php";
                $get_user = "select * from users where token = '$_SESSION[token]'";
                $run_user = mysqli_query($connect,$get_user);
                $row_user = mysqli_fetch_array($run_user);
               
                $first_name2 = $row_user['first_name'];
                $last_name2 = $row_user['last_name'];
                $email2= $row_user['email'];
                $wallet2 = $row_user['wallet'];
                $username2 = $row_user['username'];
                $country2 = $row_user['country'];
                $password2 = $row_user['password_user'];
                $id_no2 = $row_user['id_no'];
                $referal_code2 = $row_user['promo_code'];
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
                      <h3>Profile(Settings)</h3>
                  </div>
                  <div class="col-lg-12">
                 
                  <div class="card">
                        <div class="card-body">
                            <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="<?php echo"$first_name2";?>" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="<?php echo"$last_name2";?>" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo"$email2";?>" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="<?php echo"$password2";?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">bitcoin Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="<?php echo"$wallet2";?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Username</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="<?php echo"$username2";?>" disabled>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Id No</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="<?php echo"$id_no2";?>" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputState">Country</label>
                                <select id="inputState" class="form-control" disabled>
                                    <option selected><?php echo"$country2";?></option>
                                
                                </select>
                                </div>
                                
                            </div>
                            
                            <a href="profile.php#change" class="btn btn-primary">Change Profile</a>
                            </form>
                        </div>
                        </div>

                  <!-- end of form -->
                  <!-- start of form -->
                    <div class="container" id="change">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Edit Profile</h3>
                            </div>
                            <div class="col-lg-12">
                            <div class="col-lg-12">
                            <?php echo"$success";?>
                    <?php echo"$fail";?>
                 <div class="card">
                       <div class="card-body">
                           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                           <div class="form-row">
                               <div class="form-group col-md-6">
                               <?php echo"$first_name_err";?>
                               <label for="inputEmail4">First Name</label>
                               <input type="text" class="form-control" name ="first_name" id="inputEmail4" placeholder="First">
                               </div>
                               <div class="form-group col-md-6">
                               <?php echo"$last_name_err";?>
                               <label for="inputPassword4">Last Name</label>
                               <input type="text" class="form-control" name="last_name" id="inputPassword4" placeholder="Password">
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-4">
                               <?php echo"$email_err";?>
                               <label for="inputEmail4">Email</label>
                               <input type="email" class="form-control" id="inputEmail4" placeholder="Enter New Email"name="email">
                               </div>
                               <div class="form-group col-md-4">
                               <label for="inputPassword4">Password</label>
                               <input type="password" class="form-control" id="inputPassword4" placeholder="Enter New Password" name="password">
                               </div>
                               <div class="form-group col-md-4">
                               <label for="inputPassword4">Confirm Password</label>
                               <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="password2">
                               </div>
                           </div>
                           <div class="form-group">
                           <?php echo"$btc_address_error";?>
                               <label for="inputAddress">bitcoin Address</label>
                               <input type="text" class="form-control" id="inputAddress" placeholder="Enter New bitcoin address" name="wallet">
                           </div>
                           <div class="form-group">
                           <?php echo"$username_err";?>
                               <label for="inputAddress2">Username</label>
                               <input type="text" class="form-control" id="inputAddress2" placeholder="Enter New Username" name="username">
                           </div>
                           <div class="form-row">
                               
                               <div class="form-group col-md-12">
                               <?php echo"$country_error";?>
                               <label for="inputState">Country</label>
                               <select id="exampleFormControlSelect1" class="form-control" name="country">
                               <option value="select" selected>- Select Country - </option>
                                  <option value="Afganistan">Afghanistan</option>
                                  <option value="Albania">Albania</option>
                                  <option value="Algeria">Algeria</option>
                                  <option value="American Samoa">American Samoa</option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguilla">Anguilla</option>
                                  <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaijan">Azerbaijan</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahrain">Bahrain</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Belize">Belize</option>
                                  <option value="Benin">Benin</option>
                                  <option value="Bermuda">Bermuda</option>
                                  <option value="Bhutan">Bhutan</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bonaire">Bonaire</option>
                                  <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                  <option value="Brunei">Brunei</option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">Burkina Faso</option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Cambodia">Cambodia</option>
                                  <option value="Cameroon">Cameroon</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Canary Islands">Canary Islands</option>
                                  <option value="Cape Verde">Cape Verde</option>
                                  <option value="Cayman Islands">Cayman Islands</option>
                                  <option value="Central African Republic">Central African Republic</option>
                                  <option value="Chad">Chad</option>
                                  <option value="Channel Islands">Channel Islands</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Christmas Island">Christmas Island</option>
                                  <option value="Cocos Island">Cocos Island</option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoros">Comoros</option>
                                  <option value="Congo">Congo</option>
                                  <option value="Cook Islands">Cook Islands</option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Cote DIvoire">Cote DIvoire</option>
                                  <option value="Croatia">Croatia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Curaco">Curacao</option>
                                  <option value="Cyprus">Cyprus</option>
                                  <option value="Czech Republic">Czech Republic</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Dominican Republic">Dominican Republic</option>
                                  <option value="East Timor">East Timor</option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="Falkland Islands">Falkland Islands</option>
                                  <option value="Faroe Islands">Faroe Islands</option>
                                  <option value="Fiji">Fiji</option>
                                  <option value="Finland">Finland</option>
                                  <option value="France">France</option>
                                  <option value="French Guiana">French Guiana</option>
                                  <option value="French Polynesia">French Polynesia</option>
                                  <option value="French Southern Ter">French Southern Ter</option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Great Britain">Great Britain</option>
                                  <option value="Greece">Greece</option>
                                  <option value="Greenland">Greenland</option>
                                  <option value="Grenada">Grenada</option>
                                  <option value="Guadeloupe">Guadeloupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haiti">Haiti</option>
                                  <option value="Hawaii">Hawaii</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungary">Hungary</option>
                                  <option value="Iceland">Iceland</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="India">India</option>
                                  <option value="Iran">Iran</option>
                                  <option value="Iraq">Iraq</option>
                                  <option value="Ireland">Ireland</option>
                                  <option value="Isle of Man">Isle of Man</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italy">Italy</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japan">Japan</option>
                                  <option value="Jordan">Jordan</option>
                                  <option value="Kazakhstan">Kazakhstan</option>
                                  <option value="Kenya">Kenya</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option value="Korea North">Korea North</option>
                                  <option value="Korea Sout">Korea South</option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                  <option value="Laos">Laos</option>
                                  <option value="Latvia">Latvia</option>
                                  <option value="Lebanon">Lebanon</option>
                                  <option value="Lesotho">Lesotho</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libya">Libya</option>
                                  <option value="Liechtenstein">Liechtenstein</option>
                                  <option value="Lithuania">Lithuania</option>
                                  <option value="Luxembourg">Luxembourg</option>
                                  <option value="Macau">Macau</option>
                                  <option value="Macedonia">Macedonia</option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Maldives">Maldives</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marshall Islands">Marshall Islands</option>
                                  <option value="Martinique">Martinique</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mauritius">Mauritius</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Midway Islands">Midway Islands</option>
                                  <option value="Moldova">Moldova</option>
                                  <option value="Monaco">Monaco</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Morocco">Morocco</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="Myanmar">Myanmar</option>
                                  <option value="Nambia">Nambia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Netherland Antilles">Netherland Antilles</option>
                                  <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                  <option value="Nevis">Nevis</option>
                                  <option value="New Caledonia">New Caledonia</option>
                                  <option value="New Zealand">New Zealand</option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Norfolk Island">Norfolk Island</option>
                                  <option value="Norway">Norway</option>
                                  <option value="Oman">Oman</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="Palau Island">Palau Island</option>
                                  <option value="Palestine">Palestine</option>
                                  <option value="Panama">Panama</option>
                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Peru">Peru</option>
                                  <option value="Phillipines">Philippines</option>
                                  <option value="Pitcairn Island">Pitcairn Island</option>
                                  <option value="Poland">Poland</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">Puerto Rico</option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Republic of Montenegro">Republic of Montenegro</option>
                                  <option value="Republic of Serbia">Republic of Serbia</option>
                                  <option value="Reunion">Reunion</option>
                                  <option value="Romania">Romania</option>
                                  <option value="Russia">Russia</option>
                                  <option value="Rwanda">Rwanda</option>
                                  <option value="St Barthelemy">St Barthelemy</option>
                                  <option value="St Eustatius">St Eustatius</option>
                                  <option value="St Helena">St Helena</option>
                                  <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                  <option value="St Lucia">St Lucia</option>
                                  <option value="St Maarten">St Maarten</option>
                                  <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                  <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                  <option value="Saipan">Saipan</option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="Samoa American">Samoa American</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leone">Sierra Leone</option>
                                  <option value="Singapore">Singapore</option>
                                  <option value="Slovakia">Slovakia</option>
                                  <option value="Slovenia">Slovenia</option>
                                  <option value="Solomon Islands">Solomon Islands</option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="South Africa">South Africa</option>
                                  <option value="Spain">Spain</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Swaziland">Swaziland</option>
                                  <option value="Sweden">Sweden</option>
                                  <option value="Switzerland">Switzerland</option>
                                  <option value="Syria">Syria</option>
                                  <option value="Tahiti">Tahiti</option>
                                  <option value="Taiwan">Taiwan</option>
                                  <option value="Tajikistan">Tajikistan</option>
                                  <option value="Tanzania">Tanzania</option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                  <option value="Tunisia">Tunisia</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="Turkmenistan">Turkmenistan</option>
                                  <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="Ukraine">Ukraine</option>
                                  <option value="United Arab Erimates">United Arab Emirates</option>
                                  <option value="United States of America">United States of America</option>
                                  <option value="Uraguay">Uruguay</option>
                                  <option value="Uzbekistan">Uzbekistan</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Vatican City State">Vatican City State</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Vietnam">Vietnam</option>
                                  <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                  <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                  <option value="Wake Island">Wake Island</option>
                                  <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zaire">Zaire</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabwe">Zimbabwe</option>
                               
                               </select>
                               </div>
                               
                           </div>
                           
                           <button type="submit" class="btn btn-primary">Edit Profile</button>
                           </form>
                       </div>
                       </div>
                            </div>
                        </div>
                    </div>
                  <!-- end of form -->
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