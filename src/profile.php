<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/profile.css">
<link rel="stylesheet" type="text/css" href="../style/global.css">
<link rel="stylesheet" type="text/css" href="../style/header.css">
<link rel="stylesheet" type="text/css" href="../style/navbar.css">
</head>
<body>

<h2>Profile</h2>
<?php include '../includes/profile_header2.php'; ?>
<p>fill up all your details that is required, you can still able edit your user details.</p> <?php echo "Today is " . date("d.l.Y"); ?>

<div class="container">
  <form method="POST" action="profile_validation.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="Female">Female</option>
          </select>
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="gender">Birthday</label>
        </div>
        <div class="col-75">
      <input type="date" name="bday">
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="country">Sexual Orientatin</label>
      </div>
      <div class="col-75">
        <select id="sexual orientation" name="sexual_orientation">
          <option value="heterosexual">heterosexual</option>
          <option value="homosexual">homosexual</option>
          <option value="bisexual">bisexual</option>
          <option value=" asexual"> asexual</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="RSA">South Africa</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="locations">Location</label>
      </div>
      <div class="col-75">
        <select id="locations" name="locations">
          <option value="johannesburg">Johannesburg</option>
          <option value="pretoria">Pretoria</option>
          <option value="bloemfontein">Bloemfontein</option>
          <option value="capetown">Cape town</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="interest">Interest</label>
      </div>
      <div class="col-75">
        <select id="interest" name="interest">
          <option value="coding">Coding</option>
          <option value="reading">Reading</option>
          <option value="Hiking">Hiking</option>
          <option value="traveling">Traveling</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Biography</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <!-- <form method = "post" action = "upload.php" enctype = "multipart/form-data"> --> 
                    <!-- <br><br><span>upload image: <input type = "file"  name = "filename" size = "40" onchange = "loadFile(event)" accept = "image/gif, image/jpeg, image/png"/></span> -->
    <!-- <div>
			<button type="submit" name="submit" class="signupbtn">Submit</button>
		</div> -->
    <br>
    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
<!-- <form method = "post" action = "upload.php" enctype = "multipart/form-data"> -->
                    <br><br><span>Select image: <input type = "file"  name = "filename" size = "40" onchange = "loadFile(event)" accept = "image/gif, image/jpeg, image/png"/>
                        <input type = "submit" name = "submit" value="Submit"/></span>
<!-- </form> -->
</form>
  <!-- </form> -->
<!-- </div>
<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
<form method = "post" action = "upload.php" enctype = "multipart/form-data">
                    </br></br><span>Select image: <input type = "file"  name = "filename" size = "40" onchange = "loadFile(event)" accept = "image/gif, image/jpeg, image/png"/>
                        <input type = "submit" name = "submit" value="upload"/></span>
</form>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}

.fa:hover {
  color: darkblue;
}
</style>
</head> -->
<!-- <body>

<p>Click on the icon to toggle between thumbs-up and thumbs-down (like/dislike):</p>

<i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

<script>
function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
}
</script>

</body> -->
<!-- </html> -->
</body>
<?php
   include '../includes/footer.php';
 ?>
</html>
