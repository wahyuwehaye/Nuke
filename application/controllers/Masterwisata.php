<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterwisata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_wisata','wisata');
	}

	public function index()
	{
		$this->load->helper('url');
	}

	public function ajax_list()
	{
		$list = $this->wisata->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $wisata) {
			$no++;
			$row = array();
            $row[] = $no;
			$row[] = $wisata->nama_wisata;
			$row[] = $wisata->alamat_wisata;
            $row[] = $wisata->kategori_wisata;
            $row[] = $wisata->harga_wisata;

			//add html for action
			$row[] = '<td class="td-actions text-right"><a rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs" href="javascript:void(0)" onclick="edit_wisata('."'".$wisata->id_wisata."'".')">
                <i class="material-icons">edit</i>
            </a>
            <a rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" href="javascript:void(0)" onclick="delete_wisata('."'".$wisata->id_wisata."'".')">
                <i class="material-icons">close</i>
            </a></td>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->wisata->count_all(),
						"recordsFiltered" => $this->wisata->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->wisata->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'nama_wisata' => $this->input->post('nama_wisata'),
				'alamat_wisata' => $this->input->post("alamat_wisata"),
                'kategori_wisata' => $this->input->post('kategori_wisata'),
                'gambar_wisata' => $this->input->post('gambar_wisata'),
                'lat_wisata' => $this->input->post('lat_wisata'),
                'long_wisata' => $this->input->post('long_wisata'),
                'ket_wisata' => $this->input->post('ket_wisata'),
                'komentar_wisata' => $this->input->post('komentar_wisata'),
                'harga_wisata' => $this->input->post('harga_wisata'),
                'notelp_wisata' => $this->input->post('notelp_wisata'),
				'tanggal_post' => $this->input->post('tanggal_post'),
                'id_admin' => $this->input->post('id_admin'),
                'id_user' => $this->input->post('id_user'),
			);
		$insert = $this->wisata->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
            'nama_wisata' => $this->input->post('nama_wisata'),
            'alamat_wisata' => $this->input->post("alamat_wisata"),
            'kategori_wisata' => $this->input->post('kategori_wisata'),
            'gambar_wisata' => $this->input->post('gambar_wisata'),
            'lat_wisata' => $this->input->post('lat_wisata'),
            'long_wisata' => $this->input->post('long_wisata'),
            'ket_wisata' => $this->input->post('ket_wisata'),
            'komentar_wisata' => $this->input->post('komentar_wisata'),
            'harga_wisata' => $this->input->post('harga_wisata'),
            'notelp_wisata' => $this->input->post('notelp_wisata'),
			'tanggal_post' => $this->input->post('tanggal_post'),
            'id_admin' => $this->input->post('id_admin'),
            'id_user' => $this->input->post('id_user'),
			);
		$this->wisata->update(array('id_wisata' => $this->input->post('id_wisata')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->wisata->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
