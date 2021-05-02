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
        border-radius: 3px;
    }

        button:active {
            top: 0.1em;
        }

    #JSPrint {
    }

    .login_form {
        margin-left: 500px;
        margin-right: 500px;
        margin-top: 40px;
        padding-left: 10px;
        background-color: antiquewhite;
        opacity: 0.7;
        border-radius: 25px;
    }

    input[type=text] {
        background-color: #8A2BE2;
        color: aliceblue;
        border: hidden;
        height: 30px;
        font-size: 20px;
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
    <script>
	function ToForm() {
    location.replace("FormPage.php");
		}

	function ToDir() {
    	location.replace("Dir.php");
		}
    </script>
    <div class="blue">
        <a href="Homepage.php"><img id="logo" src="Hacklogo2.png" height="96" width="212" /></a>
    </div>
    <div class="login_form">
        <h2 style="text-align:center;">Choose where to go next:</h2>
        <br />
        <button type="button" onclick="ToForm()" style="margin-left:200px;">Create a new Entry.</button>
        <br />
        <button type="button" onclick="ToDir()" style="margin-left:200px;">View your Results.</button>
        <br />

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
