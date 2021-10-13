<?php
include("../../include/config.php");
if(isset($_POST['withdraw'])){
    $transaction_id_new = $_POST['transaction'];
    $reference = $_POST['reference'];

    $update_withdraw = "UPDATE withdraw_request SET transaction_id = '$transaction_id_new' where reference_no = $reference";
    $run_withdraw = mysqli_query($connect, $update_withdraw);
    header("location:withdraw-request.php");
}

?>