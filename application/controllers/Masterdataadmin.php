	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdataadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin','admin');
	}

	public function index()
	{
		$this->load->helper('url');
	}

	public function ajax_list()
	{
		$list = $this->admin->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $admin) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $admin->username;
			$row[] = $admin->email;
            $row[] = $admin->no_hp_admin;

			//add html for action
            if (($_SESSION['username'])=='admin') {
			$row[] = '<td class="td-actions text-right"><a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="javascript:void(0)" onclick="edit_admin('."'".$admin->id_admin."'".')">
                <i class="material-icons">edit</i>
            </a>
            <a rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" href="javascript:void(0)" onclick="delete_admin('."'".$admin->id_admin."'".')">
                <i class="material-icons">close</i>
            </a></td>';
              }
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->admin->count_all(),
						"recordsFiltered" => $this->admin->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->admin->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->validate();
		$data = array(
				'username' => $this->input->post('username'),
				'password' =>md5($this->input->post("password")),
                'email' => $this->input->post('email'),
                'no_hp_admin' => $this->input->post('no_hp_admin'),
			);
		$insert = $this->admin->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->validate();
		$data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post("password")),
            'email' => $this->input->post('email'),
            'no_hp_admin' => $this->input->post('no_hp_admin'),
			);
		$this->admin->update(array('id_admin' => $this->input->post('id_admin')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->admin->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('username') == '')
		{
			$data['inputerror'][] = 'username';
			$data['error_string'][] = 'Username is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('email') == '')
		{
			$data['inputerror'][] = 'email';
			$data['error_string'][] = 'Email is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('password') == '')
		{
			$data['inputerror'][] = 'password';
			$data['error_string'][] = 'Password is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('no_hp_admin') == '')
		{
			$data['inputerror'][] = 'no_hp_admin';
			$data['error_string'][] = 'Nomor HP is required';
			$data['status'] = FALSE;
		}else if(is_numeric($this->input->post('no_hp_admin')) == FALSE)
		{
			$data['inputerror'][] = 'no_hp_admin';
			$data['error_string'][] = 'Nomor HP is WRONG';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}