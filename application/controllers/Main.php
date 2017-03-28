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
        $this->load->view('main/header');
        $this->load->view('home');
		$this->load->view('main/footer');
	}

    public function sejarah()
	{
        $this->load->view('main/header1');
        $this->load->view('sejarah');
		$this->load->view('main/footer');
	}

    public function warisan()
	{
        $this->load->view('main/header1');
        $this->load->view('warisan');
		$this->load->view('main/footer');
	}

    public function sekilas()
	{
        $this->load->view('main/header1');
        $this->load->view('sekilas');
		$this->load->view('main/footer');
	}

    public function alam()
	{
        $this->load->view('main/header1');
        $this->load->view('alam');
		$this->load->view('main/footer');
	}

    public function kuliner()
	{
        $this->load->view('main/header1');
        $this->load->view('kuliner');
		$this->load->view('main/footer');
	}

    public function belanja()
	{
        $this->load->view('main/header1');
        $this->load->view('belanja');
		$this->load->view('main/footer');
	}

    public function penginapan()
	{
        $this->load->view('main/header1');
        $this->load->view('penginapan');
		$this->load->view('main/footer');
	}

    public function lokasi()
	{
        $this->load->view('main/header1');
        $this->load->view('lokasi');
		$this->load->view('main/footer');
	}

	
}
