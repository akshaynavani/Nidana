<?php 
require_once('Database.php');
require_once('Queries.php');

class Appointment{
    protected $query;
    public function __construct(){
        $this->query = new Queries();
    }

    public function setAppointment($doctor_id , $patient_id){
        // $sql = "INSERT INTO appointments('doctor_id','patient_id','date_of_appointment') VALUES('$doctor_id','$patient_id',now())";
        $data['doctor_id'] = $doctor_id;
        $data['patient_id'] = $patient_id;
        $data['date_of_appointment'] = date("Y");
        return $this->query->addData('appointments',$data);
    }
}

?>