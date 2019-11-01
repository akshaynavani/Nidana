<?php 
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../../classes/controllers/web/Doctor.php');
require_once('../../classes/controllers/web/Specialization.php');
$disease = "Downsyndrome";
?>
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>doctors</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="whole-wrap">
		  <div class="container box_1170">
        <div class="section-top-border">

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
                  $result = $doctor->getDetails($rs[$i]['doctor_id']);
                  $id = $result[$i]['doctor_id'];
                  $name = $result[$i]['name'];
                  $phone_no = $result[$i]['phone_number'];
                  $address = $result[$i]['address'];
                  $rating = 5*$rs[$i]['rating'];
                  echo "<div class='table-row'><div class='serial'>$i</div><div class='country'>$name</div><div class='visit'>$phone_no</div><div class='percentage'>$address</div><div class='progress-bar color-1' role='progressbar' style='width:$rating%' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'></div></div></div>";
                  echo "<form method='POST' action='' ><input type='text' hidden value='$id'><input type='submit' value='Take'></form>";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php 
require_once('../includes/footer.php');
require_once('../includes/scripts.php');
?>