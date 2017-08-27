<?php

session_start();
if( !isset( $_SESSION['admin'] ) ) {
	header('Location: Admin.php');
}

if( !empty( $_GET['id'] ) ) {
	
	$id=$_GET['id'];
	
	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->employee_details;
	
	$condtion = array( '_id' => new MongoId( $id ) );
	
	$status = $collection->remove( $condtion );
	
	if( $status['n']>0 && !$status['err'] ) {
		header('Location: View.php');
	} else {
		echo "<h1 align='center' style='color:red'>Error while deleting contact</h1>";
		//var_dump($status);
	}
} else {
	echo "<h1 align='center' style='color:red'>In Valid ID</h1>";
}

?>
