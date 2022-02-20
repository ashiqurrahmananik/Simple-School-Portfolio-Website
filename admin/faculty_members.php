<?php
include "lib/connection.php";
include "header.php";
$result=null;

if (isset($_POST['u_submit'])) 
{
    $name=$_POST['name'];
    $category=$_POST['c_name'];
    $filename = $_FILES["uploadfile"]["name"];


    $insertSql = "INSERT INTO faculty_members( name, title, img) VALUES ('$name', '$category','$filename')";

    if ($conn -> query ($insertSql)) 
    {
        $result="data insert success";
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "faculty_img/".$filename;

        move_uploaded_file($tempname, $folder);
    }
    else
    {
     die($conn -> error);
 }

} 


 $selectsql = "SELECT * FROM faculty_members";

 $result_std = $conn -> query ($selectsql);

 //echo $result_std -> num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--css link-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>

	 <!-- Begin Page Content -->
                <div class="container">
                    <?php echo $result; ?>
                    <h1 class="text-primary mt-3 mb-3">Enter your Faculty Members details here</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <!---name-->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control name" id="name" name="name" required>
                        </div>
                        <!--category-->
                        <div class="mb-3">
                            <label for="c_name" class="form-label">Title</label>
                            <input type="c_name" class="form-control c_name" id="c_name" name="c_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="uploadfile" class="form-label">Image</label>
                            <input type="file" name="uploadfile" value="" />
                        </div>
                        <!--reset-->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="u_submit">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>

                    </form>
                    <!---form--->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
            	<div class="card-header py-3">
            		<h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">DataTables</h6>
            	</div>
            	<div class="card-body">
            		<div class="table-responsive">
            			<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
            				<thead>
            					<tr>
            						<th>Image</th>
            						<th>Name</th>
            						<th>title</th>
            						<th>Action</th>
            					</tr>
            				</thead>
            				<tbody id="test">

            					<?php if ($result_std -> num_rows > 0) {
            						while ( $data=$result_std -> fetch_assoc() ) {

            							?>
            							<tr  class="list">
            								<td><img src="faculty_img/<?php echo $data['img'];?>" width="50px"></td>
            								<td> <?php echo $data['name']; ?> </td>
            								<td> <?php echo $data['title']; ?> </td>
            								<td>
            									<a href="f_edit.php?id= <?php echo $data['id'];?>">Edit</a>
            									<a href="f_delete.php?id= <?php echo $data['id'];?>">Delete</a>
            								</td>

            							</tr>
            							<?php 
            						}
            					} 
            					else
            					{
            						?>
            						<tr>
            							<td>No data to show</td>
            						</tr>

            					<?php } ?>
            				</tbody>
            			</table>
            		</div>
            	</div>
            </div>



<!--js link-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/3b83a3096d.js" crossorigin="anonymous"></script>

</body>
</html>