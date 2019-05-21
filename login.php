<?php session_start(); ?>
<html>
	<head>
		<style type="text/css">

		h1.a{background-color:green;text-transform:uppercase;}
		body { background-color:peachpuff;color:black;}
		p{color: darkblue;
		font-size:1.50em;
			font-family:Times New Roman;
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
		    font-size: 0.7em;
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
		<title>fortis hospital</title>
		</head>
		<BODY>
			<center>
			<div class="header"><a href="Homepage.html"><img src="s2.png"></a></center></h1></div>
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
		<link rel="stylesheet" href="style.css">
		<style>
			[type="text"],[type="email"],[type="password"]{
				margin-left: 20px;
			}
			label{
				margin-left: 20px;
			}
		</style>
	</head>
	<body>
		<div>

			<center> <p>" Hello doctor! "</p> </center>
			<form autocomplete="on" method="get" action="lg.php" align="center">
<br> <fieldset>
<legend>Login Details</legend>

				<label for="id"><b>Username</b></label>

				<input type="text" name="id" id="id"><br>
				<br>
				<label for="pwd"><b>Password</b></label>
				<input type="password" name="pwd" id="pwd"><br><br>
				<input type="submit" class="button" value="Submit">
				<input type="reset" class="button" value="Reset"><br>
			</fieldset>
			</form>

		</div>
	</body>
</html>
