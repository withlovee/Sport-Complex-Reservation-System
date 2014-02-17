<?php 
// Admin is the only one that can ban a member
 ?>
<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-view">
				<?php 
				if(isset($_GET['success']) && $_GET['success'] == '1'){
					echo '<div class="alert alert-success"><strong>ปรับปรุงข้อมูลเสร็จสมบูรณ์แล้ว</strong></div>	';
				}
				 ?>
				<div class="thread">
					<h3><a href="view_profile.php">ณัฐพล พัฒนาวิจิตร</a></h3>
					<hr class="topic-line">
					<div class="context">
						<form class="form-horizontal" role="form" method="GET" action="ban_user.php">
							<input type="hidden" name="success" value="1">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">วันเริ่มการระงับ</label>
								<div class="col-sm-8">
									<!-- auto set today's date/time -->
									<input type="date" class="form-control" id="begin">
								</div>
							</div><!--form-group-->
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">วันสิ้นสุดการระงับ</label>
								<div class="col-sm-8">
									<!-- auto set next seven day's date/time -->
									<input type="date" class="form-control" id="end">
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
									<button type="submit" class="btn btn-primary">ระงับการใช้งาน</button>
								</div>
							</div>
						</form>
					</div><!--context-->
				</div><!--thread-->
				<!-- for admin only -->
				<h3>ประวัติการแบน</h3>
				<div class="box">
					
							<table class="table">
								<tr>
									<th width="10%">#</th>
									<th width="25%">วันเริ่มการระงับ</th>
									<th width="25%">วันสิ้นสุดการระงับ</th>
									<th width="30%">เหตุผล</th>
									<th width="10%">จัดการ</th>
								</tr>
								<tr>
									<td>1</td>
									<td>14 ม.ค. 57, 15:35</td>
									<td>18 ม.ค. 57, 15:35</td>
									<td>-</td>
									<td>
										<a href="edit_ban.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp; 
										<a href="" onclick="confirm('แน่ใจว่าต้องการสิ้นสุด?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>14 ม.ค. 57, 15:35</td>
									<td>18 ม.ค. 57, 15:35</td>
									<td>-</td>
									<td>
										<a href="edit_ban.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp; 
										<a href="" onclick="confirm('แน่ใจว่าต้องการสิ้นสุด?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>14 ธ.ค. 56, 11:24</td>
									<td>18 ธ.ค. 56, 11:23</td>
									<td>-</td>
									<td>
										<a href="edit_ban.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp; 
										<a href="" onclick="confirm('แน่ใจว่าต้องการสิ้นสุด?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
									</td>
								</tr>
							</table>
				</div>
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>