<?php 
    include_once("includes/db_connect.php");
    include_once("includes/mfunction.php");
    $con    = new Connection();
    $chk    = new Mfunction();    
    $chk->sessionCheck();  
		$id  =  $_GET['id'];
		$artist  =  $_GET['q'];
		$album  =  $_GET['p'];
		$song  =  $_GET['song'];

		$chk->deleteSong($id,$album,$artist,$song);

		 echo	"<script> window.location = 'editSong.php'; </script>";
 ?>
