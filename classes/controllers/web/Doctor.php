<?php
class Doctor{
    public function __construct(){

    }

    public function login($email , $password){
        $query = "SELECT * FROM doctors WHERE email = '$email' AND password = '$password'";

        
    }
}
?>