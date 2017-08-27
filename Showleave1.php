

<html>

	<head>
		<title>Show Leave</title>
		<?php 
             	session_start();
			if( !isset( $_SESSION['user'] ) ) {
            	header('Location: login.php');
				}
			
		?>

		<style>
	  
#div1{
	border:1px solid;
	height:100px;
     margin:5px;
	font-size:40px;
	background-color:#099;
	
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
		  <div id="div1"><img src="images-2.jpeg" alt="collagelogo" align="center"  width="200px" height="70px" style="padding-top:10px;padding-left:20px;padding-right:400px;"/>Leave Management</div>
		</center>
	 <center>
			  <div id="div2">  
	    <div class="navitem"><a href="Applyleave.php">Apply Leave</div>
	    <div class="navitem"><a href="Showleave.php">Show Leave</div>
	    <div class="navitem"><a href="Holidaylist.php">Holiday List</div>
		<div class="navitem"><a href="Showstatus.php">Show status</div>

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
		<table border="0px" align="center" style="margin-top:20px">
		<tr>
	      <td>Leave Type</td>
	      <td><select name="leave" required="true"><option value="select leave type"><option value="ML">ML</option><option value="CL">CL</option><option value="sick">Sick</option></select></td>
	    </tr>
		<table style="margin-top:40px">
		<table border="2" align="center" width="50%" height="20%" bgcolor="" cellspacing="4" cellpadding="4">
		<tr height="40%">
		  <th>Total Leave</th>
		  <th>Approved Leave</th>
		  <th>Left Leave</th>
		</tr>
		<tr bgcolor="cyan" align="center" height="20%">
		  <td></td>
		  <td></td>
		  <td></td>
		</tr>
	    </table>

		</tr>
		</table>
		</form>
		</center>


		<center>
		<div id="div4">All Rights Reserved &copy DSK Group Of Institutes<br> Developed by: DSK Group</div>
	 </center> 
	
	</body>

</html>

