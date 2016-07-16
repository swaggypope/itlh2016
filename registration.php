<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		
		<div class="form control col-lg-offset-2 col-md-6 col-lg-6">
		   <br><br><br><br>   <h1>Create Your Own Account</h1>
			<a href="login.html"><h6>Already have an account?</h6></a> 
			 <br>
			<div class="row"> 
			<form role="form" method="post" action="registration.php">
			<h3>Personal Details</h3>
		    <div class="form control col-lg-offset-1 col-md-5 col-lg-5">
				<div class="form control">
				<label for="fname">
						First Name
					</label>
					<input type="name" name="fname" class="form-control" id="fname">    
				</div>
				<div class="form control" >
				<label for="lname">
						Last Name
					</label>
					<input type="name" name="lname" class="form-control" id="lname">    
				</div>
				<div class="form-group"> 
					<label for="email">
						Email address
					</label>
					<input type="email" name="email" class="form-control" id="email">
				</div>
				<div class="form control" >
				<label for="phone">
						Phone no
					</label>
					<input type="text" name="pno." class="form-control" id="phone">    
				</div>
				<div class="form-group">
					<label for="gender">
						 Gender:<br>
					</label>
			<br>	Male:<input type="checkbox" name="gender" class="form-control" id="male"> Female:<br><input type="checkbox" name="gender" class="form-control" id="female">
				</div>
			</div>
			</div>
			<br>
			
			<div class="row">
			<h3>Address details</h3>
			<div class="form control col-lg-offset-1 col-md-5 col-lg-5">
			<div class="form control" >
				<label for="Address1">
						Address1
					</label>
					<input type="text" name="add1" class="form-control" id="address1">    
				</div>
		    <div class="form control" >
				<label for="address2">
						Address2
					</label>
					<input type="text" name="add2" class="form-control" id="address2">    
				</div>
			<div class="form control" >
				<label for="city">
						City
					</label>
					<input type="name" name="city" class="form-control" id="city">    
				</div>
			<div class="form control" >
				<label for="pincode">
						Pincode
					</label>
					<input type="text" name="pincode"class="form-control" id="pincode">    
				</div>
			<div class="form control" >
				<label for="country">
						Country
					</label>
					<input type="name" name="country" class="form-control" id="country">    
				</div>
            <div class="form control" >
				<label for="state">
						State/Region
					</label>
					<input type="name" name="state" class="form-control" id="state">    
				</div>				
			</div>
			</div>
			
			<div class="row">
			<h3>Enter password of your choosing</h3>
				<div class="form control col-lg-offset-1 col-md-5 col-lg-5">
				<div class="form-group">
					<label for="password">
						Password
					</label>
					<input type="password" name="pass" class="form-control" id="password">
				</div>
				
				<div class="form-group">
					<label for="cpassword">
						 Confirm Password
					</label>
					<input type="password" name="cpass" class="form-control" id="cpassword">
				</div>
				<center> 
				<button type="submit" value="submit" class="btn btn-default">
					Become a Member!!
				</button>
				</center>
				</div>
			</div>
			</form>
			
		
		</div>
		</div>
		<div class="col-md-4">
		</div>
		
 </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	
	
	<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  </body>
</html>