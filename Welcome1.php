<?php
include 'header2.php';
session_start();
if( !isset( $_SESSION['user'] ) ) {
	header('Location: Login.php');
}
?>

        <html>
        <div style="margin:100px 0 100px 0; display:block">
        	<h2 align="center">Welcome <?php echo $_SESSION['user'] ?></h2>
            <p align="center" color="green">Your leave is approved </p>
        </div>
        <?php 
				$count=0;
				$count=$count+1;
				//echo $_SESSION['pwd'];
				//echo $count;
		?>  
		
        <a href="Registereduser.php">Back</a>	
        </html>
<?php include 'footer.php' ?>