<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterevent extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_event','event');
	}

	public function index()
	{
		$this->load->helper('url');
	}

	public function ajax_list()
	{
		$list = $this->event->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $event) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $event->nama_event;
            $row[] = $event->tgl_event;
            $row[] = $event->waktu_event;
			$row[] = $event->lokasi_event;
			$row[] = $event->daerah_event;
            $row[] = $event->cp_event;

			//add html for action
			$row[] = '<td class="td-actions text-right"><a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="javascript:void(0)" onclick="edit_event('."'".$event->id_event."'".')">
                <i class="material-icons">edit</i>
            </a>
            <a rel="tooltip" title="Tambah Gambar" class="btn btn-success btn-simple btn-xs" href="uploadevent/'.$event->id_event.'">
                <i class="material-icons">photo_library</i>
            </a>
            <a rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" href="javascript:void(0)" onclick="delete_event('."'".$event->id_event."'".')">
                <i class="material-icons">close</i>
            </a></td>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->event->count_all(),
						"recordsFiltered" => $this->event->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->event->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->validate();
		$data = array(
				'nama_event' => $this->input->post('nama_event'),
				'tgl_event' => $this->input->post("tgl_event"),
                'lokasi_event' => $this->input->post('lokasi_event'),
                'ket_event' => $this->input->post('ket_event'),
                'waktu_event' => $this->input->post('waktu_event'),
                // 'jenis_event' => $this->input->post('jenis_event'),
                'cp_event' => $this->input->post('cp_event'),
                'daerah_event' => $this->input->post('daerah_event'),
                'id_admin' => $this->input->post('id_admin'),
			);
		$insert = $this->event->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->validate();
		$data = array(
            'nama_event' => $this->input->post('nama_event'),
            'tgl_event' => $this->input->post("tgl_event"),
            'lokasi_event' => $this->input->post('lokasi_event'),
            'ket_event' => $this->input->post('ket_event'),
            'waktu_event' => $this->input->post('waktu_event'),
            // 'jenis_event' => $this->input->post('jenis_event'),
            'cp_event' => $this->input->post('cp_event'),
            'daerah_event' => $this->input->post('daerah_event'),
            'id_admin' => $this->input->post('id_admin'),
			);
		$this->event->update(array('id_event' => $this->input->post('id_event')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->event->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nama_event') == '')
		{
			$data['inputerror'][] = 'nama_event';
			$data['error_string'][] = 'Nama Event is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('tgl_event') == '')
		{
			$data['inputerror'][] = 'tgl_event';
			$data['error_string'][] = 'Tanggal is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('lokasi_event') == '')
		{
			$data['inputerror'][] = 'lokasi_event';
			$data['error_string'][] = 'Lokasi is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('ket_event') == '')
		{
			$data['inputerror'][] = 'ket_event';
			$data['error_string'][] = 'Keterangan is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('waktu_event') == '')
		{
			$data['inputerror'][] = 'waktu_event';
			$data['error_string'][] = 'Waktu is required';
			$data['status'] = FALSE;
		}

		// if($this->input->post('jenis_event') == '')
		// {
		// 	$data['inputerror'][] = 'jenis_event';
		// 	$data['error_string'][] = 'Please select gender';
		// 	$data['status'] = FALSE;
		// }

		if($this->input->post('cp_event') == '')
		{
			$data['inputerror'][] = 'cp_event';
			$data['error_string'][] = 'Contact Person is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('daerah_event') == '')
		{
			$data['inputerror'][] = 'daerah_event';
			$data['error_string'][] = 'Daerah is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}