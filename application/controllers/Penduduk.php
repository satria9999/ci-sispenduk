<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

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
	$this->load->model('M_Penduduk');
	}

	public function add_data()
	{
		$this->form_validation->set_rules('nik', 'nik', 'required|trim|is_unique[penduduk.nik]|min_length[16]|max_length[17]');
        $this->form_validation->set_rules('nomor_telepon', 'nomor_telepon', 'required|trim|min_length[11]|max_length[13]');
	$data ['nama'] = $this->input->post('nama');
	$data ['nik'] = $this->input->post('nik');
	$data ['jenis_kelamin'] = $this->input->post('jenis_kelamin');
	$data ['tempat_lahir'] = $this->input->post('tempat_lahir');
	$data ['tanggal_lahir'] = $this->input->post('tanggal_lahir');
	$data ['agama'] = $this->input->post('agama');
	$data ['alamat'] = $this->input->post('alamat');
	$data ['rt'] = $this->input->post('rt');
	$data ['rw'] = $this->input->post('rw');
	$data ['desa'] = $this->input->post('desa');
	$data ['kewarganegaraan'] = $this->input->post('kewarganegaraan');
	$data ['status_perkawinan'] = $this->input->post('status_perkawinan');
	$data ['tanggal_kawin'] = $this->input->post('tanggal_kawin');
	$data ['pendidikan'] = $this->input->post('pendidikan');
	$data ['pekerjaan'] = $this->input->post('pekerjaan');
	$data ['nomor_telepon'] = $this->input->post('nomor_telepon');
	$data ['ayah'] = $this->input->post('ayah');
	$data ['ibu'] = $this->input->post('ibu');


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
		$this->M_penduduk->add_data('penduduk',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Create Data Penduduk </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
	  
	redirect('Dashboard/lihat_penduduk','refresh');
	}
		else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>NIK_error_or_is_already_available </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
	  redirect('Dashboard/form_penduduk','refresh');
		}
	}

	public function edit_data($id_penduduk){
		$where = array('id_penduduk' => $id_penduduk);
		$data['penduduk'] = $this->M_penduduk->edit_data('penduduk', $where)->result();
		$data['content']='penduduk/edit_penduduk';
		$this->load->view('template',$data);
		}

		public function update($id_penduduk)
		{
			$data ['nama'] = $this->input->post('nama');
			$data ['nik'] = $this->input->post('nik');
			$data ['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data ['tempat_lahir'] = $this->input->post('tempat_lahir');
			$data ['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data ['agama'] = $this->input->post('agama');
			$data ['alamat'] = $this->input->post('alamat');
			$data ['rt'] = $this->input->post('rt');
			$data ['rw'] = $this->input->post('rw');
			$data ['desa'] = $this->input->post('desa');
			$data ['kewarganegaraan'] = $this->input->post('kewarganegaraan');
			$data ['status_perkawinan'] = $this->input->post('status_perkawinan');
			$data ['tanggal_kawin'] = $this->input->post('tanggal_kawin');
			$data ['pendidikan'] = $this->input->post('pendidikan');
			$data ['pekerjaan'] = $this->input->post('pekerjaan');
			$data ['nomor_telepon'] = $this->input->post('nomor_telepon');
			$data ['ayah'] = $this->input->post('ayah');
			$data ['ibu'] = $this->input->post('ibu');
		// upload a picture
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
		$where = array('id_penduduk' => $id_penduduk);
		$this->M_penduduk->update($where, $data, 'penduduk');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Update Data Penduduk </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
		redirect('Dashboard/lihat_penduduk','refresh');
	}

	public function delete($id_penduduk)
	{
		// Menggunakan $this->input->is_ajax_request() untuk memeriksa apakah permintaan adalah AJAX
		if ($this->input->is_ajax_request()) {
			$where = array('id_penduduk' => $id_penduduk);
	
			// Tampilkan konfirmasi alert menggunakan JavaScript
			echo json_encode([
				'confirm' => true,
				'title' => 'Konfirmasi Penghapusan',
				'message' => 'Apakah Anda yakin ingin menghapus data ini?'
			]);			
		} else {
			$data['penduduk'] = $this->M_penduduk->show_data()->result();
			$data['content'] = 'penduduk/lihat_penduduk';
			$this->load->view('template', $data);
		}
	}

	public function aksi_hapus_penduduk($id_penduduk)
	{
		$where = array('id_penduduk' => $id_penduduk);
		$this->M_penduduk->delete($where);
		
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Delete Data Penduduk </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
	
		// Redirect kembali ke halaman lihat_penduduk
		redirect('dashboard/lihat_penduduk', 'refresh');
	}		
		
	public function get_nama() {
		$idPenduduk = $this->input->get('id');

		// Mengambil data nama dari model (gantikan dengan logika Anda)
		$nama = $this->M_penduduk->getNamaById($idPenduduk);

		// Mengembalikan data dalam format JSON
		$response = array('nama' => $nama);
		echo json_encode($response);
	}
	
		public function export_pdf()
		{
		$this->load->library('mypdfgenerator');
		$data['title'] = "Data Penduduk";
		$data['penduduk'] = $this->M_penduduk->show_data()->result();
		$this->mypdfgenerator->generate('penduduk/print_penduduk',$data);
		}
		
		public function print_mahasiswa($id_mhs)
		{
		$this->load->library('mypdfgenerator');
		$data['title'] = "Detail Mahasiswa";
		$where = array('id_mhs' => $id_mhs);
		$data['tbl_mahasiswa'] = $this->M_mahasiswa->edit_data('tbl_mahasiswa', $where)->result();
		$this->mypdfgenerator->generate('admin/print_mahasiswa',$data);
		}

		public function export_excelall(){
			$data = array( 'title' => 'Laporan Data Excel Penduduk');
			$data['penduduk'] = $this->M_penduduk->show_data()->result();
			$this->load->view('penduduk/print_excel',$data);
			}
	}

