<?php
   session_start();
   if(!empty($_GET['user']) && !empty($_GET['pwd']))
     {
        echo "Fill the username and password";
     }
   else
  {
   $n=$_POST['user'];
   $p=$_POST['pwd'];
   $condition=array("user"=>$n,"pwd"=>$p);
   $m = new MongoClient();
   $db = $m->project;
   $collection = $db->admin_details;
   $cursor = $collection->find( $condition );
   if($cursor->count()>0) {
		$_SESSION['admin'] = $n;
		header('Location: Regadmin.php');
   }
   else{
          echo"Invalid user";
         }
   } 
?>
