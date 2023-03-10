<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: login.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
	$data_jabatan = $_SESSION["ses_jabatan"];
}

//KONEKSI DB
include "inc/koneksi.php";

$sql = $koneksi->query("SELECT * from tb_profil");
while ($data = $sql->fetch_assoc()) {

	$nama = $data['nama_kantor'];
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DUMAS BIDPROPAM</title>
	<link rel="icon" href="dist/img/logo_propam.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
	<!-- Bootstrap Styles-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- Custom Styles-->
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='assets/fonts/Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>
								<?php echo $nama; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">

			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/logo_propam.png" alt="AdminLTE Logo" class="brand-image" style="opacity: 10">
				<span class="brand-text">DUMAS BIDPROPAM</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->

				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/logo_user.png" class="img-circle elevation-1" alt="User Image">
					</div>

					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_jabatan; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level == "Administrator") {
						?>

							<!-- END Level  -->

							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
									</p>
								</a>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-flag"></i>
									<p>
										MASTER DATA
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">

									<li class="nav-item">
										<a href="?page=data-peldum" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Data DUMAS</p>
										</a>
									</li>


									<ul class="nav nav-treeview">
									</ul>

									<li class="nav-item">
										<ul class="nav nav-treeview">
										</ul>
									</li>

							</li>
					</ul>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-flag"></i>
							<p>
								JENIS PELAYANAN
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">

							<li class="nav-item">
								<a href="?page=data-baru" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Laporan Baru</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-disposisi" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Disposisi</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-dumas" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Perkembangan DUMAS</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-hapus" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Pencabutan Laporan</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-hasil" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Hasil Penyelidikan</p>
								</a>
							</li>
							<ul class="nav nav-treeview">
							</ul>

							<li class="nav-item">
								<ul class="nav nav-treeview">
								</ul>
							</li>

					</li>
					</ul>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-flag"></i>
							<p>
								LAPORAN
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">

						<li class="nav-item">
								<a href="?page=cetak-baru" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Laporan Baru</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-disposisi" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Disposisi</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-dumas" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Perkembangan DUMAS</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-hapus" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Pencabutan Laporan</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-hasil" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Hasil Penyelidikan</p>
								</a>
							</li>

						</ul>
					</li>



					<li class="nav-header">Setting</li>
					<li class="nav-item">
						<a href="?page=data-profil" class="nav-link">
							<i class="nav-icon far fa fa-bars"></i>
							<p>
								Profil Instansi
							</p>
						</a>
					</li>


					<li class="nav-item">
						<a href="?page=data-pejabat" class="nav-link">
							<i class="nav-icon far fa fa-user"></i>
							<p>
								Pejabat Instansi
							</p>
						</a>
					</li>

					<li class="nav-item">
						<a href="?page=data-pengguna" class="nav-link">
							<i class="nav-icon far fa-user"></i>
							<p>
								Pengguna Sistem
							</p>
						</a>
					</li>

				<?php
						} elseif ($data_level == "Sekretaris") {
				?>

					<li class="nav-item">
						<a href="index.php" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-flag"></i>
							<p>
								Jenis Layanan
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">

							<li class="nav-item">
								<a href="?page=data-baru" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Laporan Baru</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-disposisi" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Disposisi</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-dumas" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Perkembangan DUMAS</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-hapus" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Pencabutan Laporan</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=data-hasil" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Hasil Penyelidikan</p>
								</a>
							</li>
							<ul class="nav nav-treeview">
							</ul>

							<li class="nav-item">
								<ul class="nav nav-treeview">
								</ul>
							</li>

					</li>
					</ul>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-flag"></i>
							<p>
								Laporan
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">

							<li class="nav-item">
								<a href="?page=cetak-baru" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Laporan Baru</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-disposisi" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Disposisi</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-dumas" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Perkembangan DUMAS</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-hapus" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Pencabutan Laporan</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="?page=cetak-hasil" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Hasil Penyelidikan</p>
								</a>
							</li>

						</ul>
					</li>

				<?php
						}
				?>

				<li class="nav-item">
					<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
						<i class="nav-icon far fa-circle text-danger"></i>
						<p>
							Logout
						</p>
					</a>
				</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];

						switch ($hal) {
								//Klik Halaman Home Pengguna
							case 'admin':
								include "admin/wp/data_wp.php";
								break;
							case 'sekretaris':
								include "admin/wp/data_wp.php";
								break;

								//Pengguna
							case 'data-pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
							case 'add-pengguna':
								include "admin/pengguna/add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;

								//master data - peldum
							case 'data-peldum':
								include "admin/peldum/data_peldum.php";
								break;
							case 'add-peldum':
								include "admin/peldum/add_peldum.php";
								break;
							case 'edit-peldum':
								include "admin/peldum/edit_peldum.php";
								break;
							case 'del-peldum':
								include "admin/peldum/del_peldum.php";
								break;

								//master data - peldum							
							case 'cetak-peldum':
								include "admin/peldum/cetak_lap_peldum.php";
								break;


								//jenis pelayanan - baru							
							case 'data-baru':
								include "admin/surat/baru/data_baru.php";
								break;
							case 'add-baru':
								include "admin/surat/baru/add_baru.php";
								break;
							case 'del-baru':
								include "admin/surat/baru/del_baru.php";
								break;
							case 'edit-baru':
								include "admin/surat/baru/edit_baru.php";
								break;

								//jenis pelayanan - cetak baru							
							case 'cetak-baru':
								include "admin/cetak/baru/cetak_baru.php";
								break;


								//jenis pelayanan - disposisi
							case 'data-disposisi':
								include "admin/surat/disposisi/data_disposisi.php";
								break;
							case 'add-disposisi':
								include "admin/surat/disposisi/add_disposisi.php";
								break;
							case 'del-disposisi':
								include "admin/surat/disposisi/del_disposisi.php";
								break;
							case 'edit-disposisi':
								include "admin/surat/disposisi/edit_disposisi.php";
								break;

								//jenis pelayanan - cetak disposisi							
							case 'cetak-disposisi':
								include "admin/cetak/disposisi/cetak_disposisi.php";
								break;

								//jenis pelayanan - dumas
							case 'data-dumas':
								include "admin/surat/dumas/data_dumas.php";
								break;
							case 'add-dumas':
								include "admin/surat/dumas/add_dumas.php";
								break;
							case 'del-dumas':
								include "admin/surat/dumas/del_dumas.php";
								break;
							case 'edit-dumas':
								include "admin/surat/dumas/edit_dumas.php";
								break;

								//jenis pelayanan - cetak dumas							
							case 'cetak-dumas':
								include "admin/cetak/dumas/cetak_dumas.php";
								break;

								//jenis pelayanan - hapus
							case 'data-hapus':
								include "admin/surat/hapus/data_hapus.php";
								break;
							case 'add-hapus':
								include "admin/surat/hapus/add_hapus.php";
								break;
							case 'del-hapus':
								include "admin/surat/hapus/del_hapus.php";
								break;
							case 'edit-hapus':
								include "admin/surat/hapus/edit_hapus.php";
								break;

								//jenis pelayanan - cetak hapus							
							case 'cetak-hapus':
								include "admin/cetak/hapus/cetak_hapus.php";
								break;

								//jenis pelayanan - hasil
							case 'data-hasil':
								include "admin/surat/hasil/data_hasil.php";
								break;
							case 'add-hasil':
								include "admin/surat/hasil/add_hasil.php";
								break;
							case 'del-hasil':
								include "admin/surat/hasil/del_hasil.php";
								break;
							case 'edit-hasil':
								include "admin/surat/hasil/edit_hasil.php";
								break;

								//jenis pelayanan - cetak hasil							
							case 'cetak-hasil':
								include "admin/cetak/hasil/cetak_hasil.php";
								break;


								//profile
							case 'data-profil':
								include "admin/profil/data_profil.php";
								break;
							case 'edit-profil':
								include "admin/profil/edit_profil.php";
								break;


								//pejabat
							case 'data-pejabat':
								include "home/data_pejabat.php";
								break;
							case 'add-pejabat':
								include "home/add_pejabat.php";
								break;
							case 'edit-pejabat':
								include "home/edit_pejabat.php";
								break;
							case 'del-pejabat':
								include "home/pejabat/del_pejabat.php";
								break;


								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					} else {
						// Auto Halaman Home Pengguna
						if ($data_level == "Administrator") {
							include "home/admin.php";
						} elseif ($data_level == "Sekretaris") {
							include "home/Sekretaris.php";
						}
					}
					?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="" href="#">
					<strong> MONPEL PBB-P2</strong>
				</a>
				All rights reserved.
			</div>
			<b>Created 2021</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	<!-- Chart.js -->
	<script type="text/javascript" src="plugins/chartjs/Chart.js"></script>
	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>