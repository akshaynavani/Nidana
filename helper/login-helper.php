<?php
session_start();

require_once('../classes/controllers/web/Doctor.php');
require_once('../classes/controllers/web/Parent_Class.php');
print_r($_POST);
if(isset($_POST['login_submit'])){
    if($_POST['type'][0] == 'doctor'){
        $doctor = new Doctor();
        $rs = $doctor->login($_POST['email'],$_POST['password']);
        if(!$rs){
            echo "Password is wrong";
        }else{
            print_r($rs);
        }
    }else{
        $parent = new Parent_Class();
        $rs = $parent->login($_POST['email'],$_POST['password']);
        if(!$rs){
            echo "Password is wrong";
        }else{
            print_r($rs);
        }
    }
}

?>