<?php 
$_SESSION['current_page'] = "Detect Disease Through Local Image";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');
?>
<section class="about_us single_about_padding"  style="margin: 50px;padding-top: 50px">
  <h1>Upload Image from local Storage : </h1>
  <div>
    <div class="file-loading">
        <input id="kv-explorer" type="file" accept='image/*'>
    </div>
    <br>
    <img src="" alt="\no image" hidden id="img_element">
    <button class="btn_2 " type="submit" style="margin-right: 10px;border: 0px" id='btn_submit' onclick="sendImage()"> Submit </button>
    <button class="btn_2 " type="submit" style="margin-right: 10px;border: 0px"> Reset </button>
  </div>
</section>

<?php 
require_once('../includes/footer.php');
?>

<?php
require_once('../includes/scripts.php');

?>
<script>
$("#kv-explorer").fileinput({
  theme: "explorer-fas",
  uploadUrl: "#",
  overwriteInitial: false,
  initialPreviewAsData: true,
  initialPreviewConfig: [
    {
      caption: "nature-1.jpg",
      size: 329892,
      width: "120px",
      url: "{$url}",
      key: 1
    },
    {
      caption: "nature-2.jpg",
      size: 872378,
      width: "120px",
      url: "{$url}",
      key: 2
    },
    {
      caption: "nature-3.jpg",
      size: 632762,
      width: "120px",
      url: "{$url}",
      key: 3
    }
  ]
});
</script>


<script async src="https://github.com/Quramy/opencvjs/blob/featuers2d_only/build/cv.js" type="text/javascript"></script>
<script>
function sendImage(){
      var fileInput = document.getElementById('btn_submit');
      var image = document.getElementById('img_element');
      fileInput.addEventListener('change',(e)=>{
        image.src = URL.createObjectURL(e.target.files[0]);
      },false);

      console.log(cv.imread(image));
}

</script>

