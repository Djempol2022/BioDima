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
        <form action="" method="POST">
            @csrf
        <div class="row">
                <h4 class="fw-bold f-poppins">Pilih Paket</h4>
            </div>
            <div class="row">
                @foreach ($paket as $paket)
                <div class="col-6 mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="paket_id" id="flexRadioDefault1"  @if(session()->has('paket_id'))value='{{session()->get('paket_id')}}'@else value="{$paket->id}}" @endif id="paket_id">
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
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1" name="nama"@if(session()->has('nama'))value='{{session()->get('nama')}}'@else value="" @endif id="nama" placeholder="Masukan Nama Lengkap"  >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor WA</label>
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1" name="no_wa" @if(session()->has('no_wa'))value='{{session()->get('no_wa')}}'@else value="" @endif id="no_wa" placeholder="Masukan Nomor Wa">
            </div>
            <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Jenis Kelamin</label>
                <select aria-label="Default select example" class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100" id="jenis_kelamin"  @if(session()->has('jenis_kelamin'))value='{{session()->get('jenis_kelamin')}}' @endif id="jenis_kelamin" >
                <option selected disabled>Pilih Jenis Kelamin</option>           
                <option value="Laki-Laki"  @if(session()->has('jenis_kelamin')) selected @endif name="jenis_kelamin">Laki-laki</option>
                            <option value="Perempuan"  @if(session()->has('jenis_kelamin')) selected @endif name="jenis_kelamin">Perempuan</option>

                </select>
              
            </div>
            <div class="mb-3 form-group">
            <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Tanggal/Bulan/Tahun Lahir</label>
           
          
                <input class="uk-width-1-1 form-control rounded-pill form-non-danger f-poppins " placeholder="Pilih tanggal " name="tanggal_lahir" type="date" aria-label="Not clickable icon "  @if(session()->has('tanggal_lahir'))value='{{session()->get('tanggal_lahir')}}' @endif id="tanggal_lahir" >
              
            </div>
       

            </div>

            <!-- data transaksi -->
            <div class="row mt-5">
                <h4 class="fw-bold f-poppins">Data Transaksi </h4>
            </div>
            <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nama Bank</label>
                <input type="text" class="form-control rounded-pill form-non-danger f-poppins" name="nama_bank"  id="exampleFormControlInput1"  @if(session()->has('nama_bank'))value='{{session()->get('nama_bank')}}'@else value="" @endif id="nama_bank" placeholder="Masukan Nama Bank">
            </div>
            <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Cabang Bank</label>
                <select aria-label="Default select example" id="cabang_bank"  class = "form-select  rounded-pill form-non-danger f-poppins js-example-basic-single w-100">
                <option selected disabled>Pilih Cabang Bank</option>           
                <option value="Pontianak" @if(session()->has('cabang_bank')) selected @endif name="cabang_bank" >Pontianak</option>
                <option value="Semarang"  @if(session()->has('cabang_bank')) selected @endif name="cabang_bank">Semarang</option>
                      
                </select>
              
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor Rekening</label>
                <input type="text" name="nomor_rekening"  class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1"   @if(session()->has('nomor_rekening'))value='{{session()->get('nomor_rekening')}}'@else value="" @endif id="nomor_rekening" placeholder="Masukan Nomor Rekening">
            </div>
         
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Identitas</label>
                <input type="text" name="identitas"  class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1"  @if(session()->has('identitas'))value='{{session()->get('identitas')}}'@else value="" @endif id="identitas" placeholder="KTP/BPJS/NPWP?">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Nomor Identitas</label>
                <input type="text" name="nomor_identitas"  class="form-control rounded-pill form-non-danger f-poppins" id="exampleFormControlInput1"@if(session()->has('nomor_identitas'))value='{{session()->get('nomor_identitas')}}'@else value="" @endif id="nomor_identitas" placeholder="Masukan Nomor Identitas">
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
                    <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Total Paket</label>
                    <div class="col-6">
                
                      <h4 class="fw-bold f-poppins mt--1 mt-1" id="harga-paket">-</h4>
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
                  <input type="hidden" name="total_pembayaran" id="total_pembayaran_input">
                    </div>
                </div>
                <div class="row">
                <button type="submit" id="lanjut_transaksi" class="btn text-center  f-poppins rounded-pill btn-danger">
                    Lakukan Transaksi
                    </button>   
                </div>
                <div class="row">
                    <div class="col-6">
                        
                        <h4 class="fw-bold f-poppins mt--1 mt-1">Total Pembayaran</h4>
                    </div>
                    <div class="col-6">

                   
                    </div>
                </div>
               
                <!-- setelah transaksi -->
         </form> 
<!-- awal bayar -->
<div id="transferm">
                    <!-- akhir setelah transaksi -->
</div>
    
      <!-- akhir bayar -->
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
});
    </script>
    @include('pages.script-formulir-member')

<script type="module">
                        //fungsi tambah minus
                   //fungsi minus
                       
                    // //fungsi tambah
                    // $('#plus_produk').click(function (e) { 
                    //     e.preventDefault();
                    //     var x = $('#jumlah').val();
                    //     x++;
                    //     $('#jumlah').val(x);
                    //     var jumlah_barang = $('#jumlah').val();
                   
                    //     $('#paket_id').html('Rp' +paket_id)
                    //     $('#total__pembayaran').html('Rp '+total_harga);
                    //     $('#total_paket').html(jumlah_barang+' Unit Botol');
                    //     $('#total_paket_harga').html('Rp '+total_harga);
                    //     $('#ongkir_harga').html('Rp 10.000');
                    //     var subtotal = total_harga + 10000;
                    //     $('#total_pembayaran').html('Rp '+subtotal);
                    // });

                    
                        //akhir fungsi tambah minus
                        $('#lanjut_transaksi').click(function (e) { 
                            e.preventDefault();
                            // alert('Lanjut Transaksi Di Klik!');
                            //validation
                            var paket_id = $('#paket_id').val();
                            var paket_id = $('#nama').val();
                            var no_wa = $('#no_wa').val();
                            var jenis_kelamin = $('#jenis_kelamin').val();
                            // identitas
                            var tanggal_lahir = $('#tanggal_lahir').val();
                            var nama_bank = $('#nama_bank').val();
                            var cabang_bank = $('#cabang_bank').val();
                            var nomor_rekening = $('#nomor_rekening').val();
                            var identitas = $('#identitas').val();
                            var nomor_identitas = $('#nomor_identitas').val();
                            // akhir identitas
                            // alert(keluhan);
                            var provinsi = $('#provinsi').val();
                            var kota = $('#kota').val();
                            var alamat = $('#alamat').val();
                            var jumlah = $('#jumlah').val();
                            console.log('Nama : '+nama+'\nNomor Whatsapp : '+no_wa+'\nJenis_Kelamin : '+jenis_kelamin+' \nTanggal_Lahir : '+tanggal_lahir+'  \nNama_Bank : '+nama_bank+' \nCabang_Bank : '+cabang_bank+' \nNomor_Rekening : '+nomor_rekening+' \nIdentitas: '+jenis_identitas+' \nNomor_Identitas : '+nomor_identitas+' \nProvinsi : '+provinsi+'\nKota : '+kota+'\nAlamat Lengkap : '+alamat+'\nJumlah Barang : '+jumlah+);
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
                            if(jenis_kelamin == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(tanggal_lahir == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(nama_bank == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(cabang_bank == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(nomor_rekening == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(identitas == ''){
                                stop = 1;
                            }else{
                                stop = 0;
                            }
                            if(nomor_identitas == ''){
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
                                url: "/PesanMember",
                                data: {nama:nama,no_wa:no_wa,jenis_kelamin:jenis_kelamin,tanggal_lahir:tanggal_lahir,nama_bank:nama_bank,nomor_rekening:nomor_rekening,identitas:identitas,nomor_identitas:nomor_identitas,kota:kota,provinsi:provinsi,alamat:alamat,jumlah:jumlah},
                                // dataType: "dataType",
                                success: function (response) {
                                    $('#transferm').html(response.data);
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