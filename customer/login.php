<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market online- Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
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
if (isset($_SESSION['customer_id']) && isset($_SESSION['customer_name'])) {
    header("Location: ../index.php");
}
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-4">
                <div class="login-wrap p-4 p-md-5">
                    <form action="./checkLogin.php" method="POST" class="login-form border">
                        <h3 class="mt-1 px-2">Login</h3>
                        <div class="form-group px-2">
                            <label for="customer_id">Your's ID</label>
                            <input type="text" class="form-control rounded-left" name="CustomerID" id="customer_id"
                                placeholder="Enter Your ID" required="required">
                        </div>
                        <div class="form-group px-2">
                            <label for="customer_passwd">Password</label>
                            <input type="password" class="form-control rounded-left" name="Password"
                                id="customer_passwd" autocomplete="new-password" placeholder="Enter Password" required="required">
                        </div>
                        <div class="form-group d-flex px-2">
                            <div class="form-group mr-1">
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                            <div class="form-group ">
                                <button type="button" class="btn btn-info" onclick="window.location.href = './register.php'">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>