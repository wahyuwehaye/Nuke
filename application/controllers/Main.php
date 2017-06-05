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
        $id=1;
        $data['komen'] = $this->m_dashboard->viewDetailKomenTentang($id);
        $this->load->view('sejarah',$data);
		$this->load->view('main/footer');
	}

    public function warisan()
	{
        $this->load->model('m_dashboard');
        $this->load->view('main/header1');
        $id=2;
        $data['komen'] = $this->m_dashboard->viewDetailKomenTentang($id);
        $this->load->view('warisan',$data);
		$this->load->view('main/footer');
	}

    public function sekilas()
	{
        $this->load->model('m_dashboard');
        $this->load->view('main/header1');
        $id=3;
        $data['komen'] = $this->m_dashboard->viewDetailKomenTentang($id);
        $this->load->view('sekilas',$data);
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
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
        $id=$this->uri->segment(2, 0);
		$data['wisata'] = $this->m_dashboard->viewDetailWisata($id);
		$data['komen'] = $this->m_dashboard->viewDetailKomenWisata($id);
        $this->load->view('detailwisata',$data);
		$this->load->view('main/footer');
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
		$this->load->model('m_dashboard');
        $this->load->view('main/header1');
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