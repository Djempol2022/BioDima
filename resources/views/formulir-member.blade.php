<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-between">
      <form id="myForm">
        @csrf
        <div>
          <h1>Pilih Paket</h1>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paket" value="350000" id="basic" checked>
            <label class="form-check-label" for="basic">
              Basic
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paket" value="1750000" id="consumer">
            <label class="form-check-label" for="consumer">
              Consumer
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paket" value="5750000" id="professional">
            <label class="form-check-label" for="professional">
              Professional
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paket" value="13000000" id="executive">
            <label class="form-check-label" for="executive">
              Executive
            </label>
          </div>


          <h1>Alamat</h1>
          <div class="form-group">
            <label class="font-weight-bold">PROVINSI TUJUAN</label>
            <select class="form-control provinsi-tujuan" name="province_destination">
              <option value="0">-- pilih provinsi tujuan --</option>
              @foreach ($provinces as $province => $value)
                <option value="{{ $province }}">{{ $value }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">KOTA / KABUPATEN TUJUAN</label>
            <select class="form-control kota-tujuan" name="city_destination">
              <option value="0">-- pilih kota tujuan --</option>
            </select>
          </div>
        </div>

        <div>
          <h1>Informasi Biaya</h1>
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h5>Paket</h5>
              <h5 id="text-paket" class="text-capitalize">-</h5>
            </div>
            <div>
              <h5 id="harga-paket">-</h5>
            </div>
          </div>

          <div class="d-flex align-items-center justify-content-between">
            <div>
              <div class="form-group">
                <select class="form-control kurir" name="courier" id="courier">
                  <option value="0">-- pilih kurir --</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" name="tipe_courier" id="tipe_courier">
                  <option value="0">-- pilih tipe kurir --</option>
                </select>
              </div>
            </div>
            <div>
              <h5 id="ongkir">-</h5>
            </div>
          </div>

          <div class="d-flex align-items-center justify-content-between">
            <h5>Kode Unik</h5>
            <h5 id="unique_code">-</h5>
          </div>
          <hr />
          <div class="d-flex align-items-center justify-content-between">
            <h5>Total Pembayaran</h5>
            <h5 id="total_pembayaran">-</h5>
            <input type="hidden" name="total_pembayaran" id="total_pembayaran_input">
          </div>
          <div>
            <button type="submit" class="btn btn-primary" id="btn_transaksi">Lakukan Transaksi</button>
          </div>
      </form>
      <div class="bg-primary mt-5 d-none" id="bg-pembayaran">
        <h5>Periode Pembayaran</h5>
        <h6>Waktu yang tersisa</h6>
        <h5 id="countdown"></h5>
      </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  @include('script-formulir-member')
  @include('script-formulir-member-localstorage')
</body>

</html>
