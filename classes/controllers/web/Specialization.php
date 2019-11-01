<?php
require_once('Queries.php');
class Specialization{
    protected $query;
    public function __construct(){
        $this->query = new Queries();
    }

    public function doctorsList($disease){
        $sql = "SELECT * FROM specialiazations WHERE name = '$disease'";
        return $this->query->readDataCustom($sql);
    }

}
?>