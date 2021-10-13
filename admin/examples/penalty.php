<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\OAuth;
 use League\OAuth2\Client\Provider\Google;
 include("../../include/config.php");
if(isset($_POST['add'])){
   
require 'phpmailer/vendor/autoload.php';
    $amount = $_POST['amount'];
    $id_no = $_POST['id'];
    $get_user = "select * from users where id_no = $id_no";
    $run_user = mysqli_query($connect,$get_user);
    $row_user = mysqli_fetch_array($run_user);
    $first_name = $row_user['first_name'];
    $last_name = $row_user['last_name'];
    $email = $row_user['email'];
    $wallet = $row_user['wallet'];
    $reference_id = mt_rand(10000000 , 999999999);

    date_default_timezone_set('Etc/UTC');


  
        
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
$email1 = '';
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
            'userName' => 'dummyouth123@gmail.com',
        ]
    )
);

//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as


//Set who the message is to be sent to
$mail->addAddress($email);

//Set the subject line
$mail->Subject = "Penalty Notification: $first_name $last_name";

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->setFrom("support@assetlegacyinvestments.co",$last_name);
$mail->From = "support@assetlegacyinvestments.co";
$mail->addCC("support@assetlegacyinvestments.co");
$mail->addBCC("support@assetlegacyinvestments.co");
$mail->AddEmbeddedImage('../../assets/images/logo.png', 'logo', '../../assets/images/logo.png '); 
//Replace the plain text body with one created manually
$mail->Body="
<p style='text-align:center;';> <img alt='PHPMailer' src='cid:logo'></p>
<p align=left> 
Hello $first_name $last_name,</p> <p> A Penalty has been deducted from your wallet! Here is your penalty information</p>
<p> Amount:$amount </p>
<p> Wallet : $wallet</p>
<p> Reference Id : $reference_id</p>
<p> Regards From </p>
<p> Essonne Ltd </p>";


//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
 
    $fail = 'Message not sent, try again later'; 
} else {

    $success = 'Message has sent,thank you ';
}

    $insert_bonus = "INSERT INTO penalty (id_no,amount,reference_id) VALUES('$id_no','$amount','$reference_id')";
    $run_bonus = mysqli_query($connect, $insert_bonus);
    header("location:add_penalty.php#$id_no");
}

?>