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

    public function InsertKomen($table,$data){
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

    public function countAdmin(){
        $query = $this->db->query("SELECT count(id_admin) FROM admin");
        return $query;
    }

    public function tampil_berita(){
        // return $this->db->get('berita_terbaru');
        // return $this->db->get('berita_terbaru')->order_by('id_berita', 'desc');
        $query = $this->db->query("SELECT * FROM berita_terbaru order by id_berita desc");
            return $query;
    }

    public function tampil_event(){
        // return $this->db->get('event');
        $query = $this->db->query("SELECT * FROM event order by id_event desc");
            return $query;
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

    public function find($column,$id){
              // $query = $this->db->get_where('berita_terbaru', array($column => $id));
              // return $query->result_array();
        }

    function viewDetailBerita($id){
            $query = $this->db->query("SELECT * FROM berita_terbaru where id_berita='".$id."'");
            return $query;
    }

    function viewDetailEvent($id){
            $query = $this->db->query("SELECT * FROM event where id_event='".$id."'");
            return $query;
    }

    function viewDetailWisata($id){
            $query = $this->db->query("SELECT * FROM tempat_wisata where id_wisata='".$id."'");
            return $query;
    }

    function viewDetailPenginapan($id){
            $query = $this->db->query("SELECT * FROM penginapan where id_penginapan='".$id."'");
            return $query;
    }

    function viewDetailKomenBerita($id){
            // $query = $this->db->query("SELECT * FROM komentar_berita JOIN user USING ( id_user ) where id_berita='".$id."'");
            $query = $this->db->query("SELECT * FROM komentar_berita where id_berita='".$id."'");
            return $query;
    }

    function viewDetailKomenEvent($id){
            // $query = $this->db->query("SELECT * FROM komentar_berita JOIN user USING ( id_user ) where id_berita='".$id."'");
            $query = $this->db->query("SELECT * FROM komentar_event where id_event='".$id."'");
            return $query;
    }

    function viewDetailKomenWisata($id){
            // $query = $this->db->query("SELECT * FROM komentar_berita JOIN user USING ( id_user ) where id_berita='".$id."'");
            $query = $this->db->query("SELECT * FROM komentar_wisata where id_wisata='".$id."'");
            return $query;
    }

    function viewDetailKomenPenginapan($id){
            // $query = $this->db->query("SELECT * FROM komentar_berita JOIN user USING ( id_user ) where id_berita='".$id."'");
            $query = $this->db->query("SELECT * FROM komentar_penginapan where id_penginapan='".$id."'");
            return $query;
    }

    function viewDetailKomenTentang($id){
            // $query = $this->db->query("SELECT * FROM komentar_berita JOIN user USING ( id_user ) where id_berita='".$id."'");
            $query = $this->db->query("SELECT * FROM komentar_tentang where id_tentang='".$id."'");
            return $query;
    }

}
?>
