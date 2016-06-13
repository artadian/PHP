<p align="center"><h1 align="center">DATA LAPORAN</h1></p>
<table border="1" align="center">
	<tr>
	<th>ID Sewa</th>
	<th>Identitas Penyewa</th>
	<th>Nama Penyewa</th>
	<th>Alamat Penyewa</th>
	<th>Kepentingan</th>
	<th>Gedung</th>
	<th>Tanggal Peminjaman</th>
	<th>Harga Gedung</th>
	</tr>
<?php 
foreach($query as $row){
	echo"<tr>";
	echo"<td>".$row->id_sewa."</td>";
	echo"<td>".$row->identitas."</td>";
	echo"<td>".$row->nama."</td>";
	echo"<td>".$row->alamat."</td>";
	echo"<td>".$row->kepentingan."</td>";
	echo"<td>".$row->gedung."</td>";
	echo"<td>".$row->tanggal."</td>";
	echo"<td align='center'> Rp.".$row->harga_gedung."</td>";
		
	echo"</td>";
	echo"</tr>";
}

?>
</table><p align="center">
Total Pemasukan yang diterima pada bulan ini adalah<font size="4" color="red"><b> RP. <?php foreach($querytotal as $hasil){ echo($hasil->harga_gedung);}; ?></b></font><br/>
Jadi Total Pajak yang harus di bayar ke dirjen pajak adalah<font size="4" color="red"><b> RP. 
	 <?php foreach($pajaktotal as $hasil){ $tot= $hasil->harga_gedung/10; echo($tot);}; ?></b></font><br/>


<a href="javascript:window.print()"><img src="<?=base_url()?>styles/images/print.png" height="40" width="40"></a></p>