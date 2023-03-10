<script>
  $('#lanjut_transaksi').on('click', function(e) {
    e.preventDefault();
    $('#bg-pembayaran').removeClass('d-none')
    const form = document.querySelector('#myForm');
    const formData = {};
    const formElements = form.elements;
    for (let i = 0; i < formElements.length; i++) {
      const element = formElements[i];
      if (element.name) {
        if (element.type === 'radio') {
          if (element.checked) {
            formData[element.name] = element.value;
          }
        } else {
          formData[element.name] = element.value;
        }
      }
    }

    localStorage.setItem('formData', JSON.stringify(formData));

    $.ajax({
      type: 'POST',
      url: '/pesanmember',
      data: formData,
      success: function(data) {
        console.log(data);
      },
      error: function(data) {
        console.log(data);
      }
    });

  });

  // Restore the form data from local storage on page load
  $(function() {
    const savedData = localStorage.getItem('formData');
    if (savedData) {
      console.log(savedData);
      const formData = JSON.parse(savedData);

      // nama
      $('#nama').val(formData.nama);
      // end of nama
      //   no_wa
      $('#no_wa').val(formData.no_wa);
      // end of no_wa
      //   jenis kelamin
      $('#jenis_kelamin').empty();
      $('#jenis_kelamin').append(`<option value="">Pilih Jenis Kelamin</option>`);
      $('#jenis_kelamin').append(
        `<option value="Laki-laki" ${formData.jenis_kelamin == 'Laki-laki' ? 'selected' : ''}>Laki-laki</option>`);
      $('#jenis_kelamin').append(
        `<option value="Perempuan" ${formData.jenis_kelamin == 'Perempuan' ? 'selected' : ''}>Perempuan</option>`);
      // end of jenis kelamin
      // tanggal_lahir
      $('#tanggal_lahir').val(formData.tanggal_lahir);
      // end of tanggal_lahir
      // nama_bank
      $('#nama_bank').val(formData.nama_bank);
      // end of nama_bank
      // cabang_bank
      $('#cabang_bank').empty();
      $('#cabang_bank').append(`<option value="">Pilih Cabang Bank</option>`);
      $('#cabang_bank').append(
        `<option value="Pontianak" ${formData.cabang_bank == 'Pontianak' ? 'selected' : ''}>Pontianak</option>`);
      $('#cabang_bank').append(
        `<option value="Semarang" ${formData.cabang_bank == 'Semarang' ? 'selected' : ''}>Semarang</option>`);
      //   end of cabang_bank

      //   nomor_rekening
      $('#nomor_rekening').val(formData.nomor_rekening);
      // end of nomor_rekening
      // identitas
      $('#identitas').val(formData.identitas);
      // end of identitas
      // nomor_identitas
      $('#nomor_identitas').val(formData.nomor_identitas);
      // end of nomor_identitas

      //   alamat
      $('#alamat').val(formData.alamat);
      // end of alamat


      //   paket
      $('input[name="paket_id"][value="' + formData.paket_id + '"]').prop('checked', true);
      $('#harga-paket').text(formatter.format(formData.paket_id));
      $('#text-paket').text($('input[name="paket_id"]:checked').attr('id'));
      // end paket
      //   provinsi dan cities
      $('select[name="provinsi"]').val(formData.provinsi);
      jQuery.ajax({
        url: '/cities/' + formData.provinsi,
        type: "GET",
        dataType: "json",
        success: function(response) {
          $('select[name="kota"]').empty();
          $('select[name="kota"]').append(
            '<option value="0">-- pilih kota tujuan --</option>');
          $.each(response, function(key, value) {
            $('select[name="kota"]').append(
              `<option value="${key}" ${key == formData.kota ? 'selected' : ''}>${value}</option>`
            );
          });
        },

      });
      // end provinsi
      //   kurir
      $('#courier').empty();
      $('#courier').append(`<option value="0">-- pilih kurir --</option>`);
      $('#courier').append(`<option value="jne" ${formData.courier == 'jne' ? 'selected' : ''}>JNE</option>`);
      $('#courier').append(
        `<option value="tiki" ${formData.courier == 'tiki' ? 'selected' : ''}>TIKI</option>`);
      $('#courier').append(
        `<option value="pos" ${formData.courier == 'pos' ? 'selected' : ''}>POS INDONESIA</option>`);
      // end kurir
      //   tipe kurir
      let token = $("meta[name='csrf-token']").attr("content");
      let kota = formData.kota;
      let courier = formData.courier;

      jQuery.ajax({
        url: "/formmember",
        data: {
          _token: token,
          city_origin: 364,
          kota: kota,
          courier: courier,
          weight: 1,
        },
        dataType: "JSON",
        type: "POST",
        success: function(response) {
          if (response) {
            $('#tipe_courier').empty();
            $('#tipe_courier').append(`<option value="0">-- pilih tipe kurir --</option>`);
            $.each(response[0]['costs'], function(key, value) {
              $('#tipe_courier').append('<option value="' + value.cost[0].value + '" ' + (formData
                  .tipe_courier == value.cost[0].value ? 'selected' : '') + '>' + response[0]
                .code.toUpperCase() +
                ' : <strong>' + value.service + '</strong> - Rp. ' + value.cost[0].value + ' (' +
                value.cost[0].etd + ' hari)</option>');
            });
          }
        }
      });
      $('#ongkir').text(formatter.format(formData.tipe_courier));
      // end tipe kurir

      //   unique code
      $('#unique_code').text((formData.total_pembayaran).slice(-3));
      // end of unique code

      //   total-pembayaran
      let totalPembayaran = parseInt(formData.paket_id) + parseInt((formData.total_pembayaran).slice(-3)) +
        parseInt(
          formData
          .tipe_courier);
      $('#total_pembayaran').text(formatter.format(totalPembayaran));
      $('#total_pembayaran_input').val(totalPembayaran);
      //  end of total-pembayaran

      //   btn disable
      $('#lanjut_transaksi').attr('disabled', false);
      // end of btn disable

    }
  });
</script>
