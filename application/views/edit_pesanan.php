<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Roemah Oleh - Dashboard</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center"
				href="<?php echo base_url()?>view/home.php">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin Roemah oleh <sup></sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url('welcome/homeadmin');?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Aplikasi
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('index.php/welcome/data_user');?>">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Data user</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('welcome/data_pesanan');?>">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Data Pesanan</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('welcome/data_makanan');?>">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>List Kue</span></a>
			</li>



			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

			<!-- Sidebar Message -->
			<div class="sidebar-card d-none d-lg-flex">
				<img class="sidebar-card-illustration mb-2" src="<?php echo base_url()?>assets/img/undraw_rocket.svg"
					alt="...">
				<p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
					and more!</p>
				<a class="btn btn-success btn-sm"
					href="<?php echo base_url()?>assets/https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
					Pro!</a>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->
					<form
						class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
								aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="<?php echo base_url()?>assets/#"
								id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							
                        </li>
						<li><?php echo anchor ('data/logout', 'Logout') ?></li>

						<!-- Nav Item - Alerts -->
						

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
						<a href="<?php echo base_url('index.php/welcome/admin')?>admin"
							class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
								class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
					</div>

					<!-- Content Row -->
					<div class="container-fluid px-4">
					<h1 class="mt-4">Edit User</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active"></li>

					</ol>

					<div class="container ">
						<div>
							<?php foreach($pesanan as $psn): ?>
							<form action="<?php echo base_url().'/pesanan_c/update' ?>" method="post" >
								<input type="hidden" name="id_pesanan" placeholder="Id_pesanan"
									class="form-control rounded-pill mt-3 mb-3" value="<?php echo $psn->id_pesanan ?>">
						</div><br>
						<div class="form-group">
							<label>Nama </label>
							<br>
							<input type="text" name="nama" class="form-control rounded-pill mt-3"
								value="<?php echo $psn->nama ?>">
						</div><br>
						<div class="form-group">
							<label>Nama Makanan </label>
							<br>
							<input type="text" name="m_dipilih" class="form-control rounded-pill mt-3"
								value="<?php echo $psn->m_dipilih ?>">
						</div><br>
                        <div class="form-group">
							<label>Jumlah </label>
							<br>
							<input type="text" name="jumlah" class="form-control rounded-pill mt-3"
								value="<?php echo $psn->jumlah ?>">
						</div><br>
                        <div class="form-group">
							<label>Total </label>
							<br>
							<input type="text" name="total" class="form-control rounded-pill mt-3"
								value="<?php echo $psn->total ?>">
						</div><br>
						<div class="form-group">
							<label>Harga Satuan </label>
							<br>
							<input type="text" name="har_satuan" class="form-control rounded-pill mt-3"
								value="<?php echo $psn->har_satuan ?>">
						</div><br>

						<div class="form-group">
							<button class="btn btn-success mt-3 baris2" name="Submit"><i class="fa fa-plus"></i>
								Simpan</button>
							<a href="<?php echo base_url('/welcome/data_pesanan'); ?>"
								class="btn btn-warning btn-flat mt-3 baris2">
								<i class="fa fa-undo"></i> Kembali</a>
						</div><br>
						</form>
					</div>
					<?php endforeach; ?>
				</div>

					<!-- Footer -->
					<footer class="sticky-footer bg-white">
						<div class="container my-auto" style="">
							<div class="copyright text-center my-auto">
								<span>Copyright &copy; Roemah oleh 2021</span>
							</div>
						</div>
					</footer>
					<!-- End of Footer -->

				</div>
				<!-- End of Content Wrapper -->

			</div>
			<!-- End of Page Wrapper -->

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="<?php echo base_url()?>assets/#page-top">
				<i class="fas fa-angle-up"></i>
			</a>

			<!-- Logout Modal-->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">??</span>
							</button>
						</div>
						<div class="modal-body">Select "Logout" below if you are ready to end your current session.
						</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							<a class="btn btn-primary" href="<?php echo base_url()?>assets/login.html">Logout</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Bootstrap core JavaScript-->
			<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
			<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

			<!-- Core plugin JavaScript-->
			<script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

			<!-- Custom scripts for all pages-->
			<script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

			<!-- Page level plugins -->
			<script src="<?php echo base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

			<!-- Page level custom scripts -->
			<script src="<?php echo base_url()?>assets/js/demo/chart-area-demo.js"></script>
			<script src="<?php echo base_url()?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
