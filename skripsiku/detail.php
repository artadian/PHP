<?php
include_once 'ceksession.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0"> <CENTER><H3><font color="#ffffff">PENENTUAN PENGAJUAN PERBAIKAN GEDUNG SEKOLAH DASAR <BR>DENGAN METODE TOPSIS(AHP)</font> </H3></CENTER>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
              
			  
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>


                   <li>
                        <a  href="index.php" class="active-menu" ><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     
                    <li>
                        <a  href="crudsekolah.php"><i class="fa fa-desktop fa-3x"></i>CRUD DATA SEKOLAH</a>
                    </li>
						   <li  >
                        <a  href="ahpcek-input.php"><i class="fa fa-table fa-3x"></i> PROSES AHP</a>
                    </li>	
                      <li  >
                        <a  href="hitungtopsis.php"><i class="fa fa-table fa-3x"></i> PROSES TOPSIS DAN PERANGKINGAN</a>
                    </li>
                   </ul>


            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
          <div class="col-lg-12">
          	<h3>Detail Lokasi</h3>
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
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM data_sekolah WHERE id_sekolah='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$record = mysql_fetch_row($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	
	
	?>
			<table class="table table-striped">
        <tr>
          <th>ID Sekolah</th>
          <th>Nama Sekolah</th>
		  <th>Skala Kerusakan</th>
          <th>Jumlah Siswa</th>
          <th>Jumlah Kelas</th>
		  <th>Jumlah Rombongan Belajar</th>
		  <th>Prestasi Akademik</th>
		  <th>Prestasi non Akademik</th>
		  <th>Bantuan Terakhir</th>
		  
		</tr>
        <tr>
			<td><?php echo $record[0]?></td>
			<td><?php echo $record[1]?></td>
			<td><?php echo $record[2]?></td>
			<td><?php if($record[3]=='5'){
							echo "0-2";
						}elseif($record[3]=='3'){
							echo "3-5";
						}else{
							echo "6-8";
						}?></td>
			<td><?php if($record[4]=='1'){
							echo "Listrik Kurang dan Air Kurang";
						}elseif($record[4]=='2'){
							echo "Listrik Kurang dan Air Cukup";
						}elseif($record[4]=='3'){
							echo "Listrik Cukup dan Air Kurang";
						}else{
							echo "Listrik Cukup dan Air Cukup";
						}?></td>
			<td><?php if($record[5]=='5'){
							echo "0-5 Km";
						}elseif($record[5]=='3'){
							echo "5-10 Km";
						}else{
							echo "10-15 Km";
						}?></td>
			<td><?php if($record[6]=='5'){
							echo "&lt;= Rp. 1.000.000,-";
						}elseif($record[6]=='3'){
							echo "Rp. 1.000.000,- sampai Rp. 2.000.000,-";
						}else{
							echo "&gt;= Rp. 2.000.000,-";
						}?></td>
			<td><?php if($record[7]=='1'){
							echo "0-30";
						}elseif($record[7]=='2'){
							echo "31-60";
						}elseif($record[7]=='3'){
							echo "61-90";
						}elseif($record[7]=='4'){
							echo "91-120";
						}else{
							echo "121-150";
						}?></td>
			<td><?php if($record[8]=='2'){
							echo "&lt;= 10m&sup2;";
						}elseif($record[8]=='3'){
							echo "10 m&sup2; sampai 40 m&sup2;";
						}else{
							echo "&gt;= 40 m&sup2;";
						}?></td>
			<td><?php if($record[9]=='4'){
							echo "&lt;= Rp. 400.000,-";
						}elseif($record[9]=='3'){
							echo "Rp. 400.000,- sampai Rp. 800.000,-";
						}else{
							echo "&gt;= Rp. 800.000,-";
						}?></td>
		</tr>
        
      </table>
          	<div class="col-md-offset-2">
				<a class="btn btn-success" href="topsis.php"><< Kembali</a>
			</div>
			
          </div>
        </div>
                 <!-- /. ROW  -->
                 <hr />

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
