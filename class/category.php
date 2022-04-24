<?php
include_once '../connection.php';
class category
{
    //put your code here
    private $con;

    public function __construct()
    {
        $this->con = connect();
    }
    function getAll()
    {
        $query = "SELECT * from category ";
        $result = mysqli_query($this->con, $query);
        return $result;
    }
    function add($cate)
    {
        $query = " INSERT INTO `category` (`Name`, `Description`) "
            . "VALUES ('" . $cate['Name'] . "', "
            . "'" . $cate['Description'] . "')";
        return mysqli_query($this->con, $query);
    }
}
