<html>
  <head>
    <?php include 'koneksi.php'; ?>
    <?php include 'modal.php'; ?>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-siswa">
      <thead>
        <tr class="success">
          <th>NIS</th>
          <th>Nama Lengkap</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat Lengkap</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $tampil = $koneksi->prepare("SELECT nis, nama, tgl_lahir, jk, alamat FROM tb_siswa");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>
        <tr>
          <td><?php echo $data['nis']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['tgl_lahir']; ?></td>
          <td><?php echo $data['jk']; ?></td>
          <td><?php echo $data['alamat']; ?></td>
          <td><button type="button" id="<?php echo $data['nis']; ?>" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
            <button type="button" id="<?php echo $data['nis']; ?>" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
            </td>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(e) {
  //CRUD data-siswa
  $('.tambah-siswa').click (function() {
    var nis = $("#nis").val().trim();
    var nama = $("#nama").val().trim();
    var jk = $('input:radio[name=jk]:checked').val();
    var tmpt_lahir = $("#tmpt_lahir").val().trim();
    var tgl_lahir = $("#tgl_lahir").val().trim();
    var alamat = $("#alamat").val().trim();
    var nama_ayah = $("#nama_ayah").val().trim();
    var nama_ibu = $("#nama_ibu").val().trim();

    if (nis=="") {
      alert("NIS is Required");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/crud-siswa.php?eks=tambah",
        data: "nis="+nis+"&nama="+nama+"&jk="+jk+"&tmpt_lahir="+tmpt_lahir+"&tgl_lahir="+tgl_lahir+"&alamat="+alamat+"&nama_ayah="+nama_ayah+"&nama_ibu="+nama_ibu,
        success: function (msg) {
        tampil_data_siswa();
        clear_siswa_tambah();
        }
      });
    }
  });

  $('.hapus-siswa').click(function() {
    var nis = this.id;
    var conf = confirm("Yakin Hapus Siswa NIS :" +nis);
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/crud-siswa.php?eks=hapus",
          data: "nis="+nis,
          success: function (msg) {
            tampil_data_siswa();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var nis = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/crud-siswa.php?eks=detail",
      data: "nis="+nis,
      dataType: "json",
      success: function (data) {
        $('#nis_update').val(data.nis);
        $('#nama_update').val(data.nama);
        if (data.jk=="Laki - Laki") {
          $('#jk1_update').attr('checked',true);
        }
        else {
          $('#jk2_update').attr('checked',true);
        }
        $('#tmpt_lahir_update').val(data.tmpt_lahir);
        $('#tgl_lahir_update').val(data.tgl_lahir);
        $('#alamat_update').val(data.alamat);
        $('#nama_ayah_update').val(data.nama_ayah);
        $('#nama_ibu_update').val(data.nama_ibu);
        $('#modal-update-siswa').modal("show");
      }
    });
  });

  $('.update-siswa').click(function () {
    var nis = $("#nis_update").val().trim();
    var nama = $('#nama_update').val().trim();
    var jk = $('input:radio[name=jk_update]:checked').val();
    var tmpt_lahir = $('#tmpt_lahir_update').val().trim();
    var tgl_lahir = $('#tgl_lahir_update').val().trim();
    var alamat = $('#alamat_update').val().trim();
    var nama_ayah = $('#nama_ayah_update').val().trim();
    var nama_ibu = $('#nama_ibu_update').val().trim();

    $.ajax({
        type: "POST",
        url: "addfile/crud-siswa.php?eks=update",
        data: "nis="+nis+"&nama="+nama+"&jk="+jk+"&tmpt_lahir="+tmpt_lahir+"&tgl_lahir="+tgl_lahir+"&alamat="+alamat+"&nama_ayah="+nama_ayah+"&nama_ibu="+nama_ibu,
        success: function (msg) {
        tampil_data_siswa();
        clear_siswa_update();

        }
    });
  });
$('.data-siswa').DataTable(); //datatables
});
</script>
