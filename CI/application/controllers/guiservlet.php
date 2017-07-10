<?php 

class GuiServlet extends CI_Controller {


	function __construct() {
		parent::__construct();
		$this -> load -> model('gui_model');
		$this -> load -> helper('url');
	}

	function index() {
		if (isset($this->session->userdata['logged_in'])) {
                   redirect('index.php/login/home');
        }
		$this -> load -> view('index');
	}

	function show_sepeda() {
		$data['sepeda'] = $this -> gui_model -> sepeda_data() -> result();
		$this -> load -> view('rent', $data);
	}

	function show_loginpage() {
		$this -> load -> view('login');
	}

	function show_contacts() {
		$this -> load -> view('contact');
	}

	function show_rentnow($id_sepeda) {
		$where = array('id_sepeda' => $id_sepeda);
		$data['sepeda'] = $this -> gui_model -> single_data($where, 'sepeda') -> result();
		$this -> load -> view('single', $data);
	}

	function show_form($id_sepeda) {
		$where = array('id_sepeda' => $id_sepeda);
		$data['sepeda'] = $this -> gui_model -> form_data($where, 'sepeda') -> result();
		$this -> load -> view('form', $data);	
	}

	function ubahTglsewa($tgl_sewa) {
		$pisah = explode('/', $tgl_sewa);
		$larik = array($pisah[2], $pisah[0], $pisah[1]);
		$satukan = implode('-', $larik);
		return $satukan;
	}

	function ubahTglkembali($tgl_kembali) {
		$pisah = explode('/', $tgl_kembali);
		$larik = array($pisah[2], $pisah[0], $pisah[1]);
		$satukan = implode('-', $larik);
		return $satukan;
	}

	function add_peminjaman() {
		$id_sepeda = $this -> input -> post('id_sepeda');
		$tgl_sewa = $this -> input -> post('tanggal_sewa');
		$tgl_kembali = $this -> input -> post('tanggal_kembali');
		$total_sewa = $this -> input -> post('total_sewa');
		$nama_peminjam = $this -> input ->  post('nama_peminjam');
		//$id_anggota = $this -> input -> post('id_user');
		//$id_peminjaman = $this -> input -> post('id_peminjaman');
		
		$new_tgl_sewa = $this -> ubahTglsewa($tgl_sewa);
		$new_tgl_kembali = $this -> ubahTglkembali($tgl_kembali);

		$data = array(	
			'id_sepeda' => $id_sepeda,
			'tanggal_sewa' => $new_tgl_sewa,
			'tanggal_kembali' => $new_tgl_kembali, 
			'total_harga' => $total_sewa,
			'nama_peminjam' => $nama_peminjam,
			'status' => "On Booking"
			);
		$this -> gui_model -> input_p_data($data, 'peminjaman');

		redirect('index.php/guiservlet/show_sepeda');
	}
}