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
            <a rel="tooltip" title="Latitude Longitude" class="btn btn-info btn-simple btn-xs" href="longlatwisata/'.$wisata->id_wisata.'">
                <i class="material-icons">add_location</i>
            </a>
            <a rel="tooltip" title="Tambah Gambar" class="btn btn-success btn-simple btn-xs" href="uploadwisata/'.$wisata->id_wisata.'">
                <i class="material-icons">photo_library</i>
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
		$this->validate();
		$data = array(
				'nama_wisata' => $this->input->post('nama_wisata'),
				'alamat_wisata' => $this->input->post("alamat_wisata"),
                'kategori_wisata' => $this->input->post('kategori_wisata'),
                'lat_wisata' => $this->input->post('lat_wisata'),
                'long_wisata' => $this->input->post('long_wisata'),
                'ket_wisata' => $this->input->post('ket_wisata'),
                'harga_wisata' => $this->input->post('harga_wisata'),
                'notelp_wisata' => $this->input->post('notelp_wisata'),
				'tanggal_post' => $this->input->post('tanggal_post'),
                'id_admin' => $this->input->post('id_admin'),
			);
		$insert = $this->wisata->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->validate();
		$data = array(
            'nama_wisata' => $this->input->post('nama_wisata'),
            'alamat_wisata' => $this->input->post("alamat_wisata"),
            'kategori_wisata' => $this->input->post('kategori_wisata'),
            'lat_wisata' => $this->input->post('lat_wisata'),
            'long_wisata' => $this->input->post('long_wisata'),
            'ket_wisata' => $this->input->post('ket_wisata'),
            'harga_wisata' => $this->input->post('harga_wisata'),
            'notelp_wisata' => $this->input->post('notelp_wisata'),
			'tanggal_post' => $this->input->post('tanggal_post'),
            'id_admin' => $this->input->post('id_admin'),
			);
		$this->wisata->update(array('id_wisata' => $this->input->post('id_wisata')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function updatelonglatwisata()
	{
		$id = $this->input->post('id_wisata');
		$data = array(
            'lat_wisata' => $this->input->post('lat_wisata'),
            'long_wisata' => $this->input->post('long_wisata'),
			);
		$this->wisata->update(array('id_wisata' => $this->input->post('id_wisata')), $data);
		$_SESSION['sukseslonglat'] = '';
		redirect('longlatwisata/'.$id);
	}

	public function ajax_delete($id)
	{
		$this->wisata->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('nama_wisata') == '')
		{
			$data['inputerror'][] = 'nama_wisata';
			$data['error_string'][] = 'Nama Wisata is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('alamat_wisata') == '')
		{
			$data['inputerror'][] = 'alamat_wisata';
			$data['error_string'][] = 'Alamat is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('kategori_wisata') == '')
		{
			$data['inputerror'][] = 'kategori_wisata';
			$data['error_string'][] = 'Kategori is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('ket_wisata') == '')
		{
			$data['inputerror'][] = 'ket_wisata';
			$data['error_string'][] = 'Keterangan Wisata is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('harga_wisata') == '')
		{
			$data['inputerror'][] = 'harga_wisata';
			$data['error_string'][] = 'Harga is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('notelp_wisata') == '')
		{
			$data['inputerror'][] = 'notelp_wisata';
			$data['error_string'][] = 'Nomor Telepon is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('tanggal_post') == '')
		{
			$data['inputerror'][] = 'tanggal_post';
			$data['error_string'][] = 'Tanggal Post is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}