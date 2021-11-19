<!DOCTYPE html>
<html>
<head>
	<title>SchoolsInfo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.card {
			margin-top: 40px;
		}
		.card .card-body {
			padding: 10px;
		}
		.school-img {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}
		.main{
	background: #202744;
	padding: 20px 0
}

	</style>
	
</head>
<body>
	<?php include_once('./header.php') ?>
	<?php
		$schools = [
			[
                'id' => 35,
				'school_name' => 'THCS Nguyễn Du',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/nguyen-du-truong-thcs-cong-lap-quan-hoan-kiem-ha-noi.jpg',
			],
			[
				'id' => 2,
				'school_name' => 'THCS Hai Bà Trưng',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/hai-ba-trung-thcs-cong-lap-quan-hai-ba-trung-ha-noi.jpg',
			],
			[
                'id' => 18,
				'school_name' => 'THCS Cầu Giấy',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/2018/03/11-truong-thcs-cau-giay-truong-cong-lap-chat-luong-cao-quan-cau-giay-ha-noi-1150x647.jpg',
			],
			[
				'id' => 4,
				'school_name' => 'THCS Nguyễn Đình Chiểu',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/ptcsnguyendinhchieu.edu_.vn/upload/chuongtrinh/1499933337nguyen-dinh-chieu-2.JPG',
			],
			[
				'id' => 5,
				'school_name' => 'Nguyễn Phong Sắc',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/nguyen-phong-sac-truong-thcs-cong-lap-quan-hai-ba-trung-ha-noi.jpg',
			],
			[
                'id' => 26,
				'school_name' => 'THCS Đống Đa',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/baotoancau.com/upload/public/2017/03/10/d1-1489116869.jpg',
			],
			[
				'id' => 7,
				'school_name' => 'THCS Tây Sơn',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/upvinalo.com/20072015/jWDjrEj0iq7Q256.jpeg',
			],
			[
				'id' => 8,
				'school_name' => 'THCS Tô Hoàng',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/thcstohoang-hbt.edu_.vn/wp-content/uploads/2014/09/96_big-700x411.jpg',
			],
			[
				'id' => 9,
				'school_name' => 'THCS Trưng Nhị',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/tayhohousing.com_.vn/files/uploads/images/Cong-Trinh/Cong-trinh-chat-luong-Manh/Truong-Trung-Nhi.jpg',
			],
		];
		$provinces = [
			[
				'name' => 'Hai Bà Trưng',
				'quant' => 11
			],
			[
				'name' => 'Cầu Giấy',
				'quant' => 9
			],
			[
				'name' => 'Ba Đình',
				'quant' => 5
			],
			[
				'name' => 'Đống Đa',
				'quant' => 6
			],
			[
				'name' => 'Hoàn Kiếm',
				'quant' => 6
			],
			[
				'name' => 'Hà Đông',
				'quant' => 5
			],
			[
				'name' => 'Long Biên',
				'quant' => 4
			],
			[
				'name' => 'Thanh Xuân',
				'quant' => 5
			],
			[
				'name' => 'Tây Hồ',
				'quant' => 6
			],
			
		];
	?>
	<div class="main">
		<main class="container-fluid">
		<div class="row">
			<div class="col-md-3" style="margin-top: 40px">
				<table class="table table-bordered mt-2" >
					<thead>
						<tr>
							<th>STT</th>
							<th>Quận</th>
							<th>Số trường</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($provinces as $item) : ?>
							<tr>
								<td><?php echo $item['name'] ?></td>
								<td><?php echo $item['quant'] ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php foreach ($schools as $school) : ?>
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header" style="padding: 0px !important;">
									<img class="school-img" src="<?php echo $school['img'] ?>" style="width: 100%;">
								</div>
								<div class="card-body">
									<p><?php echo $school['school_name'] ?></p>
									<p>Học sinh: <?php echo $school['size'] ?>người/lớp</p>
									<div class="d-flex justify-content-center">
										<a href="detail.php?id=<?php echo $school['id'] ?>">
											<button class="btn btn-success">Xem chi tiết</button>
										</a>
										<button class="btn btn-success ml-2">Lưu tin</button>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</main>
	</div>
	
	<?php include_once('./footer.php') ?>
</body>
</html>