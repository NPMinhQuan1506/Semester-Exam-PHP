<?php
include_once '../connection.php';
class vegetable
{
    //put your code here
    private $con;

    public function __construct()
    {

        $this->con = connect();
    }
    function getAll()
    {
        $query = "SELECT * from vegetable";
        $result = mysqli_query($this->con, $query);
        return $result;
    }

    function getListByCateID($cateid)
    {

        $query = "SELECT * from vegetable  WHERE categoryID  = " . $cateid;
        $result = mysqli_query($this->con, $query);
        return $result;
    }

    function getListByCateIDs($cateids)
    {
        $query = "SELECT * from vegetable  WHERE categoryID  IN  (" . implode(',',$cateids) . ")";
        $result = mysqli_query($this->con, $query);
        return $result;
    }

    function getByID($vegetableID)
    {
        $query = "SELECT * from vegetable  WHERE VegetableID    = " . $vegetableID;
        $result = mysqli_query($this->con, $query);
        return $result;
    }
}
