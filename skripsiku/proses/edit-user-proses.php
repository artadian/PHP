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
	$id			= $_POST['id'];	
	$username	= $_POST['username'];	
	$password	= $_POST['password'];	
	$nama		= $_POST['nama'];	
	

	$update = mysql_query("UPDATE user SET username='$username', password='$password',  nama='$nama' WHERE id_user='$id'") or die(mysql_error());
	
	
	if($update){
		
		echo '<div class="alert alert-success alert-dismissable">
	              					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              					Data berhasil diubah !
	           					 </div>';
								 echo '<a href="../cruduser.php">Kembali</a>';
		
	}else{
		
		echo '<div class="alert alert-danger alert-dismissable">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              Data gagal diubah !
	            </div>';
				echo '<a href="../cruduser.php">Kembali</a>';
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>