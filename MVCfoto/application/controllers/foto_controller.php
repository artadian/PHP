<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class foto_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('index');
	}
	public function tampilbooking()
	{
		$this->load->model('booking_model');
		$data['query']=$this->booking_model->getAll();
		$this->load->view('tampil_booking',$data);
	}
	public function tampilportofolio()
	{
		$this->load->model('booking_model');
		$data['query']=$this->booking_model->tampilportofolioadmin();
		$this->load->view('tampil_portofolio',$data);
	}
	public function tampilportofolioadmin()
	{
		$this->load->model('booking_model');
		$data['query']=$this->booking_model->tampilportofolioadmin();
		$this->load->view('tampil_portofolio_admin',$data);
	}
	public function tampilharga()
	{
		$this->load->view('tampil_pricelist');
	}
	public function tampilberita()
	{
		$this->load->model('booking_model');
		$data['query']=$this->booking_model->tampilberita();
		$this->load->view('tampil_berita',$data);
	}
	public function tampilberitaadmin()
	{
		$this->load->model('booking_model');
		$data['query']=$this->booking_model->tampilberitaadmin();
		$this->load->view('tampil_berita_admin',$data);
	}
	public function tampilcontact()
	{
		
		$this->load->view('tampil_contactus');
	}
	function tambahberita(){
	if ($this->input->post('submit')){
	$this->booking_model->save();
	redirect('foto_controller/tampilberitaadmin');
	}
	$this->load->view('tambah_berita');
	}
	
	public function deleteberita($id_berita){
  $this->booking_model->delete_berita($id_berita);
  redirect('admin_page');
  	}
	
	public function updateberita($id_berita){
	$data['query']=$this->booking_model->getbyid_berita($id_berita);
	$this->load->view('edit',$data);
		}
		
	public function update(){
		if ($this->input->post('submit')){
		$this->booking_model->update_berita();
	redirect('foto_controller');
	}
	}
	function tampiltambahgambar(){
		$this->load->view('form_tambah');
	}
	
		function tambahgambar(){
			//upload foto
			
			 
			$judul = $this->input->post('judul');
			$path = "./gallery/";
			
			
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
				$tgl = date('Y-m-d');
				$data = array(
					'judul'=>$this->input->post('judul'),
					'gambar'=>$foto,
					'tgl_post'=>$tgl,
					'kategori'=>$this->input->post('kategori'),
					'id_user'=>'1'
				);
				$this->booking_model->tambahgallery($data);
				redirect('foto_controller/adminpage');
			}
		}
		
		function tambahbooking(){
			if ($this->input->post('submit')){
	$this->booking_model->tambahbooking();
	redirect('foto_controller/konfirmasi');
	
			}
	
}
		function loginadmin(){
			$this->load->view('loginadmin');
			}
			
			function booknow(){
			$id=$this->input->post('id_gallery');
			$data['query']=$this->booking_model->cari_kategori($id);
			$this->load->view('tambah_booking',$data);
			}
			
		function adminpage(){
			$this->load->view('admin_page');
			}
			
		public function login()
		{
			$this->load->model('booking_model');
			$hasil=$this->booking_model->login();
			if(count($hasil)>0){
			$_SESSION['admin']=$hasil->admin_user;
			redirect('foto_controller/adminpage');
			}
				else echo "login gagal";
			}

			public function logout()
			{
				redirect('foto_controller/index');
			}
			public function konfirmasi()
			{
				
				$data['query']=$this->booking_model->getbyid_booking();
				$this->load->view('konfirmasi',$data);
			}
			
			public function update_booking($no_booking){
	$data['query']=$this->booking_model->getbyid_bookingedit($no_booking);
	$this->load->view('edit_booking',$data);
		}
			
			function updatebooking(){
			if ($this->input->post('submit')){
			$this->booking_model->update_booking();
			redirect('foto_controller/tampilbooking');
			}
	}
		public function deletegallery($id_gallery){
  $this->booking_model->delete_gallery($id_gallery);
 redirect('foto_controller/tampilportofolioadmin'); 
  	}
}