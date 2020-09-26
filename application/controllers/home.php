<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index(){
		$tampil['profil']=$this->home_model->tampil_profil();
		$tampil['skill']=$this->home_model->tampil_skill();
		$tampil['hobi']=$this->home_model->tampil_hobi();
		$tampil['sekolah']=$this->home_model->tampil_sekolah();
		$tampil['kerja']=$this->home_model->tampil_kerja();
		$tampil['organisasi']=$this->home_model->tampil_organisasi();
		$tampil['sertifikat']=$this->home_model->tampil_sertifikat();
		$this->load->view('view_home',$tampil);
	}
