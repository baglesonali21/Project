<html>

	<head>
		<title>View</title>
		<?php 
             session_start();
			 if( !isset( $_SESSION['admin'] ) ) {
            	header('Location: Admin.php');
				}
				include 'header3.php';
		?>
		<body>
		
		<table border="1" class="recordtable" width="80%" cellpadding="5px" align="center">
<tr class="commonth" bgcolor="cyan"><th>Sr.No</th><th>Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Email</th><th>Address</th><th colspan="2">ACTION</th></tr>

<?php

	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->employee_details;
	$sort = array('fname'=>1, 'lname'=>1);
	
	$i=1;
	$cursor = $collection->find()->sort( $sort );
	
	foreach( $cursor as $row ) {
	
		echo "<tr bgcolor='ff99ff'>";
		echo "<td>$i</td><td>$row[fname] $row[lname]</td>";
		echo "<td>$row[dob]</td>";
		echo "<td>$row[gender]</td>";
		echo "<td>$row[email]</td><td>$row[contact]</td>";
		echo "<td>$row[address]</td>";
		echo "<td><input type='button' value='Delete' onclick=\"deleterecord('$row[_id]','$row[fname] $row[lname]')\" /></td>";
		echo "<td><input type='button' value='Update' onclick=\"updaterecord('$row[_id]','$row[fname] $row[lname]')\" /></td>";
		echo "</tr>";
		$i++;
	}
?>

</table>

		
	<?php include 'footer.php'?>
	</body>

</html>

