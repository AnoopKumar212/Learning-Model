<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="Assets/profile.css">

  
</head>

<body>
  <!-- multistep form -->
<form id="msform" name="msform" method="POST" action="profile_detail_db.php">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="password" name="lname" placeholder="Last Name" />
    <input type="password" name="phone" placeholder="Phone" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="cou" placeholder="Country" />
    <input type="text" name="state" placeholder="State" />
    <input type="text" name="gen" placeholder="Gender" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit"  class="action-button" value="Submit"/>
  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script src="Assets/profile.js"></script>

</body>
</html>
