<?php session_start(); ?>
<doctype!>
<html>
<style type="text/css">
h1.a{background-color:green;text-transform:uppercase;}
body{background-color:peachpuff;color:black}
p{
color: black;
font-family:fantasy;
font-size: 160%;
}
h2{
  background-color:black;
color: white;
font-family:sans-serif;
font-size: 100%;
}
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
<title>Requirement form</title>
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
<h2 align="right">
<?php

date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
echo date('d-m-Y H:i:s');

 ?>
</h2>
<form method="post" action="login.php" autocomplete="on" align="right" style="background-color:peachpuff;">
<input type="submit" class="button" name="Logout" value="Logout">
</form>
<center><p> Welcome to your zone doctor <?php echo $_SESSION["idSession"]; ?> </center>
  <center>
  <form method="post" action="doctor.php" autocomplete="on" style="background-color:#4A9729;">

  <fieldset style="font-size:30px;">
  <label for="patientattended">Patients Attended Today</label><br/>
  <input type="number" name="patientattended" id="patientattended"/><br/><br/>

  <label for="Category">Patient Category</label><br/>
  <select name="Category">
  <option value="VascularSurgery" selected="selected">Vascular Surgery</option>
  <option value="Urology" selected="selected">Urology  </option>
  <option value="TransfusionMedicine" selected="selected">Transfusion Medicine </option>
  <option value="ThoracicSurgery" selected="selected">Thoracic Surgery</option>
  <option value="SportsMedicine" selected="selected">Sports Medicine</option>
<option value="Rheumatology" selected="selected">Rheumatology</option>
<option value="Radiology" selected="selected">Radiology</option>
<option value="Pulmonology" selected="selected">Pulmonology</option>
<option value="PreventiveHealthCheck" selected="selected">Preventive Health Check</option>
<option value="PlasticCosmeticSurgery" selected="selected">Plastic Cosmetic Surgery</option>



  </select></br></br>
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
  <label for="requirement">Requirements For Tomorrow</label><br/>
  <input type="text" name="requirement" id="requirement"/><br/><br/>
  <input type="submit" class="button" name="submitBtn" value="Submit"/>
  <input type="reset" class="button" value="Reset">

  </fieldset>
  </form>



</html>
