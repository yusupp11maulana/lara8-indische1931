<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - Menu</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="<?= base_url()?>assets/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/White.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="<?= base_url()?>assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="<?= base_url()?>assets/vendors/lineawesome/css/line-awesome.min.css">
	 <!-- Argon datepicker -->
    <script type="text/javascript" src="<?= base_url()?>assets/js/digitalDate.js"></script>

	<!-- ICON WEB -->
	<link rel="icon" type="image/png" href="<?= base_url()?>asset/img/indische/logo.png">

</head>
<body onload="initClock()">
  
  <!--Topbar -->
	<div class="topbar transition bg-warning">
		<div class="bars">
			<button type="button" class="btn transition" id="sidebar-toggle">
				<i class="las la-bars"></i>
			</button>
		</div>
		<div style="left: 0; text-align: left;" class="datetime btn btn-gray10 text-white">
			<div class="date" style="padding-top: 3%">
				<span id="dayname">Day</span>,
				<span id="daynum">00</span>
				<span id="month">Month</span>
				<span id="year">Year</span>
			</div>
			<div class="time">
				<span id="hour">00</span>:
				<span id="minutes">00</span>:
				<span id="seconds">00</span>
				<span id="period">AM</span>
			</div>
		</div>
		<div class="menu">
			<ul>
				<li>
					<div class="dropdown">
						<div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<img src="<?= base_url()?>assets/images/avatar/avatar-2.png" alt="Profile">
						</div>
						<div class="dropdown-menu" aria-labelledby="dropdownProfile">					 
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url()?>admin">
								<i class="las la-user mr-2"></i> Halo Admin,
							</a>
							<a class="dropdown-item" href="<?= base_url()?>login/logout">
								<i class="las la-sign-out-alt mr-2"></i> Log Out
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars">
		<div class="logo">
			<h4 style="font-weight: 500;" class="mb-0">Indishe 1931 Cafe</h4>
		</div>

		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>

					<p class="menu">Apps</p>

					<li>
						<a href="<?= base_url()?>admin" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>
                    <li>
						<a href="<?= base_url()?>admin/karyawan" class="items">
							<i class="fa fa-users"></i>
							<span>Karyawan</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url()?>admin/menu" class="items">
							<i class="fa fa-book"></i>
							<span>Menu</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	<div class="content transition">
		<div class="container-fluid dashboard">
			<h3>Dashboard</h3>
		
			<div class="row">

			<!-- Main CONTENT -->
				<div class="col-lg-12">
					<div class="card bg-light" style="border-radius: 7px">
						<div class="container" style="padding-top: 2%; margin-bottom: 1%">
							<h5>DATA DAFTAR MENU</h5>
						</div>
						<div class="table-responsive">
							<table class="table align-items-center table-light bg-light">
								<thead align="center" class="thead-dark" id="thead-row">
									<tr>
										<th scope="col" class="sort" >ID Menu</th>
										<th scope="col" class="sort" >Nama Menu</th>
										<th scope="col" class="sort" >Harga</th>
                                        <th scope="col" class="sort" >Jenis</th>
                                        <th scope="col" class="sort" >Status</th>
										<th scope="col" class="sort" >Keterangan</th>
									</tr>
								</thead>
								<tbody class="list">
										<?php foreach ($menu as $m) :?>
										<tr align="center">
											<td><?= $m['id_menu'];?></td>
											<td><?= $m['nama_menu'];?></td>
											<td><?= $m['harga_menu'];?></td>
                                            <td><?= $m['jenis_menu'];?></td>
                                            <td><?= $m['ket_menu'];?></td>
											<td>
											<a href="upmenu/<?= $m['id_menu']; ?>"><button class="btn btn-sm btn-info">
													<span class="btn-inner--icon"><i class="fas fa-external-link-alt"></i></span>
													<span class="btn-inner--text">Actived</span>
												</button></a><a href="delmenu/<?=$m['id_menu']; ?>"><button class="btn btn-sm btn-danger">
													<span class="btn-inner--icon"><i class="fas fa-external-link-alt"></i></span>
													<span class="btn-inner--text">Deactivated</span>
												</button></a>
											</td>
										</tr>
										<?php endforeach;?>
								</tbody>
							</table>
						</div>
						<div class="container mt-3 mb-4 text-right">
							<button class="btn btn-md btn-success " data-toggle="modal" data-target="#AddModal" type="button">
								<span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
								<span class="btn-inner--text">Tambah Menu</span>
							</button>
						</div>

					</div>
				</div>
				<!-- Classic Modal -->
					<div class="modal fade" id="AddModal" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Tambah Menu</h5>
								</div>
								<div class="modal-body">
                                    <form role="form" action="<?= base_url()?>admin/addmenu" method="POST">
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <input style="padding-left: 10px"class="form-control" name="namamenu" placeholder="Nama Menu" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <input style="padding-left: 10px"class="form-control" name="hargamenu" placeholder="Harga" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <select class="custom-select" id="inputGroupSelect01" name="jenismenu">
													<option selected disabled>- Pilih Jenis -</option>
													<option value="Beverages">Beverages</option>
													<option value="Foods">Foods</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
			<!-- /Main CONTENT -->
			
			</div>
		
		</div>

	</div>

	<!-- Footer -->
	<div class="footer transition">
		<hr>
		<p>
			&copy; 2020 All Right Reserved by <a href="#" target="_blank">DWAdmin</a>
		</p>
	</div>

	<!-- Loader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<div class="loader-overlay"></div>

	<!-- Argon Scripts -->
    <script type="text/javascript">
        function updateClock() {
            var now = new Date();
            var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";

            if (hou >= 12) {
                pe = "PM";
            }
            if (hou == 0) {
                hou = 12;
            }
            if (hou > 12) {
                hou = hou - 12;
            }

            Number.prototype.pad = function(digits) {
                for (var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
            for (var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }

        function initClock() {
            updateClock();
            window.setInterval("updateClock()", 1);
        }
    </script>
	<!-- /Argon Scripts -->
	<!-- Library Javascipt-->
	<script src="<?= base_url()?>assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="<?= base_url()?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url()?>assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="<?= base_url()?>assets/js/script.js"></script>
 </body>
</html>