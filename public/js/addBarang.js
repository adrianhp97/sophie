$(document).ready(function() {
  $('#barang-form').submit(function() {
    var nama_barang = $('#nama_barang').val();
    var kode_produksi = $('#kode_produksi').val();
    var harga = $('#harga').val();
    var deskripsi = $('#deskripsi').val();

    $.ajax({
      type: "post",
      cache: false,
      url:'/insertBarang',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {
        nama_barang: nama_barang,
        kode_produksi: kode_produksi,
        harga: harga,
        deskripsi: deskripsi
      },
      success: function(data) {
          // var obj = $.parseJSON(data);
          console.log(data);
      }
    })
    .done(function(data) {
        // alert('done barang');
    })
    .fail(function(jqXHR, ajaxOptions, thrownError) {
        alert('No response from server barang');
    });

    $.ajax({
      type: "post",
      cache: false,
      processData: false,
      contentType: false,
      url:'/insertImage',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: new FormData($("#barang-form")[0]),
      success: function(data) {
          // var obj = $.parseJSON(data);
          alert(data);
          console.log(data);
      }
    })
    .done(function(data) {
        alert('done');
    })
    .fail(function(jqXHR, ajaxOptions, thrownError) {
        alert('No response from server');
    });
  });
})