<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?php echo base_url('assets/plugin/datatables-plugins/dataTables.bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/plugin/datatables-responsive/dataTables.responsive.css'); ?>" rel="stylesheet">

<div id="page-wrapper">
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Daftar Peminjaman Sepeda Bike.INC</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					Daftar Peminjaman Saat ini !!!
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="daftar_sepeda">
								<thead>
									<tr>
										<th>ID Peminjaman</th>
										<th>ID Sepeda</th>
										<th>ID Anggota</th>
										<th>Nama Peminjam</th>
										<th>Tgl Disewakan</th>
										<th>Tgl Pengembalian</th>
										<th> </th>				
									</tr>
								</thead>
								<?php foreach($peminjaman as $p): ?>
									<tbody>
										<tr class="odd gradeX">
											<td><?php echo $p->id_peminjaman; ?> </td>
											<td><?php echo $p->id_sepeda; ?></td>
											<td><?php echo $p->id_user; ?></td>
											<td><?php echo $p->nama_user; ?></td>
											<td><?php echo $p->tanggal_sewa; ?></td>
											<td><?php echo $p->tanggal_kembali; ?></td>
											<td>
											<?php echo anchor('peminjamanservlet/show_edit/'.$p->id_peminjaman,'Edit'); ?>
											<?php echo anchor('peminjamanservlet/deletePeminjaman/'.$p->id_peminjaman,'Delete'); ?>
											</td>
										</tr>
									</tbody>
								<?php endforeach; ?>
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
