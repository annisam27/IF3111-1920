<section>
<nav>
				<ul>
					<li> <a href="<?php echo base_url().'index.php/web' ?>">Daftar</a></li>
					<li><a href="<?php echo base_url().'index.php/web/login' ?>">Masuk</a></li>
				</ul>
			</nav>
<!-- MODAL ADD -->
<div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <p class="modal-title" id="myModalLabel">Buat Laporan/Komentar</p>
                <hr />
            </div>
            <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <textarea name="Laporan_Komentar" id="Laporan_Komentar" class="form-control" type="text" placeholder="Laporan/Komentar" rows="15" cols="120" required></textarea>
                    </div>
                    
                    <div class="form-group">
                    <select name="Aspek">
                        <option style="display:none" value= 'pilih'> Pilih Aspek Pelaporan/Komentar</option>
                        <option value='Infrastruktur'>Infrastrktur</option>
                        <option value='Kesehatan'>Kesehatan</option>
                        <option value='Kriminal'>Kriminal</option>
                        <option value='Pendidikan'>Pendidikan</option>
                        <option value='Administrasi'>Administrasi</option>
                        <option value='Bantuan'>Bantuan</option>
                    </select>
                    </div>
                
                    <div class="form-group">
                        <div class="col-xs-9">
                          <br><br>  <input name="Lampiran" id="Lampiran" class="form-control" type="file" placeholder="Choose File" style="width:335px;" required>
                        </div>
                    </div>

                <div class="modal-footer">
                   <br><br> <button  align= "right" class="btn btn-info" id="btn_simpan">Buat Lapor!</button>
                </div>
            </form>
            </form>
            </div>
        <!--END MODAL ADD-->