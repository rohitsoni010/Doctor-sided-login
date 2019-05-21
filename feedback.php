<doctype!>
<html>
<style type="text/css">
h1.a{background-color:white;text-transform:uppercase;}
body{background-color:peachpuff;color:black}
table{margin-left:auto;
margin-right:auto;
border-collapse:collapse;
font-size:1.00em;
font-family:arial;
font-style:italic;
color:black;}
.header{background-color:green;}
.button{
    background-color: blue;
    border: 0.5px solid #0088cc;
    border-radius: 1px;
    color: #ffffff;
    display: inline-block;
    font-size: 0.6em;
    font-weight: normal;
    line-height: 1.2;
	margin-top: 3px;
    margin-right: 0.3125em;
	margin-left: 1em;
    margin-bottom: 0.3125em;
    padding: 0.5em 0.6875em;
    width: auto;
}
.button:active,
.button:focus,
.button:hover {
    background-color: #005580;
    border-color: #005580;
    color: #ffffff;
    text-decoration: none;
}
</style>
<head>
<title>feedback form</title>
</head>
<body>
<center>
<div class="header"><img src="s2.png"></center></h1></div>
<table cellspacing="10" cellpadding="10" style="background-color:antiquewhite;">
<tr>
  <th><a href="Homepage.php">Homepage</a></th>
  <th><a href="fortis_network.php">Fortis Network</a></th>
  <th><a href="feedback.php">Feedback Form</a></th>
  <th><a href="insurance.php">Insurance Form</a></th>
  <th><a href="Medical Facilities.php">Medical Facilities</a></th>
  <th><a href="about us.php">About us</a></th>
  <th><a href="Contact us.php">Contact us</a></th>
  <th><a href="login.php">Login</a></th>
</tr>
</table>
</center></br>
<center>
<form method="post" action="fd.php" autocomplete="on" style="background-color:rgb(111, 200, 66);">
<br>
<legend style="font-size:40px;
font-family:Trebuchet MS;">FEEDBACK FORM</legend><br/>
<fieldset style="font-size:30px;">
<label for="fname">First Name</label><br/>
<input type="text" name="fname" id="fname"/><br/><br/>
<label for="lname">Last Name</label><br/>
<input type="text" name="lname" id="lname"/><br/><br/>
Gender:<br/>
<input name="Gender" type="radio" id="Male" value="Male"/>
<label for="Male">Male</label>
<input name="Gender" type="radio" id="Female" value="Female">
<label for="Female">Female</label><br/><br/>
<label for="address">Address</label><br/>
<input type="text" name="address" id="address"/><br/><br/>
<label for="Country Code">Country Code</label><br/>
<select name="country_code">
<option value="India" selected="selected">India(+91)  </option>
<option value="China" selected="selected">China(+84)  </option>
<option value="Pak" selected="selected">Pakistan(+92) </option>
<option value="Others" selected="selected">Others</option>
<option value="Default selected : India" selected="selected">Select code</option>
</select></br></br>
<label for="Others">Others(If appllicable)</label><br/>
<input type="text" name="Others" id="Others"/><br/><br/>
<label for="contact">Contact Number</label><br/>
<input type="number" name="contact" id="contact"/><br/><br/>
<label for=" email id">Email Id</label><br/>
<input type="text" name="email_id" id="email id"/><br/><br/>
<label for="hospital name">Hospital Name</label><br/>
<select name="hospital_name">
<option value="gurgaon" selected="selected">Fortis hospital, gurgaon</option>
<option value="delhi" selected="selected">Fortis hospital,delhi</option>
<option value="kolkata" selected="selected">Fortis hospital,kolkata</option>
<option value="punjab" selected="selected">Fortis hospital,punjab</option>
<option value="kota" selected="selected">Fortis hospital,kota</option>
<option value="amritsar" selected="selected">Fortis hospital,amritsar</option>
<option value="Default selected : Delhi" selected="selected">Select hospital</option>
</select></br></br>
<label for="feedback">Your Feedback</label><br/>
<input type="text" textarea cols="40" rows="10" name="feedback" id="feedback"></textarea><br/><br/>
<label for="pic">Please upload a profile picture:</label>
   <input type="file" name="pic" id="pic" />
   <br>
   <br>
<input type="submit" class="button" name="submitBtn" value="Submit"/>
<input type="reset" class="button" value="Reset">
</fieldset>
</form>
</html>
