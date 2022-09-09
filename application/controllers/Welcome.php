<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about($nama){
		echo "<h1> Halaman About </h2>";
		echo "<hr>";
		echo "Nama saya = ". $nama;
	}
	public function tgl_indonesia(){
		$this->load->helper('tgl_indo');
		$tgl = date("Y-m-d H:i:s");
		echo tgl_ind($tgl);
	}

	public function __construct()
	{
	parent::__construct();
	$this->load->helper('html');
	$this->load->library('form_validation');
	}

	public function kalkulator(){
		$this->load->view('form_kalkulator');
	}

	public function aksi_kalkulator(){
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$operasi = $this->input->post('operasi');
		$this->form_validation->set_rules('angka1','Angka 1','required|numeric');
		$this->form_validation->set_rules('angka2','Angka 2','required|numeric');
		if($this->form_validation->run() != false){
		switch($operasi){
			case "penjumlahan":
				$hasil = $angka1+$angka2;
				echo "hasil Penjumlahan Antara ".$angka1." + ".$angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">kembali ke form perhitungan</a>";
				break;

				case "pengurangan":
				$hasil = $angka1-$angka2;
				echo "hasil Pengurangan Antara ".$angka1." - ".$angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">kembali ke form perhitungan</a>";
				break;

				case "perkalian":
				$hasil = $angka1*$angka2;
				echo "hasil Perkalian Antara ".$angka1." * ".$angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">kembali ke form perhitungan</a>";
				break;

				case "pembagian":
				$hasil = $angka1/$angka2;
				echo "hasil Pembagian Antara ".$angka1." / ".$angka2." adalah = ".$hasil;echo "<hr>";
				echo "<a href=".site_url('welcome/kalkulator').">kembali ke form perhitungan</a>";
				break;
		  } 
		}else {
			$this->load->view('form_kalkulator');
		}
	}
	public function upload_file(){
		$this->load->view('form_upload');
		$error = array('error' => $this->upload->display_errors());
		$this->load->view('form_upload', $error);
		
	}
	public function aksi_upload(){
		$config['upload_path']				='./upload/';
		$config['allowed_types']			= 'gif|jpg|png';
		$config['max_size']					= 100; //maksimal ukuran
		$config['max_width']				= 1024; //lebar maksimal
		$config['max_height']				= 768; //tinggi maksimal

		$this->load->library('upload', $config);

		if(! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('form_upload', $error);
		}
		else{
			$data = array('upload_data' =>$this->upload->data());
			$this->load->view('sukses_upload', $data);
		}
	}
}

