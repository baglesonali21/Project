<?php
 	session_start();
	if(!isset($_SESSION['user']))
	{
	 	header('Location:Login.php');
	}
			
	include 'header.php';
	if(!empty($_POST['start_date'])&& !empty($_POST['end_date']))
	{
			$lt=$_POST['leave_type'];
			$sd=$_POST['start_date'];
			$ed=$_POST['end_date'];
			$rs=$_POST['reason'];
       
	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->applied_leave;
	$p=$_SESSION['pwd'];
	$doc=array(
					'id'=>$p,
					'leave_type'=>$lt,
				     'start_date'=>$sd,
				     'end_date'=>$ed,
					'reason'=>$rs
				    );
	//$doc1=$collection->insert($doc);
	//$count=0;
	if($collection->insert($doc)){
		header('Location:Welcome1.php');
		//$count++;
	}
	else{
		echo "Error while saving data".mysql_error();
	    }
		
		
   } 

	else{
		echo "<h1 align='center' style='color:red'>Invalid Data</h1>";
	    }

	include 'footer.php';


?>
