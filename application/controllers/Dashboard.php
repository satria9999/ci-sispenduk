<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
	parent ::__construct();
	$this->load->model('M_Kartukeluarga');
	$this->load->model('M_Penduduk');
	}


	public function Dashboard()
	{
		$data['jumlahPenduduk'] = $this->M_penduduk->hitungJumlahPendudukDesa();
	
		if ($data['jumlahPenduduk'] === false || $data['jumlahPenduduk'] === 0) {
			log_message('error', 'Gagal mendapatkan jumlah penduduk dari model.');
		}
	
		$data['jumlah_kartukeluarga'] = $this->M_Kartukeluarga->hitungJumlahKartuKeluarga();
	
		if ($data['jumlah_kartukeluarga'] === false || $data['jumlah_kartukeluarga'] === 0) {
			log_message('error', 'Gagal mendapatkan jumlah kartu keluarga dari model.');
		}
	
		$data['Pekerja'] = $this->M_penduduk->hitungJumlahPekerja();
	
		if ($data['Pekerja'] === false) {
			log_message('error', 'Gagal mendapatkan jumlah pekerja dari model.');
		} else {
			// Uncomment the following line if you want to display a message
			// echo "Jumlah penduduk yang bekerja: " . $data['Pekerja'];
		}
	
		$data['Pengangguran'] = $this->M_penduduk->countUnemployed();
	
		if ($data['Pengangguran'] === false) {
			log_message('error', 'Gagal mendapatkan jumlah penangguran dari model.');
		} else {
			// Uncomment the following line if you want to display a message
			// echo "Jumlah penduduk yang bekerja: " . $data['Pekerja'];
		}
		
		$dataForPieChart = $this->M_penduduk->getDataForPieChart();
		$data['pieChart'] = $this->load->view('content', ['dataForPieChart' => $dataForPieChart], true);
	
		$data['content'] = 'content';
		$this->load->view('template', $data);
	}
	
	// public function lihat_penduduk()
	// {
	// 	$data['content']='penduduk/lihat_penduduk';
	// 	$this->load->view('template',$data);
	// }
	public function form_penduduk()
	{
		$data['content']='penduduk/form_penduduk';
		$this->load->view('template',$data);
	}
	public function form_kartukeluarga()
	{
		$data['content']='kartu_keluarga/form_kartukeluarga';
		$this->load->view('template',$data);
	}
	public function lihat_penduduk()
	{
		$data['penduduk'] = $this->M_penduduk->show_data()->result();
		$data['content']='penduduk/lihat_penduduk';
		$this->load->view('template',$data);
	}
	public function lihat_kartukeluarga()
	{
		$data['kartu_keluarga'] = $this->M_Kartukeluarga->show_data()->result();
		$data['content']='kartu_keluarga/lihat_kartukeluarga';
		$this->load->view('template',$data);
	}
}
