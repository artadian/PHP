<?php
class event_model extends CI_Model{
	public function getAll()
	{
		$query = $this->db->get('event');
		return $query->result();
	}
	function save($data)
	{
		$data = array(
		'judul_event' => $this->input->post('judul'),
		'tanggal_event' => $this->input->post('tanggal'),
		'isi_event' => $this->input->post('isi'),
		'post_by' => $this->input->post('oleh'),
		);
	return $this->db->insert('event',$data);
	}
	
	function hapus(){
		$data=array('id_event'=>$this->input->post('id_event'));
		$this->db->delete('event',$data);
	}
	
	function edit(){
		$id=$this->input->post('id_event');
		$query=$this->db->get_where('event',array('id_event'=>$id));
		return $query->result();
	} 
	
	function update($data)
	{
		$id=$this->input->post('id_event');
		$where=array('id_event'=>$id);
		$this->db->update('event',$data,$where);
	}
}
?>