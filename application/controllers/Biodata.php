<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function index()
	{
		echo "Hello Nila";
	}
	public function alamat($alamat='', $lahir='')
	{
		echo "alamat saya di " .$alamat. " lahir di ".$lahir;
	}

	public function saya()
	{
		$data['nama'] = 'Nila Asmayanti';
		$data['alamat'] = 'Mataram';
		$data['prodi'] = 'D3MI';
		$data['matakuliah'] = 'Web II';
		$this->load->view('v_biodata' , $data);
	}

}
