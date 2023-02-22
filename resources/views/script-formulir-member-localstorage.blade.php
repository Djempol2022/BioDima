<script>
  $('#btn_transaksi').on('click', function(e) {
    e.preventDefault();
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
      url: '/formulir-member-store',
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
      const formData = JSON.parse(savedData);
      //   paket
      $('input[name="paket"][value="' + formData.paket + '"]').prop('checked', true);
      $('#harga-paket').text(formatter.format(formData.paket));
      $('#text-paket').text($('input[name="paket"]:checked').attr('id'));
      // end paket
      //   provinsi dan cities
      $('select[name="province_destination"]').val(formData.province_destination);
      jQuery.ajax({
        url: '/cities/' + formData.province_destination,
        type: "GET",
        dataType: "json",
        success: function(response) {
          $('select[name="city_destination"]').empty();
          $('select[name="city_destination"]').append(
            '<option value="0">-- pilih kota tujuan --</option>');
          $.each(response, function(key, value) {
            $('select[name="city_destination"]').append(
              `<option value="${key}" ${key == formData.city_destination ? 'selected' : ''}>${value}</option>`
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
      let city_destination = formData.city_destination;
      let courier = formData.courier;

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
      let totalPembayaran = parseInt(formData.paket) + parseInt((formData.total_pembayaran).slice(-3)) +
        parseInt(
          formData
          .tipe_courier);
      $('#total_pembayaran').text(formatter.format(totalPembayaran));
      $('#total_pembayaran_input').val(totalPembayaran);
      //  end of total-pembayaran

      //   btn disable
      $('#btn_transaksi').attr('disabled', false);
      // end of btn disable

    }
  });
</script>
