<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterberita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita','berita');
	}

	public function index()
	{
		$this->load->helper('url');
	}

	public function ajax_list()
	{
		$list = $this->berita->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $berita) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $berita->judul_berita;
			$row[] = $berita->tgl_berita;
            $row[] = $berita->jenis_berita;
            $row[] = $berita->cp_berita;

			//add html for action
			$row[] = '<td class="td-actions text-right"><a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="javascript:void(0)" onclick="edit_berita('."'".$berita->id_berita."'".')">
                <i class="material-icons">edit</i>
            </a>
            <a rel="tooltip" title="Tambah Gambar" class="btn btn-success btn-simple btn-xs" href="uploadberita/'.$berita->id_berita.'">
                <i class="material-icons">photo_library</i>
            </a>
            <a rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" href="javascript:void(0)" onclick="delete_berita('."'".$berita->id_berita."'".')">
                <i class="material-icons">close</i>
            </a></td>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->berita->count_all(),
						"recordsFiltered" => $this->berita->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->berita->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		// $config['upload_path'] = './uploads/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']	= '5000'; //in kb
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		//
		// $this->upload->initialize($config);
		//
		// //if upload failed
		// if ( ! $this->upload->do_upload('gambar_berita')){
		//
		// 	$data['message'] =  $this->upload->display_errors();
		// 	$this->load->view('notification_view', $data);
		// //if upload success
		// }else{
			$data = array(
					'judul_berita' => $this->input->post('judul_berita'),
					'tgl_berita' => $this->input->post("tgl_berita"),
	                'jenis_berita' => $this->input->post('jenis_berita'),
	                'ket_berita' => $this->input->post('ket_berita'),
	                'cp_berita' => $this->input->post('cp_berita'),
	                'id_admin' => $this->input->post('id_admin'),
				);
			// $this->db->insert('berita_terbaru', $data);
			$insert = $this->berita->save($data);
			echo json_encode(array("status" => TRUE));
		// }
	}

	public function ajax_update()
	{
		$data = array(
            'judul_berita' => $this->input->post('judul_berita'),
            'tgl_berita' => $this->input->post("tgl_berita"),
            'jenis_berita' => $this->input->post('jenis_berita'),
            'ket_berita' => $this->input->post('ket_berita'),
            'cp_berita' => $this->input->post('cp_berita'),
            'id_admin' => $this->input->post('id_admin'),
			);
		$this->berita->update(array('id_berita' => $this->input->post('id_berita')), $data);
		echo json_encode(array("status" => TRUE));

	}

	public function ajax_delete($id)
	{
		$this->berita->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
