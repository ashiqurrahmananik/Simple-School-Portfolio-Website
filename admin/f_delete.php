<?php

 include "connection.php";

 if ($_GET['id']) 
 {
 	//echo $_GET['id'];
 	$delete_id = $_GET['id'];

 	$delete_sql="DELETE FROM faculty_members WHERE id = $delete_id";

 	if( $conn -> query($delete_sql))
 	{
 		header("location:faculty_members.php");
 	}
 	else
 	{
 		die($conn -> error);
 	}

 }
 else
 {
 	header("location:faculty_members.php");
 }


?>