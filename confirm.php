<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-list">
				<h2>ยืนยันการจองสนามกีฬา</h2>
				<div class="row">
					<div class="col-xs-4">
						<p><br><br><img src="img/bad1.jpg" alt="" class="img-responsive"></p>
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-8">
						<h2>สนามแบดมินตัน สนาม 1</h2>
						<h3>วันที่ 28 กุมภาพันธ์ 2557<br>
						เวลา 8.00 - 9.00 น.</h3>
						<p><img src="img/captcha.gif" alt=""></p>
					</div><!-- /.col-xs-8 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-6">
						<form role="form" method="GET" action="history.php">
							<input type="hidden" name="success" value="1">
							<br>
							<input type="submit" class="btn btn-primary btn-lg btn-block" value="ยืนยัน">
						</form>
					</div>
					<!-- /.col-md-6 -->
					<div class="col-md-6">
						<br>
						<a href="time.php" class="btn btn-default btn-lg btn-block">ย้อนกลับ</a>
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>