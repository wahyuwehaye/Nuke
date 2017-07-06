<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterpenginapan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penginapan','penginapan');
	}

	public function index()
	{
		$this->load->helper('url');
	}

	public function ajax_list()
	{
		$list = $this->penginapan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $penginapan) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $penginapan->nama_penginapan;
			$row[] = $penginapan->alamat_penginapan;
            $row[] = $penginapan->harga_penginapan;
            $row[] = $penginapan->cp_penginapan;

			//add html for action
			$row[] = '<td class="td-actions text-right"><a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="javascript:void(0)" onclick="edit_penginapan('."'".$penginapan->id_penginapan."'".')">
                <i class="material-icons">edit</i>
            </a>
            <a rel="tooltip" title="Latitude Longitude" class="btn btn-info btn-simple btn-xs" href="longlatpenginapan/'.$penginapan->id_penginapan.'">
                <i class="material-icons">add_location</i>
            </a>
            <a rel="tooltip" title="Tambah Gambar" class="btn btn-success btn-simple btn-xs" href="uploadpenginapan/'.$penginapan->id_penginapan.'">
                <i class="material-icons">photo_library</i>
            </a>
            <a rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" href="javascript:void(0)" onclick="delete_penginapan('."'".$penginapan->id_penginapan."'".')">
                <i class="material-icons">close</i>
            </a></td>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->penginapan->count_all(),
						"recordsFiltered" => $this->penginapan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->penginapan->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->validate();
		$data = array(
				'nama_penginapan' => $this->input->post('nama_penginapan'),
				'alamat_penginapan' => $this->input->post("alamat_penginapan"),
                'daerah_penginapan' => $this->input->post('daerah_penginapan'),
                'ket_penginapan' => $this->input->post('ket_penginapan'),
                'harga_penginapan' => $this->input->post('harga_penginapan'),
                'long_penginapan' => $this->input->post('long_penginapan'),
                'lat_penginapan' => $this->input->post('lat_penginapan'),
                'cp_penginapan' => $this->input->post('cp_penginapan'),
                'id_admin' => $this->input->post('id_admin'),
                'id_user' => $this->input->post('id_user'),
			);
		$insert = $this->penginapan->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->validate();
		$data = array(
            'nama_penginapan' => $this->input->post('nama_penginapan'),
            'alamat_penginapan' => $this->input->post("alamat_penginapan"),
            'daerah_penginapan' => $this->input->post('daerah_penginapan'),
            'ket_penginapan' => $this->input->post('ket_penginapan'),
            'harga_penginapan' => $this->input->post('harga_penginapan'),
            'long_penginapan' => $this->input->post('long_penginapan'),
            'lat_penginapan' => $this->input->post('lat_penginapan'),
            'cp_penginapan' => $this->input->post('cp_penginapan'),
            'id_admin' => $this->input->post('id_admin'),
            'id_user' => $this->input->post('id_user'),
			);
		$this->penginapan->update(array('id_penginapan' => $this->input->post('id_penginapan')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function updatelonglatpenginapan()
	{
		$id = $this->input->post('id_penginapan');
		$data = array(
            'long_penginapan' => $this->input->post('long_penginapan'),
            'lat_penginapan' => $this->input->post('lat_penginapan'),
			);
		$this->penginapan->update(array('id_penginapan' => $this->input->post('id_penginapan')), $data);
		$_SESSION['sukseslonglat'] = '';
		redirect('longlatpenginapan/'.$id);
	}

	public function ajax_delete($id)
	{
		$this->penginapan->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nama_penginapan') == '')
		{
			$data['inputerror'][] = 'nama_penginapan';
			$data['error_string'][] = 'Nama Penginapan is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('alamat_penginapan') == '')
		{
			$data['inputerror'][] = 'alamat_penginapan';
			$data['error_string'][] = 'Alamat Penginapan is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('daerah_penginapan') == '')
		{
			$data['inputerror'][] = 'daerah_penginapan';
			$data['error_string'][] = 'Daerah is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('ket_penginapan') == '')
		{
			$data['inputerror'][] = 'ket_penginapan';
			$data['error_string'][] = 'Keterangan is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('harga_penginapan') == '')
		{
			$data['inputerror'][] = 'harga_penginapan';
			$data['error_string'][] = 'Harga is required';
			$data['status'] = FALSE;
		}else if($this->input->post('harga_penginapan') < 0)
		{
			$data['inputerror'][] = 'harga_penginapan';
			$data['error_string'][] = 'Harga Tidak boleh Minus';
			$data['status'] = FALSE;
		}else if(is_numeric($this->input->post('harga_penginapan')) == FALSE)
		{
			$data['inputerror'][] = 'harga_penginapan';
			$data['error_string'][] = 'Harga is WRONG';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}