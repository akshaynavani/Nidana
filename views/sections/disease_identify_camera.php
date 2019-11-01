<?php 
$_SESSION['current_page'] = "Detect Disease Through Camera";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');
?>

    <!-- about us part start-->
    
    <section class="about_us single_about_padding" style="margin-bottom: 0px;padding: 50px">
    <h1 style="margin-left: 140px;mergin-bottom: 50px">Upload Image from local Storage : </h1>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                    <video onclick="snapshot(this);" width=600 height=450 id="video" controls autoplay></video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5" style="margin:10px">
                    <div class="about_us_text">
                        <canvas  id="myCanvas" width="400" height="350" style="border: 10px; background-color: #5996FF"></canvas>
                        <!-- <button class="btn_2 " onclick="startWebcam();" style="margin-right: 10px;border: 0px">Start Camera</button>
                        <button class="btn_2 " onclick="stopWebcam();" style="margin-right: 10px;border: 0px">Stop Camera</button> -->
                        <button class="btn_2 " onclick="snapshot();" style="margin-right: 5px;border: 0px">Take Snapshot</button>
                        <button class="btn_2 " onclick="checkDisease();" style="margin-right: 10px;border: 0px">Check Disease</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<?php 
require_once('../includes/footer.php');
?>

<script>
      //--------------------
      // GET USER MEDIA CODE
      //--------------------
      navigator.getUserMedia = ( navigator.getUserMedia ||
      navigator.webkitGetUserMedia ||
      navigator.mozGetUserMedia ||
      navigator.msGetUserMedia);

      var video;
      var webcamStream;
      startWebcam();
      function startWebcam() {
        if (navigator.getUserMedia) {
          navigator.getUserMedia (

              // constraints
              {
                video: true,
                audio: false
              },

              // successCallback
              function(localMediaStream) {
                  video = document.querySelector('video');
                  video.srcObject = localMediaStream;
                  webcamStream = localMediaStream;
              },

              // errorCallback
              function(err) {
                console.log("The following error occured: " + err);
              }
          );
        } else {
          console.log("getUserMedia not supported");
        }  
      }

      function stopWebcam() {
          webcamStream.stop();
      }
      var canvas, ctx;
      
      var image;
      function snapshot() {
        canvas = document.getElementById("myCanvas");
        ctx = canvas.getContext('2d');
         // Draws current image from the video element into the canvas
        image = ctx.drawImage(video, 0,0, canvas.width, canvas.height);
      }
      function checkDisease(){
        ctx = document.getElementById("myCanvas").getContext('2d');
        console.log(ctx.getImageData(0, 0, canvas.width, canvas.height));
      }
  </script>
<?php
require_once('../includes/scripts.php');
?>