<?php
include_once "../class/customer.php";
$c = new customer();
$cus['Fullname'] = isset( $_POST['Fullname']) ?  $_POST['Fullname'] : '';
$cus['Password'] = isset( $_POST['Password']) ?  $_POST['Password'] : '';
$cus['Address'] = isset( $_POST['Address']) ?  $_POST['Address'] : '';
$cus['City'] =isset( $_POST['City']) ?  $_POST['City'] : '';

$rs = $c->add($cus);

session_start();
if ($rs) {
    $_SESSION['message'] = "Đăng Ký Thành Công";
    header("Location: ./login.php");
    exit();
}
session_write_close();
exit;
