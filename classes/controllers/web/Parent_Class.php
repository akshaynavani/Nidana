<?php
require_once('Database.php');
require_once('Queries.php');
class Parent_Class{
    protected $conn;
    protected $query;
    public function __construct(){
        $this->conn = (new Database())->getConnection();
        $this->query = new Queries();

    }

    public function login($email , $password){
        $query = "SELECT * FROM patients WHERE email = '$email' AND password = '$password'";
        $result = $this->query->readDataCustom($query);
        if(sizeof($result)==1){
            return $result;
        }
        return false;
    }

    public function register($data){
        return $this->query->addData("patients",$data);

    }
}
?>