<?php

SESSION_START();

if(isset($_SESSION['auth']))
{
	session_destroy();
	header("location:stu_login.php");
}
else
{
	header("location:stu_login.php");
}


?>