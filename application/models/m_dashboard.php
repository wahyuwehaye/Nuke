<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboard extends CI_Model{
    public function getData($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }

    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }

    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function tampil_dataAdmin(){
		return $this->db->get('admin');
	}

    public function tampil_dataAdmin1(){
		return $this->db->get_where('admin',array('username'=>($_SESSION['username'])));
	}

    public function tampil_dataUser(){
		return $this->db->get('user');
	}

    public function tampil_berita(){
        return $this->db->get('berita_terbaru');
    }

    public function tampil_event(){
        return $this->db->get('event');
    }

    public function tampil_penginapan(){
        return $this->db->get('penginapan');
    }

    public function tampil_alam(){
		return $this->db->get_where('tempat_wisata',array('kategori_wisata'=>'Wisata Alam'));
	}

    public function tampil_kuliner(){
		return $this->db->get_where('tempat_wisata',array('kategori_wisata'=>'Wisata Kuliner'));
	}

    public function tampil_belanja(){
		return $this->db->get_where('tempat_wisata',array('kategori_wisata'=>'Wisata Belanja'));
	}

}
?>
