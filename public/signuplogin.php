<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form">
      
      <?php
        if($_GET['login'] == 1)
        { ?>
          <ul class="tab-group">
            <li class="tab"><a href="#signup">Sign Up</a></li>
            <li class="tab active"><a href="#login">Log In</a></li>
          </ul>
        <?php } 
          if($_GET["again"] == 1) { ?>
            <h3>Please try again</h3>
          <?php } ?>
      <?php
        else
        {?>
          <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
          </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <form action="../includes/register_process.php" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text"required value="" name="fname" autocomplete="off" /> 
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required value="" name="lname" autocomplete="off"/> 
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required value="" name="email" autocomplete="off"/> 
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username"required value="" name="username" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required value="" name="password" autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          </form>
        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username"required value="" name="username" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
                    
          <button class="button button-block"/>Log In</button>
          </form>
        </div>
        
      </div>
      
</div> 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

</body>
</html>
