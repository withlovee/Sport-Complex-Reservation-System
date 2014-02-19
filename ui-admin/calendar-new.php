<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-list">
				<h2>แก้ไขอุปกรณ์/สนามกีฬา</h2>
						<?php 
						if(isset($_GET['success']) && $_GET['success'] == '1'){
							echo '<div class="alert alert-success"><strong>ปรับปรุงข้อมูลเสร็จสมบูรณ์แล้ว</strong></div>	';
						}
						 ?>
				<div class="row">
					<div class="col-xs-4">
						<img src="img/bad1.jpg" alt="" class="img-responsive">
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-8">
						<input class="form-control input-lg" type="text" placeholder="" value="สนามแบตมินตัน">
						<br>
						<div class="input-group" style="width: 35%">
							<span class="input-group-addon">ระยะเวลา</span>
							<input type="text" class="form-control" placeholder="120" value="120">
							<span class="input-group-addon">นาที</span>
						</div>
						<br>
						รูปภาพ <input type="file" id="exampleInputFile">
					</div><!-- /.col-xs-8 -->
				</div><!-- /.row -->
				<br>
				<p><a href="calendar-new.php" class="btn btn-info">เพิ่มสนามแบตมินตัน</a></p>
				<div class="row">
					<div class="col-xs-4">
						<img src="img/bad1.jpg" alt="" class="img-responsive">
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-8">
						<div class="input-group" style="width: 30%">
							<span class="input-group-addon">หมายเลข</span>
							<input type="text" class="form-control" placeholder="1" value="1">
						</div>
						<br>
						รูปภาพ <input type="file" id="exampleInputFile">
					</div><!-- /.col-xs-8 -->
				</div><!-- /.row -->
				<br>
				<div class="row">
					<div class="col-xs-4">
						<img src="img/bad1.jpg" alt="" class="img-responsive">
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-8">
						<div class="input-group" style="width: 30%">
							<span class="input-group-addon">หมายเลข</span>
							<input type="text" class="form-control" placeholder="1" value="2">
						</div>
						<br>
						รูปภาพ <input type="file" id="exampleInputFile">
					</div><!-- /.col-xs-8 -->
				</div><!-- /.row -->
				<br>
				<div class="row">
					<div class="col-xs-4">
						<img src="img/bad1.jpg" alt="" class="img-responsive">
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-8">
						<div class="input-group" style="width: 30%">
							<span class="input-group-addon">หมายเลข</span>
							<input type="text" class="form-control" placeholder="1" value="3">
						</div>
						<br>
						รูปภาพ <input type="file" id="exampleInputFile">
					</div><!-- /.col-xs-8 -->
				</div><!-- /.row -->
				<br>
				<div class="row">
					<div class="col-xs-4">
						<img src="../img/s-pl.jpg" alt="" class="img-responsive">
					</div><!-- /.col-xs-4 -->
					<div class="col-xs-8">
						<div class="input-group" style="width: 30%">
							<span class="input-group-addon">หมายเลข</span>
							<input type="text" class="form-control" placeholder="4" value="">
						</div>
						<br>
						รูปภาพ <input type="file" id="exampleInputFile">
					</div><!-- /.col-xs-8 -->
				</div><!-- /.row -->
				<br>
				<form role="form" method="GET" action="calendar.php">
					<input type="hidden" name="success" value="1">
					<p>
						<input type="submit" class="btn btn-lg btn-info" value="ปรับปรุงข้อมูล">
					</p>
				</form>
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>