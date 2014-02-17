<?php include('header.php'); ?>
		<h2>แก้ไขข้อมูลส่วนตัว</h2>
		<div class="row">
			<div class="col-md-9" id="content-view">
				<div class="thread">
					<div class="context">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="inputEmail3" placeholder="Name" value="Nuttapon Pattanavijit">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="nuttt.p@gmail.com">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Birthdate</label>
								<div class="col-sm-8">
									<input type="date" class="form-control" id="inputEmail3" placeholder="1992-11-01" value="1992-11-01">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Profile Picture</label>
								<div class="col-sm-8">
									<input type="file">
									<br>
									<strong>Current Image:</strong>
									<img src="img/avatar_test.jpg" class="img-circle">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">New Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="inputEmail3" placeholder="123456">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Confirm new password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="inputEmail3" placeholder="123456">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" class="btn btn-primary">Update Profile</button>
								</div>
							</div>
						</form>
					</div><!--context-->
				</div><!--thread-->
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>