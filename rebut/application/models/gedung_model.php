<?php
class gedung_model extends CI_Model{
	public function getAll()
	{
		$query = $this->db->get('gedung');
		return $query->result();
	}
	
	 function tambahgedung($data){
		return	$this->db->insert('gedung',$data);
		}
		
		function tampilgallery(){
				$query = $this->db->query('SELECT judul,gambar,tgl_post from gallery ORDER BY tgl_post DESC');
		return $query->result();
		
		}
		function edit_gedung(){
		$id=$this->input->post('id_gedung');
		$query=$this->db->get_where('gedung',array('id_gedung'=>$id));
		return $query->result();
	}
	function update_gedung($data)
	{
		$id=$this->input->post('id_gedung');
		$where=array('id_gedung'=>$id);
		$this->db->update('gedung',$data,$where);
	}
	
		function hapus_gedung(){
		$data=array('id_gedung'=>$this->input->post('id_gedung'));
		$this->db->delete('gedung',$data);
	}
 
}
?>