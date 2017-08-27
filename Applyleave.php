<html>

	<head>
		<title>Apply Leave</title>
		<?php 
             session_start();
			 if( !isset($_SESSION['user']) )  {
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
	<body>
	     
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
				<td style="color:">Hi <?php echo  $_SESSION['user']?></td>
		   </tr>
		   </table>
			<hr width = "50%">
		<form action="Validation1.php" method ="post">
		<table border="0px" align="center">
		<tr>
	      <td>Leave Type</td>
	      <td><select name="leave_type" required="true"><option value="select"><option value="Medical">Medical</option><option value="Casual">Casual</option><option value="Earned">Earned</option><option value="Unearned">Unearned</option><option value="maternity">Maternity</option></select></td>
	    </tr>
		
		<tr>
		<td>Start Date</td>
	      <td><input type="date" name="start_date" placeholder="" required="true"></td>
	    </tr>
		
		<tr>
		<td>End Date</td>
	      <td><input type="date" name="end_date" placeholder="" required="true"></td>
	    </tr>
		
		<tr>
	      <td>Reason</td>
	      <td><textarea name="reason" required="true" rows="2" cols="50"></textarea></td>
	    </tr>
		
		<tr align="center">
	      <td colspan="2"><input type="submit" value="Apply">
	      <input type="reset" value="Clear"></td>
	    </tr>


		 </table>
		</form>
		</center>
		

		<center>
		<div id="div4">All Rights Reserved &copy DSK Group Of Institutes<br> Developed by: DSK Group</div>
	 </center> 
	
	</body>

</html>

