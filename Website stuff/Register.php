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
    <div class="blue">
        <a href="Homepage.html"><img id="logo" src="Hacklogo2.png" height="96" width="212" /></a>
    </div>
    <div style=" margin-top:40px; border-radius:25px; margin-left: 40px; margin-right:40px; padding-top:40px; padding-left:10px; background-color:antiquewhite; opacity:0.7;">
        <section id="showcase">
            <h1>Welcome to your first step at becoming financially indipendent! </h1>
        </section>
        <br />
        <div id="Intro">
            <p style="background-color: black;
              display: grid;
              text-align: left;
              width: 100%;
              height: 40px;
              font-size: 20px;
              padding-top: 0;
              padding-left: 10px;
              width:30%;
              color: white;">
                Please fill in the details to register!
            </p>

        </div>
        <form style="border:1px solid #ccc" method="post" action="insert.php">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <div>
                    <br>
                    <label><b>First Name</b></label>
                    <input style="float:right; margin-right:800px;" type="Text" id="FName" name="FName" placeholder="Enter First Name">
                </div>
                <br />
                <div>
                    <label><b>Last Name</b></label>
                    <input style="float:right; margin-right:800px;" type="Text" id="LName" name="LName" placeholder="Enter Last Name">
                </div>
                <br />
                <div>
                    <label name="email"><b>Email</b></label>
                    <input style="float:right; margin-right:800px;" type="text" placeholder="Enter Email" id="email" name="email" required>
                </div>
                <br/>
                <div>
                    <label for="username"><b>Username</b></label>
                    <input style="float:right; margin-right:800px;" type="text" placeholder="Enter Username" id="username" name="username" required>
                </div>
                <br />
                <div>
                    <label name="age"><b>Age</b></label>
                    <input style="float:right; margin-right:800px;" type="text" placeholder="Enter Age" id="age" name="age" required>
                </div>
                <br/>
                <div>
                    <label name="psw"><b>Password</b></label>
                    <input style="float:right; margin-right:800px;" type="password" placeholder="Enter Password" id="psw" name="psw" required>
                </div>
                <br/>
                <div>
                    <label naame="psw-repeat"><b>Repeat Password</b></label>
                    <input style="float:right; margin-right:800px;" type="password" placeholder="Repeat Password" id="psw-repeat" required>
                </div>
                <br/>
                <div>
                    <label>
                        <input type="checkbox" checked="checked" id="remember" style="margin-bottom:15px"> Subscribe to Email ads
                    </label>
                </div>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="button" class="cancelbtn">Clear</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
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
