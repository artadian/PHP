<?php
 class booking_model extends CI_Model{
 	public function getAll()
	{		
		$query = $this->db->get('booking');
		return $query->result();
	}
		public function getbyid_berita($id_berita)
	{		
		$query=$this->db->get_where('berita',array('id_berita'=>$id_berita));
		return $query->result();
	}
	
	function save()
	{
		$tgl=date('Y-m-d');
		$data=array('judul'=>$this->input->post('judul'),'isi'=>$this->input->post('isi'),
					'tgl_post'=>$tgl,
					'id_user'=>'1');
					$this->db->insert('berita',$data);
	}
	function tampilberita(){
		$query = $this->db->query('SELECT judul,isi,tgl_post from berita ORDER BY tgl_post DESC');
		return $query->result();
	}
	function tampilberitaadmin(){
		$query = $this->db->query('SELECT id_berita,judul,isi,tgl_post from berita ORDER BY tgl_post DESC');
		return $query->result();
	}
	function tampilportofolio(){
			$query = $this->db->query('SELECT judul,gambar,tgl_post from gallery ORDER BY tgl_post DESC');
		return $query->result();
	}
	function tampilportofolioadmin(){
			$query = $this->db->query('SELECT id_gallery,judul,gambar,tgl_post,kategori from gallery ORDER BY tgl_post DESC');
		return $query->result();
	}
	function delete_berita($id_berita){
  		$query = $this->db->delete('berita', "id_berita = '$id_berita'");
		return $query;
 }
 	function update_berita(){
		$id= $this->input->post('id_berita');
			$tgl = date('Y-m-d');
		$data=array('judul'=>$this->input->post('judul'),'isi'=>$this->input->post('isi'),
					'tgl_post'=>$tgl);
		$where= array('id_berita' =>$id);
		$this->db->update('berita', $data,$where);
		
	}
 function tambahgallery($data){
			$this->db->insert('gallery',$data);
		}
		function tampilgallery(){
				$query = $this->db->query('SELECT judul,gambar,tgl_post from gallery ORDER BY tgl_post DESC');
		return $query->result();
		}
		
		function tambahbooking(){
		$data=array('nama'=>$this->input->post('nama'),'alamat'=>$this->input->post('alamat'),'telp'=>$this->input->post('telepon'),'email'=>$this->input->post('email'),'paket'=>$this->input->post('paket'),'catatan'=>$this->input->post('catatan'),'tanggal_booking'=>$this->input->post('tanggal'),'status'=>'pending');
		$this->db->insert('booking',$data);
		
		
		}
		
		function login(){
		$admin_user=$this->input->post('admin_user');
		$admin_pass=$this->input->post('admin_pass');
		$query=$this->db->get_where('user',array('username'=>$admin_user,'password'=>$admin_pass));
		return $query->row();
		}
		
	public function getbyid_booking()
	{		
		$query=$this->db->query('SELECT no_booking,nama,alamat,telp,email,paket,catatan,tanggal_booking,status from booking  ORDER BY no_booking DESC limit 1');
		return $query->result();
	}	
	
	public function getbyid_bookingedit($no_booking)
	{		
		$query=$this->db->get_where('booking',array('no_booking'=>$no_booking));
		return $query->result();
	}
	
	function update_booking(){
		
		$id=$this->input->post('no_booking');
		$data=array('status'=>$this->input->post('status'));
		$where= array('no_booking' =>$id);
		$this->db->update('booking', $data,$where);
		
	}
function delete_gallery($id_gallery){
  		$query = $this->db->delete('gallery', "id_gallery = '$id_gallery'");
		return $query;
 }
 
 	function cari_kategori($id){
	$query=$this->db->get_where('gallery',array('id_gallery'=>$id));
	return $query->result();
	}

}
?>
		
