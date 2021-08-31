<?php
        // put your code here
        function connect(){
        $con = mysqli_connect("localhost", "root", "");
        if (!$con) {
            echo mysqli_error($con);
        } else {
            mysqli_select_db($con, "market");
            return $con;
        }
        }
?>