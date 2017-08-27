
		<?php 
             session_start();
			 if( !isset( $_SESSION['user'] ) ) {
            	header('Location: Login.php');
				}
		
		?>
	
		
		
<?php

	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->applied_leave;
	$p=$_SESSION['pwd'];
	
	$sort = array('fname'=>1, 'lname'=>1);
	
	
	
	$cursor = $collection->find(array("id"=>"$p"));
	
	$data = array('Medical'=>0,'Casual'=>0,'Earned'=>0,'Unearned'=>0,'Maternity'=>0);
	$diff=0;
	foreach( $cursor as $row ) {
		
		$sd=new DateTime($row['start_date']);
		$ed=new DateTime($row['end_date']);
		$diff=$sd->diff($ed);
		//echo "Diff" .$diff->days;
		
		$data[$row['leave_type']] += $diff->days;
		
		
	}
	
	
	
	
	
	//var_dump($data);
	
	$leave = array(
				array('lt'=>'Medical','nl'=>'20'),
				array('lt'=>'Casual','nl'=>'8'),
				array('lt'=>'Earned','nl'=>'30'),
				array('lt'=>'Unearned','nl'=>'10'),
				array('lt'=>'Maternity','nl'=>'180')
			);
	
	
	
	$leaveappliedtype=$_POST['leave_type'];
	$date1=date_create($_POST['start_date']);
$date2=date_create($_POST['end_date']);
$days=date_diff($date1,$date2);
$diffdate=$days->format("%R%a");

//echo $diffdate;
echo"<br>";
	
//echo $leaveappliedtype;
$leftdates=0;

foreach( $leave as $row ) {
		
		
		if(strcmp($row['lt'],$leaveappliedtype)==0)
		{
			$left=($row['nl']-$data[$row['lt']]);
			$leftdates=($left-$diffdate);
		}
		
	
	
	}




	if($leftdates<0)  
	{
		echo "<h2 align='center' style='color:red'>You don't have sufficient Leaves</h2>";
	}
	else{
		
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
			//	$doc1=$collection->insert($doc);
				$count=0;
			if($collection->insert($doc)){
			header('Location:Welcome1.php');
			$count++;
			}
			
	else{
		echo "Error while saving data".mysql_error();
	    }
		
		
   } 
	else{
		echo "<h1 align='center' style='color:red'>Invalid Data</h1>";
	    }
		

	}
?>





