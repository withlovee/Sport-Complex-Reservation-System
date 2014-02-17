<?php include('header.php'); ?>
		<div class="row">
			<div class="col-md-9" id="content-list">
				<h2>จัดการข่าวสาร
				<a href="add-news.php" class="btn btn-info">เพิ่มข่าว</a>
				</h2>
				<?php 
				if(isset($_GET['success']) && $_GET['success'] == '1'){
					echo '<div class="alert alert-success"><strong>ปรับปรุงข้อมูลเสร็จสมบูรณ์แล้ว</strong></div>	';
				}
				 ?>
				<img src="img/thumb1.jpg" width="180" height="180" class="right img-thumbnail">
				<h3><a href="news.php">การเปลี่ยนแปลงการเปิด – ปิดประตูจุฬาฯ</a></h3>
				<h6>ข่าวลงวันที่ 11 กุมภาพันธ์ 2557</h6>
				<p>มหาวิทยาลัยได้ปรับเปลี่ยนเวลาการเปิด – ปิดประตูจุฬาฯ เพื่ออำนวยความสะดวกและเพื่อความปลอดภัยของบุคลากรและนิสิตจุฬาฯ ดังนี้</p>
				<p>• ประตูสำหรับรถผ่านและคนเดิน</p>
				<p><a href="news.php" class="btn btn-info">อ่านต่อ</a>  <a href="edit-news.php" class="btn btn-default">แก้ไขข่าว</a>  <a onclick="confirm('แน่ใจว่าต้องการลบ?')" class="btn btn-default">ลบ</a><br></p>
				<div class="clear"></div>
				<hr>
				<img src="img/thumb2.jpg" width="180" height="180" class="right img-thumbnail">
				<h3><a href="news.php">การปรับเส้นทางเดินรถโดยสารภายในมหาวิทยาลัย (รถ Shuttle Bus) และขยายเวลาเปิดประตูทางเท้าประตูศศินทร์ ตั้งแต่วันจันทร์ที่ 17 ก.พ. 2557 เป็นต้นไป</a></h3>
				<h6>ข่าวลงวันที่ 13 กุมภาพันธ์ 2557</h6>
				<p>จุฬาลงกรณ์มหาวิทยาลัยจะปรับเปลี่ยนเส้นทางการเดินรถโดยสารภายในมหาวิทยาลัย (รถ Shuttle Bus) เพื่อความเหมาะสมต่อสถานการณ์และให้สอดคล้องกับความต้องการของประชาคมจุฬาฯ มากยิ่งขึ้น ดังนี้</p>
				<p><a href="news.php" class="btn btn-info">อ่านต่อ</a>  <a href="edit-news.php" class="btn btn-default">แก้ไขข่าว</a>  <a onclick="confirm('แน่ใจว่าต้องการลบ?')" class="btn btn-default">ลบ</a><br></p>
				<div class="clear"></div>
				<hr>
			</div><!--content-->
			<?php include('sidebar.php'); ?>
		</div><!--row-->
<?php include('footer.php'); ?>