<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market online- Register</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <form action="./saveRegister.php" method="POST" class="login-form border">
                        <h3 class="mt-1 px-2">Register</h3>
                        <div class="form-group px-3">
                            <label for="Fullname">Your's Fullname</label>
                            <input type="text" class="form-control rounded-left" name="Fullname" id="Fullname" placeholder="Enter Your Fullname" required="required">
                        </div>
                        <div class="form-group px-3">
                            <label for="customer_passwd">Password</label>
                            <input type="text" class="form-control rounded-left" name="Password" id="customer_passwd" autocomplete="new-password" placeholder="Enter Password" required="required">
                        </div>
                        <div class="form-group px-3">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control rounded-left" name="Address" id="Address" placeholder="Enter Your Address" required="required">
                        </div>
                        <div class="form-group px-3">
                            <label for="City">City</label>
                            <input type="text" class="form-control rounded-left" name="City" id="City" placeholder="Enter Your City" required="required">
                        </div>
                        <div class="form-group d-flex px-3">
                            <div class="form-group mr-1">
                                <button type="submit" class="btn btn-info">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>