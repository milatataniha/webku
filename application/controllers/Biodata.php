<?php
Class Biodata extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}
	function index(){
		$data['judul']="BiodataKu";
		$data['subjudul']="Biodata Ku";
		$data['nama']="Fitri Nihayatul Chusna";
		$data['alamat']="Ds. Gondanglegi Kec. Prambon Kab. Nganjuk";
		$data['jk']="Perempuan";
		$data['asal']="MTsN 3 Nganjuk";
		$this->load->view('profil',$data);
	}

	
} 

 ?>