<?php
session_start();

require_once('../classes/controllers/web/Doctor.php');
require_once('../classes/controllers/web/Parent_Class.php');
if(isset($_POST['login_submit'])){
    if($_POST['type'][0] == 'doctor'){
        $doctor = new Doctor();
        $rs = $doctor->login($_POST['email'],$_POST['password']);
        if(!$rs){
            echo "Password is wrong";
        }else{
            $_SESSION['doctor_id']=$rs[0]['doctor_id'];
            $_SESSION['name']=$rs[0]['name'];
            $_SESSION['email']=$rs[0]['email'];
            $_SESSION['type']='doctor';
            header("Location:../views/sections/doctors.php");
            
        }
    }else{
        $parent = new Parent_Class();
        $rs = $parent->login($_POST['email'],$_POST['password']);
        if(!$rs){
            echo "Password is wrong";
        }else{
            
            $_SESSION['patient_id']=$rs[0]['patient_id'];
            $_SESSION['name']=$rs[0]['name'];
            $_SESSION['email']=$rs[0]['email'];
            $_SESSION['type']='patient';
            header("Location:../views/sections/doctors.php");
        }
    }
}

?>