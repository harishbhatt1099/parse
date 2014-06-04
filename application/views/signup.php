<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.15.min.js"></script>     
 <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript">
    Parse.initialize("Sqw4kvSfBOLiztsp06ED9F7crR7orsmHXGGF9hEs", "vB1KArFlHYBJNvx5VRjOe12R82psFxnaKPTdsnCF");
  function signUp(e) {
    var username =  $("#username").val();
      var password =  $("#password").val();
	   var email =  $("#email").val();
	    var fname =  $("#fname").val();
    var otherAttribute = 'test';
    Parse.User.signUp(username, password, {
        email: email,
        fname: fname,
        ACL: new Parse.ACL()
    }, {
        success: function (user) {
           alert('created');
            delete self;
        	},
	 error: function(user, error) {
      alert('error! user already exist');
      // The login failed. Check error to see why.
    }	
    }
)};
	
  </script>

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
     

    <div id="content">
      <div id="titleContent">
        <h1>Signup</h1>
        <p id="subTitle">Signup <p>
        <a href="<?=base_url('welcome/index');?>">Login</a>
      </div>
    </div>
      <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Sign UP</h2>
          <form name="loginsignup" action="">
            <fieldset>
              <div class="clearfix">
                <input name="uname" id="username" type="text" placeholder="Username">
              </div>
              <div class="clearfix">
                <input name="pword" id="password" type="password" placeholder="Password">
              </div>
              
              <div class="clearfix">
                <input name="email" id="email" type="email" placeholder="Email">
              </div>
              
              <div class="clearfix">
                <input name="fname" id="fname" type="text" placeholder="First Name">
              </div>
              <button class="btn primary" type="button" onClick="signUp();return false;">Sign UP</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->



  </body>