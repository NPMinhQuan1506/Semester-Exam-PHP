<?php
include_once '../connection.php';
class customer
{
    //put your code here
    private $con;

    public function __construct()
    {
        $this->con = connect();
    }
    function getById($cusid)
    {
        $query = "SELECT * from customers where CustomerId =".$cusid;
        $result = mysqli_query($this->con, $query);
        return $result;
    }
    function add($cus)
    {
        $query = " INSERT INTO `customers` (`Password`, `Fullname`, `Address`, `City`) "
            . "VALUES ('" . $cus['Password'] . "', "
            . "'" . $cus['Fullname'] . "', "
            . "'" . $cus['Address'] . "', "
            . "'" . $cus['City'] . "')";
        return mysqli_query($this->con, $query);
    }
}
