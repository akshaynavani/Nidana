<?php
session_start();
require_once('../classes/controllers/web/Doctor.php');
if(isset($_POST['login_submit'])){
    $doctor = new Doctor();
    $rs = $doctor->login($_POST['email'],$_POST['password']);
    if(!$rs){
        echo "Password is wrong";
    }else{
        print_r($rs);
    }
}

?>