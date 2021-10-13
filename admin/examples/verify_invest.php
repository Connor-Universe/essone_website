
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
require 'phpmailer/vendor/autoload.php';


include("../../include/config.php");
$id=$_GET['id'];
$name = $_GET['name'];
$amount = $_GET['amount'];
$wallet = $_GET['wallet'];
$plan = $_GET['plan'];
$btc = $_GET['btc'];
$reference = $_GET['reference'];
$email = $_GET['email'];
$id_no = $_GET['no'];
$date = date('Y-m-d');

$get_plan_details = "select * from plans where name = '$plan'";
$run_plan_details = mysqli_query($connect,$get_plan_details);
$row_plan = mysqli_fetch_array($run_plan_details);
$days = $row_plan['day'];
$percentage = $row_plan['percentage'];
$complete = 0;
$date_end = date('Y-m-d', strtotime($date. " + $days days"));

$delete = "UPDATE investment_request SET verified = 1 WHERE id= $id";
$run = mysqli_query($connect,$delete);
$result = $run;

$investments = "INSERT into investments (amount,day,percentage,id_no,reference_id ,date,date_end,complete) VALUES('$amount','$days','$percentage','$id_no','$reference','$date','$date_end','$complete')";
$run_investments = mysqli_query($connect,$investments);


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
$mail->setFrom('support@assetlegacyinvestments.co');

//Set who the message is to be sent to
$mail->addAddress($email);

//Set the subject line
$mail->Subject = 'Investment Invoice:'.$name;

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;

$mail->AddEmbeddedImage('../../assets/images/logo.png', 'logo', '../../assets/images/logo.png '); 
//Replace the plain text body with one created manually
$mail->Body="'<p><img src = 'cid:logo'></p><p>Dear $name </p><p>Your request to investment has been approved Your Plan is $plan , the Amount is $$amount
 your Transaction ID is $reference</p> <p>Coin:bitcoin</p><p>Thank you for investing with us . We anticipate more investments and referrals from you</p> <br> <b>Regards</b><br> <b>Essonnes Ltd</b>'";


//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
 
    $fail = 'Message not sent, try again later'; 
} else {

    $success = 'Message has sent,thank you ';
}

 
  header("location:invest-request.php");

       
    
?>