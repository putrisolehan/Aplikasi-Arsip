<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data );
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataWNI()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nik=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('arsip_wni','nik',$nik)->row();
			$data['detail']['nik']= $tampil->nik;
            		$data['detail']['tgl_masuk']= $tampil->tgl_masuk;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['ttl']= $tampil->ttl;
            		$data['detail']['no_kotak']= $tampil->no_kotak;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='VFormUpdateWNI';
		}
		else
		{	
			$data['DataWNI']=$this->MSudi->GetData('arsip_wni');
			$data['content']='VWNI';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddWNI()
	{
		$data['content']='VFormAddWNI';
		$this->load->view('VBackend',$data);
	}
	public function AddDataWNI()
	{
		 $add['nik']=$this->input->post('nik');
         	 $add['tgl_masuk']= $this->input->post('tgl_masuk');
         	 $add['nama']= $this->input->post('nama');  
         	 $add['ttl']= $this->input->post('ttl'); 
         	 $add['no_kotak']= $this->input->post('no_kotak');  
         	 $add['alamat']= $this->input->post('alamat');   
        	 $this->MSudi->AddData('arsip_wni',$add);
        	 redirect(site_url('Welcome/DataWNI'));
	}



	public function UpdateDataWNI()
	{
		 $nik=$this->input->post('nik');
		 $update['tgl_masuk']= $this->input->post('tgl_masuk');
         	 $update['nama']= $this->input->post('nama');
         	  $update['ttl']= $this->input->post('ttl');
         	   $update['no_kotak']= $this->input->post('no_kotak');
         	    $update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('arsip_wni','nik',$nik,$update);
		 redirect(site_url('Welcome/DataWNI'));
	}


	public function DeleteDataWNI()
	{
		 $nik=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('arsip_wni','nik',$nik);
        	 redirect(site_url('Welcome/DataWNI'));
	}




	public function DataWNA()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$niora=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('arsip_wna','niora',$niora)->row();
				$data['detail']['niora']= $tampil->niora;
	            $data['detail']['tgl_masuk']= $tampil->tgl_masuk;
	            $data['detail']['no_kotak']= $tampil->no_kotak;
	            $data['detail']['nama']= $tampil->nama;
	            $data['detail']['ttl']= $tampil->ttl;
	            $data['detail']['alamat']= $tampil->alamat;
	            $data['detail']['kewarganegaraan']= $tampil->kewarganegaraan;
	            $data['detail']['sponsor']= $tampil->sponsor;
			$data['content']='VFormUpdateWNA';
		}
		else
		{	
			$data['DataWNA']=$this->MSudi->GetData('arsip_wna');
			$data['content']='VWNA';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddWNA()
	{
		$data['content']='VFormAddWNA';
		$this->load->view('VBackend',$data);
	}
	public function AddDataWNA()
	{
		 $add['niora']=$this->input->post('niora');
		 $add['tgl_masuk']= $this->input->post('tgl_masuk');
		 $add['no_kotak']= $this->input->post('no_kotak');
		 $add['nama']= $this->input->post('nama');
		 $add['ttl']= $this->input->post('ttl');
		 $add['alamat']= $this->input->post('alamat');
		 $add['kewarganegaraan']= $this->input->post('kewarganegaraan');
		 $add['sponsor']= $this->input->post('sponsor');
        	 $this->MSudi->AddData('arsip_wna',$add);
        	 redirect(site_url('Welcome/DataWNA'));
	}



	public function UpdateDataWNA()
	{
		 $niora=$this->input->post('niora');
		 $update['tgl_masuk']= $this->input->post('tgl_masuk');
		 $update['no_kotak']= $this->input->post('no_kotak');
		 $update['nama']= $this->input->post('nama');
		 $update['ttl']= $this->input->post('ttl');
		 $update['alamat']= $this->input->post('alamat');
		 $update['kewarganegaraan']= $this->input->post('kewarganegaraan');
		 $update['sponsor']= $this->input->post('sponsor');
         $this->MSudi->UpdateData('arsip_wna','niora',$niora,$update);
		 redirect(site_url('Welcome/DataWNA'));
	}


	public function DeleteDataWNA()
	{
		 $niora=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('arsip_wna','niora',$niora);
        	 redirect(site_url('Welcome/DataWNA'));
	}


	
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}




}