<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sport Complex Reservation System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet/less" type="text/css" href="css/style.less" />
	<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/less.js" type="text/javascript"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">Sport Complex Reservation System</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a>18 กุมภาพันธ์ 2557 <?php echo date('G:i'); ?> น.</a></li>
		</ul>
		<ul class="nav navbar-nav" style="display:none">
			<li class="active"><a href="index.php">หน้าหลัก</a></li>
			<li><a href="new_topic.php">เพิ่มสมาชิก</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tags <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php">Computer</a></li>
					<li><a href="index.php">Coding</a></li>
					<li><a href="index.php">JavaScript</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Management <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="admin/index.php">Dashboard</a></li>
					<li><a href="admin/manage_user.php">Users</a></li>
					<li><a href="admin/manage_tag.php">Tags</a></li>
					<li><a href="admin/manage_report.php">Reports</a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">ณัฐพล พัฒนาวิจิตร <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="edit_profile.php">แก้ไขข้อมูลส่วนตัว</a></li>
					<li><a href="signin.php">ออกจากระบบ</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
<div id="body">
	<div class="container">