<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        $conn = mysqli_connect("localhost", "root", "", "signin");
          
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

        $first_name =  $_REQUEST['FName'];
        $last_name = $_REQUEST['LName'];
        $email =  $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $age = $_REQUEST['age'];
	$password=$_REQUEST['psw'];
          
       
        $sql = "INSERT INTO users VALUES('$first_name','$last_name','$email','$username','$age','$password')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>
