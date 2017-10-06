<?php
include_once "lib/database.php";

class shout{
    private $db;

    public function __construct()
    {
       $this->db= new database();
    }

public function getAllData(){

    $query="SELECT * FROM tbl_box ORDER BY id DESC ";
    $result=$this->db->select($query);

    return $result;

}

        public function insertData($data){
        $name=mysqli_real_escape_string($this->db->link, $data['name']);
        $body=mysqli_real_escape_string($this->db->link, $data['body']);
        date_default_timezone_set('Asia/Dhaka');
        $time=date('h:i:s a',time());
        $query="INSERT INTO tbl_box(name,body,time) VALUES ('$name','$body','$time')";
        $this->db->insertDB($query);
        header("Location:index.php");

}
}