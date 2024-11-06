<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_keluarga extends CI_Controller {

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

public function add_data()
	{
		$this->form_validation->set_rules('nomer_kartukeluarga', 'nomer_kartukeluarga', 'required|trim|is_unique[kartu_keluarga.nomer_kartukeluarga]|min_length[16]|max_length[17]');
	$data ['nomer_kartukeluarga'] = $this->input->post('nomer_kartukeluarga');
	$data ['alamat'] = $this->input->post('alamat');
	$data ['rt'] = $this->input->post('rt');
	$data ['rw'] = $this->input->post('rw');
	$data ['desa'] = $this->input->post('desa');
	$data ['kecamatan'] = $this->input->post('kecamatan');
	$data ['kabupaten'] = $this->input->post('kabupaten');
	$data ['provinsi'] = $this->input->post('provinsi');
	$data ['kode_pos'] = $this->input->post('kode_pos');

	// // upload a picture
	// $config['upload_path'] = './uploads/';
	// $config['allowed_types'] = 'gif|jpg|jpeg|png';
	// $config['overwrite'] = TRUE;
	// $config['max_size'] = '500000';
	// $config['file_name'] = time();

	// $this->load->library('upload', $config);
	// $this->upload->initialize($config);
	// if(!$this->upload->do_upload('image')) {
	// $error_image = $this->upload->display_errors();
	// $this->session->set_flashdata('error', $error_image);
	// redirect('dashboard/data_mhs');
	// } else {
	// $img = $this->upload->data();
	// }
	// $data ['foto'] = './uploads/' . time() . $img['file_ext'];
	if($this->form_validation->run() == TRUE) {
		$this->M_Kartukeluarga->add_data('kartu_keluarga',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Create Data Kartu Keluarga </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
	  
	  redirect('Dashboard/lihat_kartukeluarga','refresh');
	}
		else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Nomer Kartu Keluarga error or is already available </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
	  redirect('Dashboard/form_kartukeluarga','refresh');
		}
	}
	
	public function detail_kartukeluarga($id_kartukeluarga){
		$where = array('id_kartukeluarga' => $id_kartukeluarga);
		$data['kartu_keluarga'] = $this->M_Kartukeluarga->detail_kartukeluarga('kartu_keluarga', $where)->result();
		$data['content']='kartu_keluarga/detail_kartukeluarga';
		$this->load->view('template',$data);
		}

		public function tambah_anggota($id_kartukeluarga){			
			if(isset($id_kartukeluarga)) {
				$where = array('id_kartukeluarga' => $id_kartukeluarga);
				$data['penduduk'] = $this->M_penduduk->show_data('kartu_keluarga', $where)->result();
				$data['kartu_keluarga'] = $this->M_Kartukeluarga->detail_kartukeluarga('kartu_keluarga', $where)->result();
				$data['content'] = 'kartu_keluarga/tambah_anggota';
				$this->load->view('template', $data);
			} else {
				redirect('Kartu_keluarga/detail_kartukeluarga');
			}
		}
		
		public function tambah_anggota_process($id_kartukeluarga){
			// Periksa apakah id_kartukeluarga sudah ada di tabel kartu_keluarga
			$where = array('id_kartukeluarga' => $id_kartukeluarga);
			$kartu_keluarga_exists = $this->M_penduduk->cek_data_exists('kartu_keluarga', $where);
		
			if($kartu_keluarga_exists) {
				$data ['id_kartukeluarga'] = $this->input->post('id_kartukeluarga');
				// Selanjutnya, masukkan data penduduk ke tabel penduduk
				$data_penduduk = array(
					'id_kartukeluarga' => $id_kartukeluarga,
					// Tambahkan kolom-kolom lain yang perlu dimasukkan
				);
				$this->M_penduduk->add_data('penduduk', $data_penduduk);
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Data has been created.</div>');
				redirect('Dashboard/lihat_kartukeluarga', 'refresh');
			} else {
				// Jika id_kartukeluarga tidak ditemukan di tabel kartu_keluarga
				redirect('Kartu_keluarga/detail_kartukeluarga');
			}
		}

}
