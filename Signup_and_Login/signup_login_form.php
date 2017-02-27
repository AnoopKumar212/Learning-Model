<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Get Yourself Registered</title>  
      <link rel="stylesheet" href="Assets/Style/go.css">
	  <script src="Assets/Script/Validate.js"></script>	  	  
</head>
<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="signup_to_db.php"  onSubmit="return validateformsignup()">
      <input type="text" placeholder="Username" name="uname" id="uname"/>
	  <input type="text" placeholder="E-mail Address" name="email" id="email"/>	  
      <input type="password" placeholder="Create a Password" name="pass" id="pass"/>      
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST" action="login_check_from_dp.php" onSubmit="return validateformlogin()">
      <input type="text" placeholder="Username" name="uname" id="unamelog"/>
      <input type="password" placeholder="Password" name="pass" id="passlog"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='Assets/Script/jquery.min.js'></script>
    <script src="Assets/Script/go.js"></script>

</body>
</html>
