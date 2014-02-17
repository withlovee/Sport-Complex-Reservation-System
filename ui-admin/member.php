<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-list">
				<h2>จัดการสมาชิก
				<a href="new-member.php" class="btn btn-info">เพิ่มสมาชิก</a>
				</h2>	
				<div class="well">
					<div class="form-group">
						<label class="col-sm-2 text-right" style="position: relative; top: 8px;">
							ชื่อ
						</label>
						<div class="col-xs-5">
							<input type="text" class="form-control" placeholder="ชื่อ นามสกุล" value="5431010121 ณัฐพล พัฒนาวิจิตร">
						</div>
						<div class="col-xs-2">
							
						</div>
						<div class="col-xs-2">
							<input type="submit" class="form-control btn btn-info" value="ค้นหา">
						</div>
					</div>
					<br>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>ชื่อ</th>
							<th>ข้อมูลการจอง</th>
							<th>จัดการสมาชิก</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>5430030521</td>
							<td><a href="view_profile.php">กวิน จงจารุพงศ์</a></td>
							<td>
								<a href="history.php"><span class="glyphicon glyphicon-calendar"></span></a>
							</td>
							<td>
								<a href="edit_profile.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
								<a href="" onclick="confirm('แน่ใจว่าต้องการลบ?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
								<a href="ban_user.php"><span class="glyphicon glyphicon-eye-close"></span></a> &nbsp;
							</td>
						</tr>
						<tr>
							<td>5431010121</td>
							<td><a href="view_profile.php">ณัฐพล พัฒนาวิจิตร</a></td>
							<td>
								<a href="history.php"><span class="glyphicon glyphicon-calendar"></span></a>
							</td>
							<td>
								<a href="edit_profile.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
								<a href="" onclick="confirm('แน่ใจว่าต้องการลบ?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
								<a href="ban_user.php"><span class="glyphicon glyphicon-eye-close"></span></a> &nbsp;
							</td>
						</tr>
						<tr>
							<td>5431038821</td>
							<td><a href="view_profile.php">วิภาวี ไตรรัตนาภา</a></td>
							<td>
								<a href="history.php"><span class="glyphicon glyphicon-calendar"></span></a>
							</td>
							<td>
								<a href="edit_profile.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
								<a href="" onclick="confirm('แน่ใจว่าต้องการลบ?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
								<a href="ban_user.php"><span class="glyphicon glyphicon-eye-close"></span></a> &nbsp;
							</td>
						</tr>
						<tr>
							<td>5430359021</td>
							<td><a href="view_profile.php">ปัณณวัฒน์ เทิดชนะกุล</a></td>
							<td>
								<a href="history.php"><span class="glyphicon glyphicon-calendar"></span></a>
							</td>
							<td>
								<a href="edit_profile.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
								<a href="" onclick="confirm('แน่ใจว่าต้องการลบ?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
								<a href="ban_user.php"><span class="glyphicon glyphicon-eye-close"></span></a> &nbsp;
							</td>
						</tr>
						<tr>
							<td>5431028521</td>
							<td><a href="view_profile.php">ภาคย์ เนตราคม</a></td>
							<td>
								<a href="history.php"><span class="glyphicon glyphicon-calendar"></span></a>
							</td>
							<td>
								<a href="edit_profile.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
								<a href="" onclick="confirm('แน่ใจว่าต้องการลบ?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
								<a href="ban_user.php"><span class="glyphicon glyphicon-eye-close"></span></a> &nbsp;
							</td>
						</tr>
						<tr>
							<td>5431040021</td>
							<td><a href="view_profile.php">สาริน ดุรงค์ดำรงชัย</a></td>
							<td>
								<a href="history.php"><span class="glyphicon glyphicon-calendar"></span></a>
							</td>
							<td>
								<a href="edit_profile.php"><span class="glyphicon glyphicon-pencil"></span></a> &nbsp;
								<a href="" onclick="confirm('แน่ใจว่าต้องการลบ?')"><span class="glyphicon glyphicon-remove"></span></a> &nbsp;
								<a href="ban_user.php"><span class="glyphicon glyphicon-eye-close"></span></a> &nbsp;
							</td>
						</tr>
					</tbody>
				</table>
				<div class="text-center">
					<ul class="pagination" style="margin: 20px auto;">
						<li><a href="#">&laquo;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
					
				</div>
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>