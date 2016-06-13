<?php
class laporan_model extends CI_Model{
	
	public function getAll()
	{
		/*$query = $this->db->get('penyewa');
		return $query->result(); */
		
		$query = $this->db->query('SELECT
penyewa.identitas AS identitas,
penyewa.nama AS nama,
penyewa.alamat AS alamat,
penyewa.kepentingan AS kepentingan,
penyewa.gedung AS gedung,
penyewa.tanggal AS tanggal,
penyewa.id_sewa AS id_sewa,
gedung.harga_gedung
FROM
(penyewa)
Inner Join gedung ON penyewa.gedung = gedung.nama_gedung
'); 
		return $query->result();
		
	}
	
	public function total_harga()
	{
		$querytotal = $this->db->query('select sum(`rebut`.`gedung`.`harga_gedung`) AS `harga_gedung` from (`rebut`.`gedung` join `rebut`.`penyewa` on((`rebut`.`gedung`.`nama_gedung` = `rebut`.`penyewa`.`gedung`)))');
		return $querytotal->result();
	}

	
}
?>