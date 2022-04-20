<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

// fungsi menghasilkan seluruh data
public function index() {

// load model + bikin objek
 $this->load->model('dosen_model','dsn1');

// pake class model + isi data
 $this->dsn1->id=1;
 $this->dsn1->nidn ='0100023';
 $this->dsn1->nama='Ahmad yani';
 $this->dsn1->gender='L';
 $this->dsn1->pendidikan= 'sarjana komputer';
//
 $this->load->model('dosen_model','dsn2');
 //
 $this->dsn2->id=2;
 $this->dsn2->nidn='0200092';
 $this->dsn2->nama='Chintia';
 $this->dsn2->gender='P';
 $this->dsn2->pendidikan='sarjana hukum';

 // simpan objek ke dalam array
 $list_dsn = [$this->dsn1, $this->dsn2];

 // siapin data untuk dikirim ke view

 $data["list_dsn"] = $list_dsn;

 $this->load->view('header');
 $this->load->view('dosen/index',$data);
 $this->load->view('footer');
 } 
}