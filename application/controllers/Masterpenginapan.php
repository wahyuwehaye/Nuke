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
}