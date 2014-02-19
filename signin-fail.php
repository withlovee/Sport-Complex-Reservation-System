<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="signin">
				<form class="form-signin" role="form" action="index.php">
				<h2 class="form-signin-heading">กรุณาเข้าสู่ระบบ</h2>
				<div class="alert alert-danger"><strong>กรอก ID หรือรหัสผ่านผิด</strong></div>
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">ID</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">รหัสผ่าน</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-ok"></span> เข้าสู่ระบบ</button>
					<br>
					<p class="text-center"><a href="forget.php">ลืมรหัสผ่าน</a></p>
				</form>
			</div>
		</div><!--row-->
<?php include('footer.php'); ?>