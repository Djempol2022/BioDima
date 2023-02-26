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
        <form>
                @csrf
        <div class="row">
                <h4 class="fw-bold f-poppins">Barang</h4>
            </div>
            <div class="row">
                
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Jumlah Paket</label>
                <div id="min_produk" class="col-3 col-md-2 d-flex justify-content-center mt-1">
                             <button class="btn btn-white ">-</button>
                </div>
                     <input type="number" id="jumlah" value=0  class="col-2 col-md-2 d-flex justify-content-center" required>
                <div id="plus_produk" class="col-3 col-md-2 d-flex justify-content-center mt-1">
               <button class="btn btn-danger"> +</button> 
                </div>

            </div>
            <hr style="width:100%; text-align:center; margin-left:0;  height: 3px; background-color: black;">
           
            <div class="row">
                <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Detail</label>
                <h4 class="fw-bold f-poppins mt-1  text-dark" id="detail">-</h4>
                </div>
                <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Total </label>
                <h4 class="fw-bold f-poppins mt-1  text-dark" id="total_harga">-</h4>
                </div>
                
           </div>
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Data Diri </h4>
            </div>
            <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nama Lengkap</label>
                <input type="text" required class="form-control rounded-pill form-non-danger f-poppins" name="nama" @if(session()->has('nama'))value='{{session()->get('nama')}}'@else value="" @endif id="nama" placeholder="Masukan Nama Lengkap">  
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor WA</label>
                <input type="text" required class="form-control rounded-pill form-non-danger f-poppins" name="no_wa" @if(session()->has('no_wa'))value='{{session()->get('no_wa')}}'@else value="" @endif id="no_wa" placeholder="Masukan Nomor Wa">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Keluhan Penyakit</label>
                <input type="text" required class="form-control rounded-pill form-non-danger f-poppins" name="keluhan"  @if(session()->has('keluhan'))value='{{session()->get('keluhan')}}' @endif id="keluhan" placeholder="Masukan Keluhan">
            </div>

            
            <!-- alamat --> 
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Alamat</h4>
            </div>

            <div class="row">
            <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Provinsi</label>
                    <select required aria-label="Default select example" id="provinsi" class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                        <option  @if(session()->has('provinsi')) @else selected @endif disabled>Pilih Provinsi</option>           
                        <option value="Kalimantan Barat" @if(session()->has('provinsi')) selected @endif name="provinsi">Kalimantan barat</option>
                    </select>        
           
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Kabupaten/kota</label>
                    <select required aria-label="Default select example" id="kota" class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                   on @if(session()->has('kota')) selected @endif value="Kota Pontianak" name="kota">Kota Pontianak</option>
                    </select> 
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Alamat Lengkap</label>
                <textarea required id="alamat" class="form-control form-non-danger f-poppins" rows="3">@if(session()->has('alamat')) {{session()->get('alamat')}} @endif</textarea>
            </div>

</div>
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
                
                      <h4 class="fw-bold f-poppins mt--1 mt-1" id="total_paket">-</h4>
                    </div>
                    <div class="col-6">

                  <h4 class="fw-bold f-poppins mt--1 mt-1 text-success float-end" id="total_paket_harga">-</h4>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Ongkos Kirim</label>
                    <div class="col-6">
                
                        <h4 class="fw-bold f-poppins mt--1 mt-1">JNE</h4>
                    </div>
                    <div class="col-6">

                            <h4 class="fw-bold f-poppins mt--1 mt-1 text-success float-end" id="ongkir_harga">-</h4>
                    </div>  
             </div>  
             <div class="row">                 
                   <div class="col-6">
                
                            <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Kode Unik</label>
                     </div>
                        <div class="col-6">
                        <h4 class="fw-bold f-poppins mt--1 mt-1 text-dark float-end" id="kode_unik">-</h4>
                        </div>  
                </div>
     
            <hr style="width:100%; text-align:center; margin-left:0;  height: 3px; background-color: black;">
                <div class="row">
                    <div class="col-6">
                        
                        <h4 class="fw-bold f-poppins mt--1 mt-1">Total Pembayaran</h4>
                    </div>
                    <div class="col-6">

                  <h4 class="fw-bold f-poppins mt--1 mt-1 text-success float-end" id="total_pembayaran">-</h4>
                    </div>
                </div>
                <div class="row">
                <button type="submit" id="lanjut_transaksi" class="btn text-center  f-poppins rounded-pill btn-danger">
                    Lakukan Transaksi
                    </button>   
                </div>
                <!-- setelah transaksi -->
        </form>
        <!-- akhir formgaransi -->
        <form action="{{route('BayarGaransi')}}" method="POST" >
            @csrf
            <div id="transfer">
                    <!-- akhir setelah transaksi -->
            </div>
        </form>
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
})
    </script>
    <script type="module">
                        //fungsi tambah minus
                        //fungsi minus
                        $('#min_produk').click(function (e) { 
                        e.preventDefault();
                        var x = $('#jumlah').val();
                        if(x > 0){
                            if(x == 1){
                                $('#detail').html("-");
                                $('#total_harga').html('-');
                                $('#total_pembayaran').html('Rp '+total_harga);
                                $('#total_paket').html('-');
                                $('#total_paket_harga').html('-');
                                $('#ongkir_harga').html('-');
                                $('#total_pembayaran').html('-');
                                x--;
                                $('#jumlah').val(x);
                            }else{
                                x--;
                                $('#jumlah').val(x);
                                var jumlah_barang = $('#jumlah').val();
                                var total_harga = x * 350000;
                                $('#total_harga').html('Rp '+total_harga);
                                // jumlah_barang = jumlah_barang - 3;
                                $('#detail').html(jumlah_barang+' Unit Botol');
                                $('#total_paket').html(jumlah_barang+' Unit Botol');
                                $('#total_paket_harga').html('Rp '+total_harga);
                                $('#total_pembayaran').html('Rp '+total_harga);
                            }
                        }
                        
                    });
                    //fungsi tambah
                    $('#plus_produk').click(function (e) { 
                        e.preventDefault();
                        var x = $('#jumlah').val();
                        x++;
                        $('#jumlah').val(x);
                        var jumlah_barang = $('#jumlah').val();
                        $('#detail').html(jumlah_barang+" Unit Botol");
                        var total_harga = x * 350000;
                        $('#total_harga').html('Rp '+total_harga);
                        $('#total_paket').html(jumlah_barang+' Unit Botol');
                        $('#total_paket_harga').html('Rp '+total_harga);
                        $('#ongkir_harga').html('Rp 10.000');
                        var subtotal = total_harga + 10000;
                        $('#total_pembayaran').html('Rp '+subtotal);
                    });

                    
                        //akhir fungsi tambah minus
                        $('#lanjut_transaksi').click(function (e) { 
                            e.preventDefault();
                            // alert('Lanjut Transaksi Di Klik!');
                            //validation
                            var nama = $('#nama').val();
                            var no_wa = $('#no_wa').val();
                            var keluhan = $('#keluhan').val();
                            // alert(keluhan);
                            var provinsi = $('#provinsi').val();
                            var kota = $('#kota').val();
                            var alamat = $('#alamat').val();
                            var jumlah = $('#jumlah').val();
                            console.log('Nama : '+nama+'\nNomor Whatsapp : '+no_wa+'\nKeluhan : '+keluhan+'\nProvinsi : '+provinsi+'\nKota : '+kota+'\nAlamat Lengkap : '+alamat+'\nJumlah Barang : '+jumlah);
                            var stop = 0;
                            if(nama == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(no_wa == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(keluhan == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(kota == null){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(provinsi == null){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(alamat == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(jumlah == 0){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(stop == 0){
                            // document.getElementById('transfer').style.display = 'block';
                            $.ajax({
                                type: "POST",
                                url: "/ajaxRequest",
                                data: {nama:nama,no_wa:no_wa,keluhan:keluhan,kota:kota,provinsi:provinsi,alamat:alamat,jumlah:jumlah},
                                // dataType: "dataType",
                                success: function (response) {
                                    $('#transfer').html(response.data);
                                    // alert(response.check);
                                }
                            });
                                
                            }
                            //end-validation
                            // document.getElementById('transfer').style.display = 'block';
                        });  
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