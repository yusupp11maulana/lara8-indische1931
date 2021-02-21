@extends('website/layout/layout')
@section('title', 'Order')
@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./asset/img/indische/bg2.png');">
    <div class="container" style="margin-top: -100px">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Pemesanan Menu</h1>
            <h3>Segera Lakukan Pemesanan Menu</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised mb-5" style="margin-top: -200px">
    <!-- Denah -->
      <div class="section">
        <div class="container text-center">
          <h2 class="title">Denah Kafe</h2>
          <img src="./asset/img/indische/denah.png" alt="" style="width: 50%">
        </div>
      </div>
    <!-- /Denah-->

    <!-- MENU -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="container">
            <div class="row"><h2 class="title">Menu Minuman</h2></div>
            <div class="row"><img src="./asset/img/indische/minuman.png" alt="" style="width: 80%"></div>
          </div>
        </div>
        <div class="col">
          <div class="container">
            <div class="row"><h2 class="title">Menu makanan</h2></div>
            <div class="row"><img src="./asset/img/indische/makanan.png" alt="" style="width: 80%"></div>
          </div>        
        </div>
      </div>
    </div>
    <!-- /Menu -->

    <!-- FORM Menu Minuman -->
    <form action="Order/addbev" method="POST">
      <div class="container">
        <div id="inputs" class="ml-5 pl-5">
          <div class="row ml-5 pl-5">
            <div class="col-lg-4 col-sm-4 mt-4 ml-5">
              <div class="form-group">
                <select class="form-control pl-3" name="idmenu">
                  <option disabled selected style="font-weight: bold; color: #8C6232">- Pilih Menu Minuman -</option>
                    <option value="Minuman">Minuman</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4">
              <div class="form-group">
                <label for="exampleInput1" class="bmd-label-floating">Total Pesanan</label>
                <input type="number" class="form-control" id="exampleInput1" name="jumlah">
              </div>
            </div>
                <input type="text" class="form-control" id="exampleInput1" name="kodedet" value="" hidden>
                <input type="text" class="form-control" id="exampleInput1" name="noktp" value="" hidden>
                <input type="text" class="form-control" id="exampleInput1" name="kodeord" value="" hidden>
            <div class="col-lg-3 col-sm-4 mt-4">
              <div class="form-group">
                <button type="Submit" class="btn btn-info btn-sm">Tambahkan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Form Menu Minuman-->

    <!-- FORM Menu makanan -->
    <form action="Order/addbev" method="POST">
      <div class="container">
        <div id="inputs" class="ml-5 pl-5">
          <div class="row ml-5 pl-5">
            <div class="col-lg-4 col-sm-4 mt-4 ml-5">
              <div class="form-group">
                <select class="form-control pl-3" name="idmenu">
                  <option disabled selected style="font-weight: bold; color: #8C6232">- Pilih Menu Makanan -</option>
                    <option value="makanan">Makanan</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4">
              <div class="form-group">
                <label for="exampleInput1" class="bmd-label-floating">Total Pesanan</label>
                <input type="number" class="form-control" id="exampleInput1" name="jumlah">
              </div>
            </div>
            <input type="text" class="form-control" id="exampleInput1" name="kodedet" value="" hidden>
            <input type="text" class="form-control" id="exampleInput1" name="noktp" value="" hidden>
            <input type="text" class="form-control" id="exampleInput1" name="kodeord" value="" hidden>
            <div class="col-lg-3 col-sm-4 mt-4">
              <div class="form-group">
                <button type="Submit" class="btn btn-info btn-sm">Tambahkan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Form Menu makanan-->

    <div class="container">
      <h3 class="ml-5">Keranjang</h3>
      <div class="container text-center">
        <table class="table">
          <tbody>
              <tr>
                <td>NAMA</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Harga Order</td>
                <td><a href="" title="Delete"><button class="btn btn-sm btn-danger" type="button">
                      <span class="btn-inner--text">Delete</span>
                    </button>
                  </a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="container">
      <h4 class="ml-5">Harga Total : Rp Hatot</h4>
    </div>

    <!-- Form Transaksi -->
    <form action="Order/addorder" method="POST">
      <div class="container">
        <div id="inputs" class="ml-5 pl-5">
          <div class="row ml-5 pl-5">
            <div class="col-lg-4 col-sm-4 mt-4 ml-5">
              <div class="form-group">
                <select class="form-control pl-3" name="meja">
                  <option disabled selected style="font-weight: bold; color: #8C6232">- Pilih Meja -</option>
                    <option value="1">MEJA 1</option>
                </select>
              </div>
            </div>
            <input type="text" class="form-control" id="exampleInput1" name="noktp" value="" hidden>
            <input type="text" class="form-control" id="exampleInput1" name="hatot" value="" hidden>
            <input type="text" class="form-control" id="exampleInput1" name="kodeord" value="" hidden>
            <div class="col-lg-3 col-sm-4 mt-4">
              <div class="form-group">
                <button type="Submit" class="btn btn-success btn-round">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- /Form Transaksi -->

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
  </div>
@endsection