<?php 
include "header.php";
?>

<!---event start--->
<div class="UPCOMING_EVENTS  container" id="upnotice" style="padding-top: 150px;">
	<div class="row title">
		<div class="col-md-12 text-center">
			<h1 style="color: black">UPCOMING EVENTS</h1>
		</div>
	</div>
	<div class="row">
		<?php if ($result_std4 -> num_rows > 0) {
          while ( $data4=$result_std4 -> fetch_assoc() ) 
          {
          	?>

		<div class="col-md-6">
			<img src="admin/notice_img/<?php echo $data4['img']; ?>">
			<h5 style="color: black"><?php echo $data4['title']; ?></h5>
			<p style="color: black"><?php echo $data4['blog']; ?></p>
		</div>
	<?php } } ?>
	</div>
</div>
<!---event end--->
<!---notice_board start--->
<div class="notice_board  container">
	<div class="row title">
		<div class="col-md-12 text-center">
			<h1 style="color: black">Notice</h1>
		</div>
	</div>
	<div class="row">
		<?php if ($result_std3 -> num_rows > 0) {
          while ( $data3=$result_std3 -> fetch_assoc() ) 
          {
          	?>

		<div class="col-md-6">
			<img src="admin/notice_img/<?php echo $data3['img']; ?>">
			<h5 style="color: black"><?php echo $data3['title']; ?></h5>
			<p style="color: black"><?php echo $data3['blog']; ?></p>
		</div>
	<?php } } ?>
	</div>
</div>
<!---notice_board end--->

<?php 
include "footer.php";
?>