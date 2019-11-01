<?php
require_once('../classes/controllers/web/Appointment.php');
session_start();
print_r($_POST);
if(isset($_POST['appoint_submit'])){
    $patient_id = $_SESSION['patient_id'];
    $doctor_id= $_POST['doctor_id'];
    $app = new Appointment();
    $app->setAppointment($doctor_id,$patient_id);
}
?>