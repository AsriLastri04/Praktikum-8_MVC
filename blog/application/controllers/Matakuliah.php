<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

// fungsi menghasilkan seluruh data
public function index() {

// load model + bikin objek
 $this->load->model('matakuliah_model','mk1');

// pake class model + isi data
 $this->mk1->nama='Komunikasi Efektif';
 $this->mk1->sks ='2';
 $this->mk1->kode='01';
 
//
 $this->load->model('matakuliah_model','mk2');
 //
 $this->mk2->nama='Jaringan Komputer';
 $this->mk2->sks='3';
 $this->mk2->kode='02';
 
 //
 $this->load->model('matakuliah_model','mk3');
 //
 $this->mk3->nama='Pemrograman web';
 $this->mk3->sks='3';
 $this->mk3->kode='03';
 
 //
 $this->load->model('matakuliah_model','mk4');
 //
 $this->mk4->nama='UI/UX';
 $this->mk4->sks='3';
 $this->mk4->kode='04';
 
 //
 $this->load->model('matakuliah_model','mk5');
 //
 $this->mk5->nama='Basis Data';
 $this->mk5->sks='4';
 $this->mk5->kode='05';
 

 // simpan objek ke dalam array
 $list_mk = [$this->mk1, $this->mk2, $this->mk3 ,$this->mk4, $this->mk5];

 // siapin data untuk dikirim ke view

 $data["list_mk"] = $list_mk;

 $this->load->view('header');
 $this->load->view('matakuliah/index',$data);
 $this->load->view('footer');
 } 
}