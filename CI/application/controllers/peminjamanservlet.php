<?php

class PeminjamanServlet extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('peminjaman_data');
		$this -> load -> helper('url');
		//
	}

	function index() {
		$data['peminjaman'] = $this -> peminjaman_data -> tampil_peminjaman() -> result();
		$this -> load -> view('daftar', $data);
	}

	function show_add() {
		$this -> load -> view('add_view');
	}

	function addPeminjaman() {
		$nama_anggota = $this -> input ->  post('nama_user');
		$id_anggota = $this -> input -> post('id_user');
		$id_sepeda = $this -> input -> post('id_sepeda');
		$id_peminjaman = $this -> input -> post('id_peminjaman');
		$tgl_peminjaman = $this -> input -> post('tanggal_sewa');
		$tgl_pengembalian = $this -> input -> post('tanggal_kembali');

		$data = array(
			'nama_user' => $nama_anggota,
			'id_user' => $id_anggota,
			'id_sepeda' => $id_sepeda,
			'id_peminjaman' => $id_peminjaman,
			'tanggal_sewa' => $tgl_peminjaman,
			'tanggal_kembali' => $tgl_pengembalian
			);
		$this -> peminjaman_data -> input_peminjaman($data, 'peminjaman');

		redirect('peminjamanservlet/index');
	}

	function deletePeminjaman() {
		$where = array('id_peminjaman' => id_peminjaman);
		$this -> peminjaman_data -> hapus_peminjaman($where, 'peminjaman');
		redirect('peminjamanservlet/index');
	}

	function show_edit($id_peminjaman) {
		$where = array('id_peminjaman' => $id_peminjaman);
		$data['peminjaman'] = $this -> peminjaman_data -> tampil_edit_peminjaman($where, 'peminjaman') -> result();
		$this -> load -> view('edit_view', $data);
	}

	function editPeminjaman() {
		$id_sepeda = $this -> input -> post('id_sepeda');
		$id_peminjaman = $this -> input -> post('id_peminjaman');
		$tgl_peminjaman = $this -> input -> post('tanggal_sewa');
		$tgl_pengembalian = $this -> input -> post('tanggal_kembali');

		$data = array('id_sepeda' => $id_sepeda, 'id_peminjaman' => $id_peminjaman, 'tanggal_sewa' => $tgl_peminjaman, 'tanggal_kembali' => $tgl_pengembalian);

		$where = array('id_sepeda' => $id_sepeda);

		$this -> peminjaman_data -> edit_peminjaman($where, $data, 'peminjaman');
		redirect('peminjamanservlet/index');
	}
}

?>