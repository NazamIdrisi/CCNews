<div id="fileUpload">
          <form id="joinPhotoUploadForm" method="POST" enctype="multipart/form-data">
            <input type="file" id="file"/>
          </form>
          <div id="fakefile">
            <img src="../../images/button-grey-enhanced.png" id="usePhotoSubmit" alt="BROWSE for Photo">
            <span id="usePhoto">BROWSE</span>
          </div>
        </div>


<script>
$('input#file').change(function() {
  $('form#joinPhotoUploadForm').submit();
});
</script>