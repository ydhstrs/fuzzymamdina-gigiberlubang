<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card mx-auto">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Penilaian Risiko Gigi Berlubang Pada Balita</h4>
				<!-- <ul class="bullet-line-list">
					<li>
						<h6><span class="fa fa-question-circle text-primary"></span></h6>
						<p class="mb-0">Pada menu halaman ini, pengguna diminta untuk memilih kriteria sesuai
							dengan yang diinginkan, yang nantinya sistem akan menampilkan hasil rekomendasi sepeda
							motor.</p>
						<p class="text-muted">&nbsp;</p>
					</li>
				</ul> -->
				<?= form_open('rekomendasi/result', ['method' => 'POST', 'id' => 'form_rekomendasi', 'novalidate' => 'novalidate']) ?>
				<fieldset>
					<div class="form-group row">

						<br><br>
						<label class="col-md-4">Orangtua yang memiliki karies</label>
						<div class="col-md-8">
							<select class="form-control" name="price" required="" aria-label="Harga">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="harga_max">Kedua orang tua tidak memiliki gigi berlubang</option>
								<option value="harga_mid">Ayah/Ibu salah satu orang tua memiliki
									gigi berlubang</option>
								<option value="harga_min">MKedua orang tua memiliki gigi berlubang</option>
							</select>
						</div>
						<label class="col-md-4">Orangtua yang memilki status ekonomi rendah</label>
						<div class="col-md-8">
							<select class="form-control" name="price" required="" aria-label="Harga">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="harga_max"> >Rp5.000.000
								</option>
								<option value="harga_mid">Rp2.000.000-Rp.5.000.000</option>
								<option value="harga_min">
									< Rp.2.000.000 </option>
							</select>
						</div>
						<br><br>
						<label class="col-md-4">Anak yang memiliki konsumsi makanan ringan
							atau minuman manis lebih dari 3 kali/hari
						</label>
						<div class="col-md-8">
							<select class="form-control" name="tank" required="" aria-label="Kapasitas BBM">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="tangki_max">1 kali/hari</option>
								<option value="tangki_mid">2 – 3 kali/hari
								</option>
								<option value="tangki_min">2 – 3 kali/hari
								</option>
							</select>
						</div>
						<br><br>
						<label class="col-md-4">Anak yang meminum susu botol sebelum tidurdengan susu murni atau ada penambahan gula
						</label>
						<div class="col-md-8">
							<select class="form-control" name="speed" required="" aria-label="Kecepatan Mesin">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="kecepatan_max">Susu murni (tidak ada penambahan gula)</option>
								<option value="kecepatan_mid">Penambahan gula 1 sendok</option>
								<option value="kecepatan_min">Penambahan gula > 2 sendok</option>
							</select>
						</div>
						<br><br>
						<label class="col-md-4">Anak yang membutuhkan perawatan khusus</label>
						<div class="col-md-8">
							<select class="form-control" name="luggage" required="" aria-label="Kapasitas Bagasi">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="bagasi_max">Tidak ada perawatan khusus
								</option>
								<option value="bagasi_mid">Ada 1 perawatan khusus</option>
								<option value="bagasi_min">Lebih dari 1 perawatan khusus</option>
							</select>
						</div>
						<br><br>
						<label class="col-md-4">Anak yang baru berimigras</label>
						<div class="col-md-8">
							<select class="form-control" name="weight" required="" aria-label="Berat">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="berat_max">Tidak pernah berimigrasi</option>
								<option value="berat_mid">1 kali berimigrasi</option>
								<option value="berat_min">Lebih dari 1 kali berimigrasi</option>
							</select>
						</div>
						<br><br>
						<label class="col-md-4">Anak yang menerima air minum yang
							mengandung fluor atau suplemen fluor secara
							optimal</label>
						<div class="col-md-8">
							<select class="form-control" name="weight" required="" aria-label="Berat">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="berat_max">Tidak ada sama sekali
								</option>
								<option value="berat_mid">Kadang-kadang</option>
								<option value="berat_min">Rutin</option>
							</select>
						</div>
						<br><br><label class="col-md-4">Anak yang menggosok gigi setiap hari dengan
							pasta gigi fluoride
						</label>
						<div class="col-md-8">
							<select class="form-control" name="weight" required="" aria-label="Berat">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="berat_max">Tidak pernah</option>
								<option value="berat_mid">1 kali/ hari
								</option>
								<option value="berat_min">2 kali/ hari</option>
							</select>
						</div>
						<br><br><label class="col-md-4">Anak yang rutin memeriksa kesehatan gigi secara
							teratur</label>
						<div class="col-md-8">
							<select class="form-control" name="weight" required="" aria-label="Berat">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="berat_max">Tidak pernah</option>
								<option value="berat_mid">Setahun Sekali</option>
								<option value="berat_min">Enam Bulan Sekali</option>
							</select>
						</div>
						<br><br>
						<label class="col-md-4">Anak yang memiliki bercak putih pada gigi</label>
						<div class="col-md-8">
							<select class="form-control" name="weight" required="" aria-label="Berat">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="berat_max">Tidak Ada</option>
								<option value="berat_mid">1-3 bercak putih</option>
								<option value="berat_min">>3 Bercak Putih</option>
							</select>
						</div><br><br>
						<label class="col-md-4">Anak yang memiliki lubang/ tambalan</label>
						<div class="col-md-8">
							<select class="form-control" name="weight" required="" aria-label="Berat">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="berat_max">Tidak Ada</option>
								<option value="berat_mid">1 – 3 lubang/ tambalan</option>
								<option value="berat_min"> > 3 lubang/ tambalan</option>
							</select>
						</div>

						<label class="col-md-4">Anak yang memiliki karang gigi
						</label>
						<div class="col-md-8">
							<select class="form-control" name="weight" required="" aria-label="Berat">
								<option disabled="disabled" selected="selected" value="">Silahkan Pilih</option>
								<option value="berat_max">Tidak Ada</option>
								<option value="berat_mid">1 – 3 gigi</option>
								<option value="berat_min"> > 3 gigi</option>
							</select>
						</div>
						<br><br>
					</div><br><br>

					<div class="col-md-5 mx-auto">
						<input class="btn btn-success btn-block" type="submit" value="CARI">
					</div>
					<br><br>
			</div>
			</fieldset>
			<?= form_close() ?>
		</div>
	</div>
</div>
</div>