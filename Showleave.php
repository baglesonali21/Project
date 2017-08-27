<html>

	<head>
		<title>Show Leave</title>
		<?php 
             	session_start();
			if( !isset( $_SESSION['user']) ) 
				{
            	header('Location: Login.php');
				}
			
		?>

		<style>
	  
#div1{
	border:1px solid;
	height:100px;
     margin:5px;
	font-size:60px;
	background-color:#099;
	text-align:left;
     }
#div2{
		  width:1000px;
		  margin:20px;
		  padding-top:1px;
		  padding-bottom:1px;
		  font-size:20px;
		  
	        }
	    .navitem{
			display:inline;
			padding-right:50px;
			padding-left:50px;
			border-right:1px solid red;
		    }
#div4{
	border:1px solid;
	height:75px;
     margin-top:350px;
	background-color:#099;
     }
	</style>
	</head>
<body >
	  <center>
		  <div id="div1"><img src="images-2.jpeg" alt="collagelogo" align="center"  width="300px" height="70px" style="padding-top:5px;padding-bottom:5px;padding-left:100px;padding-right:115px;"/>Leave Management</div>
		</center>
	 <center>
			  <div id="div2">  
	    <div class="navitem"><a href="Applyleave.php">Apply Leave</div>
	    <div class="navitem"><a href="Showleave.php">Show Leave</div>
	    <div class="navitem"><a href="Holidaylist.php">Holiday List</div>
		

	    <div class="navitem" style="border-right:none;"><a href="Logout.php">Logout</a></div>
		
	  </div> 
	 </center>

		<center>
		<table>
		<tr align="center">
		  <td>Hi <?php echo $_SESSION['user']?></td>
		</tr>
		</table>
		
		<hr width = "50%">
		<form action="" method ="post">
		<table border="1" class="recordtable" width="80%" cellpadding="5px">
	
	<tr class="commonth" bgcolor="cyan"><th>SR.NO.</th><th>LEAVE TYPE</th><th>TOTAL</th><th>APPROVED</th><th>LEFT</th></tr>

<?php

	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->applied_leave;
	$p=$_SESSION['pwd'];
	
	$sort = array('fname'=>1, 'lname'=>1);
	
	$i=1;
	
	$cursor = $collection->find(array("id"=>"$p"));
	
	$data = array('Medical'=>0,'Casual'=>0,'Earned'=>0,'Unearned'=>0,'Maternity'=>0);
	foreach( $cursor as $row ) {
		$sd=new DateTime($row['start_date']);
		$ed=new DateTime($row['end_date']);
		$diff=$sd->diff($ed);
		$data[$row['leave_type']] += $diff->days;
		
	}
	
	$leave = array(
				array('lt'=>'Medical','nl'=>'20'),
				array('lt'=>'Casual','nl'=>'8'),
				array('lt'=>'Earned','nl'=>'30'),
				array('lt'=>'Unearned','nl'=>'10'),
				array('lt'=>'Maternity','nl'=>'180')
			);
	foreach( $leave as $row ) {
		
		echo "<tr align='center' bgcolor='ff99ff'>";
		echo "<td>$i</td><td>$row[lt]</td>";
		echo "<td>$row[nl]</td><td>".$data[$row['lt']]."</td>";
		echo "<td>".($row['nl']-$data[$row['lt']])."</td>";
	
	$i++;
	}
?>
		</table>
		</form>
		</center>


		<center>
		<div id="div4">All Rights Reserved &copy DSK Group Of Institutes<br> Developed by: DSK Group</div>
	 </center> 
	
	</body>

</html>