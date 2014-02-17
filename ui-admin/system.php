<?php include('header.php'); ?>
		<h2>ตั้งค่าระบบ</h2>
		<div class="row">
			<div class="col-md-9" id="content-view">
				<div class="thread">
					<div class="context">
						<form class="form-horizontal" role="form" action="system-success.php">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">สถานะระบบ</label>
								<div class="col-sm-8">
									<select name="" id="" class="form-control">
										<option value="">เปิด</option>
										<option value="">ปิด</option>
									</select>
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">ระงับผู้ใช้อัตโนมัติเมื่อไม่ได้เข้าใช้เกิน (ครั้ง/เดือน)</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputEmail3" placeholder="5" value="5">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">ระงับผู้ใช้อัตโนมัติเป็นเวลา (วัน)</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputEmail3" placeholder="5" value="5">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" class="btn btn-primary">ปรับปรุงการตั้งค่า</button>
								</div>
							</div>
						</form>
					</div><!--context-->
				</div><!--thread-->
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>