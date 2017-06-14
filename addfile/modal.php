    <!--Awal Modal Tambah Siswa-->
        <div class="modal" id="modal-tambah-siswa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Siswa</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">NIS</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="nis" maxlength="20" placeholder="Nomor Induk Siswa">
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Lengkap</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="nama" maxlength="200" placeholder="Nama..">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
                          <div class="col-sm-7">
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="Laki - Laki" checked="true">Laki - Laki
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="jk" value="Perempuan">Perempuan
                              </label>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="tmpt_lahir" maxlength="100" placeholder="Tempat Lahir">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
                          <div class="col-sm-4">
                                <input type="text" class="form-control picker_tgl_lahir" id="tgl_lahir" readonly="true">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Alamat Lengkap</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat" maxlength="200" placeholder="Alamat Lengkap">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Ayah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ayah" maxlength="200" placeholder="Nama Orang Tua - Ayah">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nama Ibu</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ibu" maxlength="200" placeholder="Nama Orang Tua - Ibu">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary tambah-siswa" data-dismiss="modal">SIMPAN</button>
              </div>
            </div>
          </div>
        </div>
    <!--Akhir Modal Tambah Siswa-->

    <!--Awal Modal UPDATE Siswa-->
    <div class="modal" id="modal-update-siswa">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Detail Siswa</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">NIS</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="nis_update" maxlength="20" placeholder="Nomor Induk Siswa" disabled="true">
                    </div>
                </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Nama Lengkap</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_update" maxlength="200" placeholder="Nama..">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Jenis Kelamin</label>
                      <div class="col-sm-7">
                        <label class="radio-inline">
                            <input type="radio" name="jk_update" id="jk1_update" value="Laki - Laki">Laki - Laki
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="jk_update" id="jk2_update" value="Perempuan">Perempuan
                          </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="tmpt_lahir_update" maxlength="100" placeholder="Tempat Lahir">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control picker_tgl_lahir" id="tgl_lahir_update" readonly="true">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Alamat Lengkap</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat_update" maxlength="200" placeholder="Alamat Lengkap">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_ayah_update" maxlength="200" placeholder="Nama Orang Tua - Ayah">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Nama Ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_ibu_update" maxlength="200" placeholder="Nama Orang Tua - Ibu">
                      </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-warning update-siswa" data-dismiss="modal">UPDATE</button>
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Modal UPDATE Siswa-->
    <script type="text/javascript">
    $(document).ready(function () {
               $('.picker_tgl_lahir').datepicker({
                   format: "dd M yyyy",
                   autoclose:true
               });
           });
    </script>
