<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-list">
				<h2>เพิ่มอุปกรณ์/สนามกีฬา</h2>
				<div class="row">
					<div class="col-xs-4">
						<img src="../img/s-pl.jpg" alt="" class="img-responsive">
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-8">
						<input class="form-control input-lg" type="text" placeholder="ชื่อสนาม,อุปกรณ์">
						<br>
						<div class="input-group" style="width: 35%">
							<span class="input-group-addon">ระยะเวลา</span>
							<input type="text" class="form-control" placeholder="120">
							<span class="input-group-addon">นาที</span>
						</div>
						<br>
						รูปภาพ <input type="file" id="exampleInputFile">
					</div><!-- /.col-xs-8 -->
				</div><!-- /.row -->
				<br>
				<p><a href="add-facility-more.php" class="btn btn-info">เพิ่มอุปกรณ์</a></p>
				<form role="form" method="GET" action="reserve.php">
					<input type="hidden" name="success" value="1">
					<p>
						<input type="submit" class="btn btn-lg btn-info" value="ตกลง (เพิ่มชนิดสนามกีฬา,อุปกรณ์กีฬานี้)">
					</p>
				</form>
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>