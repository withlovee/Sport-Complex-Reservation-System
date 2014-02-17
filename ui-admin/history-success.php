<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-list">
				<h2>ดูประวัติการจอง</h2>
				<div class="alert alert-success"><strong>การจองเสร็จสมบูรณ์แล้ว</strong></div>		
				<table class="table table-striped">
					<thead>
						<tr>
							<th>วันที่</th>
							<th>เวลา</th>
							<th>อุปกรณ์/สนามกีฬา</th>
							<th>สถานะ</th>
						</tr>
					</thead>
					<tbody>
						<tr class="warning">
							<td>28 กุมภาพันธ์ 2557</td>
							<td>8.00 - 9.00</td>
							<td>สนามแบตมินตัน 6</td>
							<td>รอเข้าใช้ <a href="cancel.php">(ยกเลิก)</a></td>
						</tr>
						<tr class="success">
							<td>20 กุมภาพันธ์ 2557</td>
							<td>12.00 - 13.00</td>
							<td>ลู่วิ่ง 11</td>
							<td>เข้าใช้แล้ว</td>
						</tr>
						<tr class="success">
							<td>14 กุมภาพันธ์ 2557</td>
							<td>11.00 - 12.00</td>
							<td>สนามแบตมินตัน 3</td>
							<td>เข้าใช้แล้ว</td>
						</tr>
						<tr class="active">
							<td>10 กุมภาพันธ์ 2557</td>
							<td>10.00 - 11.00</td>
							<td>สนามแบตมินตัน 3</td>
							<td>ยกเลิกการจอง</td>
						</tr>
						<tr class="success">
							<td>9 กุมภาพันธ์ 2557</td>
							<td>12.00 - 13.00</td>
							<td>ลู่วิ่ง 11</td>
							<td>เข้าใช้แล้ว</td>
						</tr>
						<tr class="success">
							<td>8 กุมภาพันธ์ 2557</td>
							<td>11.00 - 12.00</td>
							<td>สนามแบตมินตัน 3</td>
							<td>เข้าใช้แล้ว</td>
						</tr>
						<tr class="success">
							<td>7 กุมภาพันธ์ 2557</td>
							<td>12.00 - 13.00</td>
							<td>ลู่วิ่ง 11</td>
							<td>เข้าใช้แล้ว</td>
						</tr>
						<tr class="danger">
							<td>6 กุมภาพันธ์ 2557</td>
							<td>11.00 - 12.00</td>
							<td>สนามแบตมินตัน 3</td>
							<td>ไม่ได้เข้าใช้</td>
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