<?php 
include "header.php";
?>

<!----gallery start--->
<div class="gallery" id="gallery" style="padding-top: 150px;padding-bottom: 150px;">
	<div class="container">
		<div class="row title">
			<div class="col-md-12 text-center">
				<h1  style="color: black">Gallery</h1>
			</div>
		</div>
		<div class="row">
	  <?php if ($result_std1 -> num_rows > 0) 
		{
            while ( $data1=$result_std1 -> fetch_assoc() ) {

            ?>
			<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
				<img
				src="admin/gallery_img/<?php echo $data1['filename']; ?>"
				class="w-100 shadow-1-strong rounded mb-4"
				alt="Boat on Calm Water"
				/>
			</div>
		<?php } }?>
		</div>
	</div>
</div>
<!---gallery end--->



<?php 
include "footer.php";
?>