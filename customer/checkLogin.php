<?php
include_once "../class/customer.php";
$c = new customer();
if (!empty($_POST)) {
    $id = isset($_POST['CustomerID']) ? $_POST['CustomerID'] : '';
    $password = isset($_POST['Password']) ? $_POST['Password'] : '';
    $rs = $c->getById($id);

    session_start();
    if (!$rs) {
        $_SESSION['message'] = "Không tìm thấy tài khoản";
        header("Location: ./login.php");
        exit();
    } else {
        $data = mysqli_fetch_array($rs);
        if ($password != $data['Password']) {
            $_SESSION['message'] = "Nhập sai password";
            header("Location: ./login.php");
            exit();
        } else {
            $customerName = $data['Fullname'];
            $_SESSION['message'] =  "Đăng nhập thành công";
            header("Location: ../vegetable/index.php");
            $_SESSION['customer_id'] = $id;
            $_SESSION['customer_name'] = $customerName;
            exit();
        }
    }
    session_write_close();
    exit;
}
