<?php
include("include/config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;


date_default_timezone_set('Etc/UTC');

require 'phpmailer/vendor/autoload.php';


   
    $first_name_err = $email_err = $last_name_err = $password_err = $btc_address_error = $country_error = $referal_code_err = $username_err = "";
    $first_name = $email = $last_name = $username = $password = $btc_address = $country = $referal_code  = $success = $fail = "";
    $verified = 1;
    $status = "active";
    $date = date("d/m/Y");



if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $first_name= $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $btc_address = $_POST['wallet'];
  $country = $_POST['country'];
  $referal_code = $_POST['code'];


  
  
 //check for unique password 
 $column2 = array();
 $get_password = "select password_user from users";
 $run_password = mysqli_query($connect,$get_password);
 while($column_password = mysqli_fetch_array($run_password)){
   $column2[] = $column_password[0];
 }

 //check for unique username
 $column1 = array();
 $get_username = "select username from users";
 $run_username = mysqli_query($connect,$get_username);
 while($column_username = mysqli_fetch_array($run_username)){
   $column1[] = $column_username[0];
 }

 //check for unique email address
 $column = array(); 
 $get_email = "select email from users";
 $run_email = mysqli_query($connect,$get_email);
while($column_email = mysqli_fetch_array($run_email)){
  $column[] = $column_email[0];
}
 $column3 = array();
 $get_wallet = "select wallet from users";
 $run_wallet = mysqli_query($connect,$get_wallet);
 while($column_wallet = mysqli_fetch_array($run_wallet)){
   $column3[] = $column_wallet[0];
 }
 $column4 = array();
 $get_refer = "select promo_code from users";
 $run_refer = mysqli_query($connect,$get_refer);
 while($column_refer = mysqli_fetch_array($run_refer)){
   $column4[] =  $column_refer[0];
 }

 

 
  //the next code is for checking the form data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if (empty($_POST["first_name"])) {
    $first_name_err = "<div class='alert alert-dark'>
    <strong>Error</strong> First Name is Required!
  </div>";
  } else {
    $first_name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
      $first_name_err = " <div class='alert alert-dark'>
      <strong>Error</strong> Only Letters and whitespace allowed
    </div>";
    }
  }
  if (empty($_POST["last_name"])) {
    $last_name_err = "<div class='alert alert-dark'>
    <strong>Error</strong> Last Name Required!
  </div>";
  } else {
    $last_name = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
      $last_name_err = "<div class='alert alert-dark'>
      <strong>Error</strong> Only Letters and whitespace allowed
    </div>";
    }
  }
  if($_POST["country"] == "select"){
    $country_error = "<div class='alert alert-dark'>
    <strong>Error</strong> Please Choose a country
  </div>";
  }
  if (empty($_POST["username"])) {
    $username_err = "<div class='alert alert-dark'>
    <strong>Error</strong> Username Required
  </div>";
  } else {
    $username = test_input($_POST["username"]);
   if(in_array($username,$column1)){
        $username_err = "<div class='alert alert-dark'>
        <strong>Error</strong> Username is already in use
      </div>";
    }
    }
    if ($referal_code == $column_refer) {
      $referal_code_err = "";  
    }elseif(isset($_POST["code"]) AND !in_array($referal_code,$column4)){
      $referal_code_err = "<div class='alert alert-dark'>
      <strong>Error</strong> Referal Code is incorrect
    </div>";
      }elseif(!isset($_POST["code"])){
 
        $referal_code_err="";
      }
  
  if (empty($_POST["password"])) {
    $password_err = "<div class='alert alert-dark'>
    <strong>Error</strong> Password is required
  </div>";
  } else {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if($password != $password2){
        $password_err = "<div class='alert alert-dark'>
        <strong>Error</strong> Passwords are not the same
      </div>";
      } elseif(in_array($password,$column2)){
        $password_err = "<div class='alert alert-dark'>
        <strong>Error</strong> This password is already in use 
      </div>";
    }
  }

  if (empty($_POST["email"])) {
    $email_err = "<div class='alert alert-dark'>
    <strong>Error</strong> Email Address is required
  </div>";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "<div class='alert alert-dark'>
      <strong>Error</strong> Invalid Email format
    </div>";
    }elseif(in_array($email,$column)){
      $email_err = "<div class='alert alert-dark'>
      <strong>Error</strong> Email is already in use
    </div>";
  }
  }
  if (empty($_POST["wallet"])) {
    $btc_address_error = "";
    $btc_address = "No bitcoin address";
  } else {
    $btc_address = test_input($_POST["wallet"]);
    if (strlen($btc_address) < 26 || strlen($btc_address) > 35) {
      $btc_address_error = "<div class='alert alert-dark'>
      <strong>Error</strong> This address is invalid 
    </div>";
    }elseif(in_array($btc_address,$column3)){
        $btc_address_error = "<div class='alert alert-dark'>
        <strong>Error</strong> This address is already in use
      </div>";
        if($btc_address == "No bitcoin address"){
          $btc_address_error = "";
        }

    }
  }

  //if validation is satified then create a token for the user 
  
  
        if ($first_name_err == "" and $last_name_err == "" and $email_err == "" and $username_err == "" and $password_err == "" and $btc_address_error == "" and $country_error =="" and $referal_code_err == "" and $referal_code == ""){

          $token = substr(md5(time()) , 0 , 16);
          $promo = $username.mt_rand(1000, 100000);
          $id_no = mt_rand(1000000, 10000000);
          function getRealIpUs(){
          
            switch(true){
          
                case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
          
                default : return $_SERVER['REMOTE_ADDR'];
            }
          }
          $ip = getRealIpUs();
         
          //Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPAutoTLS = false;
$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
  )
  );

//Set AuthType to use XOAUTH2
$mail->AuthType = 'XOAUTH2';

//Fill in authentication details here
//Either the gmail account owner, or the user that gave consent
$email1 = 'dummyouth123@gmail.com';
$clientId = '1044474112853-aa91skh2pdqiqna92g7lr0vcam7vac34.apps.googleusercontent.com';
$clientSecret = '_gHRv_yHmNuIULJv0PYRqsMp';

//Obtained by configuring and running get_oauth_token.php
//after setting up an app in Google Developer Console.
$refreshToken = '1//03SEAiLBdMUDiCgYIARAAGAMSNwF-L9Ir7CoYrJ6n5BVHnpbxiiMb0YCI5zxkOiFEmI8_kmEq-eIV9bvCkOEZLo9zSUEuRlTK6mo';

$mail->oauthUserEmail = "dummyouth123@gmail.com";
$mail->oauthClientId = "1044474112853-aa91skh2pdqiqna92g7lr0vcam7vac34.apps.googleusercontent.com";
$mail->oauthClientSecret = "_gHRv_yHmNuIULJv0PYRqsMp";
$mail->oauthRefreshToken = "1//03SEAiLBdMUDiCgYIARAAGAMSNwF-L9Ir7CoYrJ6n5BVHnpbxiiMb0YCI5zxkOiFEmI8_kmEq-eIV9bvCkOEZLo9zSUEuRlTK6mo";
//Create a new OAuth2 provider instance
$provider = new Google(
    [   
        'clientId' => $clientId,
        'clientSecret' => $clientSecret,
    ]
);

//Pass the OAuth provider instance to PHPMailer
$mail->setOAuth(
    new OAuth(
        [
            'provider' => $provider,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'refreshToken' => $refreshToken,
            'userName' => $email1,
        ]
    )
);

//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as
$mail->setFrom("support@essonne.ltd",$last_name);

//Set who the message is to be sent to
$mail->addAddress($email,"Mr/Mrs $last_name");

//Set the subject line
$mail->Subject = 'Verification Email: Essonne Ltd';

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->setFrom("support@essonne.ltd",$last_name);
$mail->From = "support@essonne.ltd";
$mail->addReplyTo('support@essonne.ltd', 'ABC');
$mail->addCC("support@essonne.ltd");
$mail->addBCC("support@essonne.ltd");
$mail->AddEmbeddedImage('asset/images/logo.jpg', 'logo', 'asset/images/logo.jpg '); 
//Replace the plain text body with one created manually
$mail->Body="
<p style='text-align:center;';> <img alt='PHPMailer' src='cid:logo'></p>
<p align=left> 
Hello $first_name $last_name,</p> <p> Thank you for registeration, your login information: </p>
<p> Email:$email </p>
<p> Password : $password</p>
<p> You can login here : <a href='https://essonne.ltd/login.php'>Login</a> </p>
<p> Contact us immediately if you did not authorize this registration </p>
<p> Regards From </p>
<p> Essonne Ltd </p>";


//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
 
  $fail   = "<div class='alert alert-danger'>
  <strong>Fail</strong> Registeration failed, please try again later
  
</div>"; 
 
} else{

     $success= "<div class='alert alert-dark'>
     <strong>Success</strong> Thank you $first_name for registering! You will be redirected to your login page shortly
   </div> ";
     $insert_user = "INSERT INTO users (first_name, last_name , email , wallet , username , country , referal_code , password_user , ip , token , id_no , promo_code ,verified,Status,date) 
     VALUES ('$first_name','$last_name','$email','$btc_address', '$username ' , '$country', '$referal_code', '$password', '$ip', '$token', '$id_no', '$promo', '$verified','$status','$date' )";
     $run_user = mysqli_query($connect,$insert_user);
     $insert_wallet = "INSERT INTO wallet (id_no,amount) VALUES('$id_no','0')";
     $run_wallet =mysqli_query($connect,$insert_wallet);
    header("refresh:5;url=login.php");
}

      
      
      }elseif($first_name_err == "" and $last_name_err == "" and $email_err == "" and $username_err == "" and $password_err == "" and $btc_address_error == "" and $country_error =="" and $referal_code_err == "" and !empty($referal_code)){
       
        header("location:include/redirect.php?r=$referal_code&first_name=$first_name&last_name=$last_name&email=$email&wallet=$btc_address&username=$username&country=$country&password=$password&verified=$verified");
      }

     
    }


  

  

      


        
  

?>