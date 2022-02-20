<?php 
include "header.php";
?>

<!---news start-->
<div class="news" id="news" style="padding-top: 150px;padding-bottom: 150px;">

	<!--Container-->
	<div class="container">
		<div class="row mb-2">
			<div class="col-12 text-center pt-3">
				<h1  style="color: black">News</h1>
			</div>
		</div>

				<div class="row">
<?php if ($result_std -> num_rows > 0) 
		{
			while ( $data=$result_std -> fetch_assoc() ) {

				?>

					<div class="col-md-3">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="admin/blog_img/<?php echo $data['img']; ?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title" style="color: black"><?php echo $data['title']; ?> </h5>
								<p class="card-text" style="color: black"><?php echo $data['blog']; ?></p>
							</div>
						</div>
					</div>
			<?php } }?>
				</div>

			</div>
		</div>
<!---news end-->



<?php 
include "footer.php";
?>