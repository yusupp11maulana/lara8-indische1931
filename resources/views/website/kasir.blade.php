<!DOCTYPE html>
<html lang="en">
<head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - Kasir</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="assets/css/White.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">
	 <!-- Argon datepicker -->
    <script type="text/javascript" src="assets/js/digitalDate.js"></script>

	<!-- ICON WEB -->
	<link rel="icon" type="image/png" href="./asset/img/indische/logo.png">
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
							<img src="assets/images/avatar/avatar-2.png" alt="Profile">
						</div>
						<div class="dropdown-menu" aria-labelledby="dropdownProfile">			 
							<div class="dropdown-divider"></div>
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
						<a href="<?= base_url()?>kasir" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url()?>kasir/bill" class="items">
							<i class="fa fa-dollar-sign"></i>
							<span>Bill</span>
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
			<!-- TOP CONTENT -->
				<div class="col-md-6 col-lg-4">
					<div class="card" style="border-radius: 10px">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-clipboard-list icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Orders Total</p>
									<h5><?= $order?></h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="card" style="border-radius: 10px">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-hamburger icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Foods Today</p>
									<h5><?= $foods?></h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="card" style="border-radius: 10px">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-coffee  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Beverages Today</p>
									<h5><?= $bev?></h5>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- /TOP CONTENT -->

			<!-- Main CONTENT -->
				<div class="col-lg-12">
					<div class="card bg-light" style="border-radius: 7px">
						<div class="container" style="padding-top: 2%; margin-bottom: 1%">
							<h5>DETAIL ORDERS</h5>
						</div>
						<div class="table-responsive">
							<table class="table align-items-center table-light bg-light">
								<thead align="center" class="thead-dark" id="thead-row">
									<tr>
										<th scope="col" class="sort" >ID Pesanan</th>
										<th scope="col" class="sort" >Nama Customer</th>
										<th scope="col" class="sort" >Tanggal Order</th>
										<th scope="col" class="sort" >Waktu</th>
										<th scope="col" class="sort" >Meja</th>
										<th scope="col" class="sort" >Total</th>
                                        <th scope="col" class="sort" >Pembayaran</th>
										<th scope="col" class="sort" >Kembalian</th>
										<th scope="col" class="sort" >Keterangan</th>
									</tr>
								</thead>
								<tbody class="list">
									<?php foreach($orderan as $o) :?>
										<tr align="center">
											<td><?= $o['id_order']?></td>
											<td><?= $o['nama_customer']?></td>
											<td><?= $o['tgl_order']?></td>
											<td><?= $o['waktu_order'];?></td>
											<td><?= $o['nama_meja']?></td>
											<td><?= $o['total_harga']?></td>
											<td><?= $o['pembayaran']?></td>
											<td><?= $o['kembalian']?></td>
											<?php if($o['status_bayar']=="Belum Terbayar"){?>
												<td><span class="badge badge-danger"><?= $o['status_bayar'];?></span></td>
											<?php } else{?>
												<td><span class="badge badge-success"><?= $o['status_bayar'];?></span></td>
											<?php };?>
										</tr>
									<?php endforeach;?>
								</tbody>
								
							</table>
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
	<script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/js/script.js"></script>
 </body>
</html>