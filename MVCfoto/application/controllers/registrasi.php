<?php
if(!defined('BASEPATH')) exit('Keluar dari sistem');

class Registrasi extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();

 //load helpernya
 $this->load->helper('form');
 }

 public function index()
 {
 //membuat form nama
 $ar_name = array('name'=>'nama',
 'id'=>'nama',
 'value'=>'',
 'class'=>'teks',
 'size'=>'40'
 );
 $data['f_nama'] = form_input($ar_name);

 //membuat form alamat
 $ar_alamat = array(
 'name'=>'alamat',
 'id'=>'alamat',
 'rows'=>'5',
 'cols'=>'40',
 'class'=>'teksarea'
 );
 $data['f_alamat'] = form_textarea($ar_alamat);

 //membuat form agama
 $ar_agama = array(
 'islam'=>'Islam',
 'kristen'=>'Kristen',
 'katolik'=>'Katolik',
 'hindu'=>'Hindu',
 'budha'=>'Budha',
 'konghucu'=>'Konghucu',
 'lainnya'=>'Lainnya'
 );
 $data['f_agama'] = form_dropdown('agama', $ar_agama);

 //membuat form hobi
 $ar_hobi1 = array(
 'name'=>'hobi[]',
 'id'=>'hobi',
 'value'=>'bola',
 );

 $ar_hobi2 = array(
 'name'=>'hobi[]',
 'id'=>'hobi',
 'value'=>'senam'
 );

 $ar_hobi3 = array(
 'name'=>'hobi[]',
 'id'=>'hobi',
 'value'=>'komputer'
 );

 $data['f_hobi'] = form_checkbox($ar_hobi1);
 $data['f_hobi2'] = form_checkbox($ar_hobi2);
 $data['f_hobi3'] = form_checkbox($ar_hobi3);

 //membuat form jurusan
 $ar_jur1 = array(
 'name'=>'jurusan',
 'id'=>'jurusan',
 'value'=>'komakt'
 );

 $ar_jur2 = array(
 'name'=>'jurusan',
 'id'=>'jurusan',
 'value'=>'ce'
 );

 $ar_jur3 = array(
 'name'=>'jurusan',
 'id'=>'jurusan',
 'value'=>'si'
 );

 $data['f_jur1'] = form_radio($ar_jur1);
 $data['f_jur2'] = form_radio($ar_jur2);
 $data['f_jur3'] = form_radio($ar_jur3);

 //membuat tombol
 $ar_tom = array(
 'name'=>'submit',
 'id'=> 'submit',
 'value'=>'Simpan',
 'class'=>'tombol'
 );

 $data['f_tombol'] = form_submit($ar_tom);
 $this->load->view('form_registrasi', $data);
 }
//end of class
}
?>
