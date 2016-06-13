<?php
	class model_admin extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		
		function getAll(){
			$query=$this->db->get('barang');
			return $query->result();
		}
		
		public function getBarang($kategori){
			$query=$this->db->get_where('barang',array('kategori'=>$kategori));
			return $query->result();
		}
		
		function clear(){
			$data = array('id_barang'=>$this->input->post('id'));
			$this->db->delete('barang',$data);
		}
		
		function cari_edit(){
			$id_barang=$this->input->post('id');
			$query=$this->db->get_where('barang',array('id_barang'=>$id_barang));
			return $query->result();
		}
		
		function update($data){
			$id_barang=$this->input->post('id');
			$where = array('id_barang'=>$id_barang);
			$this->db->update('barang',$data,$where);
		}
		
		function tambahBarang($data){
			$this->db->insert('barang',$data);
		}
		
		function getPesanan(){
			$q = "select customer.nama, customer.alamat, customer.no_telp, customer.kode_pos, penjualan.tgl_jual, detail_jual.nama_barang, detail_jual.jumlah
			 	from penjualan, customer, detail_jual
				where penjualan.id_customer = customer.id_customer and penjualan.id_jual=detail_jual.id_jual;";
			$query = $this->db->query($q);
			return $query->result();
		}
		
		function getCustomer(){
			$query=$this->db->get('customer');
			return $query->result();
		}
		
		function getKomentar(){
			$query=$this->db->get('komentar');
			return $query->result();
		}
		
/*		function deleteCustomer(){
			$data = array('id_customer'=>$this->input->post('id'));
			$this->db->delete('customer',$data);
		}*/
		
	}
?>