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
		position: fixed;
		width: 100%;
		height:100%;
		margin: auto;
		}
		#homeheader{
		width: 100%;
		height: 6%;
		border-bottom-style: solid;
		}
		#logo{
		float: left;
		margin: 5px 80px 0px 20px;
		}
		#mainMenu{
		float: left;
		margin-right:20px;
		margin-top: 0px;
		}
		#mainMenu ul{
		list-style-type:none;
		margin:0;
		padding:0;
		}
		#mainMenu ul li{
		display:inline;
		float: left;
		
		}
		#mainMenu ul li a{
		display:block;
		padding:10px 10px;
		text-decoration: none;
		color: black;
		}
		#mainMenu ul li a:hover{
		background-color:black;
		color: white;
		}
		#searchContainer{
		float: right;
		margin-right: 50px;
		}
		#profilePic{
		border: solid;
		width: 15%;
		height: 70%;
		margin-left: 20px;
		margin-right: 40px;
		padding: 5px;
		margin-top: 20px;
		border-width: 1px;
		border-color: gray;
		float:left;
		background-color: white;
		}
		#clear{
		clear: both;
		}
		#userName{
		margin-top: 60px;
		}
		#profileContainer{
		border: solid;
		width: 95%;
		margin: auto;
		height: 30%;
		margin-top: 0px;
		border-width: 1px;
		border-color: gray;
		background-color: yellow;
		}
		.custom-file-input::-webkit-file-upload-button {
		  visibility: hidden;
		}
		.custom-file-input::before {
		  content: 'Add Photo';
		  display: inline-block;
		  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
		  border: 1px solid #999;
		  border-radius: 3px;
		  padding: 5px 8px;
		  outline: none;
		  white-space: nowrap;
		  -webkit-user-select: none;
		  cursor: pointer;
			color: black;
		  font-weight: 700;
		  font-size: 10pt;
		}
		.custom-file-input:hover::before {
		  border-color: black;
		}
		.custom-file-input:active::before {
		  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
		}
		#tblPost{
		width: 40%;
		margin: auto;
		margin-top: 30px;
		}
		#textAreaPost{
		width: 99%;
		height: 100%;
		}
		#btnPost{
		display: inline-block;
		  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
		  border: 1px solid #999;
		  border-radius: 3px;
		  padding: 5px 8px;
		  outline: none;
		  white-space: nowrap;
		  -webkit-user-select: none;
		  cursor: pointer;
			color: black;
		  font-weight: 700;
		  font-size: 10pt;
		}


		</style>
	</head>
	<body>
		<div id="container">
			<div id = "homeheader">
				<h3 id="logo">ShouldI?</h3>
				<span id="searchContainer">Search for friends:&nbsp;&nbsp;<input type= "text" name="search" /></span>
				<div id="mainMenu">
					<ul>
						<li><a href="profile.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="friendList.php">Friends</a></li>
						<li><a href="gallery.php">Photos</a></li>
						<li><a href="notification.php">Notification</a></li>
						<li><a href="index.php">Logout</a></li>
					</ul>
				</div>			
				<br class="clear">
			</div>
			<div id="profileContainer">
				<div id="profilePic">Profile Picture
				</div>
				<h1 id="userName">User's Full Name</h1>
				<br class="clear">
			</div>
			<table id="tblPost">
				<tr>
					<td height="50" style="background-color: gray; color: white; text-align: center;">ShouldI?</td>
				</tr>
				<tr>
					<td height="100"><textarea rows="4" cols="50" id="textAreaPost" placeholder="Should I do it or not?"></textarea></td>
				</tr>
				<tr>
					<td height="50" style="background-color: gray; color: white;"><input type="file" name="addPhoto" class="custom-file-input" accept="image/*" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="btnPost" name="submitPost" value="Post" /></td>
				</tr>
			</table>
		</div>
	</body>
</html>
