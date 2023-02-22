@extends('layouts.index')
@section('konten')
<div class="container mt-5">
    <div class="row justify-content-center">
    <h4 class="text-center text-merah fw-bold f-poppins  ">Formulir Garansi</h4>
        <h3 class="text-center fw-bold f-poppins mt--1">Silahkan Isi Formulir untuk Melanjutkan Pembelian Produk</h3>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-secondary"><a href="#" class="text-secondary f-poppins">Home</a></li>
    <li class="breadcrumb-item active text-danger fw-bold f-poppins" aria-current="page">Paket Garansi</li>
  </ol>
</nav>
    </div>
    <div class="row mt-5">
        <div class="col-lg-5 me-5">
            <!-- form pesan garansi -->
        <form action="{{route('PesanGaransi')}}" method="POST">
                @csrf
        <div class="row">
                <h4 class="fw-bold f-poppins">Barang</h4>
            </div>
            <div class="row">
                
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nama Lengkap</label>
                <div id="min_produk" class="col-3 col-md-2 d-flex justify-content-center mt-1">
                             <button class="btn btn-white ">-</button>
                </div>
                          <input type="number" id="qty_produk"   class="col-2 col-md-2 d-flex justify-content-center">
                <div id="plus_produk" class="col-3 col-md-2 d-flex justify-content-center mt-1">
               <button class="btn btn-danger"> +</button> 
                </div>

            </div>
            <hr style="width:100%; text-align:center; margin-left:0;  height: 3px; background-color: black;">
           
            <div class="row">
                <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Detail</label>
                <h4 class="fw-bold f-poppins mt-1  text-dark">3 Unit Botol</h4>
                </div>
                <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Total </label>
                <h4 class="fw-bold f-poppins mt-1  text-dark">Rp. 700.000,00</h4>
                </div>
                
           </div>
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Data Diri </h4>
            </div>
            <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nama Lengkap</label>
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" name="nama" id="exampleFormControlInput1" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor WA</label>
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" name="no_wa" id="exampleFormControlInput1" placeholder="Masukan Nomor Wa">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Keluhan Penyakit</label>
                <textarea type="text" class="form-control rounded-pill form-non-danger f-poppins" name="keluhan"  placeholder="Masukan Keluhan"></textarea>
            </div>

            </div>
            <!-- alamat --> 
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Alamat</h4>
            </div>

            <div class="row">
            <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Provinsi</label>
                <select aria-label="Default select example" class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                <option selected disabled>Pilih Provinsi</option>           
                <option value="Kalimantan Barat" name="provinsi">Kalimantan barat</option>
                            

                </select>
              
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Kabupaten/kota</label>
                <select aria-label="Default select example" class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                <option selected disabled>Pilih Kabupaten/kota</option>           
                <option value="Kota Pontianak" name="kota">Kota Pontianak</option>
                            

                </select>
              
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Alamat Lengkap</label>
                <textarea class="form-control form-non-danger f-poppins" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            </div>
            <!-- akhir alamat -->
        </div>
        <div class="col-lg-2">

        </div>
        <div class="col-lg-4 float-end">
            <div class="row">
                    <h4 class="fw-bold f-poppins ">Informasi Biaya</h4>
            </div>
            <div class="row">
                    <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Total Paket</label>
                    <div class="col-6">
                
                        <h4 class="fw-bold f-poppins mt--1 mt-1">1 Paket</h4>
                    </div>
                    <div class="col-6">

                    <h4 class="fw-bold f-poppins mt--1 mt-1 text-success float-end">Rp.200.000.000</h4>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Ongkos Kirim</label>
                    <div class="col-6">
                
                        <h4 class="fw-bold f-poppins mt--1 mt-1">JNE</h4>
                    </div>
                    <div class="col-6">

                    <h4 class="fw-bold f-poppins mt--1 mt-1 text-success float-end">Rp.200.000.000</h4>
                    </div>  
                    <div class="col-6">
                
                    <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Kode Unik</label>
                     </div>
                    <div class="col-6">
                            <h4 class="fw-bold f-poppins mt--1 mt-1 text-dark float-end">123</h4>
                    </div>  
            </div>
            <hr style="width:100%; text-align:center; margin-left:0;  height: 3px; background-color: black;">
                <div class="row">
                    <div class="col-6">
                        
                        <h4 class="fw-bold f-poppins mt--1 mt-1">Total Pembayaran</h4>
                    </div>
                    <div class="col-6">

                    <h4 class="fw-bold f-poppins mt--1 mt-1 text-success float-end">Rp.200.000.000</h4>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn text-center  f-poppins rounded-pill btn-danger">
                    
                    Lakukan Transaksi
                    </button>
                </div>
                <!-- setelah transaksi -->
        </form>
        <!-- akhir formgaransi -->
                <div class="row mt-5">
                    <h4 class="fw-bold f-poppins ">Transfer Pembayaran</h4>
                </div>
                <div class="row">
                    <ul>
                        <li>
                            <img src="{{asset('assets/bri.svg')}}" alt="">
                        </li>
                        <li class="mt-2 mb-2">
                        <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Sahroni</label>
                        </li>
                        <li>
                        <h6 class="fw-bold f-poppins mt--1  text-dark">149501005407500</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="{{asset('assets/bri.svg')}}" alt="">
                        </li>
                        <li class="mt-2 mb-2">
                        <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Sahroni</label>
                        </li>
                        <li>
                        <h6 class="fw-bold f-poppins mt--1  text-dark">149501005407500</h6>
                        </li>
                    </ul>
                </div>
                   <div class="row ">
                    <h4 class="fw-bold f-poppins ">Periode Pembayaran</h4>
                     <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Waktu yang Tersisa</label>
                   <!-- timestamp -->
                     <h4 class="fw-bold f-poppins ">07:00</h4> 
                     <!-- akhir timestamp -->
                </div>
                <div class="row ">
                    <h4 class="fw-bold f-poppins ">Transaksi</h4>
                    
                   <!-- form upload -->
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label f-poppins text-secondary">Upload Bukti Pembayaran</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                     <!-- akhir form upload -->
                     <button type="submit" class="btn text-center  f-poppins rounded-pill btn-danger">
                    
                   Upload & Konfirmasi
                    </button>
                </div>
                <!-- akhir setelah transaksi -->
        </div>
    </div>
</div>
<script>
    (function($) {
  'use strict';

  if ($(".js-example-basic-single").length) {
    $(".js-example-basic-single").select2();
  }
  if ($(".js-example-basic-multiple").length) {
    $(".js-example-basic-multiple").select2();
  }
})(jQuery);
    </script>
@endsection