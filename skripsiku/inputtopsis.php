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
font-size: 16px;">  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php" ><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a  href="crudsekolah.php"><i class="fa fa-desktop fa-3x"></i>CRUD DATA SEKOLAH</a>
                    </li>
						   <li  >
                        <a  href="ahpcek-input.php"><i class="fa fa-table fa-3x"></i> PROSES AHP</a>
                    </li>	
                      <li  >
                        <a  href="hitungtopsis.php"  class="active-menu"><i class="fa fa-table fa-3x"></i> PROSES TOPSIS DAN PERANGKINGAN</a>
                    </li>
                   </ul>
                        
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
               <div class="row">
          <div class="col-lg-12">
          	
			<h2>INPUT BOBOT PRIORITAS KE DATABASE</h2>
			
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


			if(isset($_POST['input']))
			{
				$abpfixx=$_POST['abpfix'];
				$bbpfixx=$_POST['bbpfix'];
				$cbpfixx=$_POST['cbpfix'];
				$dbpfixx=$_POST['dbpfix'];
				$ebpfixx=$_POST['ebpfix'];
				$fbpfixx=$_POST['fbpfix'];
						
				echo($bbpfixx);
								$sqlbobotprioritas = "update bobot_prioritas SET
								skala_kerusakan='$abpfixx',
								jumlah_siswa='$bbpfixx',
								jumlah_kelas='$cbpfixx',
								prestasi_akademik='$dbpfixx',
								prestasi_non_akademik='$ebpfixx',
								tahun_bantuan='$fbpfixx' where id_bobot=2";
						$hasilbobotprioritas = mysql_query($sqlbobotprioritas);
						if($hasilbobotprioritas)
						{
							echo '<div class="alert alert-success alert-dismissable">
	              					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              					Data berhasil dimasukan !
	           					 </div>';
								 header('Location:./hitungtopsis.php');

						}
						else{
							echo '<div class="alert alert-danger alert-dismissable">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              Data gagal dimasukan !
	            </div>';
						}
				
				
			}
			?>
			
			<a class="btn btn-success" href="topsis.php">lanjut ke perhitungan TOPSIS</a>
			
			
			</div></div>
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
