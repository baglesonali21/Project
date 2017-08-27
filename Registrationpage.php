
<html>

	<head>
		<title>Registration Form</title>
<?php include "header.php" ?>
		<style>	  
	
      </style>
	</head>
	<body>
		
<center>
		<h1>Registration Form</h1>
		<hr width = "50%">
		<form action="Savedetail.php" method ="post">
		<table border="0px">
		<tr>
	      <td>First Name</td>
	      <td><input type="text" name="fname" placeholder="" required="true"></td>
	    </tr>
		<tr>
	      <td>Last Name</td>
	      <td><input type="text" name="lname" placeholder="" required="true"></td>
	    </tr>
	    <tr>
	      <td>DOB</td>
	      <td><input type="dob" name="dob" placeholder="" required="true"></td>
	    </tr>
	    <tr>
	      <td>Gender</td><td><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female</td>
	    </tr>
		<tr>
	      <td>Email</td>
	      <td><input type="email" name="email" placeholder="" required="true"></td>
	    </tr>

	    <tr>
	      <td>Contact</td>
	      <td><input type="text" name="contact" placeholder="" required="true"></td>
	    </tr>
	    
		<tr>
	      <td>Address</td>
	      <td><textarea name="address" required="true" rows="5" cols="50"></textarea></td>
	    </tr>
	    <tr align="center">
	      <td colspan="2"><input type="submit" value="Save">
	      <input type="reset" value="Clear"></td>
	    </tr>
	


		</table>
		</form>
		</center>
		<?php include "footer.php" ?>
	
	</body>

</html>

