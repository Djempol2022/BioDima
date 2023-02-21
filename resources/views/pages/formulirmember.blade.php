@extends('layouts.index')
@section('konten')
<div class="container mt-5">
    <div class="row justify-content-center">
    <h4 class="text-center text-merah fw-bold f-poppins  ">Formulir Member</h4>
        <h3 class="text-center fw-bold f-poppins mt--1">Silahkan Isi Formulir untuk Melanjutkan Pembelian Produk</h3>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-secondary"><a href="#" class="text-secondary f-poppins">Home</a></li>
    <li class="breadcrumb-item active text-danger fw-bold f-poppins" aria-current="page">Member </li>
  </ol>
</nav>
    </div>
    <div class="row mt-5">
      
        <div class="col-lg-5 me-5">
        <form action="{{route('PesanMember')}}" method="POST">
            @csrf
        <div class="row">
                <h4 class="fw-bold f-poppins">Pilih Paket</h4>
            </div>
            <div class="row">
                @foreach ($paket as $paket)
                <div class="col-6 mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="{{$paket->id}}" name="paket_id" id="flexRadioDefault1">
                        @if ($paket->namapak == "Basic")
                        <label for="exampleFormControlInput1" class=" f-poppins text-secondary">{{$paket->namapak}}</label>
                        @elseif ($paket->namapak == "Consumer")
                        <label for="exampleFormControlInput1" class=" f-poppins text-success">{{$paket->namapak}}</label>
                        @elseif ($paket->namapak == "Profesional")
                        <label for="exampleFormControlInput1" class=" f-poppins text-primary">{{$paket->namapak}}</label>
                        @elseif ($paket->namapak == "Executive")
                        <label for="exampleFormControlInput1" class=" f-poppins text-warning">{{$paket->namapak}}</label>
                        @endif
                        <h6 class="fw-bold f-poppins mt-1 mb-1 text-besak ">Rp.{{$paket->harga}}</h6>
                        <small class="f-poppins mt--1" >{{$paket->keterangan}}</small>
                    </div>
                </div>
               
                @endforeach
                
            </div>
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Data Diri </h4>
            </div>
            <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nama Lengkap</label>
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1" name="nama" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor WA</label>
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1" name="no_wa"  placeholder="Masukan Nomor Wa">
            </div>
            <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Jenis Kelamin</label>
                <select aria-label="Default select example" class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100" name="jenis_kelamin" >
                <option selected disabled>Pilih Jenis Kelamin</option>           
                <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>

                </select>
              
            </div>
            <div class="mb-3 form-group">
            <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Tanggal/Bulan/Tahun Lahir</label>
           
          
                <input class="uk-width-1-1 form-control rounded-pill form-non-danger f-poppins " placeholder="Pilih tanggal " name="tanggal_lahir" type="date" aria-label="Not clickable icon ">
              
            </div>
       

            </div>

            <!-- data transaksi -->
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Data Transaksi </h4>
            </div>
            <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nama Bank</label>
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" name="nama_bank"  id="exampleFormControlInput1" placeholder="Masukan Nama Bank">
            </div>
            <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Cabang Bank</label>
                <select aria-label="Default select example" name="cabang_bank"  class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                <option selected disabled>Pilih Cabang Bank</option>           
                <option value="Pontianak">Pontianak</option>
                <option value="Semarang">Semarang</option>
                      
                </select>
              
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor Rekening</label>
                <input type="text" name="nomor_rekening"  class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1" placeholder="Masukan Nomor Rekening">
            </div>
         
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Identitas</label>
                <input type="text" name="identitas"  class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1" placeholder="Masukan Tempat Lahir">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor Identitas</label>
                <input type="text" name="nomor_identitas"  class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1" placeholder="Masukan Nomor Identitas">
            </div>
          
       

    </div>
            <!-- akhir data transaksi -->
            <!-- alamat -->
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Alamat</h4>
            </div>

            <div class="row">
            <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Provinsi</label>
                <select aria-label="Default select example" name="provinsi"  class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                <option selected disabled>Pilih Provinsi</option>           
                <option value="Kalimantan Barat">Kalimantan barat</option>
                            

                </select>
              
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Kabupaten/kota</label>
                <select aria-label="Default select example" name="kota" class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                <option selected disabled>Pilih Kabupaten/kota</option>           
                <option value="Kota Pontianak">Kota Pontianak</option>
                            

                </select>
              
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Alamat Lengkap</label>
                <textarea name="alamat" class="form-control form-non-danger f-poppins" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            </div>
            <!-- akhir alamat -->
            <!-- akhhir -->
    
        </div>
        <div class="col-lg-2">

        </div>
        <div class="col-lg-4 float-end">
            <div class="row">
                    <h4 class="fw-bold f-poppins ">Informasi Biaya</h4>
            </div>
            <div class="row">
                    <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Paket</label>
                    <div class="col-6">
                
                        <h4 class="fw-bold f-poppins mt--1 mt-1">Basic</h4>
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