<?php
require_once('Database.php');
require_once('Queries.php');
class Doctor{
    protected $conn;
    protected $query;
    public function __construct(){
        $this->conn = (new Database())->getConnection();
        $this->query = new Queries();

    }

    public function login($email , $password){
        $query = "SELECT * FROM doctors WHERE email = '$email' AND password = '$password'";
        $result = $this->query->readDataCustom($query);
        if(sizeof($result)==1){
            return $result;
        }
        return false;
    }

    public function getDetails($id){
        $sql = "SELECT * FROM doctors WHERE doctor_id = $id";
        return $this->query->readDataCustom($sql);
    }

    public function register($data){
        return $this->query->addData("patients",$data);

    }
}
?>