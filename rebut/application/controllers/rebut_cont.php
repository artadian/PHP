<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rebut_cont extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	
	public function tax()
	{
		$this->load->view('tax');
	}
	
	public function event()
	{
		$this->db->order_by('tanggal_event', 'DESC');
		$this->load->model('event_model');
		$data['query']=$this->event_model->getAll();
		$this->load->view('event',$data);
	}
	
	public function gallery()
	{
		$this->db->order_by('id_gedung', 'ASC');
		$this->load->model('gedung_model');
		$data['query']=$this->gedung_model->getAll();
		$this->load->view('gallery',$data);
	}
	
	
	
	public function contact()
	{
		$this->load->view('contact');
	}
	
	public function pesan()
	{
		$this->load->view('pesan');
	}
	
	
	public function pemesanan()
	{
		/*if('gedung'=='Widyaloka'){
			$hasil = 'harga_gedung'=>$this->input->post('850000'),
			else if('gedung'=='Samantha Krida'){
				 	'1000000'=$this->input->post('harga_gedung'),
					else if('gedung'=='GOR Pertamina'){
						 	'1500000'=$this->input->post('harga_gedung'),
						 }
				 }
		}*/
		$data=array(
		'identitas'=>$this->input->post('identitas'),
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
		'gedung'=>$this->input->post('gedung'),
		'tanggal'=>$this->input->post('tanggal'),
		'kepentingan'=>$this->input->post('kepentingan')
		);
		
		$this->load->model('pemesanan_data');
		$data['query']=$this->pemesanan_data->save($data);
		redirect('rebut_cont/confirm');
	}
	
	public function confirm()
	{
		$this->load->view('confirm');
	}
	
	public function login()
	{
		$this->load->model('login_model');
		$hasil=$this->login_model->login();
		if(count($hasil)>0){
			$_SESSION['admin']=$hasil->username;
			redirect('rebut_cont/adminpage');
		}
		else echo "login gagal";
	}
	
	public function adminpage()
	{
		$this->load->view('adminpage');
	}
	
		
	
	
	public function adminlaporan()
	{
		$this->load->model('laporan_model');
		$data['query']=$this->laporan_model->getAll();
		$this->load->view('adminlaporan',$data);
	}
	public function cetaklaporan()
	{
		$this->load->model('laporan_model');
		$data['query']=$this->laporan_model->getAll();
		$data['querytotal']=$this->laporan_model->total_harga();
		$data['pajaktotal'] = $data['querytotal'];
		$this->load->view('cetaklaporan',$data);
		
	}
	public function total_harga()
	{
		$this->load->model('laporan_model');
		$data['query']=$this->laporan_model->total_harga($querytotal);
		$this->load->view('adminlaporan',$data);
	}
	
	
	
	
	
	
	
	
	
	public function admingedung()
	{
		$this->db->order_by('id_gedung', 'ASC');
		$this->load->model('gedung_model');
		$data['query']=$this->gedung_model->getAll();
		$this->load->view('admingedung',$data);
	}
	function prosestambahgedung(){
			//upload foto
			
	$this->load->model('gedung_model');
			 
			$judul = $this->input->post('judul');
			$path = "./styles/images/gedung";
			
			
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|png';
/*			$config['max_size']    = '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';*/
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload()){
				echo $this->upload->display_errors();
			}
			else{
				$data_file = $this->upload->data();
				$foto = $data_file['file_name'];
				$data = array(
					'nama_gedung'=>$this->input->post('nama'),
					'harga_gedung'=>$this->input->post('harga'),
					'gambar_gedung'=>$foto,
					'informasi_gedung'=>$this->input->post('inform'),
				);
				$this->gedung_model->tambahgedung($data);
				redirect('rebut_cont/admingedung');
			}
		}
	public function editgedung(){
		$this->load->model('gedung_model');
		$data['query']=$this->gedung_model->edit_gedung();
		$this->load->view('edit_gedung',$data);
	}
	public function pros_editgedung(){
		$data=array(
		'nama_gedung'=>$this->input->post('nama'),
		'harga_gedung'=>$this->input->post('harga'),
		'informasi_gedung'=>$this->input->post('inform'),
		);
		$this->load->model('gedung_model');
		$data['query']=$this->gedung_model->update_gedung($data);
		redirect('rebut_cont/admingedung');
	}
	public function hapusgedung(){
		$this->load->model('gedung_model');
		$this->gedung_model->hapus_gedung();
		redirect('rebut_cont/admingedung','refresh');
	}
	
	
	
	
	
	public function adminkalender()
	{
		$this->load->model('mynotes_model');
		$this->load->view('adminkalender');
	}
	
	
	
	
	
	
	
	public function adminevent()
	{
		$this->load->model('event_model');
		$data['query']=$this->event_model->getAll();
		$this->load->view('admin_event',$data);
	}
	public  function tambahevent()
	{
	$this->load->model('event_model');
	$this->event_model->save('');
	redirect('rebut_cont/adminevent','refresh');	
	}
	public function hapusevent(){
		$this->load->model('event_model');
		$this->event_model->hapus();
		redirect('rebut_cont/adminevent','refresh');
	}
	public function editevent(){
		$this->load->model('event_model');
		$data['query']=$this->event_model->edit();
		$this->load->view('edit_event',$data);
	}
	public function pros_editevent(){
		$data=array(
		'judul_event' => $this->input->post('judul'),
		'tanggal_event' => $this->input->post('tanggal'),
		'isi_event' => $this->input->post('isi'),
		'post_by' => $this->input->post('oleh'),
		);
		$this->load->model('event_model');
		$data['query']=$this->event_model->update($data);
		redirect('rebut_cont/adminevent');
	}
	
	
	
	
	function notespesan($year = null, $mon = null){
		$year = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
		$mon  = (empty($mon) || !is_numeric($mon))?  date('m') :  $mon;
		
		$date = $this->mynotes->getCalendar($year, $mon);
		$data = array(
					'notes' => $this->calendar->generate($year, $mon, $date),
					'year'  => $year,
					'mon'   => $mon
				);
		$this->load->view('pesan', $data);
	}
	
	
	
		
	public  function testampilgedung()
	
	{
		$this->load->model('gedung_model');
		$data['query']=$this->gedung_model->getAll();
		$this->load->view('testampilgedung',$data);
	}
	
	
	
	public function deleteevent($id_event){
		$this->load->model('event_model');
  		$this->event_model->delete_event($id_event);
  		redirect('rebut_cont/adminevent');
  
  	}
	
	
	
	
	
	function __construct(){
		parent::__construct();
		$this->load->model('mynotes_model', 'mynotes');
		$this->load->library('calendar', $this->_setting());
	}
	
	/*function index(){
		redirect('mynotes/notes');
	}*/
	
	// untuk konversi nama bulan
	function _month($mon){
		$mon = (int) $mon;
		switch($mon){
			case 1 : $mon = 'Januari'; Break;
			case 2 : $mon = 'Februari'; Break;
			case 3 : $mon = 'Maret'; Break;
			case 4 : $mon = 'April'; Break;
			case 5 : $mon = 'Mei'; Break;
			case 6 : $mon = 'Juni'; Break;
			case 7 : $mon = 'Juli'; Break;
			case 8 : $mon = 'Agustus'; Break;
			case 9 : $mon = 'September'; Break;
			case 10 : $mon = 'Oktober'; Break;
			case 11 : $mon = 'November'; Break;
			case 12 : $mon = 'Desember'; Break;
		}
		return $mon;
	}
	
	// untuk menambahkan catatan pada tanggal
	function add_note($date){
		$data = array(
					'day'   => $date,
					'mon'   => $this->input->post('mon'),
					'month' => $this->_month($this->input->post('mon')),
					'year'  => $this->input->post('year'),
				);
		$this->load->view('add_note', $data);
	}
	
	// aksi insert catatan
	function do_add($year, $mon, $day){
		$this->mynotes->addNote($year, $mon, $day, $this->input->post('note', true));
		$this->notes($year, $mon);
	}
	
	// menampilkan opsi untuk menghapus atau edit catatan
	function updel_note($date){
		$data = array(
					'day'   => $date,
					'mon'   => $this->input->post('mon'),
					'month' => $this->_month($this->input->post('mon')),
					'year'  => $this->input->post('year'),
					'note'  => $this->mynotes->getNote($this->input->post('year'), $this->input->post('mon'), $date)
				);
		$this->load->view('updel_note', $data);
	}
	
	// aksi untuk edit catatan
	function edit_note($year, $mon, $day){
		$this->mynotes->editNote($year, $mon, $day, $this->input->post('note', true));
		$this->notes($year, $mon);
	}
	
	// aksi untuk hapus catatan
	function delete_note($year, $mon, $day){
		$this->mynotes->deleteNote($year, $mon, $day);
		$this->notes($year, $mon);
	}
	
	// fungsi utama untuk menampilkan kalender catatan
	function notes($year = null, $mon = null){
		$year = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
		$mon  = (empty($mon) || !is_numeric($mon))?  date('m') :  $mon;
		
		$date = $this->mynotes->getCalendar($year, $mon);
		$data = array(
					'notes' => $this->calendar->generate($year, $mon, $date),
					'year'  => $year,
					'mon'   => $mon
				);
		$this->load->view('mynotes', $data);
	}
	
	
	// setting tampilan kalender
	function _setting(){
		return array(
			'start_day' 		=> 'sunday',
			'show_next_prev' 	=> true,
			'next_prev_url' 	=> site_url('mynotes/notes'),
			'month_type'   		=> 'long',
            'day_type'     		=> 'short',
			'template' 			=> '{table_open}<table class="date">{/table_open}
								   {heading_row_start}&nbsp;{/heading_row_start}
								   {heading_previous_cell}<caption><a href="{previous_url}" class="prev_date" title="Previous Month">&lt;&lt;</a>{/heading_previous_cell}
								   {heading_title_cell}{heading}{/heading_title_cell}
								   {heading_next_cell}<a href="{next_url}" class="next_date"  title="Next Month">&gt;&gt;</a></caption>{/heading_next_cell}
								   {heading_row_end}<col class="weekend_sun"><col class="weekday" span="5"><col class="weekend_sat">{/heading_row_end}
								   {week_row_start}<thead><tr>{/week_row_start}
								   {week_day_cell}<th>{week_day}</th>{/week_day_cell}
								   {week_row_end}</tr></thead><tbody>{/week_row_end}
								   {cal_row_start}<tr>{/cal_row_start}
								   {cal_cell_start}<td>{/cal_cell_start}
								   {cal_cell_content}<a href="'.site_url('mynotes/updel_note').'/{day}" class="act_note" title="Edit/hapus catatan untuk tanggal {day}"><div class="active act_note" val="{day}" title="Edit/Hapus catatan untuk tanggal {day}">{day}</div></a><div class="notes">{content}</div></div>{/cal_cell_content}
								   {cal_cell_content_today}<a href="'.site_url('mynotes/updel_note').'/{day}" class="act_note" title="Edit/hapus catatan untuk tanggal {day}"><div class="t_active" title="Edit/Hapus catatan untuk tanggal {day}">{day}</div></a><div class="t_notes">{content}</div>{/cal_cell_content_today}
								   {cal_cell_no_content}<a href="'.site_url('mynotes/add_note').'/{day}" class="act_note" title="Tambah catatan untuk tanggal {day}"><div class="day" title="Tambah catatan untuk tanggal {day}">{day}</div></a>{/cal_cell_no_content}
								   {cal_cell_no_content_today}<a href="'.site_url('mynotes/add_note').'/{day}" class="act_note" title="Tambah catatan untuk tanggal {day}"><div class="today" title="Tambah catatan untuk tanggal {day}">{day}</div></a>{/cal_cell_no_content_today}
								   {cal_cell_blank}&nbsp;{/cal_cell_blank}
								   {cal_cell_end}</td>{/cal_cell_end}
								   {cal_row_end}</tr>{/cal_row_end}
								   {table_close}</tbody></table>{/table_close}');
	}
}
