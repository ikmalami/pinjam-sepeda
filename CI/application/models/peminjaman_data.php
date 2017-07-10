<?php

class Peminjaman_data extends CI_Model {

	function tampil_peminjaman() {
		return $this -> db -> get('peminjaman');
	}

	function input_peminjaman($data, $table) {
		$this -> db -> insert($table, $data);
	}

	function tampil_edit_peminjaman($where, $table) {
		return $this -> db -> get_where($table, $where);
	}

	function edit_peminjaman($where, $data, $table) {
		$this -> db -> where($where);
		$this -> db -> update($table, $data);
	}

	function hapus_peminjaman($where, $table) {
		$this -> db -> where($where);
		$this -> db -> delete($table);
	}
	
}