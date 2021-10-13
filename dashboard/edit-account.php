<!DOCTYPE html>
<!-- saved from url=(0034)https://norbit.ltd/?a=edit_account -->
<html lang="en" class="mdl-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1200, initial-scale=0.0">
	<meta name="description" content="Responsive Admin Template">
	<!----------------- www.hyipcustomize.com ----------->
    <meta name="designer" href="https://hyipcustomize.com/">
	<title>Essone | Bitcoin Investment Company</title>
	<!-- google font -->
	<link href="./edit-account_files/css" rel="stylesheet" type="text/css">
	<!-- icons -->
	<link href="./edit-account_files/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="./edit-account_files/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--bootstrap -->
	<link href="./edit-account_files/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="./edit-account_files/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="./edit-account_files/material.min.css">
	<link rel="stylesheet" href="./edit-account_files/material_style.css">
	<!-- inbox style -->
	<link href="./edit-account_files/inbox.min.css" rel="stylesheet" type="text/css">
	<!-- Theme Styles -->
	<link href="./edit-account_files/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css">
	<link href="./edit-account_files/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="./edit-account_files/style.css" rel="stylesheet" type="text/css">
	<link href="./edit-account_files/responsive.css" rel="stylesheet" type="text/css">
	<link href="./edit-account_files/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<link rel="shortcut icon" href="https://norbit.ltd/1/assets/img/favicon.ico">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme" data-new-gr-c-s-check-loaded="14.994.0" data-gr-ext-installed="">
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
					<li><a href="edit-account.php#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
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
							<div class=" pull-left">
								<div class="page-title">Edit Account</div>
							</div></div></div>




<script language="javascript">
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
}

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }


  if (document.editform.address.value == '') {
    alert("Please enter your address!");
    document.editform.address.focus();
    return false;
  }
  if (document.editform.city.value == '') {
    alert("Please enter your city!");
    document.editform.city.focus();
    return false;
  }
  if (document.editform.state.value == '') {
    alert("Please enter your state!");
    document.editform.state.focus();
    return false;
  }
  if (document.editform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.editform.zip.focus();
    return false;
  }
  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.editform.country.focus();
    return false;
  }


  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }




  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }



  for (i in document.editform.elements) {
    f = document.editform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  return true;
}
</script>


<br><br>
<form action="https://norbit.ltd/?a=edit_account" method="post" onsubmit="return checkform()" name="editform"><input type="hidden" name="form_id" value="16135762223303"><input type="hidden" name="form_token" value="a71956f45af46638dae2aa4ca2f3f3b4">
<input type="hidden" name="a" value="edit_account">
<input type="hidden" name="action" value="edit_account">
<input type="hidden" name="say" value="">

<div class="table-responsive">
    <table class="table table-striped custom-table table-hover">
<tbody><tr>
 <td>Account Name:</td>
 <td>Samco2000</td>
</tr><tr>
 <td>Registration date:</td>
 <td>Feb-8-2021 03:07:25 AM</td>
</tr><tr>
 <td>Your Full Name:</td>
 <td><input type="text" name="fullname" value="Sam co" class="mdl-textfield__input" size="30">
</td></tr>
<tr>
 <td>Your Address:</td>
 <td><input type="text" name="address" value="Chelsea" class="mdl-textfield__input" size="30"></td>
</tr>
<tr>
 <td>Your City:</td>
 <td><input type="text" name="city" value="Madrid" class="mdl-textfield__input" size="30"></td>
</tr>
<tr>
 <td>Your State:</td>
 <td><input type="text" name="state" value="100001" class="mdl-textfield__input" size="30"></td>
</tr>
<tr>
 <td>Your Zip:</td>
 <td><input type="text" name="zip" value="101283" class="mdl-textfield__input" size="30"></td>
</tr>
<tr>
 <td>Your Country:</td>
 <td>
  <select name="country" class="mdl-textfield__input">
<option value="">--SELECT--</option>
<option>United States</option>
<option>Afghanistan</option>
<option>Albania</option>
<option>Algeria</option>
<option>American Samoa</option>
<option selected="">Andorra</option>
<option>Angola</option>
<option>Anguilla</option>
<option>Antarctica</option>
<option>Antigua and Barbuda</option>
<option>Argentina</option>
<option>Armenia</option>
<option>Aruba</option>
<option>Australia</option>
<option>Austria</option>
<option>Azerbaidjan</option>
<option>Bahamas</option>
<option>Bahrain</option>
<option>Bangladesh</option>
<option>Barbados</option>
<option>Belarus</option>
<option>Belgium</option>
<option>Belize</option>
<option>Benin</option>
<option>Bermuda</option>
<option>Bhutan</option>
<option>Bolivia</option>
<option>Bosnia-Herzegovina</option>
<option>Botswana</option>
<option>Bouvet Island</option>
<option>Brazil</option>
<option>British Indian Ocean Territory</option>
<option>Brunei Darussalam</option>
<option>Bulgaria</option>
<option>Burkina Faso</option>
<option>Burundi</option>
<option>Cambodia</option>
<option>Cameroon</option>
<option>Canada</option>
<option>Cape Verde</option>
<option>Cayman Islands</option>
<option>Central African Republic</option>
<option>Chad</option>
<option>Chile</option>
<option>China</option>
<option>Christmas Island</option>
<option>Cocos (Keeling) Islands</option>
<option>Colombia</option>
<option>Comoros</option>
<option>Congo</option>
<option>Congo (Democratic Republic)</option>
<option>Cook Islands</option>
<option>Costa Rica</option>
<option>Croatia</option>
<option>Cuba</option>
<option>Cyprus</option>
<option>Czech Republic</option>
<option>Denmark</option>
<option>Djibouti</option>
<option>Dominica</option>
<option>Dominican Republic</option>
<option>East Timor</option>
<option>Ecuador</option>
<option>Egypt</option>
<option>El Salvador</option>
<option>Equatorial Guinea</option>
<option>Eritrea</option>
<option>Estonia</option>
<option>Ethiopia</option>
<option>Falkland Islands</option>
<option>Faroe Islands</option>
<option>Fiji</option>
<option>Finland</option>
<option>France</option>
<option>France (European Territory)</option>
<option>French Guiana</option>
<option>French Southern Territories</option>
<option>Gabon</option>
<option>Gambia</option>
<option>Georgia</option>
<option>Germany</option>
<option>Ghana</option>
<option>Gibraltar</option>
<option>Great Britain</option>
<option>Greece</option>
<option>Greenland</option>
<option>Grenada</option>
<option>Guadeloupe</option>
<option>Guam</option>
<option>Guatemala</option>
<option>Guinea</option>
<option>Guinea Bissau</option>
<option>Guyana</option>
<option>Haiti</option>
<option>Heard and McDonald Islands</option>
<option>Holy See (Vatican City State)</option>
<option>Honduras</option>
<option>Hong Kong</option>
<option>Hungary</option>
<option>Iceland</option>
<option>India</option>
<option>Indonesia</option>
<option>Iran</option>
<option>Iraq</option>
<option>Ireland</option>
<option>Israel</option>
<option>Italy</option>
<option>Ivory Coast (Cote D`Ivoire)</option>
<option>Jamaica</option>
<option>Japan</option>
<option>Jordan</option>
<option>Kazakhstan</option>
<option>Kenya</option>
<option>Kiribati</option>
<option>Kuwait</option>
<option>Kyrgyz Republic (Kyrgyzstan)</option>
<option>Laos</option>
<option>Latvia</option>
<option>Lebanon</option>
<option>Lesotho</option>
<option>Liberia</option>
<option>Libya</option>
<option>Liechtenstein</option>
<option>Lithuania</option>
<option>Luxembourg</option>
<option>Macau</option>
<option>Macedonia</option>
<option>Madagascar</option>
<option>Malawi</option>
<option>Malaysia</option>
<option>Maldives</option>
<option>Mali</option>
<option>Malta</option>
<option>Marshall Islands</option>
<option>Martinique</option>
<option>Mauritania</option>
<option>Mauritius</option>
<option>Mayotte</option>
<option>Mexico</option>
<option>Micronesia</option>
<option>Moldavia</option>
<option>Monaco</option>
<option>Mongolia</option>
<option>Montserrat</option>
<option>Morocco</option>
<option>Mozambique</option>
<option>Myanmar</option>
<option>Namibia</option>
<option>Nauru</option>
<option>Nepal</option>
<option>Netherlands</option>
<option>Netherlands Antilles</option>
<option>New Caledonia</option>
<option>New Zealand</option>
<option>Nicaragua</option>
<option>Niger</option>
<option>Nigeria</option>
<option>Niue</option>
<option>Norfolk Island</option>
<option>North Korea</option>
<option>Northern Mariana Islands</option>
<option>Norway</option>
<option>Oman</option>
<option>Pakistan</option>
<option>Palau</option>
<option>Panama</option>
<option>Papua New Guinea</option>
<option>Paraguay</option>
<option>Peru</option>
<option>Philippines</option>
<option>Pitcairn Island</option>
<option>Poland</option>
<option>Polynesia</option>
<option>Portugal</option>
<option>Puerto Rico</option>
<option>Qatar</option>
<option>Reunion</option>
<option>Romania</option>
<option>Russian Federation</option>
<option>Rwanda</option>
<option>S. Georgia &amp; S. Sandwich Isls.</option>
<option>Saint Helena</option>
<option>Saint Kitts &amp; Nevis Anguilla</option>
<option>Saint Lucia</option>
<option>Saint Pierre and Miquelon</option>
<option>Saint Vincent &amp; Grenadines</option>
<option>Samoa</option>
<option>San Marino</option>
<option>Sao Tome and Principe</option>
<option>Saudi Arabia</option>
<option>Senegal</option>
<option>Seychelles</option>
<option>Sierra Leone</option>
<option>Singapore</option>
<option>Slovak Republic</option>
<option>Slovenia</option>
<option>Solomon Islands</option>
<option>Somalia</option>
<option>South Africa</option>
<option>South Korea</option>
<option>Spain</option>
<option>Sri Lanka</option>
<option>Sudan</option>
<option>Suriname</option>
<option>Svalbard and Jan Mayen Islands</option>
<option>Swaziland</option>
<option>Sweden</option>
<option>Switzerland</option>
<option>Syria</option>
<option>Taiwan</option>
<option>Tajikistan</option>
<option>Tanzania</option>
<option>Thailand</option>
<option>Togo</option>
<option>Tokelau</option>
<option>Tonga</option>
<option>Trinidad and Tobago</option>
<option>Tunisia</option>
<option>Turkey</option>
<option>Turkmenistan</option>
<option>Turks and Caicos Islands</option>
<option>Tuvalu</option>
<option>USA Minor Outlying Islands</option>
<option>Uganda</option>
<option>Ukraine</option>
<option>United Arab Emirates</option>
<option>United Kingdom</option>
<option>Uruguay</option>
<option>Uzbekistan</option>
<option>Vanuatu</option>
<option>Venezuela</option>
<option>Vietnam</option>
<option>Virgin Islands (British)</option>
<option>Virgin Islands (USA)</option>
<option>Wallis and Futuna Islands</option>
<option>Weather Stations</option>
<option>Western Sahara</option>
<option>Yemen</option>
<option>Yugoslavia</option>
<option>Zaire</option>
<option>Zambia</option>
<option>Zimbabwe</option>
  </select>
 </td>
</tr>

<tr>
 <td>New Password:</td>
 <td><input type="password" name="password" value="" class="mdl-textfield__input" size="30"></td>
</tr><tr>
 <td>Retype Password:</td>
 <td><input type="password" name="password2" value="" class="mdl-textfield__input" size="30"></td>
</tr>
<tr>
 <td>Your Bitcoin Wallet address:</td>
 <td><input type="text" class="mdl-textfield__input" size="30" name="pay_account[1006][Wallet address]" value=""></td>
</tr>
<tr>
 <td>Your E-mail address:</td>
 <td><input type="text" name="email" value="samuelemeh200@gmail.com" class="mdl-textfield__input" size="30"></td>
</tr>
<tr>
 <td>Current Transaction Code:</td>
 <td><input type="password" name="transaction_code_current" value="" class="mdl-textfield__input" size="30"></td>
</tr>


<tr>
 <td>&nbsp;</td>
 <td><input type="submit" value="Change Account data" class="btn btn-round btn-primary"></td>
</tr></tbody></table></div>
</form>

</div></div>
			
		</div>
		<!-- end page container -->
<!-- start footer -->
<?php include "footer.php"; ?>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="./edit-account_files/jquery.min.js.download"></script>
	<script src="./edit-account_files/popper.js.download"></script>
	<script src="./edit-account_files/jquery.blockui.min.js.download"></script>
	<script src="./edit-account_files/jquery.slimscroll.js.download"></script>
	<!-- bootstrap -->
	<script src="./edit-account_files/bootstrap.min.js.download"></script>
	<script src="./edit-account_files/bootstrap-switch.min.js.download"></script>
	<script src="./edit-account_files/jquery.sparkline.js.download"></script>
	<script src="./edit-account_files/sparkline-data.js.download"></script>
	<!-- Common js-->
	<script src="./edit-account_files/app.js.download"></script>
	<script src="./edit-account_files/layout.js.download"></script>
	<script src="./edit-account_files/theme-color.js.download"></script>
	<!-- material -->
	<script src="./edit-account_files/material.min.js.download"></script>
	<!-- chart js -->
	<script src="./edit-account_files/Chart.bundle.js.download"></script>
	<script src="./edit-account_files/utils.js.download"></script>
	<script src="./edit-account_files/home-data.js.download"></script>
	<!-- summernote -->
	<script src="./edit-account_files/summernote.js.download"></script>
	<script src="./edit-account_files/summernote-data.js.download"></script>
	<!-- end js include path -->


</div></body></html>