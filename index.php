<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market online</title>
    <link rel="stylesheet" href="./css//bootstrap.css">
</head>

<body>
<?php
//Show Notification
session_start();
if (isset($_SESSION['message'])) {
    $show_message = $_SESSION['message'];
    $_SESSION['message'] = null;
}
session_write_close();
if (isset($show_message)) {
    echo "<script>alert('{$show_message}');</script>";
}
?>
<?php include "./menu.php" ?>
</body>

</html>