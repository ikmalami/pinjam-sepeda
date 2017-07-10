<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Menambah Daftar Sepeda</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Persetujuan / Penolakan sepeda pengguna
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<?php //echo ($alert!=null?$alert:'');
							//foreach ($rincian_sepeda as $rk):
								?>
							<form action="" method="POST">
								<div class="form-group">
									<label>Pilih Tipe Sepeda :</label>
									<select class="form-control" name="kegiatan" required="">
										<?php //foreach ($daftar_kegiatan as $dk) : ?>
											<option value="<?php //echo $dk->id_kegiatan; ?>" <?php //echo ($rk->id_kegiatan==$dk->id_kegiatan?'Selected':'');?>>
												<?php //echo $dk->nama_kegiatan.' - '.$dk->poin_kegiatan; ?>
											</option>
										<?php //endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Warna</label>
									<input class="form-control" name="deskripsi" placeholder="Warna sepeda" value="<?php //echo $rk->deskripsi; ?>" required>
								</div>
								<div class="form-group">
									<label>Harga perhari :</label>
									<input class="form-control" name="harga" placeholder="Harga sewa perhari" value="<?php //echo $rk->deskripsi; ?>" required>
								</div>
								<div class="form-group">
									<label>Gambar :</label>
									<button>Upload</button>
								</div>

								</div>
								<?php //if($rk->status_sepeda==0): ?>
									<button class="btn btn-info" name="setuju">Simpan</button>
								<?php //endif; ?>
							</form>
							<?php //endforeach; ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

</div>