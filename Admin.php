<html>

	<head>
		<title>Admin Form</title>
<?php include "header.php" ?>

		<style>	
  
	
      </style>
	</head>
	<body>
		
		<center>
		<h1 style="color:#9900cc">Admin Login</h1>
		<hr width = "50%">
		<form action="Checkadmin.php" method ="post">
		<table border="0px">
			<tr><td>Username</td><td><input type="text" name="user"></td></tr>
			<tr><td>Password</td><td><input type="password" name="pwd"></td></tr>
			<tr align="center"><td colspan="2"><input type="submit" value="Login"></td></td>
	  
		</table>
		
		</form>
		</center>
		<?php include "footer.php" ?>

	
	</body>

</html>
