<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="signin">
				<form class="form-signin" role="form" action="signin-fail.php">
				<h2 class="form-signin-heading">ลืมรหัสผ่าน</h2>
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">ใส่อีเมล</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="abc@mail.com">
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-export"></span> ส่งรหัสผ่านไปทางอีเมล</button>
					<br>
					<p class="text-center"><a href="signin.php">กลับไปหน้าเข้าสู่ระบบ</a></p>
				</form>
			</div>
		</div><!--row-->
<?php include('footer.php'); ?>