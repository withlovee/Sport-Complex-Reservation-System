<?php include('header.php'); ?>
		<h2>เพิ่มข่าวใหม่</h2>
		<div class="row">
			<div class="col-md-9" id="content-view">
				<div class="thread">
					<div class="context">
						<form class="form-horizontal" role="form" method="GET" action="index.php">
							<input type="hidden" name="success" value="1">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">หัวข้อ</label>
								<div class="col-sm-10">
									<input type="name" class="form-control" id="inputEmail3" value="">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">เนื้อหาย่อ</label>
								<div class="col-sm-10">
									<textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">เนื้อหาเต็ม</label>
								<div class="col-sm-10">
									<textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">วันที่เขียน</label>
								<div class="col-sm-10">
									<input type="date" class="form-control">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">เพิ่มหัวข้อข่าว</button>
								</div>
							</div>
						</form>
					</div><!--context-->
				</div><!--thread-->
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>