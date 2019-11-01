<?php
session_start();
require_once('../classes/controllers/web/Parent_Class.php');
if(isset($_POST['parent_register_submit'])){
    if($_POST['type'] == 'patient'){
        $parent = new Parent_Class();
        unset($_POST['parent_register_submit']);
        unset($_POST['type']);
        $rs = $parent->register($_POST);
        if(!$rs){
            echo "try again";
        }else{
            print_r($rs);
        }
    }else{
        $doctor = new Doctor();
        unset($_POST['parent_register_submit']);
        unset($_POST['type']);
        $rs = $parent->register($_POST);
        if(!$rs){
            echo "try again";
        }else{
            print_r($rs);
        }
    }
}
?>