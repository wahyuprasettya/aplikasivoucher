
<?php session_start(); ?>
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
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Hasil Pembayaran</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
							</nav>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card box-shadow">
							<img class="card-img-top" src="vendors/images/img2.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title weight-500"></h5>
								<p class="card-text">Diskon : - 500 </p><br>
								<p class="card-text">Total Harga yang harus anda bayarkan : RP<?php echo $_SESSION['jumlahbyr'];?></p>
							</div>
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