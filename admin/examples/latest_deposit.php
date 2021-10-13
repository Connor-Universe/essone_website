<?php
include("../../include/config.php");
if(isset($_POST['deposit'])){
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $id = $_POST['id'];

    $update_deposit = "UPDATE latest_deposit SET amount = $amount , name = '$name' where id = $id";
    $run_deposit = mysqli_query($connect, $update_deposit);
    header("location:dashboard.php#deposit");
}elseif(isset($_POST['withdraw'])){
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $id = $_POST['id'];

    $update_deposit = "UPDATE latest_withdraws SET amount = $amount , name = '$name' where id = $id";
    $run_deposit = mysqli_query($connect, $update_deposit);
    header("location:dashboard.php#withdraw");
}elseif(isset($_POST['investor'])){
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $id = $_POST['id'];

    $update_deposit = "UPDATE top_investor SET amount = $amount , name = '$name' where id = $id";
    $run_deposit = mysqli_query($connect, $update_deposit);
    header("location:dashboard.php#investor");
}

?>