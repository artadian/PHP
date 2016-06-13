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
<?php 
include_once("db.php");
?>
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
                    <div class="col-md-12">
                     <h2>Tambah Bobot Kriteria</h2>   
                        
						</div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
				 
				  <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Pembobotan
                        </div>
<div class="row">
          <div class="col-lg-12">
		  <h2>Masukkan Pembobotan Kriteria Baru</h2>
			
			<form action="ahpcek.php" method="POST">
			<div class="form-group">
            		<label for="namamk" class="control-label col-md-2">Nama Matriks Kriteria</label>
            		<div class="col-sm-4">
						<input type="text" name="nama_mk"  class="form-control" placeholder="Masukkan nama matriks kriteria">
					</div>
        		</div>
				<br /><br />
			<table class="table table-bordered" style="width:720px;">
				<thead>
					<tr>
						<th></th>
						<th>A</th>
						<th>B</th>
						<th>C</th>
						<th>D</th>
						<th>E</th>
						<th>F</th>
					
					</tr>
				</thead>
				<tbody>
					<tr>
						<th >Skala Kerusakan (A)</th>
						<th><input type="number" min="0" max="9" name="AA"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="AB"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="AC"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="AD"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="AE"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="AF"  class="form-control" value="0" step="any"></th>
					
					</tr>
					<tr>
						<th>Jumlah Siswa (B)</th>
						<th><input type="number" min="0" max="9" name="BA"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="BB"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="BC"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="BD"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="BE"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="BF"  class="form-control" value="0" step="any"></th>
						
					</tr>
					<tr>
						<th>Jumlah Ruang Kelas (C)</th>
						<th><input type="number" min="0" max="9" name="CA"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="CB"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="CC"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="CD"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="CE"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="CF"  class="form-control" value="0" step="any"></th>
						
					</tr>
					<tr>
						<th>Jumlah Prestasi Akademik (D)</th>
						<th><input type="number" min="0" max="9" name="DA"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DB"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DC"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DD"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DE"  class="form-control" value="0" step="any"></th>
						<th><input type="number" min="0" max="9" name="DF"  class="form-control" value="0" step="any"></th>
						
					</tr>
					<tr>
						<th>Jumlah Prestasi non Akademik (E)</th>
						<th><input type="number" min="0" max="9" name="EA"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EB"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EC"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="ED"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EE"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EF"  class="form-control" value="0" step="any"></th>
						
					</tr>
					<tr>
						<th>Tahun Mendapat Bantuan Terakhir (F)</th>
						<th><input type="number" min="0" max="9" name="FA"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FB"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FC"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FD"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FE"  class="form-control" value="0" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FF"  class="form-control" value="1" readonly="readonly"></th>
						
					</tr>
					
				</tbody>
			</table>
			<button type="submit" class="btn btn-default" name="check">Check</button>
			</form>
			<h2>Petunjuk untuk Memasukkan Pembobotan Kriteria</h2>
			
			<table class="table table-striped table-bordered" style="width:600px;">
    			<thead>
        			<tr> <th align="center">Intensitas Kepentingan</th> <th align="center">Keterangan</th> </tr>
    			</thead>
    			<tbody>
        			<tr> <td align="center">1</td> <td>Kedua elemen sama pentingnya. Dua elemen mempunyai pengaruh sama besar</td></tr>
					<tr> <td align="center">3</td> <td>Elemen yang satu sedikit lebih penting daripada elemen yang lainnya. Pengalaman dan Penilaian sedikit menyokong satu elemen dibandingkan elemen lainnya</td></tr>
					<tr> <td align="center">5</td> <td>Elemen yang satu lebih penting daripada elemen yang lainnya. Pengalaman dan Penilaian sangat kuat menyokong satu elemen dibandingkan elemen lainnya</td></tr>
					<tr> <td align="center">7</td> <td>Satu elemen jelas lebih mutlak penting daripada elemen lainnya. Satu elemen yang kuat disokong dan dominan terlihat dalam praktek</td></tr>
					<tr> <td align="center">9</td> <td>Satu elemen mutlak penting daripada elemen lainnya. Bukti yang mendukung elemen yang satu terhadap elemen lain memiliki tingkat penegasan tertinggi yang mungkin menguatkan</td></tr>
					<tr> <td align="center">2, 4, 6, 8</td> <td>Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan. Nilai ini diberikan bila ada dua kompromi diantara 2 pilihan</td></tr>
        
    			</tbody>
			</table>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
            </div>
            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
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

