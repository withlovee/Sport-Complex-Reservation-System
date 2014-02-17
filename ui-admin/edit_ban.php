<?php 
// Admin is the only one that can ban a member
 ?>
<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-view">
				<div class="thread">
					<h3><a href="view_profile.php">ณัฐพล พัฒนาวิจิตร</a></h3>
					<hr class="topic-line">
					<div class="context">
						<form class="form-horizontal" role="form" method="GET" action="ban_user.php">
							<input type="hidden" name="success" value="1">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">วันเริ่มแบน</label>
								<div class="col-sm-8">
									<!-- auto set today's date/time -->
									<input type="text" class="form-control" id="begin" value="14 ม.ค. 57, 15:35">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">วันสิ้นสุด</label>
								<div class="col-sm-8">
									<!-- auto set next seven day's date/time -->
									<input type="text" class="form-control" id="end" value="18 ม.ค. 57, 15:35">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">เหตุผล</label>
								<div class="col-sm-8">
									<textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" class="btn btn-primary">ปรับปรุงข้อมูล</button>
								</div>
							</div>
						</form>
					</div><!--context-->
				</div><!--thread-->
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>