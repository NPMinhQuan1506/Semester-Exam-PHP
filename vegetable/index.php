<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market online - Vegetable</title>
    <link rel="stylesheet" href="../css//bootstrap.css">
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
    <?php include "../menu.php" ?>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-3 mt-3">
                <form>
                    <h6>Category Name:</h6>
                    <?php
                    include_once "../class/category.php";
                    $c = new category();
                    $result = $c->getAll();
                    if (isset($result)) {
                        while ($r = mysqli_fetch_assoc($result)) {
                            echo '<div class="form-group form-check">';
                            echo '<input type="checkbox" class="form-check-input" name ="cates[]" id="' . $r['Name'] . '" value = "' . $r['CategoryID'] . '">';
                            echo '<label class="form-check-label" for="' . $r['Name'] . '">' . $r['Name'] . '</label>';
                            echo '</div>';
                        }
                    }
                    ?>
                    <button type="submit" class="btn btn-info mt-3">Filter</button>
                </form>
            </div>
            <div class="col-lg-9">
                <h4>Vegetable</h4>
                <?php
                include_once "../class/vegetable.php";
                $v = new vegetable();
                $result = $v->getAll();
                $row = 0;
                if (isset($result)) {
                    while ($r = mysqli_fetch_assoc($result)) {
                        if ($row % 3 == 0) {
                            echo '<div class="row mt-3">';
                        }
                        echo '<div class="col-6 col-md-4">';
                        echo '<div class="" width="180" height="180">';
                        echo '<img src="../' . $r['Image'] . '" alt="Image of ' . $r['VegetableName'] . '" class="" width="180" height="160">';
                        echo '</div>';
                        echo '<div class="d-flex px-2 mt-3">';
                        echo '<p class="">' . $r['VegetableName'] . '</p>';
                        echo '<p class="bg-warning text-white ml-2  px-1">' . number_format($r['Price']) . '</p>';
                        echo '</div>';
                        echo '<button type="button" class="btn btn-danger mt-2" onclick="window.location.href =">Buy</button>';
                        echo '</div>';
                        if ($row % 3 == 2) {
                            echo '</div>';
                        }
                        $row++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>