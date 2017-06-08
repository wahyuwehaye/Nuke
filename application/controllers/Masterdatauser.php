<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdatauser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user','user');
	}

	public function index()
	{
		$this->load->helper('url');
	}

	public function ajax_list()
	{
		$list = $this->user->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $user) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $user->nama_lengkap;
			$row[] = $user->email;
            $row[] = $user->domisili;
            $row[] = $user->asal_daerah;
            $row[] = $user->no_hp_user;
            $row[] = $user->jk;
            $row[] = $user->username;

			//add html for action
            // if (($_SESSION['username'])=='admin') {
			$row[] = '<td class="td-actions text-right"><a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="javascript:void(0)" onclick="edit_user('."'".$user->id_user."'".')">
                <i class="material-icons">edit</i>
            </a>
            <a rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" href="javascript:void(0)" onclick="delete_user('."'".$user->id_user."'".')">
                <i class="material-icons">close</i>
            </a></td>';
            //   }
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->user->count_all(),
						"recordsFiltered" => $this->user->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->user->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->validate();
		$data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'email' => $this->input->post('email'),
            'domisili' => $this->input->post('domisili'),
            'asal_daerah' => $this->input->post('asal_daerah'),
            'no_hp_user' => $this->input->post('no_hp_user'),
            // 'role' => $this->input->post('role'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post("password")),
            'jk' => $this->input->post('jk'),
			);
		$insert = $this->user->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->validate();
		$data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'email' => $this->input->post('email'),
            'domisili' => $this->input->post('domisili'),
            'asal_daerah' => $this->input->post('asal_daerah'),
            'no_hp_user' => $this->input->post('no_hp_user'),
            // 'role' => $this->input->post('role'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post("password")),
            'jk' => $this->input->post('jk'),
			);
		$this->user->update(array('id_user' => $this->input->post('id_user')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->user->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nama_lengkap') == '')
		{
			$data['inputerror'][] = 'nama_lengkap';
			$data['error_string'][] = 'Nama Lengkap is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('email') == '')
		{
			$data['inputerror'][] = 'email';
			$data['error_string'][] = 'Email is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('domisili') == '')
		{
			$data['inputerror'][] = 'domisili';
			$data['error_string'][] = 'Domisili is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('asal_daerah') == '')
		{
			$data['inputerror'][] = 'asal_daerah';
			$data['error_string'][] = 'Asal Daerah is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('no_hp_user') == '')
		{
			$data['inputerror'][] = 'no_hp_user';
			$data['error_string'][] = 'Nomor HP is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('jk') == '')
		{
			$data['inputerror'][] = 'jk';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
		}

		if($this->input->post('username') == '')
		{
			$data['inputerror'][] = 'username';
			$data['error_string'][] = 'Username is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('password') == '')
		{
			$data['inputerror'][] = 'password';
			$data['error_string'][] = 'Password is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}