<?php
class pemesanan_data extends CI_Model{
	function save($data)
	{
		$this->db->insert('penyewa',$data);
	}
	function update($data)
	{
		$id=$this->input->post('book_ID');
		$where=array('book_ID'=>$id);
		$this->db->update('penyewa',$data,$where);
	}
}
?>