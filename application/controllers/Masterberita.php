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
            // $row[] = $berita->jenis_berita;
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
		$this->validate();
			$data = array(
					'judul_berita' => $this->input->post('judul_berita'),
					'tgl_berita' => $this->input->post("tgl_berita"),
	                // 'jenis_berita' => $this->input->post('jenis_berita'),
	                'ket_berita' => $this->input->post('ket_berita'),
	                'cp_berita' => $this->input->post('cp_berita'),
	                'id_admin' => $this->input->post('id_admin'),
				);
			// $this->db->insert('berita_terbaru', $data);
			// $this->sendemail();
			$insert = $this->berita->save($data);
		
			echo json_encode(array("status" => TRUE));
		// }
	}

	public function ajax_update()
	{
		$this->validate();
		$data = array(
            'judul_berita' => $this->input->post('judul_berita'),
            'tgl_berita' => $this->input->post("tgl_berita"),
            // 'jenis_berita' => $this->input->post('jenis_berita'),
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

	function sendemail(){
        $this->load->model('m_dashboard', 'emails');
        $datetidtrans = "";
  //       $getidtrans = $this->db->query('SELECT * FROM berita_terbaru ORDER BY id_berita DESC LIMIT 1');
		// foreach ($getidtrans->result() as $cari) {
		//     $datetidtrans = $cari->id_booking;
		//     break;
		// }
		// $idtransbaru = $datetidtrans+1;
		// $judul = $this->input->post('judul_berita');

		$getdata=$this->emails->datanyanih();
		foreach ($getdata as $key) {
			$datetidtrans = $key['id_berita'];
			$judul = $key['judul_berita'];
		}

        $emails=$this->emails->selectemail();
        foreach($emails as $row){
            if($row['email']){
            $config = Array(
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'wonderfulboyolali@gmail.com', // change it to yours
              'smtp_pass' => 'boyolali123', // change it to yours
              'mailtype' => 'html',
              'charset' => 'iso-8859-1',
              'wordwrap' => TRUE
            );

                  $message = 'Hii '.$row['nama_lengkap'].', ada berita terbaru dengan judul "'.$judul.'" pada website Wonderful Boyolali. Silakan cek pada website di menu Berita atau klik pada link berikut ini : http://localhost/Nuke/index.php/detailberita/'.$datetidtrans.'';
                  $this->load->library('email', $config);
                  $this->email->set_newline("\r\n");
                  $this->email->from('wonderfulboyolali@gmail.com', 'Admin Boyolali'); // change it to yours
                  // $list = $this->m_dashboard->selectemail()->result_array();
                  $this->email->to($row['email']);// change it to yours
                  $this->email->subject($judul);
                  $this->email->message($message);
                  if($this->email->send())
                 {
                  // echo 'Email sent.';
                  $this->email->clear();
                  echo json_encode(array("status" => TRUE));
                 }
                 else
                {
                 show_error($this->email->print_debugger());
                }
        }
    }

    }

	private function validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('judul_berita') == '')
		{
			$data['inputerror'][] = 'judul_berita';
			$data['error_string'][] = 'Judul Berita is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('tgl_berita') == '')
		{
			$data['inputerror'][] = 'tgl_berita';
			$data['error_string'][] = 'Tanggal is required';
			$data['status'] = FALSE;
		}

		// if($this->input->post('jenis_berita') == '')
		// {
		// 	$data['inputerror'][] = 'jenis_berita';
		// 	$data['error_string'][] = 'Jenis Berita is required';
		// 	$data['status'] = FALSE;
		// }

		if($this->input->post('ket_berita') == '')
		{
			$data['inputerror'][] = 'ket_berita';
			$data['error_string'][] = 'Asal Daerah is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('cp_berita') == '')
		{
			$data['inputerror'][] = 'cp_berita';
			$data['error_string'][] = 'Nomor HP is required';
			$data['status'] = FALSE;
		}else if(is_numeric($this->input->post('cp_berita'))==FALSE)
		{
			$data['inputerror'][] = 'cp_berita';
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
