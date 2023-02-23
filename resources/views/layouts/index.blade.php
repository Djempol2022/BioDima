<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bio Dima</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    @include('includes.style')
  </head>
  <body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href=""><img src="{{asset('assets/logo.svg')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav  ml-auto" >
        <li class="nav-item">
          <a class="nav-link active f-poppins" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link f-poppins" href="#">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link f-poppins" href="#">Manfaat dan Kegunaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link f-poppins" href="#" >Cara Konsumsi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link f-poppins" href="#" >Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link f-poppins" href="#" >Testimoni</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">  <a href="">
                <button class="btn fw-poppins rounded-pill btn-danger">Daftar Member</button>
                </a></li>
      </ul>
    </div>
  </div>
</nav>
   <!-- akhir navbar -->

   @yield('konten')

<!-- footer -->
<div class="bg-merah pt-5 pb-5 mt-5">
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('assets/logo putih.svg')}}" alt="">
                <p class="f-poppins  text-light text-left">BIO DIMA adalah produk herbal yang berbentuk pil, yang diramu secara tradisional dengan 100% berbahan alami dan halal.</p>
                <p class="f-poppins  text-light text-left">Copyright &copy; Bio Dima Made by Jempol Group</p>
            </div>
            <div class="col-lg-2">
               
                <h6 class="f-poppins  fw-bold text-light text-left">Layanan Kami</h6>
               <a href="" class="f-poppins text-light">Whatsapp</a>
            </div>
            <div class="col-lg-3">
               
               <h6 class="f-poppins  fw-bold text-light text-left">Alamat</h6>
               <p class="f-poppins  text-light text-left">Pontianak, Jl. Perdana, komp perdana square.</p>
           </div>
        </div>
    </div>
</div>
<!-- akhir footer -->

   @include('includes.script')
  </body>
</html>