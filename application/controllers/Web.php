<?php
Class Web extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}
	function index(){
		$data['judul']="Parsing Data ke View";
		$data['isi']="Ini adalah data dari controller";
		$this->load->view('hello',$data);
	}

	// function komentar(){
	// 	echo "Ini adalah fungsi komentar";
	// }
	// function nama(){
	// 	echo "Fitri Nihayatul Chusna";
	// }
} 

 ?>