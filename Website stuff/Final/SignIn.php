﻿<!DOCTYPE html>
<html>
<style>
    .FontPrecidnet {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        background-image: url(http://1-background.com/images/ultraviolet/black-dreams-in-ultraviolet-website-background.jpg);
    }

    .blue {
        background-color: #8A2BE2;
        height: 100px;
    }

    #logo {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .Title {
        text-align: center;
    }

    img:hover {
        opacity: 0.5;
    }

    #JSTextChange {
        padding-left: 20px;
    }

    button {
        display: inline-block;
        padding: 0.7em 1.4em;
        margin: 0 0.3em 0.3em 0;
        border-radius: 0.15em;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Roboto',sans-serif;
        text-transform: uppercase;
        font-weight: 400;
        color: #FFFFFF;
        background-color: #3369ff;
        box-shadow: inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        text-align: center;
        position: relative;
        border-radius:3px;
    }

    button:active {
        top: 0.1em;
    }
    #JSPrint {
    }
    .login_form {
        margin-left: 500px; 
        margin-right:500px;
        margin-top:40px; 
        padding-left:10px; 
        background-color:antiquewhite; 
        opacity:0.7; 
        border-radius:25px;
    }
    input[type=text] {
        background-color: #8A2BE2;
        color: aliceblue;
        border: hidden;
        height: 30px;
        font-size:20px;
    }
    input[type=password] {
        background-color: #8A2BE2;
        color: aliceblue;
        border: hidden;
        height: 30px;
        font-size: 20px;
    }
</style>
<head>
    <title>YouvaVestors || SignIn</title>
</head>
<body class="FontPrecidnet">
	<?php
		if(array_key_exists('button1', $_POST)) 
		{
            		collect();
       		}
		function collect()
	{
		$conn = mysqli_connect("localhost", "root", "", "signin");
          	if($conn === false)
		{
	            	die("ERROR: Could not connect. " 
                	. mysqli_connect_error());
        	}
		if (empty($_POST["username"]))
		 {
    			$userErr = "UserName is required";
 		 } 	
		else 
		{
    			$user= $_POST["username"];
  		}
		if (empty($_POST["password"])) 
		{
    			$pswErr = "Password is required";
  		} 	
		else 
		{
    			$password = $_POST["password"];
  		}
		$sql="SELECT * FROM users WHERE username='$user'";
		$qury=mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($qury);
		$password_real=$row["password"];
		if($password_real==$password)
		{
			echo '<script>location.replace("FormPage.php")</script>';
		}
		else
		{
			echo '<script>alert("Incorrect Password")</script>';
			echo '<script>location.replace("SignIn.php")</script>';
		}
	}
	?>
    <div class="blue">
        <a href="Homepage.html"><img id="logo" src="Hacklogo2.png" height="96" width="212" /></a>
    </div>
    <div class="login_form">
           <form id="login" method="post">
                <div style="margin-bottom:10px; margin-top:10px; padding-top:10px; margin-left:20px; ">
                    <h1 style="text-align:center; font-size:30px;">Sign In:</h1>
                    <br/>
                    <label for="username" style="font-size:20px">User Name: </label>
                    <input required name="username" type="text" autocapitalize="off" autocorrect="off" id="user" />
                </div>
                <br/>
                <div style="margin-left:20px;">
                    <label for="password" style="font-size:20px;">Password: </label>
                    <input class="password" required name="password" type="password" id="psw"/>
                </div>
                <br/>
                <div style="align-items:center; margin-top:20px; margin-bottom:20px; margin-left:220px;">
                <button type="submit" name="button1" class="button">Sign In</button>
                </div>
            </form>
    </div>
    <p style="        background-color: #8A2BE2;
        display: grid;
        text-align: center;
        width: 100%;
        height: 40px;">
        YouvaVestors, creation of :Apoorv Shah, Joseph Toneo David, Aditya Arun Iyer and Vanisha Agarwal.
    </p>		
</body>
</html>
