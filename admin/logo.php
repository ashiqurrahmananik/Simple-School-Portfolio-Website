<?php
include "lib/connection.php";
include "header.php";
$result=null;
if (isset($_POST['u_submit'])) 
{
    $filename = $_FILES["uploadfile"]["name"];


    $insertSql = "INSERT INTO logo(logo_img) VALUES ('$filename')";

    if ($conn -> query ($insertSql)) 
    {
        $result="data insert success";

        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "logo_img/".$filename;

        move_uploaded_file($tempname, $folder);
    }
    else
    {
     die($conn -> error);
    }

} 


 $selectsql = "SELECT * FROM news";

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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>if logo is showing on site please delete before upload.</h4>
                <button><a href="logo_delete.php">Delete</a></button>
            </div>
        </div>
    </div>
	 <!-- Begin Page Content -->
                <div class="container">
                    <?php echo $result; ?>
                    <h1 class="text-primary mt-3 mb-3">Update logo</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <!---name-->
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





<!--js link-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/3b83a3096d.js" crossorigin="anonymous"></script>

</body>
</html>