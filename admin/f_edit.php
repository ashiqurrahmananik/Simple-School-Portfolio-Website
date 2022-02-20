
<?php

 include "connection.php";

 if (isset($_POST['u_submit'])) 
 {
 	$u_id=$_POST['u_id'];
 	$u_name=$_POST['u_name'];
   	$u_email=$_POST['u_email'];
   	$u_gender=$_POST['u_gender'];

   	$updatesql="UPDATE faculty_members SET name='$u_name',email='$u_email',gender=$u_gender,age=$u_age  WHERE id=$u_id";

   	if( $conn -> query($updatesql))
 	{
 		header("location:faculty_members.php");
 	}
 	else
 	{
 		die($conn -> error);
 	}
 }

 if ($_GET['id'])
 {
 	echo $_GET['id'];
 	$edit_id = $_GET['id'];

 	$selectsql="SELECT * FROM faculty_members WHERE id= $edit_id";
 	$r_edit=$conn -> query($selectsql);

 	if ($r_edit -> num_rows > 0) 
 	{
		while ( $f_edit=$r_edit -> fetch_assoc() ) 
		{


?>
<section class="user_data">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<!---form--->
					<h1 class="text-primary mt-3 mb-3">Edit your data here</h1>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<input type="hidden" value="<?php echo $f_edit['id'];?>"  class="form-control u_id" id="u_id" name="u_id" required>
						<!---name-->
						<div class="mb-3">
							<label for="u_name" class="form-label">Name</label>
							<input type="name" value="<?php echo $f_edit['name'];?>" class="form-control u_name" id="u_name" name="u_name" required>
						</div>
						<!--user email-->
						<div class="mb-3">
							<label for="u_email" class="form-label">title</label>
							<input type="email" value="<?php echo $f_edit['email'];?>"  class="form-control u_email" id="u_email" name="u_email" required>
						</div>
						<!--reset-->
						<div class="mb-3">
							<button type="submit" class="btn btn-primary" name="u_submit">Submit</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>

					</form>
					<!---form--->

				</div>


			</div>
		</div>
	</section>
<?php
}
}
else
{
    header("location:faculty_members.php");

}
}
else
{
    header("location:faculty_members.php");

}

?>