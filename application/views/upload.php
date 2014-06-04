<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.15.min.js"></script>  

<form id="fileupload" name="fileupload" enctype="multipart/form-data" method="post">
  <fieldset>
    <input type="file" name="fileselect" id="fileselect"></input>
    <input id="uploadbutton" type="button" value="Upload to Parse"/>
  </fieldset>
</form>

<script type="text/javascript">
  $(function() {
    var file;

    $('#fileselect').bind("change", function(e) {
      var files = e.target.files || e.dataTransfer.files;
      file = files[0];
    });

    $('#uploadbutton').click(function() {
      var serverUrl = 'https://api.parse.com/1/files/' + file.name;

      $.ajax({
        type: "POST",
        beforeSend: function(request) {
        //  request.setRequestHeader("X-Parse-Application-Id", 'MY-APP-ID');
          request.setRequestHeader("Sqw4kvSfBOLiztsp06ED9F7crR7orsmHXGGF9hEs", 'vB1KArFlHYBJNvx5VRjOe12R82psFxnaKPTdsnCF');
          request.setRequestHeader("Content-Type", file.type);
        },
        url: serverUrl,
        data: file,
        processData: false,
        contentType: false,
        success: function(data) {
          alert("File available at: " + data.url);
        },
        error: function(data) {
          var obj = jQuery.parseJSON(data);
          alert(obj.error);
        }
      });
    });


  });
</script>