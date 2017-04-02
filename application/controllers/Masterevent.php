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
			$row[] = $event->lokasi_event;
            $row[] = $event->cp_event;

			//add html for action
			$row[] = '<td class="td-actions text-right"><a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="javascript:void(0)" onclick="edit_event('."'".$event->id_event."'".')">
                <i class="material-icons">edit</i>
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
		$data = array(
				'nama_event' => $this->input->post('nama_event'),
				'tgl_event' => $this->input->post("tgl_event"),
                'lokasi_event' => $this->input->post('lokasi_event'),
                'gambar_event' => $this->input->post('gambar_event'),
                'ket_event' => $this->input->post('ket_event'),
                'waktu_event' => $this->input->post('waktu_event'),
                'jenis_event' => $this->input->post('jenis_event'),
                'cp_event' => $this->input->post('cp_event'),
                'komentar_event' => $this->input->post('komentar_event'),
                'daerah_event' => $this->input->post('daerah_event'),
                'id_admin' => $this->input->post('id_admin'),
                'id_user' => $this->input->post('id_user'),
			);
		$insert = $this->event->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
            'nama_event' => $this->input->post('nama_event'),
            'tgl_event' => $this->input->post("tgl_event"),
            'lokasi_event' => $this->input->post('lokasi_event'),
            'gambar_event' => $this->input->post('gambar_event'),
            'ket_event' => $this->input->post('ket_event'),
            'waktu_event' => $this->input->post('waktu_event'),
            'jenis_event' => $this->input->post('jenis_event'),
            'cp_event' => $this->input->post('cp_event'),
            'komentar_event' => $this->input->post('komentar_event'),
            'daerah_event' => $this->input->post('daerah_event'),
            'id_admin' => $this->input->post('id_admin'),
            'id_user' => $this->input->post('id_user'),
			);
		$this->event->update(array('id_event' => $this->input->post('id_event')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->event->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
