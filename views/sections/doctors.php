<?php
$_SESSION['current_page']  = "Appointment";
ob_start();
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../../classes/controllers/web/Doctor.php');
require_once('../../classes/controllers/web/Specialization.php');
session_start();
$disease = "Downsyndrome";
?>
    <div class="whole-wrap">
		  <div class="container box_1170">
        <div class="section-top-border">
<?php if($_SESSION['type']=='patient'){  ?>
				  <h3 class="mb-30">Table</h3>
          <div class="progress-table-wrap">
            <div class="progress-table">
              <div class="table-head">
                <div class="serial">#</div>
                <div class="country">Name</div>
                <div class="visit">Phone Number</div>
                <div class="percentage">Address</div>
                <div class="percentage">Percentage</div>
                <div class="">Appointment</div>
              </div>
              <?php
                $doctor = new Doctor();
                $specialisation = new Specialization();
                $rs = $specialisation->doctorsList($disease);
                for($i=0;$i<sizeof($rs);$i++){
                  $url = BASEURL."helper/appointment-helper.php";
                  $result = $doctor->getDetails($rs[$i]['doctor_id']);
                  $id = $result[$i]['doctor_id'];
                  $name = $result[$i]['name'];
                  $phone_no = $result[$i]['phone_number'];
                  $address = $result[$i]['address'];
                  $rating = 5*$rs[$i]['rating'];
                  echo "<div class='table-row'><div class='serial'>$i</div><div class='country'>$name</div><div class='visit'>$phone_no</div><div class='percentage'>$address</div><div class='progress-bar color-1' role='progressbar' style='width:$rating%' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div>";
                  echo "<form method='POST' action='$url' ><input type='text' hidden value='$id' name='doctor_id'><input type='submit' name='appoint_submit' value='Take'></form>";
                }
              ?>
            </div>
          </div>
              <?php  } ?>

        </div>
      </div>
    </div>
<?php 
require_once('../includes/footer.php');
require_once('../includes/scripts.php');
?>