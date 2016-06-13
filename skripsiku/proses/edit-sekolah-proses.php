<?php
$host = 'localhost';
$namadb = 'root';
$passdb = '';
$dbaktif = 'skripsi';
$conn = mysql_connect($host,$namadb,$passdb);
if (!$conn){
	echo '<p>Koneksi ke server gagal </p>';
}
mysql_select_db($dbaktif,$conn) or die ("Database tidak ditemukan");
if(isset($_POST['ubah'])){
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
					$idsekolah		= $_POST["idsekolah"];
					$namasekolah 	= $_POST["namasekolah"];
					$skala			= $_POST["skala"];
					$jumlahsiswa 	= $_POST["jumlahsiswa"];
					$jumlahkelas 	= $_POST["jumlahkelas"];
					$akademik		= $_POST["akademik"];
					$nonakademik	= $_POST["nonakademik"];
					$bantuan	 	= $_POST["bantuan"];
					
	
	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE data_sekolah SET nama_sekolah='$namasekolah', skala='$skala', siswa='$jumlahsiswa', kelas='$jumlahkelas', akademik='$akademik', nonakademik='$nonakademik', bantuanakhir='$bantuan' WHERE id_sekolah='$idsekolah'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo '<div class="alert alert-success alert-dismissable">
	              					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              					Data berhasil diubah !
	           					 </div>';
								 echo '<a href="../crudsekolah.php">Kembali</a>';
		
	}else{
		
		echo '<div class="alert alert-danger alert-dismissable">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              Data gagal diubah !
	            </div>';
				echo '<a href="../crudsekolah.php">Kembali</a>';
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>