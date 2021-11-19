
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giao dien</title>
	<!-- Local bootstrap CSS & JS -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" media="screen" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</head>
<body>
<header class="header">
	<div class="container">
			<div class="col-md-3">
				<div class="logo">
					<img src="https://vinschool.edu.vn/wp-content/themes/vsc/assets/img/logo.png" height="100px" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="menu">
					<div class="container">
						<nav class="menu-pc">
							<ul>
								<li><a href="index.php">Trang chủ</a></li>
								<li><a href="introduce.php">Giới thiệu</a></li>
								<li><a href="index.php">Trường học</a></li>
								<li><a href="contact.php">Liên hệ</a></li>
								<li><a href="register.php">Đăng ký</a></li>
								<li><a href="sign-in.php">Đăng nhập</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-6 form-header" style="margin-top: 40px">
					<form action="" method="POST" class="form-inline text-right" role="form">
						<div class="form-group">
							<label class="sr-only" for="">label</label>
							<input type="email" class="form-control" id="" placeholder="Nhập từ khoá tìm kiếm...">
						</div>
						<button type="submit" class="btn btn-primary">Tìm kiếm</button>
					</form>
			</div> -->
			<!-- <div class="col-md-3 navbar--search" style="margin-top: 50px">
            <form action="" method="get">
                <input type="search" name="keyword" class="form-control" placeholder="Tìm kiếm..." required>
                <button class="btn-link"><i class="fa fa-search"></i></button>
            </form>
        </div> -->
	</div>
</header>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item">
			<img src="../images/anh4.jpg"  width="100%">
		</div>	
		<div class="item">
			<img src="../images/anh2.jpg" width="100%">
		</div>
		<div class="item active">
			<img src="../images/anh3.jpg" width="100%">
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>