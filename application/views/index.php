<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.1.15.min.js"></script>     

    <script type="text/javascript">
    Parse.initialize("Sqw4kvSfBOLiztsp06ED9F7crR7orsmHXGGF9hEs", "vB1KArFlHYBJNvx5VRjOe12R82psFxnaKPTdsnCF");
function Login()
    {
       Parse.User.logIn(document.loginForm.uname.value, document.loginForm.pword.value, 
  {
    success: function(user) 
    {
		alert('lagin done');
      window.location="<?=base_url('welcome/home')?>";
    },
    error: function(user, error) 
    {
      alert('error '+error);
      // The login failed. Check error to see why.
    }
  });
    }
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
    <div id="topBar">
      <button onClick="WarningSigns()" class="btn btn-danger" type="button">Warning signs</button>
      <a href="<?=base_url('welcome/signup');?>">Sign up</a>
    </div>

    <div id="content">
      <div id="titleContent">
        <h1>Bronchiectasis</h1>
        <p id="subTitle">Self-management action plan <p>
      </div>
    </div>
      <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Login</h2>
          <form name="loginForm" action="javascript:Login()">
            <fieldset>
              <div class="clearfix">
                <input name="uname" type="text" placeholder="Username">
              </div>
              <div class="clearfix">
                <input name="pword" type="password" placeholder="Password">
              </div>
              <button class="btn primary" type="submit">Sign in</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->



  </body>