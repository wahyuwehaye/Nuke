<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

     public function __construct()
	{
	 parent::__construct();
	}

	public function index()
	{
		$this->load->model('m_dashboard');
        $this->load->view('main/header');
		$data['berita'] = $this->m_dashboard->tampil_berita()->result();
		$data['event'] = $this->m_dashboard->tampil_event()->result();
        $this->load->view('home',$data);
		$this->load->view('main/footer');
	}

	public function allberita(){
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
		$data['berita'] = $this->m_dashboard->tampil_berita()->result();
        $this->load->view('allberita',$data);
		$this->load->view('main/footer');
	}

	public function detailberita(){
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
        $id=$this->uri->segment(2, 0);
		$data['berita'] = $this->m_dashboard->viewDetailBerita($id);
		$data['komen'] = $this->m_dashboard->viewDetailKomenBerita($id);
        $this->load->view('detailberita',$data);
		$this->load->view('main/footer');
	}

	public function allevent(){
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
		$data['event'] = $this->m_dashboard->tampil_event()->result();
        $this->load->view('allevent',$data);
		$this->load->view('main/footer');
	}

	public function detailevent(){
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
        $id=$this->uri->segment(2, 0);
		$data['event'] = $this->m_dashboard->viewDetailEvent($id);
		$data['komen'] = $this->m_dashboard->viewDetailKomenEvent($id);
        $this->load->view('detailevent',$data);
		$this->load->view('main/footer');
	}

    public function sejarah()
	{
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
        // $id=1;
        // $data['komen'] = $this->m_dashboard->viewDetailKomenTentang($id);
        // $this->load->view('sejarah',$data);
        $this->load->view('sejarah');
		$this->load->view('main/footer');
	}

    public function warisan()
	{
        $this->load->model('m_dashboard');
        $this->load->view('main/header1');
        // $id=2;
        // $data['komen'] = $this->m_dashboard->viewDetailKomenTentang($id);
        // $this->load->view('warisan',$data);
        $this->load->view('warisan');
		$this->load->view('main/footer');
	}

    public function sekilas()
	{
        $this->load->model('m_dashboard');
        $this->load->view('main/header1');
        // $id=3;
        // $data['komen'] = $this->m_dashboard->viewDetailKomenTentang($id);
        // $this->load->view('sekilas',$data);
        $this->load->view('sekilas');
		$this->load->view('main/footer');
	}

    public function alam()
	{
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
		$data['alam'] = $this->m_dashboard->tampil_alam()->result();
        $this->load->view('alam',$data);
		$this->load->view('main/footer');
	}

	public function detailwisata()
	{
		$this->load->library('googlemapse');
		// $this->googlemaps->initialize();
		// $data('map') = $this->googlemaps->create_map();
		$config['center'] = '7.5179636, 110.5624369';
		$config['zoom'] = 'auto';
		$config['directions'] = TRUE;
		$config['directionsStart'] = 'bandung jawa barat';
		$tujuan = $this->uri->segment(2, 0);
		if ($tujuan==1) {
			$config['directionsEnd'] = 'Jl. Merbabu No.136 Kabupaten Boyolali, Jawa Tengah';
		}elseif ($tujuan==3) {
			$config['directionsEnd'] = 'Jl. Pandanaran No. 301, Banaran, Kabupaten Boyolali';
		}elseif ($tujuan==4) {
			$config['directionsEnd'] = 'Jl. Pandanaran No. 105A, Kabupaten Boyoalali';
		}elseif ($tujuan==5) {
			$config['directionsEnd'] = 'Selo Boyolali';
		}else{
			$config['directionsEnd'] = 'Kabupaten Boyoalali';
		}
		
		$config['directionsDivID'] = 'directionsDiv';
		$this->googlemapse->initialize($config);
		$data['map'] = $this->googlemapse->create_map();
		$this->load->model('m_dashboard');
        $this->load->view('main/headerwisata',$data);
        $id=$this->uri->segment(2, 0);
		$data['wisata'] = $this->m_dashboard->viewDetailWisata($id);
		$data['komen'] = $this->m_dashboard->viewDetailKomenWisata($id);
		
        $this->load->view('detailwisata',$data);
		$this->load->view('main/footer');
	}

	public function direction(){
		$this->load->view('direction');
	}

    public function kuliner()
	{
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
		$data['kuliner'] = $this->m_dashboard->tampil_kuliner()->result();
        $this->load->view('kuliner',$data);
		$this->load->view('main/footer');
	}

    public function belanja()
	{
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
		$data['belanja'] = $this->m_dashboard->tampil_belanja()->result();
        $this->load->view('belanja',$data);
		$this->load->view('main/footer');
	}

    public function penginapan()
	{
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
		$data['penginapan'] = $this->m_dashboard->tampil_penginapan()->result();
        $this->load->view('penginapan',$data);
		$this->load->view('main/footer');
	}

	public function detailpenginapan()
	{
		$this->load->library('googlemapse');
		// $this->googlemaps->initialize();
		// $data('map') = $this->googlemaps->create_map();
		$config['center'] = '7.5179636, 110.5624369';
		$config['zoom'] = 'auto';
		$config['directions'] = TRUE;
		$config['directionsStart'] = 'bandung jawa barat';
		$tujuan = $this->uri->segment(2, 0);
		if ($tujuan==1) {
			$config['directionsEnd'] = 'Jl. Solo Boyolali';
		}elseif ($tujuan==2) {
			$config['directionsEnd'] = 'Jl. Perintis Kemerdekaan No. 9 Boyolali';
		}elseif ($tujuan==3) {
			$config['directionsEnd'] = 'Jl. Merapi No.27, Pulisen, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah';
		}else{
			$config['directionsEnd'] = 'Kabupaten Boyoalali';
		}
		
		$config['directionsDivID'] = 'directionsDiv';
		$this->googlemapse->initialize($config);
		$data['map'] = $this->googlemapse->create_map();
		$this->load->model('m_dashboard');
        $this->load->view('main/headerwisata',$data);
        $id=$this->uri->segment(2, 0);
		$data['penginapan'] = $this->m_dashboard->viewDetailPenginapan($id);
		$data['komen'] = $this->m_dashboard->viewDetailKomenPenginapan($id);
        $this->load->view('detailpenginapan',$data);
		$this->load->view('main/footer');
	}

    public function lokasi()
	{
        $this->load->view('main/header1');
        $this->load->view('lokasi');
		$this->load->view('main/footer');
	}
}
