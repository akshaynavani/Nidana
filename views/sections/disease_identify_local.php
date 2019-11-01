<?php 
$_SESSION['current_page'] = "Detect Disease Through Local Image";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');
?>
<section class="about_us single_about_padding"  style="margin: 50px;padding-top: 50px">
  <h1>Upload Image from local Storage : </h1>
  <form enctype="multipart/form-data" >
    <div class="file-loading">
        <input id="kv-explorer" type="file" multiple>
    </div>
    <br>
    <button class="btn_2 " type="submit" style="margin-right: 10px;border: 0px"> Submit </button>
    <button class="btn_2 " type="submit" style="margin-right: 10px;border: 0px"> Reset </button>
  </form>
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