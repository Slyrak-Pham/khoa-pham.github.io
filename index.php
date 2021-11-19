<?php 
include'header.php';
include'../Connect_db/connect.php';
$category = mysqli_query($connect,"select * from category");
$blog = mysqli_query($connect,"select * from blog");
?>
	<div class="container" style="margin-top: 20px;" >
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">DANH SÁCH CÁC QUẬN</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover" id="my-table">
			           <!--  <thead>
			              <tr>
			                <th>Tên Quận</th>
			                  </tr>
			                </thead> -->
			                <tbody>
			                  <?php foreach ($category as $key => $value) {?>
			                    <tr>
			                      <!-- <td><?php echo $key+1 ?></td> -->
			                      <td><?php echo $value['name'] ?></td>
			                  </tr>
			                <?php } ?>
			              </tbody>
			            </table>
					<!-- <div class="list-group">
						<?php foreach ($category as $key =>$value): ?>
							<a href="category.php?san-pham=<?php echo $value['name'] ?>" class="list-group-item"><?php echo $value['name']?></a> 			
						<?php endforeach ?>
					</div> -->
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">DANH SÁCH TRƯỜNG THCS<bt> THÀNH PHỐ HÀ NỘI</h3>
				</div>
				<div class="panel-body">
					<?php foreach ($blog as $key =>$value): ?>
						

						<div class="col-md-4">
							<div class="thumbnail">
								<img src="../upload/<?php echo $value['image'] ?>" style="height: 150px" alt="">
								<div class="caption" style="color: black">
									<td style="color: blue"><?php echo $value['name'] ?></td>
									<p>
										<a href="product_detall.php?sp=<?php echo $value['name']?>" class="btn btn-primary"><!-- <i class="glyphicon glyphicon-list-alt"></i> -->Xem chi tiết</a>
										<a href="product_detall.php?sp=<?php echo $value['name']?>" class="btn btn-danger"><!-- <i class="glyphicon glyphicon-list-alt"></i> -->Google map</a>
									</p>
								</div>
							</div>
						</div>
					<?php endforeach  ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include'footer.php';
?>