<?php
  include "Connection.php";
?>
<html>
<head>
<title> Register</title>
<link rel="stylesheet" type="text/css" href="Register.css">
<div class="wrapper">
<div class="registration">
<div class="title">
			Student Register Here!
		</div> <br>
		<form  name = "registration" action="connection.php" method="post">
		<div class="form_wrap">
		<div class="input_grp">
		<div class="input_wrap">
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="fname" placeholder="Enter First Name"style="margin-left:10px;">
		</div>
		<div class="input_wrap">
				<label for="Mname">Middle Name</label>
				<input type="text" id="Mname" name="Mname" placeholder="Enter Middle Name"style="margin-left:10px;">
		</div>
		<div class="input_wrap">
				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lname" placeholder="Enter Last Name"style="margin-left:10px;">
		</div>
		</div> <br>
		<div class="input_wrap">
					<label for="stdid">Student's ID</label>
					<input type="text" id="stdid" name="Stdid" placeholder="Enter Student's ID" required="">
		</div> <br>
		<div class="input_wrap">
				<label for="Course"> Course</label>
				<select name="Course" name="Course"placeholder="Choose a Course" name="Course" required>
  			<option value="BCA">BCA</option>
  			<option value="BBM">BBM</option>
  			<option value="BBS">BBS</option>
  			<option value="BSW">BSW</option>
				</select><br> <br>
            </div>
		<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="text" name="email" placeholder="Enter your Email or Phone Number" name="email" required>
		</div> <br>
				<div class="input_wrap">
				<label>Gender</label>
								<input type="radio" name="Gender" value="male"  checked>
								<span>Male</span>
								<input type="radio" name="Gender" value="Female"  checked>
								<span>Female</span>
								<input type="radio" name="Gender" value="Others" checked>
								<span>Others</span>  <br> <br>
		<td colspan="2" align="center">
				<input type="submit" name="save" value="Submit" onclick="alert('Success')">
				<input type="reset" value="Reset">
		</div>
		</div>
		</form>
	  </div>
    </div>
</head>
</html>
