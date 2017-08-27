<?php
 	session_start();
	if(isset($_SESSION['user']))
	{
	 	header('Location:Login.php');
	}
			
	include 'header.php';
	if(!empty($_POST['fname'])&& !empty($_POST['email']))
	{
			$fn=$_POST['fname'];
			$ln=$_POST['lname'];
			$dob=$_POST['dob'];
			$gen=$_POST['gender'];
			$em=$_POST['email'];
			$cont=$_POST['contact'];
			$add=$_POST['address'];

	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->employee_details;
	$collection1 = $db->login_details;

	$doc1=array('fname'=>$fn,
					   'lname'=>$ln,
					   'dob'=>$dob,
					   'gender'=>$gen,
					   'email'=>$em,
					   'contact'=>$cont,
					   'address'=>$add
					  );
	$doc2=array('user'=>$fn,
					'pwd'=>$cont
				     );
		
		
		if ($collection->insert($doc1) && $collection1->insert($doc2)) {
		
		echo "<h1 align='center' style='color:green'>Data Saved Successfully</h1>";
		echo "<center><h1>WELCOME</h1>";
		echo "<h2><strong><br><br> Your username is:'$fn' <br><br> Your password is :'$cont' <strong></h2></center>";
		}

         else
         {
           echo "Error while saving data".mysql_error();
         }
   	
   } 

	else{
		echo "<h1 align='center' style='color:red'>Invalid Data</h1>";
	    }

	include 'footer.php';


?>
