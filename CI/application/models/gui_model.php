<?php

class Gui_Model extends CI_Model {

	function sepeda_data() {
		return $this -> db -> get('sepeda');
	}

	function single_data($where, $table) {
		return $this -> db -> get_where($table, $where);
	}

	function form_data($where, $table) {
		return $this -> db -> get_where($table, $where);
	}

	function input_p_data($data, $table) {
		$this -> db -> insert($table, $data);
	}

 	function InsertUser($data) {
    	$this->db->insert('user',$data);
    }

    public function bacainfo($username) {
        
        $condition = "email =" . "'" . $username . "'";
        $this->db->SELECT('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function ceklogin($data) {
        
        $condition = "email =" . "'" . $data['username'] . "' AND " . "pass =" . "'" . $data['password'] . "'";
        $this->db->SELECT('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}