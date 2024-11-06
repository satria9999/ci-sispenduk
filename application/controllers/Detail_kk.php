<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kk extends CI_Controller {

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
	$this->load->model('M_Detailkk');
	}

    public function add_data(){
    $data ['id_penduduk'] = $this->input->post('id_penduduk');
	$data ['id_kartukeluarga'] = $this->input->post('id_kartukeluarga');
	$data ['nama'] = $this->input->post('nama');
	$data ['status'] = $this->input->post('status');
    
    $this->M_penduduk->add_data('detail_kartukeluarga',$data);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
	<div class="d-flex align-items-center justify-content-start">
	  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
	  <span><strong>Well done!</strong> Successful Add Data Anggota Kartu Keluarga </span>
	</div><!-- d-flex -->
  </div><!-- alert -->');
	redirect('Detail_kk/detail_anggotakk/'.$data ['id_kartukeluarga']);
    }

public function detail_anggotakk($id_kartukeluarga) {
		$where = array('id_kartukeluarga' => $id_kartukeluarga);
        $this->load->model('M_Detailkk'); // Memuat model M_Detailkk
		$data['kartu_keluarga'] = $this->M_Kartukeluarga->detail_kartukeluarga('kartu_keluarga', $where)->result();

        // Memanggil method detail_anggotakk() dari model untuk mendapatkan data penduduk
        $data['penduduk'] = $this->M_Detailkk->detail_anggotakk($id_kartukeluarga);
		// $data['detail_kartukeluarga'] = $this->M_Detailkk->show_data()->result();

 		// get nama kepala keluarga
         $data['namaKepalaKeluarga'] = $this->M_Detailkk->getNamaKepalaKeluarga('detail_kartukeluarga', $where);

        if (!empty($data['penduduk'])) {
			$data['content']='kartu_keluarga/detail_kartukeluarga';
			$this->load->view('template',$data);
            // $this->load->view('kartu_keluarga/detail_kartukeluarga', $data);
        } else {
            // Tampilkan pesan jika data penduduk tidak ditemukan
            echo 'Data penduduk tidak ditemukan.';
			$data['content']='kartu_keluarga/detail_kartukeluarga';
			$this->load->view('template',$data);
        }
    }
    
    public function export_pdf_kk($id_kartukeluarga)
	{
	$this->load->library('mypdfgenerator');
	$data['title'] = "Kartu Keluarga";
	$where = array('id_kartukeluarga' => $id_kartukeluarga);
        $this->load->model('M_Detailkk'); // Memuat model M_Detailkk
		$data['kartu_keluarga'] = $this->M_Kartukeluarga->detail_kartukeluarga('kartu_keluarga', $where)->result();

        // Memanggil method detail_anggotakk() dari model untuk mendapatkan data penduduk
        $data['penduduk'] = $this->M_Detailkk->detail_anggotakk($id_kartukeluarga);
		// $data['detail_kartukeluarga'] = $this->M_Detailkk->show_data()->result();

 		// get nama kepala keluarga
        $data['namaKepalaKeluarga'] = $this->M_Detailkk->getNamaKepalaKeluarga();

        if (!empty($data['penduduk'])) {
			$data['content']='kartu_keluarga/detail_kartukeluarga';
			$this->load->view('template',$data);
            // $this->load->view('kartu_keluarga/detail_kartukeluarga', $data);
        } else {
            // Tampilkan pesan jika data penduduk tidak ditemukan
            echo 'Data penduduk tidak ditemukan.';
			$data['content']='kartu_keluarga/detail_kartukeluarga';
			$this->load->view('template',$data);
        }
	$this->mypdfgenerator->generate('kartu_keluarga/print_kk',$data);
	}

}
