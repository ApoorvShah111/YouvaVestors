<!DOCTYPE html>
<html>
<style>
    .FontPrecidnet {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        background-image: url(http://1-background.com/images/ultraviolet/black-dreams-in-ultraviolet-website-background.jpg);
    }
    .blue {
        background-color: #8A2BE2;
        height:100px;
    }
    #logo{
        margin-left:auto;
        margin-right:auto;
        display:block;
    }
    .Title {
        text-align: center;
    }
    img:hover{
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
        padding-right: 15px ;
        padding-left: 15px;
        color: white;
        text-decoration: none;
        font-size: 25px;
        
        padding-bottom:5px;
        padding-top:5px;

    }
    .navlink:hover {
         background-color: #8A2BE2;
     }
    #SpecialHover{
        color:chartreuse;
    }
    #SpecialHover:hover{
        background-color: chartreuse;
        color:black;
    }
    .navlist {
        float: left;
    }
    #JSTextChange{
        padding-left:20px;
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
    #JSPrint{
    }
    .MainText {
        font-family: 'Kanit', sans-serif;
    }
</style>
  <head>
      <title>YouvaVestors || Home</title>
  </head>
  <body class="FontPrecidnet">
      <script src="myScript.js"></script>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
      <div class="blue">
          <a href="Homepage.php"><img id="logo" src="Hacklogo2.png" height="96" width="212" /></a>
      </div>
      <ul class="nav">
          <li class="navlist"><a class="navlink" href="Homepage.php">Home</a></li>
          <li class="navlist"><a class="navlink" href="HowToStart.php">How To start!</a></li>
          <li class="navlist"><a class="navlink" href=""> . . . . . . .</a></li>
          <li class="navlist"><a class="navlink" href=""> . . . . . . .</a></li>
          <li class="navlist"><a class="navlink" href="">. . . . . . . </a></li>
          <li class="navlist"><a class="navlink" href="">. . . . . . . </a></li>
          <li class="navlist"><a class="navlink" href="">. . . . . . . </a></li>
          <li class="navlist"><a class="navlink" href="AboutUs.php">About us</a></li>
          <li class="navlist"><a id="SpecialHover" class="navlink" href="SignIn.php" target="_blank">Sign In</a></li>
          <li class="navlist"><a id="SpecialHover" class="navlink" href="localhost/form/Register.php" target="_blank">Register </a></li>
          <li class="navlist" style=" float: right; margin-right:40px;"><button onclick="Print()" id="JSPrint">Print Page</button></li>

      </ul>
      <div style="margin-left: 40px; padding-top:20px; margin-right:40px; padding-left:10px; background-color:antiquewhite; opacity:0.7; ">
          <h3 class="MainText" style="text-align:center; font-size:40px; color:red"><strong>Start early , Start Strong </strong></h3>       
          <h3 class="MainText" style="text-align:center; font-size:35px;">An Investment Platform for the leaders of tomorrow</h3>
          <h3 class="MainText" style="text-align:center; font-size:35px;">Why start investing when you're in college?</h3>
          <h3 class="MainText" style="text-align:center; font-size:35px;">It's simple, well actually its compound interest :</h3>
          <h3 class="MainText" style="text-align:center; font-size:35px; color:crimson">1^365=1</h3>
          <h3 class="MainText" style="text-align:center; font-size:35px; color:crimson">1.01^365=37.78</h3>
          <h3 class="MainText" style="text-align:center; font-size:35px; ">a mere 1% return on investment</h3>
          <h3 class="MainText" style="text-align:center; font-size:35px; ">gives a return of over 37 times the principal</h3>
          <br/>
          <h3 class="MainText" style="text-align:center; font-size:35px; color:red;">Use YouvaVestor to find the best investment for you</h3>
          <h3 class="MainText" style="text-align:center; font-size:35px; color:red;">Take the first step towards financial literacy and freedom</h3>
              <br />


</div>
      <p style="background-color: #8A2BE2; display: grid; text-align: center; width: 100%; height: 40px;">
          YouvaVestors, creation of :Apoorv Shah, Joseph Toneo David, Aditya Arun Iyer and Vanisha Agarwal.
      </p>

  </body>
</html>
