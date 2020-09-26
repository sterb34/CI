<?php
class Home_model extends CI_Model{

	public function tampil_profil(){
		return $this->db->get('profil');
	}

	public function tampil_skill(){
		return $this->db->get('skill');
	}

	public function tampil_hobi(){
		return $this->db->get('hobi');
	}

	public function tampil_sekolah(){
		return $this->db->get('riwayat_sekolah');
	}

	public function tampil_kerja(){
		return $this->db->get('riwayat_kerja');
	}

	public function tampil_organisasi(){
		return $this->db->get('organisasi');
	}

	public function tampil_sertifikat(){
		return $this->db->get('sertifikat');
	}
}
