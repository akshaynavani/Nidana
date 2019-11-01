<form id="form1" runat="server">
  <input type="file" accept="image/*" capture="camera" id="imgInp" >
  <img id="blah" src="#" alt="your image" />
</form>
<script src="http://localhost/nidana/assets/js/jquery-1.12.1.min.js"></script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $("#blah").attr("src", e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });
</script>
