@extends('layouts.index')
@section('konten')
<!-- hero -->
    <div class="container">
    
        <div class="row">
            <div class="col-lg-6 pt-5 ">
                <div class="row pt-5 mt-5">
              <h1 class="f-poppins fw-bold " >
                              Produk <span class="text-merah"> Herbal</span> Dengan Kandungan 100% Berbahan <span class="text-merah">Alami dan Halal</span>
              </h1>  
            </div>
            <div class="row">
                <p class="f-poppins fw-bold  ">“Sehat itu <span class="text-merah">mudah,</span> sembuh itu <span class="text-merah">gampang</span>” </p>
            </div>
            <div class="row mt-3">
                <div class="col-6 col-md-3">
                    <a href="">
                    <button class="btn fw-poppins rounded-pill btn-danger">Daftar Member</button>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                <a href="">
                <button class="btn fw-poppins rounded-pill btn-non-danger">Daftar Member</button>
                </a>
                </div>
               
            </div>
            </div>
            <div class="col-lg-6">
                <div class="row justify-content-center pt-5">

                    <img src="{{asset('assets/Hero.svg')}}" style="width:500px;" alt="">
                </div>
            </div>
        </div>
    </div>
<!-- akhir hero -->

<!-- komposisi bahan -->
    <div class="container mt-5">
        <div class="row">
            <h5 class="text-danger fw-bold f-poppins ">Komposisi Bahan</h5>
            <h3 class="text-black fw-bold f-poppins mt--1">6 Ramuan Herbal Alami</h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-2 col-5 mb-4">
                <div class="card rounded-circle" style="width:auto;">
                    <img src="{{asset('assets/ramuan (1).png')}}" class="card-img-top rounded-pills" alt="...">
                    <div class="card-body bg-merah border-card rounded-pills">
                        <h5 class="card-title text-center text-white f-poppins fw-bold">Habatusaudah</h5>
                    
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-5 mb-4">
                <div class="card rounded-circle" style="width:auto;">
                    <img src="{{asset('assets/ramuan (1).png')}}" class="card-img-top rounded-pills" alt="...">
                    <div class="card-body bg-merah border-card rounded-pills">
                        <h5 class="card-title text-center text-white f-poppins fw-bold">Habatusaudah</h5>
                    
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-5 mb-4">
                <div class="card rounded-circle" style="width:auto;">
                    <img src="{{asset('assets/ramuan (1).png')}}" class="card-img-top rounded-pills" alt="...">
                    <div class="card-body bg-merah border-card rounded-pills">
                        <h5 class="card-title text-center text-white f-poppins fw-bold">Habatusaudah</h5>
                    
                    
                    </div>
                </div>
            </div>
          
            
        </div>
    </div>
<!-- akhir kompisisi bahan -->
<!-- Deskripsi -->
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <h4 class="text-center text-merah fw-bold f-poppins">Deskripsi</h4>
        <h3 class="text-center f-poppins fw-bold mt--1">Deskripsi Biodima</h3>
    </div>
    <div class="row justify-content-center pt-5 pb-5">
        <img src="{{asset('assets/img Desc.svg')}}" style="width:526px;" alt="">
    </div>
    <div class="row">
        <p class="f-poppins para-line fw-"><span class="text-merah fw-bold">BIO DIMA </span>adalah Produk Herbal yang berbentuk pil, yang diramu secara tradisional dengan 100% berbahan alami dan halal. Ramuan berkhasiat ini telah ditemukan sejak puluhan tahun dan terbukti dapat membantu menjaga kesehatan serta pemulihan berbagai macam, keluhan penyakit ringan, sedang maupun berat terutama penyakit yang berhubungan dengan, sendi dan saraf.</p>
    </div>
</div>
<!-- akhir deskripsi -->
<!-- manfaat dan kegunaan -->
<div class="bg-danger pt-5 pb-5 mb-5">

    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-lg-6">
                
                <h4 class="text-merah fw-bold f-poppins ">Manfaat dan Kegunaan</h4>
                <h3 class="f-poppins fw-bold mt--1">Manfaat dan Kegunaan yang di Dapat Antar Lain Sebagai Berikut</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 mt-5 border-left"> 
                <h6 class="text-merah fw-bold f-poppins ">Membantu</h6>
                <h5 class="f-poppins fw-bold mt--1">Mengatasi Osteoporosis, sakit tulang dan persendian</h5>
            </div>
        </div>
    </div>
</div>
    <!-- akhir manfaat dan kegunaan -->
<!-- cara konsumsi -->
    <div class="container mt-5">
         <div class="row justify-content-center">
        <h4 class="text-center text-merah fw-bold f-poppins ">Deskripsi</h4>
        <h3 class="text-center fw-bold f-poppins mt--1">Deskripsi Biodima</h3>
    </div>
    <div class="row">
        <div class="col-lg-4 cara rounded">
            <a href="#" >
            <div class="row justify-content-center">
                <img class="gambari text-center" src="{{asset('assets/cara1.svg')}}" alt="">
            </div>
            <div class="row">
                <h6 class="text-center f-poppins fw-bold">Pengobatan</h6>
            </div>
            <div class="row justify-content-center">
               <p class="text-center mt--1 f-poppins text-dark" style="width:80%;">
               pagi sesudah makan, bagi penderita jantung 1-2 butir dan pada awal konsumsi 2 kali sehari
                 4 Butir malam &  4 butir
                </p>
            </div>
            </a>
        </div>
    </div>
</div>
<!-- akhir cara konsumsi -->
<!-- harga -->
    <div class="container">
    <div class="row justify-content-center">
    <h4 class="text-center text-merah f-bold f-poppins ">Harga</h4>
        <h3 class="text-center fw-bold f-poppins mt--1">Harga Produk Biodima</h3>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4 uk-margin-large-right" >
        <img class="gambar-hero" src="{{asset('assets/iklan.svg')}}"  alt="">
        </div>
        <div class="col-lg-6 ">
           <p class="mt--1 f-poppins text-dark text-justify para-line"> 
        Dengan kandungan 100% dari bahan alami yang berkhasiat menjaga kesehatan serta membantu pemulihan berbagai macam penyakit maka kami memberikan harga jual yang menyesuaikan yaitu <span class="text-merah fw-bold">Rp. 350.000,-</span> per-botol yang berisikan 40 pil. Lakukan pembelian produk <span class="text-merah"> Bio Dima </span> paket <span class="text-merah fw-bold">GARANSI</span>  yang terdiri dari 2 botol dengan harga <span class="text-merah fw-bold">Rp. 700.000,-</span> maka kami akan memberikan produk sedekah sebanyak 1 botol. 
        </p>    
    <a href="{{route('FormGaransi')}}">
        <input type="hidden" name="sesion" value="{{$session_id}}">
                <button  class="btn uk-width-1-3@s text-left f-poppins rounded-pill btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4  me-2 mt--s1" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>   
                Ayo Beli Sekarang
                </button>
     </a>
        </div>
    </div>
    </div>
<!-- akhir harga -->
<!-- testimoni -->
<div class="bg-danger mb-5 pt-5 pb-5 mt-5">
<div class="container"> 
    <div class="row">
    <h4 class="text-center text-merah fw-bold f-poppins ">Testimoni</h4>
        <h3 class="text-center fw-bold f-poppins mt--1">Beberapa Konsumen yang Cukup
Puas dengan Produk Kami</h3>
    </div>
    <div class="row mt-5 mb-5">
        <!-- slider -->
        <div class="uk-slider-container-offset" uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
            <li>
            <div class="card rounded-circle" style="width:auto;">
                    <img src="{{asset('assets/ramuan (1).png')}}" class="card-img-top rounded-pills" alt="...">
                    <div class="card-body bg-merah border-card rounded-pills">
                        <h5 class="card-title text-center text-white f-poppins fw-bold">Habatusaudah</h5>
                    
                    
                    </div>
                </div>
            </li>
        
            </li>
            <li>
               
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
        <!-- akhirslider -->
    </div>
</div>
</div>
<!-- akhir testimoni -->
<!-- harga -->
<div class="container mt-5">
    <div class="row justify-content-center">
    <h4 class="text-center text-merah fw-bold f-poppins ">Member</h4>
        <h3 class="text-center fw-bold f-poppins mt--1"> Gabung Bersama Kami Menjadi Bagian Bio Dima
    </div>
    <div class="row mt-4 justify-content-center">
        <img src="{{asset('assets/member.svg')}}" class="uk-width-1-2@s" alt="">
    </div>
    <div class="row mt-3 justify-content-center">
    <p class="f-poppins para-line text-center uk-width-1-1@s">Ayo begabung dengan kami menjadi bagian dari <span class="text-merah fw-bold">Bio Dima </span> dan temukan keuntangan lainnya yang hanya diperoleh oleh member <span class="text-merah fw-bold">Bio Dima.</span> Tekan tombol dibawah ini untuk mendaftarkan diri Anda menjadi bagian dari kami.</p>
    <a href="" class="text-center">
                <button class="btn uk-width-1-5@s text-center fw-poppins rounded-pill btn-danger">
              
                Daftar Member
                </button>
                </a>
    </div>
</div>
<!-- akhir harga -->


@endsection