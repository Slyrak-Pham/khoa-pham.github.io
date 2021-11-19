
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
			padding: 20px;
		}
		.school-img {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}
	</style>
</head>
<body>
<?php include_once('header.php') ?>	
	<?php
		$schools = [
			[
				'school_name' => 'THCS Đoàn Kết',
				'size' => 30,
								'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/hai-ba-trung-thcs-cong-lap-quan-hai-ba-trung-ha-noi.jpg',

			],
			[
				'school_name' => 'THCS Hai Bà Trưng',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/hai-ba-trung-thcs-cong-lap-quan-hai-ba-trung-ha-noi.jpg',
			],
			[
				'school_name' => 'THCS Ngô Gia Tự',
				'size' => 30,
				'img' => 'https://photo-baomoi.zadn.vn/w700_r1/2016_09_19_251_20360195/00114c035540bc1ee551.jpg',
			],
			[
				'school_name' => 'THCS Nguyễn Đình Chiểu',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/ptcsnguyendinhchieu.edu_.vn/upload/chuongtrinh/1499933337nguyen-dinh-chieu-2.JPG',
			],
			[
				'school_name' => 'Nguyễn Phong Sắc',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/nguyen-phong-sac-truong-thcs-cong-lap-quan-hai-ba-trung-ha-noi.jpg',
			],
			[
				'school_name' => 'THCS Quỳnh Mai',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/quynh-mai-truong-thcs-cong-lap-quan-hoang-mai-ha-noi.jpg',
			],
			[
				'school_name' => 'THCS Tây Sơn',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/upvinalo.com/20072015/jWDjrEj0iq7Q256.jpeg',
			],
			[
				'school_name' => 'THCS Tô Hoàng',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/thcstohoang-hbt.edu_.vn/wp-content/uploads/2014/09/96_big-700x411.jpg',
			],
			[
				'school_name' => 'THCS Trưng Nhị',
				'size' => 30,
				'img' => 'https://cth.edu.vn/wp-content/uploads/tayhohousing.com_.vn/files/uploads/images/Cong-Trinh/Cong-trinh-chat-luong-Manh/Truong-Trung-Nhi.jpg',
			],
			// [
			// 	'school_name' => 'THCS Vân Hồ',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/van-ho-truong-thcs-cong-lap-quan-hai-ba-trung-ha-noi.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Vĩnh Tuy',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/d4.violet.vn/uploads/blogs/2676/dsc07999_500.jpg',
			// ],
			

			// [
			// 	'school_name' => 'THCS Trung Hòa',
			// 	'size' => 30,
			// 	'img' => 'https://images.foody.vn/res/g12/113480/prof/s576x330/foody-mobile-trung-hoa2-jpg-669-635573631281295313.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Yên Hòa',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/photos.wikimapia.org/p/00/03/33/86/36_big.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Dịch Vọng',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/img.infonet.vn/w800/Uploaded/tiendung/2017_09_02/Infonet__cong_trinh__nghi_ty_18.JPG',
			// ],
			// [
			// 	'school_name' => 'THCS Mai Dịch',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/images.gdtd_.epi_.vn/uploaded/thuyvt/2017_09_04/13012127786196627875684791268706377o_qmqd.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Nghĩa Tân',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/img.giaoduc.net_.vn/Uploaded/xuantrung/2016_06_07/THCS_Nghia_Tan.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Lê Quý Đôn',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/thcslequydoncaugiay.edu_.vn/uploads/news/2017_05/i1.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Cầu Giấy',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/03/11-truong-thcs-cau-giay-truong-cong-lap-chat-luong-cao-quan-cau-giay-ha-noi-1150x647.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Nam Trung Yên',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/www.bitex_.com_.vn/vnt_upload/File/Image/thicasiocaptinh/thi_casio_ha_noi_1.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Dịch Vọng Hậu',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/lazi.vn/uploads/truong_hoc/1505574687_thcs-dich-vong-hau.jpg',
			// ],


			// [
			// 	'school_name' => 'THCS Ba Đình',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/PuajfzW2Sd96Vnr4r5k2ITgY_NAprf_R_QLCDUATQ9aUIif50Pxh1BxS2x5HUtPNuJdp-utM02or_p1pCiOf7wrSx6ss2_JiVTZWfdsv5FFt8AA81ULTIFnY5niW_B6SXLYLr3RZl1NmjD9VBz2kujh_q-Qwe725uwzOFckg8DF4U63I-A',
			// ],
			// [
			// 	'school_name' => 'THCS Giảng Võ',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/pgdnamtruc.edu_.vn/wp-content/uploads/sites/440/2017/10/22264763_721233088070885_194273008_n.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Hoàng Hoa Thám',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/cPPWpyJZq4zWAkQjjRGa1JN3I5qBwt9cgBZehHPT8ubQfRsrScbZQBvFCdK3wuwFX_7qvaPThqCzl78wI1ecUgF7AHf3C4df0tAgT89Ez1ROBTtP8UI5R1qwQ2ykq3HA2ktRgExtXKrqDuoJtA',
			// ],
			// [
			// 	'school_name' => 'THCS Mạc Đĩnh Chi',
			// 	'size' => 30,
			// 	'img' => 'http://diachiso.vn/cdn/images/org/2009/6/21/truong-thcs-mac-dinh-chi.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Nguyễn Công Trứ',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/glP-KMek6pPLVuGTRkSJCBXRrk4mVFvSZC0CuY8GDVvQ0b9Lg8jkErGYoH7BklFCy1ckoIMQ2oFfMCnUhqThP2yRQW2Kej0F5Ivsmkv5PoPosbpog8iiCk2_3pr08B1OfZD3ZqzP5UG9975dAirwhg',
			// ],


			// [
			// 	'school_name' => 'THCS Đống Đa',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/baotoancau.com/upload/public/2017/03/10/d1-1489116869.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Tô Vĩnh Diện',
			// 	'size' => 30,
			// 	'img' => 'https://thcstovinhdien.edu.vn/uploads/news/2017_08/img-f9fc6bd47a021a2ad6104d56b5f803ad-v.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Trung Phụng',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/oVFQcHL6rspvSTNuMwoaRYdh9U7JU9ImNqPXOpheDH6KZPz4vCjahc5cQjeWc5f1UXzA-NFgrN3yk52ZzZYFOVpaixcE9LHpbK8Agv4mlbBZasEEoL_tbQes7taONhoc-tcU82_DhgYiQAr_VtbrTsfcDK0A',
			// ],
			// [
			// 	'school_name' => 'THCS Lý Thường Kiệt',
			// 	'size' => 30,
			// 	'img' => 'http://thcslythuongkiet-hanoi.edu.vn/wp-content/uploads/2020/09/6211EF89-5BD5-4AE2-8E2B-63A947F5B1C8-410x260.jpeg',
			// ],
			// [
			// 	'school_name' => 'THCS Cát Linh',
			// 	'size' => 30,
			// 	'img' => 'https://images.foody.vn/res/g13/120756/prof/s576x330/foody-mobile-thcs-cl-jpg-566-635593381767062216.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Thái Thịnh',
			// 	'size' => 30,
			// 	'img' => 'https://media.congluan.vn/files/ngocthanh/2020/07/16/108026464_631106254172873_1356702664605839284_n_1__ptlq-1335.jpg',
			// ],


			// [
			// 	'school_name' => 'THCS Hoàn Kiếm',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/q12TawYhtVoW_CmQPEmPoGsebyAzPSnuIbN62AAa-HTCWWc4V1AxiHtx-O5QyDvyD94bZCYJBuGKPUDoVc5d21yT5vXowf_ZcoNOJ3Wy8xIjyKDjUsvJ-GhVJu4ge19p',
			// ],
			// [
			// 	'school_name' => 'THCS Chương Dương',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/chuong-duong-truong-thcs-cong-lap-quan-hoan-kiem-ha-noi.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Lê Lợi',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2019/07/thcs-le-loi-ha-dong-1.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Nguyễn Du',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/nguyen-du-truong-thcs-cong-lap-quan-hoan-kiem-ha-noi.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Ngô Sĩ Liên',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/vuikhoeamno.files_.wordpress.com/2012/04/dsc06442.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Trưng Vương',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/quantri.hanoi_.edu_.vn/UploadImages/thcstrungvuong/IMG_0603.jpg',
			// ],


			// [
			// 	'school_name' => 'THCS Biên Giang',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/NACNGuINxdBF-S6yFoHYW9CGhH_-Ys5Mm0C3_50ESxWOSn9rS7k1eruw8HZRibIPrjxidSzNjqEM-WLx2MfAJhhaxixwAwI55XNjtCSTts0KNDFkCtG4BZZ43GtAhy39RLMahKpfhMeR-Ak',
			// ],
			// [
			// 	'school_name' => 'THCS Đồng Mai',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/LjTkVfPX-LHMJqZK6DMS_6Rsz_tZlBRoTudmS5BQTfFEpXG40DAjJ4H0AKuFeddw4Rqw5w19j6u6BnP95zz7MGgg6k9nLazO9xH8gNXgSHTx3PsdULvQ2WkCUA',
			// ],
			// [
			// 	'school_name' => 'THCS Dương Nội',
			// 	'size' => 30,
			// 	'img' => 'http://c2duongnoi.edu.vn/uploads/news/2020_05/5.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Kiến Hưng',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/4-kien-hung-truong-thcs-cong-lap-quan-ha-dong.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Lê Quý Đôn',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/15-le-quy-don-truong-thcs-cong-lap-quan-ha-dong.jpg',
			// ],

			
			// [
			// 	'school_name' => 'THCS Long Biên',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/quantri.longbien.edu_.vn//UploadImages/thcslongbien/thuvienanh/Anh-truong.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Gia Thuỵ',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/quantri.longbien.edu_.vn//UploadImages/thcsgiathuy/admin/1546248_1608707989270225_1991570472922726964_n_.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Phúc Đồng',
			// 	'size' => 30,
			// 	'img' => 'http://photos.wikimapia.org/p/00/03/42/65/38_big.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Ngọc Thuỵ',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/quantri.longbien.edu_.vn//UploadImages/thcsngocthuy/Gioi-thieu-truong/FullSizeRender-5.jpg',
			// ],

			
			// [
			// 	'school_name' => 'THCS Thanh Xuân',
			// 	'size' => 30,
			// 	'img' => 'https://img.nhandan.com.vn/Files/Images/2020/10/28/1-1603852814314.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Việt Nam-Angiêri',
			// 	'size' => 30,
			// 	'img' => 'https://file1.dangcongsan.vn/DATA/0/2019/01/dfhdjhdf-12_31_08_119.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Hạ Đình',
			// 	'size' => 30,
			// 	'img' => 'https://quantri.pgdthanhxuan.edu.vn//UploadImages/thcshadinh/%E1%BA%A2nh%20tr%C6%B0%E1%BB%9Dng.jpg?w=620&h=388&mode=crop',
			// ],
			// [
			// 	'school_name' => 'THCS Thanh Xuân Nam',
			// 	'size' => 30,
			// 	'img' => 'https://hoctot.hocmai.vn/wp-content/uploads/2020/04/Thanhxuan.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Khương Mai',
			// 	'size' => 30,
			// 	'img' => 'https://lh3.googleusercontent.com/proxy/JmNVoIoBVxa29UqJfEkyy78-IZrcH3KRPlAwkn40omFDCSKqrTJusylLCS4arczoiySQvEsLDd0YD4lCQYyZdQXU8mL0wVVGLTsJVvDOtVqEWMfnb0WZTSXNGKLSWPI3FpwhOKU',
			// ],


			
			// [
			// 	'school_name' => 'THCS Xuân La',
			// 	'size' => 30,
			// 	'img' => 'https://photo-cms-kienthuc.zadn.vn/zoom/800/Uploaded/quynhtien/2018_04_07/xuan-la_USKG.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Quảng An',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/quang-an-truong-thcs-cong-lap-quan-tay-ho-ha-noi.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Phú Thượng',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/phu-thuong-truong-thcs-cong-lap-quan-tay-ho-ha-noi-2.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Đông Thái',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/media.truongdientu.vn/UploadImages/thcsdongthai/Picture3.jpg',
			// ],
			// [
			// 	'school_name' => 'THCS Chu Văn An',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/c2chuvanan.edu_.vn/DATA/0/IMAGES/2017/09/IMG_5036a-11_06_31_431.JPG',
			// ],
			// [
			// 	'school_name' => 'THCS An Dương',
			// 	'size' => 30,
			// 	'img' => 'https://cth.edu.vn/wp-content/uploads/2018/01/an-duong-truong-thcs-cong-lap-quan-tay-ho-ha-noi.jpg',
			// ],
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
	<main class="container">
		<div class="row">
			<div class="col-md-3" style="margin-top: 40px">
				<table class="table table-bordered mt-2">
					<thead>
						<tr>
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
										<button class="btn btn-success">Xem chi tiết</button>
										<button class="btn btn-success ml-2">Lưu tin</button>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			
		</div>
	</div>
	<?php include_once('footer.php') ?>
</body>
</html>