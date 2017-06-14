$(document).ready(function(e) {

  tampil_data_siswa();

});
function tampil_data_siswa() {
  $.ajax({
    type: "GET",
    url: "addfile/tabel-data-siswa.php",
    success: function (data){
      $('.tampil-data-siswa').html(data)
    }
  });

  $.ajax({
      type: "GET",
      url: "addfile/jml/jml-laki-laki.php",
      success: function (data) {
        $('.tampil-jml-laki-laki').html(data)
        var sas = val(data);
      }
  });

  $.ajax({
      type: "GET",
      url: "addfile/jml/jml-perempuan.php",
      success: function (data) {
        $('.tampil-jml-perempuan').html(data)
      }
  });

  $.ajax({
      type: "GET",
      url: "addfile/jml/jml-siswa.php",
      success: function (data) {
        $('.tampil-jml-siswa').html(data)
      }
  });
}

function clear_siswa_tambah() {
  $("#nis").val("");
  $("#nama").val("");
  $("#tmpt_lahir").val("");
  $("#tgl_lahir").val("");
  $("#alamat").val("");
  $("#nama_ayah").val("");
  $("#nama_ibu").val("");
}
function clear_update_tambah() {
  $("#nis_update").val("");
  $("#nama_update").val("");
  $("#tmpt_lahir_update").val("");
  $("#tgl_lahir_update").val("");
  $("#alamat_update").val("");
  $("#nama_ayah_update").val("");
  $("#nama_ibu_update").val("");
}
