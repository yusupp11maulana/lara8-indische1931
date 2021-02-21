@extends('website/layout/layout')
@section('title', 'History')
@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./asset/img/indische/bg3.png');">
    <div class="container" style="margin-top: -100px">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Riwayat Pemesanan</h1>
            <h3>Pemesanan Yang Telah Terselesaikan</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main main-raised mb-5 pb-5" style="margin-top: -200px">
    <div class="section cd-section" id="javascriptComponents">
      <div class="container mb-5">
        <!-- Table -->
        <h3 class="mb-4">Pesanan Hari ini</h3>
        <div class="table-responsive rounded">
          <table class="table align-items-center table-light bg-light">
            <thead align="center" class="thead-dark" id="thead-row">
              <tr>
                <th scope="col" class="sort" >ID Detail   </th>
                <th scope="col" class="sort" >Nama Menu</th>
                <th scope="col" class="sort" >Jumlah</th>
                <th scope="col" class="sort" >Harga</th>
                <th scope="col" class="sort" >Total Harga</th>
                <th scope="col" class="sort" >Keterangan</th>
              </tr>
            </thead>
            <tbody class="list thead-dark">
                <tr align="center">
                  <td>ID</td>
                  <td>NAMA MENU</td>
                  <td>jumlah_order</td>
                  <td>Harga menu</td>
                  <td>Harga order</td>
                  <td><span class="badge badge-warning">Warning</span>
                    </td>
                </tr>
                <tr align="center">
                  <td>ID</td>
                  <td>NAMA MENU</td>
                  <td>jumlah_order</td>
                  <td>Harga menu</td>
                  <td>Harga order</td>
                  <td><span class="badge badge-success">Success</span></td>
                </tr>
            </tbody>
          </table>
        </div>
        <!-- /Table -->
      </div>
    </div>
  </div>
  <div class="container bg-warning rounded">
    <div class="section cd-section" id="javascriptComponents">
      <div class="container mb-5">
        <!-- Table -->
        <h3 class="mb-4 text-light">Riwayat Pemesanan</h3>
        <div class="table-responsive rounded">
          <table class="table align-items-center table-light bg-light mb-4">
            <thead align="center" class="thead-dark" id="thead-row">
              <tr>
                <th scope="col" class="sort" >ID Pesanan</th>
                <th scope="col" class="sort" >Tanggal Order</th>
                <th scope="col" class="sort" >Meja</th>
                <th scope="col" class="sort" >Jumlah Menu</th>
                <th scope="col" class="sort" >Total</th>
                <th scope="col" class="sort" >Nominal</th>
                <th scope="col" class="sort" >Kembalian</th>
                <th scope="col" class="sort" >Keterangan</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody class="list">
                <tr align="center">
                  <td>ID Order</td>
                  <td>Tanggal</td>
                  <td>Nama Meja</td>
                  <td>Jumlah Order</td>
                  <td>Total Harga</td>
                  <td>Pemayaran</td>
                  <td>Kembalian</td>
                  <td><span class="badge badge-warning">Belum Terbayar</span></td>
                  <td><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal" type="button">
                      <span class="btn-inner--text">Detail Order</span>
                    </button>
                  </td>
                </tr>
                <tr align="center">
                  <td>ID Order</td>
                  <td>Tanggal</td>
                  <td>Nama Meja</td>
                  <td>Jumlah Order</td>
                  <td>Total Harga</td>
                  <td>Pemayaran</td>
                  <td>Kembalian</td>
                  <td><span class="badge badge-success">Terbayar</span></td>
                  <td><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal" type="button">
                      <span class="btn-inner--text">Detail Order</span>
                    </button>
                  </td>
                </tr>
                <!-- Classic Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Detail Pesanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <i class="material-icons">clear</i>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="container">
                          <div class="row">
                            <div class="col">
                              <p>NAMA MENU</p>
                            </div>
                            <div class="col">
                              <p>Jumlah order Pax</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              <!--  End Modal -->
            </tbody>
          </table>
        </div>
        <!-- /Table -->
      </div>
    </div>
  </div>
  <!-- Footer -->
    <div class="section section-download" id="downloadSection" style="margin-top: -150px">
      <div class="container">
        <div class="sharing-area text-center">
          <div class="row justify-content-center">
            <h3>Thank you for supporting us!</h3>
          </div>
          <a id="instagram" class="btn btn-raised btn-instagram" href="https://www.instagram.com/indische1931" rel="nofollow">
            <i class="fa fa-instagram"></i>
            Instagram
          </a>
          <a id="github" href="https://indischegroup.com/" target="_blank" class="btn btn-raised btn-github" rel="nofollow">
            <i class="fa fa-chrome"></i>
            Indischegroup
          </a>
        </div>
      </div>
    </div>
    <!-- Footer -->
@endsection