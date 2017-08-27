<?php

session_start();
if( !isset( $_SESSION['admin'] ) ) {
	header('Location: Admin.php');
}

if(!empty($_POST['id']) ) {
	
	$id = $_POST['id'];
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$dob = $_POST['dob'];
	$gen = $_POST['gender'];
	$em = $_POST['email'];
	$cont = $_POST['contact'];
	$add = $_POST['address'];
	
	$m = new MongoClient();
	$db = $m->project;
	$collection = $db->employee_details;
	
	$condition = array( '_id' => new MongoId( $id ) );
	//$n=0;
	$doc = array(
		'fname' => $fn,
		'lname' => $ln,
		'dob' => $dob,
		'gender' => $gen,
		'email' => $em,
		'contact' => $cont,
		'address' => $add
	);
	
	$status = $collection->update( $condition, $doc );
	//$n++;	
	if( $status['n'] > 0) {
		$url  = 'Location: Updateform.php?id=' . $id;
		header( $url );
	}
	
	else {
		echo "<h1 align='center' style='color:red'>Error while updating record</h1>";
		//var_dump($status);
	}
	
} 
else {
	
	echo "<h1 align='center' style='color:red'>In Valid Form Data</h1>";
	
}
header('Location: View.php');

?>