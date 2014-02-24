<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="signin">
				<form class="form-signin" role="form" action="signin-fail.php">
				<h2 class="form-signin-heading">ลืมรหัสผ่าน</h2>
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">ใส่รหัสผ่านใหม่</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">ยืนยันรหัสผ่านใหม่</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-export"></span> ตั้งรหัสผ่านใหม่</button>
					<br>
					<p class="text-center"><a href="signin.php">กลับไปหน้าเข้าสู่ระบบ</a></p>
				</form>
			</div>
		</div><!--row-->
<?php include('footer.php'); ?>