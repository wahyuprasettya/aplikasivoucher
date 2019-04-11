<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
							<!-- <h6>Aplikasi Voucher Sederhana</h6> -->
								<div><br></div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							
						</div>
						<div class="pull-right">
						</div>
					</div>
					<center><u><h4>Aplikasi Voucher Makanan</h4></u></center> <br><br><br>
					<?php 
				  		if(isset($_GET['kodevoucher'])){
							if($_GET['kodevoucher'] == "salah"){
								echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Kode voucher Tidak di temukan!</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>';
							}
						}

						if(isset($_GET['harga'])){
							if($_GET['harga'] == "salah"){
								echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Maaf harga harus melebihi Rp.500!</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>';
							}
						}
						?>

					<form method="post" action="proses.php">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Harga Makanan</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Masukan Harga Makanan" name="jumlbyar">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kode Voucher</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Masukan Kode Voucher"name="kode">
							</div>
						</div>
						<button type="submit" class="btn btn-success" name="proses">Bayar</button><br><br>
						<hr>
						<h6>(* Masukan Harga makanan  </h6><br>
						<h6> Kode voucher "dibayarinwahyu" akan mendapatkan diskon Rp.500 </h6><br>
					<form>
						</div>
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>