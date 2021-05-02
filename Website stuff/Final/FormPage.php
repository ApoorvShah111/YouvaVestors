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

    .nav {
        list-style-type: none;
        background-color: black;
        overflow: hidden;
        display: inline-block;
        flex-direction: row;
        width: 100%;
        margin-top: 0px;
    }

    .navlink {
        padding-right: 15px;
        padding-left: 15px;
        color: white;
        text-decoration: none;
        font-size: 25px;
        padding-bottom: 5px;
        padding-top: 5px;
    }

        .navlink:hover {
            background-color: #8A2BE2;
        }

    #SpecialHover {
        color: chartreuse;
    }

        #SpecialHover:hover {
            background-color: chartreuse;
            color: black;
        }

    .navlist {
        float: left;
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
    }

        button:active {
            top: 0.1em;
        }

    #JSPrint {
    }

    .MainText {
        font-family: 'Kanit', sans-serif;
    }
    #trial {
    }
</style>
<head>
    <title>YouvaVestors || Home</title>
</head>
<body class="FontPrecidnet">
    <script src="Form.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <div class="blue">
        <a href="Homepage.html"><img id="logo" src="Hacklogo2.png" height="96" width="212" /></a>
    </div>
    <ul class="nav">
        <li class="navlist"><a class="navlink" href="Homepage.html">Home</a></li>
        <li class="navlist"><a class="navlink" href="HowToStart.html">How To start!</a></li>
        <li class="navlist"><a class="navlink" href="FundFinder.html">Fund Finder</a></li>
        <li class="navlist"><a class="navlink" href=""> . . . . . . .</a></li>
        <li class="navlist"><a class="navlink" href=""> . . . . . . .</a></li>
        <li class="navlist"><a class="navlink" href="">. . . . . . . </a></li>
        <li class="navlist"><a class="navlink" href="">. . . . . . . </a></li>
        <li class="navlist"><a class="navlink" href="AboutUs.html">About us</a></li>
        <li class="navlist"><a id="SpecialHover" class="navlink" href="SignIn.html" target="_blank">Sign In</a></li>
        <li class="navlist"><a id="SpecialHover" class="navlink" href="Register.html" target="_blank">Register </a></li>
        <li class="navlist" style=" float: right; margin-right:40px;"><button onclick="Print()" id="JSPrint">Print Page</button></li>

    </ul>
    <form style="margin-left: 40px; padding-top:20px; margin-right:40px; padding-left:10px; background-color:antiquewhite; opacity:0.7; border-radius:25px;" action="insert.php">
        <h2 style="padding-left:10px;">Fill The Following To Your Best Knowledge:</h2><br />
        <ol style="padding-bottom:20px;">
            <li>
                <strong>What is your main intention of investing?</strong><br />
                <input type="radio" name="purpose" id="retirement">Retirement<br>
                <input type="radio" name="purpose" id="Divident">Dividend Income<br>
                <input type="radio" name="purpose" id="saving">Savings<br>
                <input type="radio" name="purpose" id="return">Heigher Returns<br>
            </li>
            <br />
            <li>
                <strong>What is your risk taking ability?</strong><br />
                <input type="radio" name="risk" id="high">High<br />
                <input type="radio" name="risk" id="med">Meduim<br />
                <input type="radio" name="risk" id="low">Low<br />
            </li>
            <br />
            <li>
                <strong>How long do you plan on investing for?</strong><br />
                <input type="radio" name="time" id="BelowOne">Below 1 Year<br />
                <input type="radio" name="time" id="OneToFive">1 To 5 Years<br />
                <input type="radio" name="time" id="FiveToTen">5 To 10 Years<br />
                <input type="radio" name="time" id="Above25">Above 25 Years<br />
            </li>
            <br />
            <li>
                <strong>What do you prefer:</strong><br />
                <input type="radio" name="payment" id="Lumpsum">Lumpsum Payment<br />
                <input type="radio" name="payment" id="RegularInterval">Payment At Regular Interval (SIP)<br />
            </li>
            <br />
            <li>
                <strong>How much do you plan on investing?</strong>
                <input style="float:right; margin-right:800px;" type="Text" id="InvVal" name="InvVal"><br />
            </li>
        </ol>
        <button type="button" onclick="FormSubmit()" style="margin-left:500px;">SUBMIT</button>
        <br/>
        <p id="trial">This is supposed to change refresh</p>
    </form>
    <br />

    <br/>
    </div>
    <p style="background-color: #8A2BE2; display: grid; text-align: center; width: 100%; height: 40px;">
        YouvaVestors, creation of :Apoorv Shah, Joseph Toneo David, Aditya Arun Iyer and Vanisha Agarwal.
    </p>

</body>
</html>
