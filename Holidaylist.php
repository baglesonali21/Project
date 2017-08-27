<html>

	<head>
		<title>Holiday List</title>
		<?php 
             session_start();
			 if( !isset( $_SESSION['user'] ) ) {
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
		<h1 style="color:#9900cc">2015 Holiday Schedule</h1>  
		<form action="" method ="post">
		<table border="1px" align="center" width="500px" height="800px">
			<tr align="center" bgcolor="cyan">
				<td><strong>Sr.</strong></td><td><strong>Holiday Description</strong></td><td><strong>Date</strong></td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>1</td><td>New Year</td><td>1 Jan</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>2</td><td>Sankharanti/Pongal</td><td>15 Jan</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>3</td><td>Republic Day</td><td>26 Jan</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>4</td><td>Holi</td><td>6 March</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>5</td><td>Gudi Padwa</td><td>21 March</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>6</td><td>Good Friday</td><td>3 April</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>7</td><td>Labour Day</td><td>1 May</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>8</td><td>Id-Ul-Fitr/Ramzan</td><td>18 July</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>9</td><td>Independence Day</td><td>15 August</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>10</td><td>Onam</td><td>28 August</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>11</td><td>Ganesh Chaturthi</td><td>17 Sep</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>12</td><td>Bakrid/Idul Juha</td><td>24 Sep</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>13</td><td>Gandhi Jayanti</td><td>2 Oct</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>14</td><td>Muharram</td><td>23 Oct</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>15</td><td>Diwali</td><td>11 Nov</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>16</td><td>Guru Nanak Jayanti</td><td>25 Nov</td>
			</tr>
			<tr align="center" bgcolor="ff99ff">
				<td>17</td><td>Christmas</td><td>25 Dec</td>
			</tr>
		</table>
		</form>
		</center>
		
		<center>
		<div id="div4">All Rights Reserved &copy DSK Group Of Institutes<br> Developed by: DSK Group</div>
	 </center> 
	
	</body>

</html>

