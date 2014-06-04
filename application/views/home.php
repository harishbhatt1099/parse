<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.15.min.js"></script>  

    <script type="text/javascript">
    Parse.initialize("Sqw4kvSfBOLiztsp06ED9F7crR7orsmHXGGF9hEs", "vB1KArFlHYBJNvx5VRjOe12R82psFxnaKPTdsnCF");
	var b=Parse.User.current();
	//var obj = jQuery.parseJSON();
	alert(b+" user");
	a=Parse.User.getEmail();
	alert(a+" email");
function logout()
    { 
      c=Parse.User.logOut();
	  alert(c+" Logout");
	  return true;
	    
    }
function upload()
	{
		alert();
	  var fileUploadControl = $("#file_up")[0];
	  alert(fileUploadControl);
	  if (fileUploadControl.files.length > 0) {
	  var file = fileUploadControl.files[0];
	  alert(file);
	  var name = "photo";
	  var parseFile = new Parse.File(name, file);
	  parseFile.save().then(function() {
		//alert(parseFile.url());
		alert("upload Successful");
	  }, function(error) {
		alert("upload Error");
	  });
}	
	}	
	
		
 
  </script>
  <script type="text/javascript">
  $(function() {
    var file;

    // Set an event listener on the Choose File field.
    $('#fileselect').bind("change", function(e) {
      var files = e.target.files || e.dataTransfer.files;
      // Our file var now holds the selected file
      file = files[0];
	  alert(file);
    });

    // This function is called when the user clicks on Upload to Parse. It will create the REST API request to upload this image to Parse.
    $('#uploadbutton').click(function() {
		alert("upload click");	
      var serverUrl = 'https://api.parse.com/1/files/' + file.name;

      $.ajax({
        type: "POST",
        beforeSend: function(request) {
           
          request.setRequestHeader("X-Parse-REST-API-Key", 'MY-REST-API-ID');
          request.setRequestHeader("Content-Type", file.type);
        },
        url: serverUrl,
        data: file,
        processData: false,
        contentType: false,
        success: function(data) {
          console.log("Image successfully uploaded.");
        },
        error: function(error) {
          console.log("Error: " + error.message);
		  alert("Error");
        }
		
      });
    
	});


  });

/*  $(function(){
		$("#uploadbutton").click(function(){ alert('Click');})
		
				});*/</script>

    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; 
        padding-bottom: 140px;
      }
      .container {
        width: 300px;
      }

      /* The white background content wrapper */
      .container > .content 
      {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; 
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

    .login-form {
    margin-left: 65px;
    }

    legend {
    margin-right: -50px;
    font-weight: bold;
      color: #404040;
    }

    </style>

  </head>
  <body>
    <div id="topBar">  
      <a href="<?=base_url('welcome/index')?>" onClick="javascript:logout(); return ;">Logout</a>
    </div>

    <div id="content">
      <div id="titleContent">
        <h1>Login Successful</h1>
        
      </div>
    </div>
      <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
		<input type="file" name="file_up" id="file_up" onChange="javascript:upload();" />
          
        </div>
        <form id="fileupload" name="fileupload" enctype="multipart/form-data" method="post">
  <fieldset>
    <input type="file" name="fileselect" id="fileselect"></input>
    <input id="uploadbutton" type="button" value="Upload to Parse"/>
  </fieldset>
</form>
      </div>
    </div>
  </div> <!-- /container -->



  </body>