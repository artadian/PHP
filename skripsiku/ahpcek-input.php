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
                        <a  href="ahpcek-input.php" class="active-menu"><i class="fa fa-table fa-3x"></i> PROSES AHP</a>
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

			if(isset($_POST["input"]))
			{
				$namamk=$_POST["nama_mk"];
				
				$AA=$_POST["AA"];
				$BB=$_POST["BB"];
				$CC=$_POST["CC"];
				$DD=$_POST["DD"];
				$EE=$_POST["EE"];
				$FF=$_POST["FF"];
				
				
				
				$AB=$_POST["AB"];
				$AC=$_POST["AC"];
				$AD=$_POST["AD"];
				$AE=$_POST["AE"];
				$AF=$_POST["AF"];
				
				$BC=$_POST["BC"];
				$BD=$_POST["BD"];
				$BE=$_POST["BE"];
				$BF=$_POST["BF"];
				
				$CD=$_POST["CD"];
				$CE=$_POST["CE"];
				$CF=$_POST["CF"];
			
				$DE=$_POST["DE"];
				$DF=$_POST["DF"];
				
				$EF=$_POST["EF"];
				
				
				$BA=1/$AB;
				$CA=1/$AC;
				$CB=1/$BC;
				$DA=1/$AD;
				$DB=1/$BD;
				$DC=1/$CD;
				$EA=1/$AE;
				$EB=1/$BE;
				$EC=1/$CE;
				$ED=1/$DE;
				$FA=1/$AF;
				$FB=1/$BF;
				$FC=1/$CF;
				$FD=1/$DF;
				$FE=1/$EF;
				
				
				$sqlbobotahp = "insert into matriks_kriteria set
								nama_kriteria='$namamk',
								skala1='$AA',
								skala2='$BA',
								skala3='$CA',
								skala4='$DA',
								skala5='$EA',
								skala6='$FA',
								
								siswa1='$AB',
								siswa2='$BB',
								siswa3='$CB',
								siswa4='$DB',
								siswa5='$EB',
								siswa6='$FB',
							
								kelas1='$AC',
								kelas2='$BC',
								kelas3='$CC',
								kelas4='$DC',
								kelas5='$EC',
								kelas6='$FC',
								
								akademik1='$AD',
								akademik2='$BD',
								akademik3='$CD',
								akademik4='$DD',
								akademik5='$ED',
								akademik6='$FD',
							
								nonakademik1='$AE',
								nonakademik2='$BE',
								nonakademik3='$CE',
								nonakademik4='$DE',
								nonakademik5='$EE',
								nonakademik6='$FE',
							
								bantuan1='$AF',
								bantuan2='$BF',
								bantuan3='$CF',
								bantuan4='$DF',
								bantuan5='$EF',
								bantuan6='$FF';";
						$hasilbobotahp = mysql_query($sqlbobotahp);
						if($hasilbobotahp)
						{
							echo '<div class="alert alert-success alert-dismissable">
	              					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              					Data berhasil dimasukan !
	           					 </div>';
						}
						else{
							echo '<div class="alert alert-danger alert-dismissable">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              Data gagal dimasukan !
	            </div>';
						}
				
				
			}
			?>
			<h2>Pilih Kriteria yang akan Digunakan</h2>
		<form role="form" action="ahphitung.php" method="POST" class="form-horizontal">
			<div class="form-group">
        			<label for="single_select" class="control-label col-md-2">Kriteria yg Digunakan</label>
					<div class="col-sm-4">
        			<select name="namamk" id="nm">
							<?php
							$p = mysql_query("select * from matriks_kriteria");
							while ($row1=mysql_fetch_array($p)){
								echo "<option value=$row1[nama_kriteria]>$row1[nama_kriteria]</option>";
							}
							?>
						</select>
					</div>
					<div class="col-md-offset-6">
					<button type="submit" class="btn btn-default" name="id" >Ubah</button> <br/> 
				
					
				</div>
				<br>
				<div class="col-md-offset-6">
					
					<a class="btn btn-success" href="ahp.php">Tambah Pembobotan Baru</a>
					
				</div>
    		</div>
			
			</form>
			
			
			
			<br /><br />
			
		
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        </div>
        </div>
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
