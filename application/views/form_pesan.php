<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Colorlib Templates">
	<meta name="author" content="Colorlib">
	<meta name="keywords" content="Colorlib Templates">

	<!-- Title Page-->
	<title>Roemah Olehku || Pesanan</title>

	<!-- Icons font CSS-->
	<link href="<?php echo base_url()?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
		media="all">
	<link href="<?php echo base_url()?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
		media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">

	<!-- Vendor CSS-->
	<link href="<?php echo base_url()?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url()?>assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet" media="all">
	<!-- Perhitungan-->
	<script LANGUAGE="JavaScript">
		function kali() {

			a = eval(form.har_satuan.value);
			b = eval(form.jumlah.value);
			c = a * b
			form.total.value = c;
		}

	</script>
</head>

<body>
	<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
		<div class="wrapper wrapper--w960">
			<div class="card card-2">
				<div class="card-heading"></div>
				<div class="card-body">
					<h2 class="title">Pesanan</h2>
					<form method="POST" name="form" action="<?php echo base_url('pesanan_c/aksi_input'); ?>">
						<div class="input-group">
							<input class="input--style-2" type="text" placeholder="Nama Pelanggan" name="nama">
						</div>
						<div class="input-group">
							<input class="input--style-2" type="text" placeholder="Nama Makanan" name="m_dipilih">
						</div>
						<div class="input-group">
							<input class="input--style-2" type="text" placeholder="Harga" name="har_satuan">
						</div>
						<div class="input-group">
							<input class="input--style-2" type="text" placeholder="jumlah" name="jumlah">
						</div>
						<div class="input-group">
							<input class="input--style-2" type="text" placeholder="Total" name="total">
						</div>
						<div class="p-t-30">
							<input class="btn btn--radius btn--green" type="button" onclick="kali()" value="Hitung"
								style="width:90px">
								<button class="btn btn--radius btn--green" type="submit">Pesan</button>
                                <a href="<?php echo base_url('/pesanan_c/index2'); ?>"
								class="btn btn--radius btn--green">
								<i class="fa fa-undo"></i> Kembali</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Jquery JS-->
	<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
	<!-- Vendor JS-->
	<script src="<?php echo base_url()?>assets/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/datepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/datepicker/daterangepicker.js"></script>

	<!-- Main JS-->
	<script src="<?php echo base_url()?>assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
