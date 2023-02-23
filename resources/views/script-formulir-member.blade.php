<script>
  let formatter = new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR'
  });

  $(document).ready(function() {

    // harga paket
    let paket = $('input[name=paket_id]:checked').val();
    console.log(paket);
    let formatted = formatter.format(paket);
    $('#harga-paket').text(formatted);
    $('#text-paket').text($('input[name=paket_id]:checked').attr("id"));


    // Call the function to set the unique code when the page is loaded or refreshed
    setUniqueCode();

    // When the radio button is changed
    $('input[name=paket_id]').change(function() {
      paket = $(this).val();
      formatted = formatter.format(paket);

      $('#harga-paket').text(formatted);
      $('#text-paket').text($(this).attr("id"));

      if ($('#tipe_courier').val() != 0) {
        totalPembayaran();
      }

    });


    // rajaongkir
    //active select2
    $(".provinsi-tujuan, .kota-tujuan").select2();
    //ajax select kota tujuan
    $('select[name="province_destination"]').on('change', function() {
      let provindeId = $(this).val();
      if (provindeId) {
        jQuery.ajax({
          url: '/cities/' + provindeId,
          type: "GET",
          dataType: "json",
          success: function(response) {
            $('select[name="city_destination"]').empty();
            $('select[name="city_destination"]').append(
              '<option value="0">-- pilih kota tujuan --</option>');
            $.each(response, function(key, value) {
              $('select[name="city_destination"]').append('<option value="' + key + '">' + value +
                '</option>');
            });
          },
        });
      } else {
        $('select[name="city_destination"]').append('<option value="0">-- pilih kota tujuan --</option>');
      }

      if ($(this).val() == 0) {
        $('#courier').empty();
        $('#courier').append(`<option value="0">-- pilih kurir --</option>`);

        $('#tipe_courier').empty();
        $('#tipe_courier').append(`
        <option value="0">-- pilih tipe kurir --</option>
        `);

        $('#ongkir').text('-');
        $('#total_pembayaran').text('-');
        $('#btn_transaksi').attr('disabled', true);
      } else {
        $('#courier').empty();
        $('#courier').append(`<option value="0">-- pilih kurir --</option>`);

        $('#tipe_courier').empty();
        $('#tipe_courier').append(`
        <option value="0">-- pilih tipe kurir --</option>
        `);

        $('#ongkir').text('-');
        $('#total_pembayaran').text('-');
        $('#btn_transaksi').attr('disabled', true);
      }
    });
    $('select[name="city_destination"]').on('change', function() {
      if ($(this).val() == 0) {
        $('#courier').empty();
        $('#courier').append(`<option value="0">-- pilih kurir --</option>`);

        $('#tipe_courier').empty();
        $('#tipe_courier').append(`
        <option value="0">-- pilih tipe kurir --</option>
        `);

        $('#ongkir').text('-');
        $('#total_pembayaran').text('-');
        $('#btn_transaksi').attr('disabled', true);
      } else {
        $('#courier').empty();
        $('#courier').append(`<option value="0">-- pilih kurir --</option>`);
        $('#courier').append(`<option value="jne">JNE</option>`);
        $('#courier').append(`<option value="tiki">TIKI</option>`);
        $('#courier').append(`<option value="pos">POS INDONESIA</option>`);

        $('#tipe_courier').empty();
        $('#tipe_courier').append(`
        <option value="0">-- pilih tipe kurir --</option>
        `);

        $('#ongkir').text('-');
        $('#total_pembayaran').text('-');
        $('#btn_transaksi').attr('disabled', true);
      }
    });
    //ajax check ongkir
    let isProcessing = false;
    $('#courier').on('change', function(e) {
      e.preventDefault();

      if ($(this).val() == 0) {
        isProcessing = false;
        $('#tipe_courier').empty();
        $('#tipe_courier').append(`
        <option value="0">-- pilih tipe kurir --</option>
        `);
        $('#total_pembayaran').text('-');
        $('#btn_transaksi').attr('disabled', true);
      } else {
        let token = $("meta[name='csrf-token']").attr("content");
        let city_destination = $('select[name=city_destination]').val();
        let courier = $('select[name=courier]').val();

        if (isProcessing) {
          return;
        }

        isProcessing = true;
        jQuery.ajax({
          url: "/formulir-member",
          data: {
            _token: token,
            city_origin: 364,
            city_destination: city_destination,
            courier: courier,
            weight: 1,
          },
          dataType: "JSON",
          type: "POST",
          success: function(response) {
            isProcessing = false;
            if (response) {
              $('#tipe_courier').empty();
              $('#tipe_courier').append(`<option value="0">-- pilih tipe kurir --</option>`);
              $.each(response[0]['costs'], function(key, value) {
                $('#tipe_courier').append('<option value="' + value.cost[0].value + '">' + response[0]
                  .code.toUpperCase() +
                  ' : <strong>' + value.service + '</strong> - Rp. ' + value.cost[0].value + ' (' +
                  value.cost[0].etd + ' hari)</option>');
              });

              $('#ongkir').text('-');
              $('#total_pembayaran').text('-');
              $('#btn_transaksi').attr('disabled', true);
            }
          }
        });
      }

      if ($('#tipe_courier').val() == 0) {
        $('#ongkir').text('-');
        $('#total_pembayaran').text('-');
        $('#btn_transaksi').attr('disabled', true);
      } else {
        $('#ongkir').text(formatter.format($('#tipe_courier').val()));
        totalPembayaran();
        $('#btn_transaksi').attr('disabled', false);
      }
    });

    $('#tipe_courier').on('change', function(e) {
      if ($(this).val() == 0) {
        $('#ongkir').text('-');
        $('#total_pembayaran').text('-');
        $('#btn_transaksi').attr('disabled', true);
      } else {
        $('#ongkir').text(formatter.format($('#tipe_courier').val()));
        totalPembayaran();
        $('#btn_transaksi').attr('disabled', false);
      }
    });

    $('#btn_transaksi').attr('disabled', true);

  });

  //   function countdown() {
  //     let timer2 = "7:01";
  //     let interval = setInterval(function() {
  //       let timer = timer2.split(':');
  //       //by parsing integer, I avoid all extra string processing
  //       let minutes = parseInt(timer[0], 10);
  //       let seconds = parseInt(timer[1], 10);
  //       --seconds;
  //       minutes = (seconds < 0) ? --minutes : minutes;
  //       if (minutes < 0) clearInterval(interval);
  //       seconds = (seconds < 0) ? 59 : seconds;
  //       seconds = (seconds < 10) ? '0' + seconds : seconds;
  //       //minutes = (minutes < 10) ?  minutes : minutes;
  //       $('#countdown').html(minutes + ':' + seconds);
  //       timer2 = minutes + ':' + seconds;
  //     }, 1000);
  //   }

  function totalPembayaran() {
    let totalPembayaran = parseInt($('input[name=paket_id]:checked').val()) + parseInt($('#unique_code').text()) +
      parseInt($('#tipe_courier').val());
    $('#total_pembayaran').text(formatter.format(totalPembayaran));
    $('#total_pembayaran_input').val(totalPembayaran);
  }

  // Unique Code
  // Generate a unique code
  function generateCode() {
    let code = "";
    for (let i = 0; i < 3; i++) {
      let digit = Math.floor(Math.random() * 5) + 1;
      code += digit;
    }
    return code;
  }

  let uniqueCode = generateCode();

  // Set the text of the element with id "unique_code" to the unique code
  function setUniqueCode() {
    $("#unique_code").text(uniqueCode);
  }

  // Add an event listener to the page to call the function when the page is refreshed
  $(window).bind("beforeunload", function() {
    uniqueCode = generateCode();
    setUniqueCode();
  });
</script>
