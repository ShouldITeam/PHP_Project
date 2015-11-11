<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>ShouldI Social Network</title>
		<meta name="description" content="COMP1230 - PHP Project" />
		<meta name="keywords" content="COMP 1230, PHP, SQL, social network, second opinion" />
		<meta name="author" content="RicoRico Team" />
		<style>
		body{
		font-family: sans-serif;
		}
		#container{
		/*position: fixed;*/
		width: 100%;
		height:100%;
		margin: auto;
		}
		#homeheader{
		width: 100%;
		height: 10%;
		border-bottom-style: solid;
		}
		#homebody{
		width: 100%;
		border-bottom-style: solid;
		}
		#homefooter{
		width: 100%;
		height: 40%;
		text-align: center;
		}
		#logo{
		float: left;
		margin: 10px 150px 5px 30px;
		}
		#loginFrm{
		float: right;
		margin-right:20px;
		margin-top: 5px;
		margin-bottom: 5px;
		
		}
		#clear{
		clear: both;
		}
		#lblEmail{
		margin-right: 140px;
		}
		#signupForm{
		border: solid;
		width: 30%;
		margin: auto;
		padding: 20px;
		margin-top: 30px;
		border-width: 1px;
		border-color: gray;
		border-radius: 25px;
		margin-bottom: 20px;
		}
		#headerSU{
		text-align: center;
		}
		#inputFRM{
		width: 60%;
		margin: auto;
		}
		#sButton{
		margin-left: 80px;
		}
		
		</style>
	</head>
	<body>
		<div id="container">
			<div id = "homeheader">
				<h1 id="logo">ShouldI?</h1>
				<form id="loginFrm">
					<label for="mail" id="lblEmail">Email</label> <label for="userPass">Password</label><br>
					<input type="text" name= "mail" />&nbsp;&nbsp;<input type="password" name= "userPass" />&nbsp;&nbsp; <input type="submit" value="Login">&nbsp;&nbsp; <input type="submit" value="Forgot Password">
				</form>	
				
				<br id="clear">
			</div>
			<div id="homebody">
				<p>Welcome to ShouldI? social network, where second opinion matters!</p>
				<form id="signupForm">
					<h1 id="headerSU">Sign Up</h1>
					<div id="inputFRM">
						First name*<br>
						<input type="text" name= "fname" maxlength="50" size="30" /><br>
						Last name*<br>
						<input type="text" name= "lname" maxlength="50" size="30" /><br>
						Email*<br>
						<input type="text" name= "email" maxlength="50" size="30" /><br>
						Password*<br>
						<input type="password" name= "pword" maxlength="50" size="30" /><br>
						Phone Number<br>
						<input type="text" name= "pNumber" maxlength="50" size="30" /><br>
						Birthday<br>
						<input type="text" name= "bday" maxlength="50" size="30" /><br>
						Gender: &nbsp;
						<input type="radio" name="sex" value="female" />Female&nbsp;<input type="radio" name="sex" value="male" />Male<br><br>
						Upload Profile Picture<br>
						<input type="file" name="profPhoto" accept="image/*" /><br><br><br>
						<input type="submit" value="Sign Up" id="sButton">	
						<br>
					</div>
				</form>	
			</div>
			<div id="homefooter">
				ShouldI? &copy;<?php echo date("Y"); ?>
			</div>
		</div>
	</body>
</html>
