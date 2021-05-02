<!DOCTYPE html>
<html>
<body>
<script type="text/javascript">
	function check()
	{
		var password1="<?php echo $password; ?>";
		var password_real="<?php echo $password_real; ?>";
		if(password_real==password1)
		{
			location.replace("Decision.php");
		}
		else
		{
			window.alert("Incorrect Password");
			location.replace("SignIn.php");
		}
	}
</script>
	
</body>
</html>
