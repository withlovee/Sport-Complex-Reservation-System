<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-list">
				<h2>
					จัดการสนามกีฬา, อุปกรณ์กีฬา
					<a href="add-facility.php" class="btn btn-info">เพิ่มชนิดกีฬา</a>
				</h2>
				<br>
				<?php 
				if(isset($_GET['success']) && $_GET['success'] == '1'){
					echo '<div class="alert alert-success"><strong>ปรับปรุงข้อมูลเสร็จสมบูรณ์แล้ว</strong></div>	';
				}
				 ?>
				<div class="row">
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามแบดมินตัน</a> (6)</h4>
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามเทนนิส</a> (4)</h4>
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามฟุตซอล</a> (1)</h4>
					</div><!-- /.col-xs-4 -->
				</div><!-- /.row -->
				<br>
				<div class="row">
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามแบดมินตัน</a> (6)</h4>
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามเทนนิส</a> (4)</h4>
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามฟุตซอล</a> (1)</h4>
					</div><!-- /.col-xs-4 -->
				</div><!-- /.row -->
				<br>
				<div class="row">
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามแบดมินตัน</a> (6)</h4>
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามเทนนิส</a> (4)</h4>
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-4">
						<a href="calendar.php"><img src="img/bad1.jpg" alt="" class="img-responsive"></a>
						<h4 class="text-center"><a href="calendar.php">สนามฟุตซอล</a> (1)</h4>
					</div><!-- /.col-xs-4 -->
				</div><!-- /.row -->
				<br>
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>