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
	 $this->load->model('m_admin');
     //session_start();
    }

	public function index()
	{
        if(isset($_SESSION['logged_in']))
		{
			$data['active_menu']='dashboard';
			$this->load->view('main/headerD',$data);
			$data['count'] = $this->m_dashboard->countAdmin()->result();
        	$this->load->view('v_dashboard',$data);
			$this->load->view('main/footerD');
        }else{
        redirect('dashboard/login');
    }
	}

	public function admin(){
		$data['active_menu']='admin';
		$this->load->view('main/headerD',$data);
		$this->load->view('admin');
		$this->load->view('main/footerD');
	}

	public function listadmin(){
		$data['active_menu']='listadmin';
		$this->load->view('main/headerD',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('listadmin');
		$this->load->view('main/footerD');
	}

	public function listuser(){
		$data['active_menu']='listuser';
		$this->load->view('main/headerD',$data);
		// $data['user'] = $this->m_dashboard->tampil_dataUser()->result();
		// $this->load->view('listuser',$data);
		$this->load->view('listuser');
		$this->load->view('main/footerD1');
	}

	public function user(){
		$data['active_menu']='dashboard';
		$this->load->view('main/headerD',$data);
		$data['user'] = $this->m_dashboard->tampil_dataAdmin1()->result();
		$this->load->view('user',$data);
		$this->load->view('main/footerD');
	}

	public function wisata(){
		$data['active_menu']='wisata';
		$this->load->view('main/headerD',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('wisata');
		$this->load->view('main/footerD2');
	}

	public function uploadwisata(){
		$data['active_menu']='wisata';
		$this->load->view('main/headerD1',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('u-gambarwisata');
		$this->load->view('main/footerD9');
	}

	public function longlatwisata(){
		$data['active_menu']='wisata';
		$this->load->view('main/headerPeta',$data);
		$this->load->view('longlatwisata');
		$this->load->view('main/footerPeta');
	}

	public function penginapan(){
		$data['active_menu']='penginapan';
		$this->load->view('main/headerD',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('v_penginapan');
		$this->load->view('main/footerD3');
	}

	public function uploadpenginapan(){
		$data['active_menu']='penginapan';
		$this->load->view('main/headerD1',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('u-gambarpenginapan');
		$this->load->view('main/footerD8');
	}

	public function longlatpenginapan(){
		$data['active_menu']='penginapan';
		$this->load->view('main/headerPeta',$data);
		$this->load->view('longlatpenginapan');
		$this->load->view('main/footerPeta');
	}

	public function event(){
		$data['active_menu']='event';
		$this->load->view('main/headerD',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('event');
		$this->load->view('main/footerD4');
	}

	public function uploadevent(){
		$data['active_menu']='event';
		$this->load->view('main/headerD1',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('u-gambarevent');
		$this->load->view('main/footerD7');
	}

	public function berita(){
		$data['active_menu']='berita';
		$this->load->view('main/headerD',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('berita');
		$this->load->view('main/footerD5');
	}

	public function uploadberita(){
		$data['active_menu']='berita';
		$this->load->view('main/headerD1',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('u-gambarberita');
		$this->load->view('main/footerD6');
	}

	public function notifikasi(){
		$data['active_menu']='notifikasi';
		$this->load->view('main/headerD',$data);
		// $data['admin'] = $this->m_dashboard->tampil_dataAdmin()->result();
		// $this->load->view('listadmin',$data);
		$this->load->view('notifikasi');
		$this->load->view('main/footerD');
	}

	public function inputlokasi(){
		$data['active_menu']='inputlokasi';
		$this->load->view('main/headerPeta',$data);
		$this->load->view('inputlokasi');
		$this->load->view('main/footerPeta');
	}

	public function sendemail(){
		// // $config = Array(
		// // 	'protocol' => 'smtp',
		// // 	'smtp_host' => 'ssl://smtp.googlemail.com',
		// // 	'smtp_port' => 465,
		// // 	'smtp_user' => 'wehaye94@gmail.com',
		// // 	'smtp_pass' => '14wahyus94'

		// // );

		// $config = Array(
		//   'protocol' => 'smtp',
		//   'smtp_host' => 'ssl://smtp.googlemail.com',
		//   'smtp_port' => 465,
		//   'smtp_user' => 'wehaye94@gmail.com', // change it to yours
		//   'smtp_pass' => '14wahyus94', // change it to yours
		//   'mailtype' => 'html',
		//   'charset' => 'iso-8859-1',
		//   'wordwrap' => TRUE
		// );

		// // $this->load->library('email', $config);
		// // $this->email->set_newline("\r\n");

		// // $this->email->from('wehaye94@gmail.com','Wahyu Saepuloh');
		// // $this->email->to('wehaye94@gmail.com');
		// // $this->email->subject('This is an email Test with me');
		// // $this->email->message('It is working, Great!!!');

		// // if($this->email->send()){
		// // 	echo "Your Email was sent, Fool.";
		// // }else{
		// // 	show_error($this->email->print_debugger());
		// // }

		// 	$this->load->library('email', $config);
		//   $this->email->set_newline("\r\n");
		//   $this->email->from('wehaye94@gmail.com'); // change it to yours
		//   $this->email->to('wehaye94@gmail.com'); // change it to yours
		//   $this->email->subject('Email using Gmail.');
		//   $this->email->message('Working fine ! !');
		 
		//   if($this->email->send())
		//  {
		//   echo 'Email sent.';
		//  }
		//  else
		// {
		//  show_error($this->email->print_debugger());
		// }

		mail('wehaye94@gmail.com','Sample Email Content','From: wahyusaepuloh1@gmail.com');
	}

	//Untuk proses upload foto
	function proses_uploadBerita($id_berita){

        $config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('gambar_berita',array('gambar'=>$nama,'token'=>$token,'id_berita'=>$id_berita));
        	// $upd = $this->db->update('berita_terbaru',array('gambar'=>$nama,'token'=>$token),$id_berita);
        	// return $upd;
        }
	}

	//Untuk menghapus foto
	function remove_fotoBerita(){
		//Ambil token foto
		$token=$this->input->post('token');
		$foto=$this->db->get_where('gambar_berita',array('token'=>$token));

		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/upload-foto/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('gambar_berita',array('token'=>$token));
		}
		echo "{}";
	}

	//Untuk proses upload foto
	function proses_uploadEvent($id_event){

        $config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('gambar_event',array('gambar'=>$nama,'token'=>$token,'id_event'=>$id_event));
        }
	}

	//Untuk menghapus foto
	function remove_fotoEvent(){

		//Ambil token foto
		$token=$this->input->post('token');		
		$foto=$this->db->get_where('gambar_event',array('token'=>$token));

		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/upload-foto/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('gambar_event',array('token'=>$token));
		}
		echo "{}";
	}

	//Untuk proses upload foto
	function proses_uploadPenginapan($id_penginapan){

        $config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('gambar_penginapan',array('gambar'=>$nama,'token'=>$token,'id_penginapan'=>$id_penginapan));
        }
	}

	//Untuk menghapus foto
	function remove_fotoPenginapan(){

		//Ambil token foto
		$token=$this->input->post('token');	
		$foto=$this->db->get_where('gambar_penginapan',array('token'=>$token));

		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/upload-foto/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('gambar_penginapan',array('token'=>$token));
		}
		echo "{}";
	}

	//Untuk proses upload foto
	function proses_uploadWisata($id_wisata){

        $config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('gambar_wisata',array('gambar'=>$nama,'token'=>$token,'id_wisata'=>$id_wisata));
        }
	}

	//Untuk menghapus foto
	function remove_fotoWisata(){

		//Ambil token foto
		$token=$this->input->post('token');
		$foto=$this->db->get_where('gambar_wisata',array('token'=>$token));

		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/upload-foto/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('gambar_wisata',array('token'=>$token));
		}
		echo "{}";
	}

	public function insertKomen(){
	    $this->load->model('m_dashboard');
	    $page = $this->input->post('id_berita');
	    $data = array(
	        'nama' => $this->input->post('nama'),
	        'id_berita' => $this->input->post('id_berita'),
			'komentar' => $this->input->post('komentar')
	         );
	    $data = $this->m_dashboard->insertKomen('komentar_berita', $data);
	    redirect('detailberita/'.$page);
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertKomenEvent(){
	    $this->load->model('m_dashboard');
	    $page = $this->input->post('id_event');
	    $data = array(
	        'nama' => $this->input->post('nama'),
	        'id_event' => $this->input->post('id_event'),
			'komentar' => $this->input->post('komentar')
	         );
	    $data = $this->m_dashboard->insertKomen('komentar_event', $data);
	    redirect('detailevent/'.$page);
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertKomenWisata(){
	    $this->load->model('m_dashboard');
	    $page = $this->input->post('id_wisata');
	    $data = array(
	        'nama' => $this->input->post('nama'),
	        'id_wisata' => $this->input->post('id_wisata'),
			'komentar' => $this->input->post('komentar')
	         );
	    $data = $this->m_dashboard->insertKomen('komentar_wisata', $data);
	    redirect('detailwisata/'.$page);
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	public function insertKomenPenginapan(){
	    $this->load->model('m_dashboard');
	    $page = $this->input->post('id_penginapan');
	    $data = array(
	        'nama' => $this->input->post('nama'),
	        'id_penginapan' => $this->input->post('id_penginapan'),
			'komentar' => $this->input->post('komentar')
	         );
	    $data = $this->m_dashboard->insertKomen('komentar_penginapan', $data);
	    redirect('detailpenginapan/'.$page);
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}

	/*public function insertKomenTentang(){
	    $this->load->model('m_dashboard');
	    $page = $this->input->post('page');
	    $data = array(
	        'nama' => $this->input->post('nama'),
	        'id_tentang' => $this->input->post('id_tentang'),
			'komentar' => $this->input->post('komentar')
	         );
	    $data = $this->m_dashboard->insertKomen('komentar_tentang', $data);
	    redirect($page);
		echo json_encode(array("status" => TRUE));
		echo '<script type="text/javascript">alert("Data has been submitted");</script>';
	}*/

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
					$_SESSION['error'] = '';
					redirect('dashboard/login');
				}
    }

	public function logOut(){
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

	public function cekUser(){
		$this->load->library('session');
		$this->load->model('m_login');
				$data1=$this->m_login->checkLoginAdmin();
				$data2=$this->m_login->checkLoginUser();
				$data3=$this->m_login->cekEmailUser();
				$data4=$this->m_login->cekEmailAdmin();
				if($data1>0){
					$_SESSION['adaadmin'] = '';
					redirect('dashboard/login');
				}elseif ($data2>0) {
					$_SESSION['adauser'] = '';
					redirect('dashboard/login');
				}elseif ($data3>0) {
					$_SESSION['adaemailuser'] = '';
					redirect('dashboard/login');
				}elseif ($data4>0) {
					$_SESSION['adaemailadmin'] = '';
					redirect('dashboard/login');
				}else{
					$this->insert();
				}
	}

	function cekLogin(){
		$this->load->library('session');
		$this->load->model('m_login');
				$data1=$this->m_login->checkUserAdmin();
				$data2=$this->m_login->checkPassAdmin();
				$data3=$this->m_login->cekUserUser();
				$data4=$this->m_login->cekPassUser();
				if(($data1<1) && ($data3<1)){
					$_SESSION['salahuseradmin'] = '';
					redirect('dashboard/login');
				}elseif (($data2<1) && ($data4<1)) {
					$_SESSION['salahpassadmin'] = '';
					redirect('dashboard/login');
				}else{
					$this->loginAdmin();
				}
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
	    $_SESSION['suksesinput'] = '';
	    redirect('dashboard/login');
		// echo json_encode(array("status" => TRUE));
		// echo '<script type="text/javascript">alert("Data has been submitted");</script>';
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