<?php

include("../include/config.php");





   
    $amount= "";
    $verified = 0;
    
    



if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $amount= $_POST['amount'];
  $ramount = $amount * 5/100;
  $plan_id = $_POST['id'];
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
  $referal_code2 = $row_user['referal_code'];
  $reference_id = mt_rand(10000000 , 99999999);

  $get_request = "select * from investment_request where referal_code = '$referal_code2'";
$run_request = mysqli_query($connect,$get_request);
$row_request = mysqli_fetch_array($run_request);
$get_refer_user = "select * from users where promo_code = '$referal_code2'";
$run_refer_user = mysqli_query($connect,$get_refer_user);
$row_refer_user = mysqli_fetch_array($run_refer_user);
$email5 = $row_refer_user['email'];
$first_name5 = $row_refer_user['first_name'];
$last_name5 = $row_refer_user['last_name'];
$wallet5= $row_refer_user['wallet'];
$id_no3 = $row_refer_user['id_no'];


  if($row_request == 0){
   $insert_referal = "insert into referals (id_no,amount) VALUES('$id_no3','$ramount')";
   $run_referal = mysqli_query($connect,$insert_referal);
$reference_id = mt_rand(10000000 , 99999999);

  $get_plan = "select name from plans where id = '$plan_id'";
  $run_plan = mysqli_query($connect,$get_plan);
  $row_plan = mysqli_fetch_array($run_plan);

  $plan_name = $row_plan['name'];
  
  $dollars=$amount;
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_URL => "https://blockchain.info/tobtc?currency=USD&value=" . $dollars,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
          "cache-control: no-cache",
          "postman-token: fc62ebce-6d0b-ef4f-ba02-fcb05e284a02"
      ),
  ));
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
   $dollars = json_decode($response);
  
   
   
        

         
        $insert_request = "INSERT INTO investment_request (first_name , last_name , email , referal_code , country , wallet , id_no , plan , amount_invest , verified  , btc , reference_id) 
        VALUES ('$first_name2','$last_name2','$email2','$referal_code2','$country2','$wallet2','$id_no2','$plan_name','$amount','$verified','$dollars','$reference_id')";
        $run_request = mysqli_query($connect,$insert_request);
        $_SESSION['reference_id'] = $reference_id;
        echo"<script>window.location = 'invoice.php';</script>";



  //if validation is satified then create a token for the user 
  
         
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

$mail->oauthUserEmail = "support@essonne.ltd";
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
$mail->addAddress($email5,"Mr/Mrs $last_name5");

//Set the subject line
$mail->Subject = 'Referal bonus email: Essonne Ltd';

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->setFrom("support@essonne.ltd",$last_name);
$mail->From = "support@essonne.ltd";
$mail->addReplyTo('support@essonne.ltd', 'ABC');
$mail->addCC("support@essonne.ltd");
$mail->addBCC("support@essonne.ltd");
$mail->AddEmbeddedImage('../asset/images/logo.jpg', 'logo', '../asset/images/logo.jpg '); 
//Replace the plain text body with one created manually
$mail->Body="
<p style='text-align:center;';> <img alt='PHPMailer' src='cid:logo'></p>
<p align=left> 
Hello $first_name5 $last_name5,</p> <p> Thank you for referring $first_name2 $last_name2 ,Your referee has invested $amount into their wallet, So you will be getting a 5% comission on their referal </p>
<p> You will receive $ramount into your wallet $wallet5 . Thank you for your referal , we hope to see more from you in the future</p>
<p> Regards From </p>
<p> Essonne Ltd </p>";


//Attach an image file


//send the message, check for errors

     }else{

         $referal_code2 = "";  
          $get_plan = "select name from plans where id = '$plan_id'";
  $run_plan = mysqli_query($connect,$get_plan);
  $row_plan = mysqli_fetch_array($run_plan);

  $plan_name1 = $row_plan['name'];
  
  $dollars=$amount;
  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_URL => "https://blockchain.info/tobtc?currency=USD&value=" . $dollars,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
          "cache-control: no-cache",
          "postman-token: fc62ebce-6d0b-ef4f-ba02-fcb05e284a02"
      ),
  ));
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
   $dollars1 = json_decode($response);
  
        

        $insert_request = "INSERT INTO investment_request (first_name , last_name , email , referal_code , country , wallet , id_no , plan , amount_invest , verified  , btc , reference_id) 
        VALUES ('$first_name2','$last_name2','$email2','$referal_code2','$country2','$wallet2','$id_no2','$plan_name1','$amount','$verified','$dollars1','$reference_id')";
        $run_request = mysqli_query($connect,$insert_request);
        $_SESSION['reference_id'] = $reference_id;
        echo"<script>window.location = 'invoice.php';</script>";


     }   
}




  

  




        
  

?>