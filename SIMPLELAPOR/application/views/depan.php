<section>
    <!-- MODAL ADD -->
    <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <p class="modal-title" id="myModalLabel">Buat Laporan/Komentar</p>
        <hr />
    </div>
    <form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="post">
        <form class="form-horizontal">
            <div class="modal-body">
                <div class="form-group">
                    <textarea name="Laporan_Komentar" id="Laporan_Komentar" class="form-control" type="text" placeholder="Laporan/Komentar" rows="15" cols="120" required></textarea>
                </div>

                <div class="form-group">
                    <select name="Aspek">
                        <option style="display:none" value='pilih'> Pilih Aspek Pelaporan/Komentar</option>
                        <option value='Dosen'>Dosen</option>
                        <option value='Staff'>Staff</option>
                        <option value='Mahasiswa'>Mahasiswa</option>
                        <option value='Infrastruktur'>Infrastruktur</option>
                        <option value='Pengajaran'>Pengajaran</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="col-xs-9">
                        <br><br> <input name="Lampiran" id="Lampiran" class="form-control" type="file" placeholder="Choose File" style="width:335px;" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <br><br> <button align="right" class="btn btn-info" id="btn_simpan">Buat Lapor!</button>
                </div>
        </form>
    </form>
    </div>
    <!--END MODAL ADD-->