<?php
include("config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;


date_default_timezone_set('Etc/UTC');

require '../phpmailer/vendor/autoload.php';

      //referal email

      if(isset($_GET['r'])){
          $referal_code = $_GET['r'];
        $get_user ="select * from users where promo_code = '$referal_code'";
        $run_user = mysqli_query($connect,$get_user);
        $row_user = mysqli_fetch_array($run_user);
        $first_name1 = $row_user['first_name'];
        $last_name1 = $row_user['last_name'];
        $email12 = $row_user['email'];
        $first_name= $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $email = $_GET['email'];
        $wallet = $_GET['wallet'];
        $username = $_GET['username'];
        $country = $_GET['country'];
        $password=$_GET['password'];
        $status = 'active';
        $verified = 1;
         
          $token = substr(md5(time()) , 0 , 16);
          $promo = $username.mt_rand(1000, 100000);
          $id_no = mt_rand(1000000, 10000000);
          $date = date("d/m/Y");
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
$mail->addAddress($email12,"Mr/Mrs".$last_name);

//Set the subject line
$mail->Subject = 'Referal Email: Essonne Ltd';

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->AddEmbeddedImage('../asset/images/logo.jpg', 'logo', '../asset/images/logo.jpg '); 

//Replace the plain text body with one created manually
$mail->Body="
<p style='text-align:center;';> <img src='cid:logo'></p>
<p align=left> 
Hello $first_name1 $last_name1, 
Congratulations! A user has used your referal link to register on our platform! You will now receive a 5% comission on any investment package they choose from! keep refering more users and get larger and larger referal bonuses! 
</p>";


//Attach an image file


//send the message, check for errors
if (!$mail->send()) {

$fail   = "<span class='contact-fail'>Registeration failed, please try again later</span>"; 

} else {

   $success= "<span class='contact-success'>Thank you $first_name for registering!</span> ";
       $insert_user = "INSERT INTO users (first_name, last_name , email , wallet , username , country , referal_code , password_user , ip , token , id_no,promo_code,verified,Status,date) 
        VALUES ('$first_name','$last_name','$email','$wallet', '$username' , '$country', '$referal_code', '$password', '$ip', '$token', '$id_no', '$promo', '$verified','$status','$date' )";
        $run_user = mysqli_query($connect,$insert_user);
        $insert_wallet = "INSERT INTO wallet (id_no,amount) VALUES('$id_no','0')";
        $run_wallet = mysqli_query($connect,$insert_wallet);
    
          header("refresh:5;url=../login.php");
  
}
    

    }

 
    

?>