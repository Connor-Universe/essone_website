<?php
include("../../include/config.php");
if(isset($_POST['update'])){
    $amount = $_POST['amount'];
    $id_no = $_POST['id'];

    $update_wallet = "UPDATE wallet SET amount = $amount where id_no = $id_no";
    $run_update = mysqli_query($connect, $update_wallet);
    header("location:dashboard.php");
}

?>