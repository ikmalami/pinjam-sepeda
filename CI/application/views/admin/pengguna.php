<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?php echo base_url('assets/plugin/datatables-plugins/dataTables.bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/plugin/datatables-responsive/dataTables.responsive.css'); ?>" rel="stylesheet">

<div id="page-wrapper">
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					Daftar Peminjaman yang Belum Disetujui / Ditolak
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="daftar_sepeda">
								<thead>
									<tr>
										<th>ID Pengguna</th>
										<th>Username</th>
										<th>Password</th>
										<th>Email</th>
										<th>Nama Pemilik</th>
										<th> </th>
									</tr>
								</thead>
								<?php //foreach($peminjaman as $p): ?>
									<tbody>
										<tr class="odd gradeX">
											<td><?php //echo $p->nama_kegiatan; ?></a></td>
											<td><?php //echo $p->deskripsi; ?></td>
											<td><?php //echo $p->poin_kegiatan; ?></td>
											<td><?php //echo $p->poin_kegiatan; ?></td>
											<td><?php //echo $p->poin_kegiatan; ?></td>
											<td><button>Hapus</button></td>
										</tr>
									</tbody>
								<?php //endforeach; ?>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<script src="<?php echo base_url('assets/plugin/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugin/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugin/datatables-responsive/dataTables.responsive.js'); ?>"></script>

<script>
	$(document).ready(function() {
		$('#daftar_sepeda').DataTable({
			responsive: true
		});
	});
</script>
