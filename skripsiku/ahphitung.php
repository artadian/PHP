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
                        <a  href="ahpcek-input.php"  class="active-menu"><i class="fa fa-table fa-3x"></i> PROSES AHP</a>
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
					?>
                     <h2>Matrik Perbandingan Kriteria ( yang telah dipilih )</h2>
		  <table class="table table-striped">
        <tr>
          <th></th>
          <th>A</th>
		  <th>B</th>
		  <th>C</th>
          <th>D</th>
          <th>E</th>
		  <th>F</th>
        
        </tr>
		<?php
        $namamk = $_POST["namamk"];
		  
		  $sql = "SELECT * FROM matriks_kriteria WHERE nama_kriteria='$namamk'";
          $hasil = mysql_query($sql);
		  
               if(mysql_num_rows($hasil) > 0)
          {
                        
              $record = mysql_fetch_row($hasil);
			echo '<tr>
                  		<td>A</td>
                  		<td>'.round($record[2],3).'</td>
                  		<td>'.round($record[8],3).'</td>
                  		<td>'.round($record[14],3).'</td>
				  		<td>'.round($record[20],3).'</td>
				  		<td>'.round($record[26],3).'</td>
				  		<td>'.round($record[32],3).'</td>
				  	
					</tr>';
			echo '<tr>
                  		<td>B</td>
                  		<td>'.round($record[3],3).'</td>
                  		<td>'.round($record[9],3).'</td>
                  		<td>'.round($record[15],3).'</td>
				  		<td>'.round($record[21],3).'</td>
				  		<td>'.round($record[27],3).'</td>
				  		<td>'.round($record[33],3).'</td>
				  	
				 	</tr>';
			echo '<tr>
                  		<td>C</td>
                  		<td>'.round($record[4],3).'</td>
                  		<td>'.round($record[10],3).'</td>
                  		<td>'.round($record[16],3).'</td>
				  		<td>'.round($record[22],3).'</td>
				  		<td>'.round($record[28],3).'</td>
				  		<td>'.round($record[34],3).'</td>
				  	
				 	</tr>';
			echo '<tr>
                  		<td>D</td>
                  		<td>'.round($record[5],3).'</td>
                  		<td>'.round($record[11],3).'</td>
                  		<td>'.round($record[17],3).'</td>
				  		<td>'.round($record[23],3).'</td>
				  		<td>'.round($record[29],3).'</td>
				  		<td>'.round($record[35],3).'</td>
				  		
				 	</tr>';
			echo '<tr>
                  		<td>E</td>
                  		<td>'.round($record[6],3).'</td>
                  		<td>'.round($record[12],3).'</td>
                  		<td>'.round($record[18],3).'</td>
				  		<td>'.round($record[24],3).'</td>
				  		<td>'.round($record[30],3).'</td>
				  		<td>'.round($record[36],3).'</td>
				  	
				 	</tr>';
			echo '<tr>
                  		<td>F</td>
                  		<td>'.round($record[7],3).'</td>
                  		<td>'.round($record[13],3).'</td>
                  		<td>'.round($record[19],3).'</td>
				  		<td>'.round($record[25],3).'</td>
				  		<td>'.round($record[31],3).'</td>
				  		<td>'.round($record[37],3).'</td>
				  		
				 	</tr>';
			
          
            
          }
          else {
            echo '<tr>
          <td colspan="4"> Tidak Ada Data.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr> ';
          }
		  //}
        ?>
        </table>
	<h2> Jumlah Tiap Kolom </h2>
	<table class="table table-striped">
					<tr>
          				<th></th>
				        <th>A</th>
						<th>B</th>
						<th>C</th>
				        <th>D</th>
				        <th>E</th>
						<th>F</th>
				       </tr>
						<?php
				$query=mysql_query("select * from matriks_kriteria WHERE nama_kriteria='$namamk'");
				while ($data=mysql_fetch_array($query)){
					$skalatotal=$data['skala1']+$data['skala2']+$data['skala3']+$data['skala4']+$data['skala5']+$data['skala6'];
					$siswatotal=$data['siswa1']+$data['siswa2']+$data['siswa3']+$data['siswa4']+$data['siswa5']+$data['siswa6'];
					$kelastotal=$data['kelas1']+$data['kelas2']+$data['kelas3']+$data['kelas4']+$data['kelas5']+$data['kelas6'];
					$akademiktotal=$data['akademik1']+$data['akademik2']+$data['akademik3']+$data['akademik4']+$data['akademik5']+$data['akademik6'];
					$nonakademiktotal=$data['nonakademik1']+$data['nonakademik2']+$data['nonakademik3']+$data['nonakademik4']+$data['nonakademik5']+$data['nonakademik6'];
					$bantuantotal=$data['bantuan1']+$data['bantuan2']+$data['bantuan3']+$data['bantuan4']+$data['bantuan5']+$data['bantuan6'];
					
					
					
				}
				echo '<tr>
                  		<td>A</td>
                  		<td>'.round($skalatotal,3).'</td>
                  		<td>'.round($siswatotal,3).'</td>
                  		<td>'.round($kelastotal,3).'</td>
				  		<td>'.round($akademiktotal,3).'</td>
				  		<td>'.round($nonakademiktotal,3).'</td>
				  		<td>'.round($bantuantotal,3).'</td>
					</tr>';
			
				?>
				</table>
				<h2>Tabel Normalisasi Matriks</h2>
				<table class="table table-striped">
					<tr>
          				<th></th>
				        <th>A</th>
						<th>B</th>
						<th>C</th>
				        <th>D</th>
				        <th>E</th>
						<th>F</th>
				      	<th>SUM</th>
        			</tr>
					
					<?php
				$query=mysql_query("select * from matriks_kriteria WHERE nama_kriteria='$namamk'");
				while ($data=mysql_fetch_array($query)){
					$aan=$data['skala1']/$skalatotal;
					$ban=$data['skala2']/$skalatotal;
					$can=$data['skala3']/$skalatotal;
					$dan=$data['skala4']/$skalatotal;
					$ean=$data['skala5']/$skalatotal;
					$fan=$data['skala6']/$skalatotal;
					$abn=$data['siswa1']/$siswatotal;
					$bbn=$data['siswa2']/$siswatotal;
					$cbn=$data['siswa3']/$siswatotal;
					$dbn=$data['siswa4']/$siswatotal;
					$ebn=$data['siswa5']/$siswatotal;
					$fbn=$data['siswa6']/$siswatotal;
					$acn=$data['kelas1']/$kelastotal;
					$bcn=$data['kelas2']/$kelastotal;
					$ccn=$data['kelas3']/$kelastotal;
					$dcn=$data['kelas4']/$kelastotal;
					$ecn=$data['kelas5']/$kelastotal;
					$fcn=$data['kelas6']/$kelastotal;
					$adn=$data['akademik1']/$akademiktotal;
					$bdn=$data['akademik2']/$akademiktotal;
					$cdn=$data['akademik3']/$akademiktotal;
					$ddn=$data['akademik4']/$akademiktotal;
					$edn=$data['akademik5']/$akademiktotal;
					$fdn=$data['akademik6']/$akademiktotal;
					$aen=$data['nonakademik1']/$nonakademiktotal;
					$ben=$data['nonakademik2']/$nonakademiktotal;
					$cen=$data['nonakademik3']/$nonakademiktotal;
					$den=$data['nonakademik4']/$nonakademiktotal;
					$een=$data['nonakademik5']/$nonakademiktotal;
					$fen=$data['nonakademik6']/$nonakademiktotal;
					$afn=$data['bantuan1']/$bantuantotal;
					$bfn=$data['bantuan2']/$bantuantotal;
					$cfn=$data['bantuan3']/$bantuantotal;
					$dfn=$data['bantuan4']/$bantuantotal;
					$efn=$data['bantuan5']/$bantuantotal;
					$ffn=$data['bantuan6']/$bantuantotal;
					$antotal=$aan+$abn+$acn+$adn+$aen+$afn;
					$bntotal=$ban+$bbn+$bcn+$bdn+$ben+$bfn;
					$cntotal=$can+$cbn+$ccn+$cdn+$cen+$cfn;
					$dntotal=$dan+$dbn+$dcn+$ddn+$den+$dfn;
					$entotal=$ean+$ebn+$ecn+$edn+$een+$efn;
					$fntotal=$fan+$fbn+$fcn+$fdn+$fen+$ffn;
					}
					echo '<tr>
                  		<td>A</td>
                  		<td>'.round($aan,3).'</td>
                  		<td>'.round($abn,3).'</td>
                  		<td>'.round($acn,3).'</td>
				  		<td>'.round($adn,3).'</td>
				  		<td>'.round($aen,3).'</td>
				  		<td>'.round($afn,3).'</td>
				  		
						<td>'.round($antotal,3).'</td>
					</tr>';
					echo '<tr>
                  		<td>B</td>
                  		<td>'.round($ban,3).'</td>
                  		<td>'.round($bbn,3).'</td>
                  		<td>'.round($bcn,3).'</td>
				  		<td>'.round($bdn,3).'</td>
				  		<td>'.round($ben,3).'</td>
				  		<td>'.round($bfn,3).'</td>
				  		
						<td>'.round($bntotal,3).'</td>
					</tr>';
					echo '<tr>
                  		<td>C</td>
                  		<td>'.round($can,3).'</td>
                  		<td>'.round($cbn,3).'</td>
                  		<td>'.round($ccn,3).'</td>
				  		<td>'.round($cdn,3).'</td>
				  		<td>'.round($cen,3).'</td>
				  		<td>'.round($cfn,3).'</td>
				  		
						<td>'.round($cntotal,3).'</td>
					</tr>';
					echo '<tr>
                  		<td>D</td>
                  		<td>'.round($dan,3).'</td>
                  		<td>'.round($dbn,3).'</td>
                  		<td>'.round($dcn,3).'</td>
				  		<td>'.round($ddn,3).'</td>
				  		<td>'.round($den,3).'</td>
				  		<td>'.round($dfn,3).'</td>
				  		
						<td>'.round($dntotal,3).'</td>
					</tr>';
					echo '<tr>
                  		<td>E</td>
                  		<td>'.round($ean,3).'</td>
                  		<td>'.round($ebn,3).'</td>
                  		<td>'.round($ecn,3).'</td>
				  		<td>'.round($edn,3).'</td>
				  		<td>'.round($een,3).'</td>
				  		<td>'.round($efn,3).'</td>
				  	
						<td>'.round($entotal,3).'</td>
					</tr>';
					echo '<tr>
                  		<td>F</td>
                  		<td>'.round($fan,3).'</td>
                  		<td>'.round($fbn,3).'</td>
                  		<td>'.round($fcn,3).'</td>
				  		<td>'.round($fdn,3).'</td>
				  		<td>'.round($fen,3).'</td>
				  		<td>'.round($ffn,3).'</td>
				  		
						<td>'.round($fntotal,3).'</td>
					</tr>';
					
					?>
					</table>
					<h2>Hasil Bobot Prioritas</h2>
				<table class="table table-striped" style="width:600px;">
					<tr>
          				<th>KRITERIA</th>
				        <th>BOBOT PRIORITAS</th>
						
        			</tr>
					
					<?php
					$abp=$antotal/6;
					$bbp=$bntotal/6;
					$cbp=$cntotal/6;
					$dbp=$dntotal/6;
					$ebp=$entotal/6;
					$fbp=$fntotal/6;
					
					
					echo '<tr>
                  		<td>A</td>
                  		<td>'.round($abp,4).'</td>
                  		</tr>';
						echo '<tr>
                  		<td>B</td>
                  		<td>'.round($bbp,4).'</td>
                  		</tr>';
						echo '<tr>
                  		<td>C</td>
                  		<td>'.round($cbp,4).'</td>
                  		</tr>';
						echo '<tr>
                  		<td>D</td>
                  		<td>'.round($dbp,4).'</td>
                  		</tr>';
						echo '<tr>
                  		<td>E</td>
                  		<td>'.round($ebp,4).'</td>
                  		</tr>';
						echo '<tr>
                  		<td>F</td>
                  		<td>'.round($fbp,4).'</td>
                  		</tr>';
						?>
					
				</table>
				
				    
				<?php
				$abpfix=round($abp,4);
				$bbpfix=round($bbp,4);
				$cbpfix=round($cbp,4);
				$dbpfix=round($dbp,4);
				$ebpfix=round($ebp,4);
				$fbpfix=round($fbp,4);
				
				$eigenmax=($skalatotal*$abp)+($siswatotal*$bbp)+($kelastotal*$cbp)+($akademiktotal*$dbp)+($nonakademiktotal*$ebp)+($bantuantotal*$fbp);
				$ci=($eigenmax-6)/(6-1);
				$cr=$ci/1.24;
				echo '<center><h4>Eigenmax ='.round($eigenmax,3).'</h4></center>';
				
				echo '<center><h4>CI ='.round($ci,4).'</h4></center>';
				
				echo '<center><h4>CR ='.round($cr,4).'</h4></center>';
				?>
	
	<br>
					</div>
                </div>
				
				<h2>Presentase Per Kriteria</h2>
				<p>Berdasarkan perhitungan dengan metode AHP dengan pembobotan yang telah diinputkan sebelumnya, maka didapatkan hasil bobot tiap kriteria sebagai berikut</p>
				<table class="table table-striped" style="width:600px;">
					<tr>
          				<th>KRITERIA</th>
				        <th>PRESENTASE KRITERIA</th>
					</tr>
				<?php
				$persenabp=round($abp,4)*100;
				$persenbbp=round($bbp,4)*100;
				$persencbp=round($cbp,4)*100;
				$persendbp=round($dbp,4)*100;
				$persenebp=round($ebp,4)*100;
				$persenfbp=round($fbp,4)*100;
			
				echo '<tr>
                  		<td>Skala Kerusakan</td>
                  		<td>'.$persenabp.'%</td>
                  		</tr>';
						echo '<tr>
                  		<td>Jumlah Siswa</td>
                  		<td>'.$persenbbp.'%</td>
                  		</tr>';
						echo '<tr>
                  		<td>Jumlah Ruang Kelas</td>
                  		<td>'.$persencbp.'%</td>
                  		</tr>';
						echo '<tr>
                  		<td>Prestasi Akademik</td>
                  		<td>'.$persendbp.'%</td>
                  		</tr>';
						echo '<tr>
                  		<td>Prestasi non Akademik</td>
                  		<td>'.$persenebp.'%</td>
                  		</tr>';
						echo '<tr>
                  		<td>Bantuan Terakhir</td>
                  		<td>'.$persenfbp.'%</td>
                  		</tr>';
						
						
				?>
				</table>
				<?php
				if($cr<=0.1)
						{
							echo '<div class="alert alert-success alert-dismissable">
	              					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              					<center>Nilai konsisten. Bobot prioritas dapat digunakan ! <br/>lanjut ke metode TOPSIS? <br/>
									<form action="inputtopsis.php" method="POST">
					<input type="hidden" name="abpfix"  class="form-control" value="'.$abpfix.'">
					<input type="hidden" name="bbpfix"  class="form-control" value="'.$bbpfix.'">
					<input type="hidden" name="cbpfix"  class="form-control" value="'.$cbpfix.'">
					<input type="hidden" name="dbpfix"  class="form-control" value="'.$dbpfix.'">
					<input type="hidden" name="ebpfix"  class="form-control" value="'.$ebpfix.'">
					<input type="hidden" name="fbpfix"  class="form-control" value="'.$fbpfix.'">
					
					<button type="submit" class="btn btn-default" name="input">Input ke DB dan Mulai TOPSIS</button>
					
				</form>
	           					 </div>';
						}
						else{
							echo '<div class="alert alert-danger alert-dismissable">
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              <center>Nilai tidak konsisten, silahkan masukkan pembobotan baru <br/> <a class="btn btn-success" href="ahpcek-input.php">Kembali</a></center>
	            </div>';
						}
				
				?>
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
    <script src="assets/kelas/jquery-1.10.2.kelas"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/kelas/bootstrap.min.kelas"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/kelas/jquery.metisMenu.kelas"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/kelas/custom.kelas"></script>
    
   
</body>
</html>
