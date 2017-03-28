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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

     public function __construct()
    {
     parent::__construct();
     $this->load->model('m_login');
	 $this->load->model(array('m_dashboard'));
     //session_start();
    }

	public function index()
	{
        if(isset($_SESSION['logged_in']))
		{
			$this->load->view('main/headerD');
        	$this->load->view('v_dashboard');
			$this->load->view('main/footerD');
        }else{
        redirect('dashboard/login');
    }
	}

	public function admin(){
		$this->load->view('main/headerD');
		$this->load->view('admin');
		$this->load->view('main/footerD');
	}

	public function listadmin(){
		$this->load->view('main/headerD');
		$data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		$this->load->view('listadmin',$data);
		$this->load->view('main/footerD');
	}

	public function listuser(){
		$this->load->view('main/headerD');
		$data['user'] = $this->m_dashboard->tampil_dataUser()->result();
		$this->load->view('listuser',$data);
		$this->load->view('main/footerD');
	}

    public function login()
	{
        $this->load->view('login');
	}

	public function loginAdmin(){
/*
        $login = $this->m_login->actLogin();
        if($login == true){
            $data = array(
              'id_admin' => $login->id_admin,
              'username' => $login->username,
              'password' => $login->password
            );
            $this->session->set_userdata($data);
            redirect('dashboard/index');
        }else{
            redirect('dashboard/login');
        }*/
		//redirect('dashboard/index');
        $this->load->library('session');
		$this->load->model('m_login');
				$data1=$this->m_login->checkLoginAdmin();
				$data2=$this->m_login->checkLoginUser();
				if($data1>0){
					$sessionData=$this->m_login->findByDynamicColumnAdmin(array('username'=> $_POST['username'],'password'=> md5($_POST['password'])));

					$newdata = array(
						'username'  => $_POST['username'],
						'logged_in' => TRUE,
						'name'		=> $sessionData[0]['name'],
						'id_session'=> $sessionData[0]['id']
					);

					$this->session->set_userdata($newdata);
//					print_r($_SESSION);
					//echo $_SESSION['logged_in']." asdfasdf";
					//die();
					redirect('dashboard/index');
				}elseif ($data2>0) {
					$sessionData=$this->m_login->findByDynamicColumnUser(array('username'=> $_POST['username'],'password'=> md5($_POST['password'])));

					$newdata = array(
						'username'  => $_POST['username'],
						'logged_in' => TRUE,
						'name'		=> $sessionData[0]['name'],
						'id_session'=> $sessionData[0]['id']
					);

					$this->session->set_userdata($newdata);
//					print_r($_SESSION);
					//echo $_SESSION['logged_in']." asdfasdf";
					//die();
					redirect('main/index');
				}else{
					redirect('dashboard/login');
				}
    }

	public function logOut() {
/*
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->sess_destroy();
        $this->load->view('main/index');
*/
		//redirect('main/index');
        $this->session->sess_destroy();
		redirect('main/index');
    }

	public function notLoggedIn(){
		$this->load->view('lockscreen');
	}

	public function insert(){
	    $this->load->model('m_dashboard');
	    $data = array(
	        'username' => $this->input->post('username'),
	        'password' => md5($this->input->post("password")),
			'role' => $this->input->post('role'),
			'email' => $this->input->post('email'),
			'domisili' => $this->input->post('domisili'),
			'asal_daerah' => $this->input->post('asal_daerah'),
			'no_hp_user' => $this->input->post('no_hp_user'),
			'jk' => $this->input->post('jk'),
	        'nama_lengkap' => $this->input->post('nama_lengkap')
	         );
	    $data = $this->m_dashboard->Insert('user', $data);
	    redirect('dashboard/login');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertAdmin(){
	    $this->load->model('m_dashboard');
	    $data = array(
	        'username' => $this->input->post('username'),
	        'password' => md5($this->input->post("password")),
			'email' => $this->input->post('email'),
			'no_hp_admin' => $this->input->post('no_hp_admin')
	         );
	    $data = $this->m_dashboard->Insert('admin', $data);
	    redirect('dashboard/listadmin');
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}


}
