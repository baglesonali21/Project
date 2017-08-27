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
	
	//$i=1;
	
	$cursor = $collection->find(array("id"=>"$p"));
	
	$data = array('Medical'=>0,'Casual'=>0,'Earned'=>0,'Unearned'=>0,'Maternity'=>0);
	foreach( $cursor as $row ) {
		$sd=new DateTime($row['start_date']);
		$ed=new DateTime($row['end_date']);
		$diff=$sd->diff($ed);
		$data[$row['leave_type']] += $diff->days;
		
	}
	echo $diff->days;
	$leave = array(
				array('lt'=>'Medical','nl'=>'20'),
				array('lt'=>'Casual','nl'=>'8'),
				array('lt'=>'Earned','nl'=>'30'),
				array('lt'=>'Unearned','nl'=>'10'),
				array('lt'=>'Maternity','nl'=>'180')
			);
	foreach($leave as $row){	
		//$al=$data[$row['lt']];
		$left=($row['nl']-$data[$row['lt']]);
		
		
	}
	
?>