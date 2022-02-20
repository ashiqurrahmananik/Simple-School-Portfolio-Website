<?php 

include "admin/lib/connection.php";
$selectsql = "SELECT * FROM news";

$result_std = $conn -> query ($selectsql);


$selectsql1 = "SELECT * FROM gallery";

$result_std1 = $conn -> query ($selectsql1);


$selectsql2 = "SELECT * FROM logo";

$result_std2 = $conn -> query ($selectsql2);

$selectsql3 = "SELECT * FROM notice";

$result_std3 = $conn -> query ($selectsql3);

$selectsql4 = "SELECT * FROM event";

$result_std4 = $conn -> query ($selectsql4);

$selectsql5 = "SELECT * FROM faculty_members";

$result_std5 = $conn -> query ($selectsql5);
?>

<!DOCTYPE html>
<html>
<head>
	<title>BSMRSTU</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--css link-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>
<!----header start---->
<div class="header" id="head">
	<nav class="navbar navbar-expand-lg navbar-light  fixed-top color-header">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="image/cselogo.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav  ml-auto  mb-2">
        <li class="nav-item">
          <a class="nav-link" href="index.php"  style="color: black; font-weight: 700">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_us.php" style="color: black; font-weight: 700">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faculty_members.php"  style="color: black; font-weight: 700">Faculty Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php"  style="color: black; font-weight: 700">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eventsandnotice.php"  style="color: black; font-weight: 700">Events & Notice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php" style="color: black; font-weight: 700">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php" style="color: black; font-weight: 700">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" style="color: black; font-weight: 700">Contact</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="admin/admin.php">Admin Login</a>
              <a class="dropdown-item" href="stu_signup.php">Student Login</a>
              <a class="dropdown-item" href="ChatApp/index.php">Faculty Login</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<!----header end---->