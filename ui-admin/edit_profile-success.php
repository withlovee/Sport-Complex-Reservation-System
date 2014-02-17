<?php include('header.php'); ?>
		<h2>แก้ไขข้อมูลส่วนตัว</h2>
		<div class="row">
			<div class="col-md-9" id="content-view">
				<div class="alert alert-success"><strong>ปรับปรุงข้อมูลส่วนตัวเสร็จสมบูรณ์แล้ว</strong></div>	
				<div class="thread">
					<div class="context">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">ID</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="inputEmail3" placeholder="Name" value="5431038821" disabled>
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">ชื่อ</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputEmail3" placeholder="Name" value="ณัฐพล พัฒนาวิจิตร">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">อีเมล</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="nuttt.p@gmail.com">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">ที่อยู่</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputEmail3" placeholder="1992-11-01" value="123/454 ถนนพระรามสี่ เขตปทุมวัน กรุงเทพ 12343">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">เบอร์โทรศัพท์</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputEmail3" placeholder="085 0613432" value="085 0234455">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">กีฬาที่ชอบ</label>
								<div class="col-sm-8">
								<select multiple  class="form-control">
									<option>แบตมินตัน</option>
									<option>ฟุตบอล</option>
									<option>วิ่ง</option>
									<option>ปิงปอง</option>
									<option>เทนนิส</option>
								</select>
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">โควต้าต่อสัปดาห์ (ชม.)</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputEmail3" value="10">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">เปลี่ยนรหัสผ่าน</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="inputEmail3" placeholder="******">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">ยืนยันรหัสผ่านใหม่</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="inputEmail3" placeholder="******">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
								</div>
							</div>
						</form>
					</div><!--context-->
				</div><!--thread-->
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>