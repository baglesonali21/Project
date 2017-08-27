		<?php 
             	session_start();
			if( !isset( $_SESSION['admin'] ) ) {
            	header('Location: Admin.php');
				}

				include 'header3.php';
		?>

<html>

	<head>
		<title>Update Form</title>	
	</head>
	<body>
	 <form action="Update.php" method="post" >

<?php 
	
	$id=( !empty($_GET['id']) )?$_GET['id']:"NO";
	
	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->employee_details;
	
	//$cursor = $collection->find(array(), array('_id'=>1,'fname'=>1,'lname'=>1))->sort(array('fname'=>1,'lname'=>1));
		
	//echo "Update Record of : <select onchange=\"updaterecord(value)\" name='id'>";
	//echo "<option value=''>Select Name</option>";
	
	//foreach( $cursor as $row ) {
		//$sel = ($row['_id'] == $id)?"selected":"";
		//echo "<option value='$row[_id]' $sel >$row[fname] $row[lname]</option>";
	//}
	
	//echo "</select><br><br>";

	$f = false;

	if( $id != "NO" ) {
		
		$f = true;
		$condition = array( '_id' => new MongoId( $id ) );
		$row = $collection->findOne( $condition );
		
		$fn = $row['fname'];
		$ln = $row['lname'];
		$dob=$row['dob'];
		$gen=$row['gender'];
		$em = $row['email'];
		$cont = $row['contact'];
		$add = $row['address'];
		
	}

?>



    <table cellpadding="4" align="center" border="1">
		
		<tr bgcolor="ff99ff"><td>id</td><td><input type="text" name="id" readonly="readonly"  value="<?php echo ($f)?$id:""  ?>" /></td></tr>
        <tr bgcolor="ff99ff"><td>First Name</td><td><input type="text" name="fname" required="required" value="<?php echo ($f)?$fn:""  ?>" /></td></tr>
        <tr bgcolor="ff99ff"><td>Last Name</td><td><input type="text" name="lname" required="required" value="<?php echo ($f)?$ln:""  ?>"  /></td></tr>
		<tr bgcolor="ff99ff"><td>DOB</td><td><input type="text" name="dob" required="required" value="<?php echo ($f)?$dob:""  ?>"  /></td></tr>
		<tr bgcolor="ff99ff"><td>Gender</td><td><input type="text" name="gender" required="required" value="<?php echo ($f)?$gen:""  ?>"  /></td></tr>
        <tr bgcolor="ff99ff"><td>Email</td><td><input type="text" name="email" required="required" value="<?php echo ($f)?$em:""  ?>"  /></td></tr>
        <tr bgcolor="ff99ff"><td>Contact</td><td><input type="text" name="contact" required="required" value="<?php echo ($f)?$cont:""  ?>"  /></td></tr>
        <tr bgcolor="ff99ff"><td>Address</td><td><textarea name="address" required="required"><?php echo ($f)?$add:""  ?></textarea></td></tr>
        <tr align="center" bgcolor="cyan"><td colspan="2"><input type="submit" value="Update" /></td></tr>
    
    </table>

</form>


	</body>	
			
</html>
<?php
		include 'footer.php';
	?>
	

