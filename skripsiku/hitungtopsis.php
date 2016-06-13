
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
font-size: 16px;"></div>
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
<div style="margin: 5px 20px 20px;"> <div class="smallfont" style="margin-bottom: 2px;"><b>Detail Penghitungan Metode TOPSIS Untuk Bobot Percobaan</b>: <input value="Open" style="margin: 0px; padding: 0px; width: 55px; font-size: 11px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Hide'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Open'; }" type="button"> </div> <div class="alt2" style="border: 1px inset ; margin: 0px; padding: 6px;"> <div style="display: none;">
					 <h2>Data Lokasi yang Telah Dikonversi</h2>
		  			<table class="table table-striped">
        			<tr>
					<th>Nama Sekolah</th>
					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>

				</tr>
        <?php
          $sql = "SELECT * FROM data_sekolah";
          $hasil = mysql_query($sql);
          if(mysql_num_rows($hasil) > 0)
          {

            while($record = mysql_fetch_row($hasil))
            {

              echo '<tr>
                  <td>'.$record[1].'</td>
                  <td>'.$record[2].'</td>
				  <td>'.$record[3].'</td>
				  <td>'.$record[4].'</td>
				  <td>'.$record[5].'</td>
				  <td>'.$record[6].'</td>
				  <td>'.$record[7].'</td>

                </tr>';

            }
          }
          else {
            echo '<tr>
          <td colspan="4"> Tidak Ada Data.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr> ';
          }
        ?>

      </table>
<br />
			<?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlskala = "select skala from data_sekolah";
          	$hasilskala = mysql_query($sqlskala);
			$hasil2skala = mysql_query($sqlskala);
			$tampskala=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordskala = mysql_fetch_row($hasilskala))
			{
				$tampskala=$tampskala+pow($recordskala[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarskala=sqrt($tampskala);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2skala=0;
			$areyskala=array();
			$indexskala=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2skala = mysql_fetch_row($hasil2skala))
			{
				$tamp2skala=$record2skala[0]/$akarskala;
				$areyskala[$indexskala]=$tamp2skala;
				$indexskala++;

			}
			?>
			<?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlsiswa = "select siswa from data_sekolah";
          	$hasilsiswa = mysql_query($sqlsiswa);
			$hasil2siswa = mysql_query($sqlsiswa);
			$tampsiswa=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordsiswa = mysql_fetch_row($hasilsiswa))
			{
				$tampsiswa=$tampsiswa+pow($recordsiswa[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarsiswa=sqrt($tampsiswa);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2siswa=0;
			$areysiswa=array();
			$indexsiswa=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2siswa = mysql_fetch_row($hasil2siswa))
			{
				$tamp2siswa=$record2siswa[0]/$akarsiswa;
				$areysiswa[$indexsiswa]=$tamp2siswa;
				$indexsiswa++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlkelas = "select kelas from data_sekolah";
          	$hasilkelas = mysql_query($sqlkelas);
			$hasil2kelas = mysql_query($sqlkelas);
			$tampkelas=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordkelas = mysql_fetch_row($hasilkelas))
			{
				$tampkelas=$tampkelas+pow($recordkelas[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarkelas=sqrt($tampkelas);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2kelas=0;
			$areykelas=array();
			$indexkelas=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2kelas = mysql_fetch_row($hasil2kelas))
			{
				$tamp2kelas=$record2kelas[0]/$akarkelas;
				$areykelas[$indexkelas]=$tamp2kelas;
				$indexkelas++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlakademik = "select akademik from data_sekolah";
          	$hasilakademik = mysql_query($sqlakademik);
			$hasil2akademik = mysql_query($sqlakademik);
			$tampakademik=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordakademik = mysql_fetch_row($hasilakademik))
			{
				$tampakademik=$tampakademik+pow($recordakademik[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarakademik=sqrt($tampakademik);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2akademik=0;
			$areyakademik=array();
			$indexakademik=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2akademik = mysql_fetch_row($hasil2akademik))
			{
				$tamp2akademik=$record2akademik[0]/$akarakademik;
				$areyakademik[$indexakademik]=$tamp2akademik;
				$indexakademik++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlnonakademik = "select nonakademik from data_sekolah";
          	$hasilnonakademik = mysql_query($sqlnonakademik);
			$hasil2nonakademik = mysql_query($sqlnonakademik);
			$tampnonakademik=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordnonakademik = mysql_fetch_row($hasilnonakademik))
			{
				$tampnonakademik=$tampnonakademik+pow($recordnonakademik[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarnonakademik=sqrt($tampnonakademik);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2nonakademik=0;
			$areynonkademik=array();
			$indexnonakademik=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2nonakademik = mysql_fetch_row($hasil2nonakademik))
			{
				$tamp2nonakademik=$record2nonakademik[0]/$akarnonakademik;
				$areynonakademik[$indexnonakademik]=$tamp2nonakademik;
				$indexnonakademik++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlbantuanakhir = "select bantuanakhir from data_sekolah";
          	$hasilbantuanakhir = mysql_query($sqlbantuanakhir);
			$hasil2bantuanakhir = mysql_query($sqlbantuanakhir);
			$tampbantuanakhir=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordbantuanakhir = mysql_fetch_row($hasilbantuanakhir))
			{
				$tampbantuanakhir=$tampbantuanakhir+pow($recordbantuanakhir[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarbantuanakhir=sqrt($tampbantuanakhir);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2bantuanakhir=0;
			$areybantuanakhir=array();
			$indexbantuanakhir=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2bantuanakhir = mysql_fetch_row($hasil2bantuanakhir))
			{
				$tamp2bantuanakhir=$record2bantuanakhir[0]/$akarbantuanakhir;
				$areybantuanakhir[$indexbantuanakhir]=$tamp2bantuanakhir;
				$indexbantuanakhir++;

			}
			?>
			<h2>Pembagi per Kriteria</h2>

			<table class="table table-striped">
	        <tr>

	          <th>A</th>
			  <th>B</th>
			  <th>C</th>
	          <th>D</th>
	          <th>E</th>
			  <th>F</th>

	        </tr>
			<tr>
				<td><?php echo round($akarskala,3);?></td>
				<td><?php echo round($akarsiswa,3);?></td>
				<td><?php echo round($akarkelas,3);?></td>
				<td><?php echo round($akarakademik,3);?></td>
				<td><?php echo round($akarnonakademik,3);?></td>
				<td><?php echo round($akarbantuanakhir,3);?></td>

			</tr>
			</table>
			<br />

				<h2>Normalisasi Matriks</h2>
			<table class="table table-striped">
	        <tr>
	          <th>Nama Sekolah</th>
					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>

			</tr>
			<?php
			$q=0;
			for($q;$q<count($areyskala);$q++)
			{
				echo '<tr>
						<td>S'.$q.'</td>
                  		<td>'.round($areyskala[$q],3).'</td>
                  		<td>'.round($areysiswa[$q],3).'</td>
                  		<td>'.round($areykelas[$q],3).'</td>
				  		<td>'.round($areyakademik[$q],3).'</td>
				  		<td>'.round($areynonakademik[$q],3).'</td>
				  		<td>'.round($areybantuanakhir[$q],3).'</td>

					</tr>';
			}
			?>
			</table>
			<br />

			<h2>Matriks Ternormalisasi Terbobot</h2>
			<table class="table table-striped">
	        <tr>
	          <th>Nama Sekolah</th>
					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>
			</tr>

			<?php
			$querybobot=mysql_query("select * from bobot_prioritas WHERE id_bobot=2;");
			$databobot=mysql_fetch_array($querybobot);
			$areybbtskala=array();
			$indexbbtskala=0;
			$areybbtsiswa=array();
			$indexbbtsiswa=0;
			$areybbtkelas=array();
			$indexbbtkelas=0;
			$areybbtakademik=array();
			$indexbbtakademik=0;
			$areybbtnonakademik=array();
			$indexbbtnonakademik=0;
			$areybbtbantuanakhir=array();
			$indexbbtbantuanakhir=0;

			$q=0;
			for($q;$q<count($areyskala);$q++)
			{
				$hasilbbtskala=$areyskala[$q]*$databobot['skala_kerusakan'];
				$areybbtskala[$indexbbtskala]=$hasilbbtskala;
				$indexbbtskala++;

				$hasilbbtsiswa=$areysiswa[$q]*$databobot['jumlah_siswa'];
				$areybbtsiswa[$indexbbtsiswa]=$hasilbbtsiswa;
				$indexbbtsiswa++;

				$hasilbbtkelas=$areykelas[$q]*$databobot['jumlah_kelas'];
				$areybbtkelas[$indexbbtkelas]=$hasilbbtkelas;
				$indexbbtkelas++;

				$hasilbbtakademik=$areyakademik[$q]*$databobot['prestasi_akademik'];
				$areybbtakademik[$indexbbtakademik]=$hasilbbtakademik;
				$indexbbtakademik++;

				$hasilbbtnonakademik=$areynonakademik[$q]*$databobot['prestasi_non_akademik'];
				$areybbtnonakademik[$indexbbtnonakademik]=$hasilbbtnonakademik;
				$indexbbtnonakademik++;

				$hasilbbtbantuanakhir=$areybantuanakhir[$q]*$databobot['tahun_bantuan'];
				$areybbtbantuanakhir[$indexbbtbantuanakhir]=$hasilbbtbantuanakhir;
				$indexbbtbantuanakhir++;

			}

			$w=0;
			for($w;$w<count($areyskala);$w++)
			{
				echo '<tr>
						<td>S'.$w.'</td>
                  		<td>'.round($areybbtskala[$w],3).'</td>
                  		<td>'.round($areybbtsiswa[$w],3).'</td>
                  		<td>'.round($areybbtkelas[$w],3).'</td>
				  		<td>'.round($areybbtakademik[$w],3).'</td>
				  		<td>'.round($areybbtnonakademik[$w],3).'</td>
				  		<td>'.round($areybbtbantuanakhir[$w],3).'</td>

					</tr>';
			}
			?>
			</table>
			<br />
			<h2>Solusi Ideal Positif</h2>
			<table class="table table-striped">
	        <tr>

					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>
			</tr>
			<?php
			$maksskala=max($areybbtskala);
			$makssiswa=max($areybbtsiswa);
			$makskelas=max($areybbtkelas);
			$maksakademik=max($areybbtakademik);
			$maksnonakademik=max($areybbtnonakademik);
			$maksbantuanakhir=max($areybbtbantuanakhir);

			echo '<tr>
						<td>'.round($maksskala,3).'</td>
                  		<td>'.round($makssiswa,3).'</td>
                  		<td>'.round($makskelas,3).'</td>
				  		<td>'.round($maksakademik,3).'</td>
				  		<td>'.round($maksnonakademik,3).'</td>
				  		<td>'.round($maksbantuanakhir,3).'</td>

					</tr>';
			?>
			</table>
			<br />
			<h2>Solusi Ideal Negatif</h2>
			<table class="table table-striped">
	        <tr>

					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>
			</tr>
			<?php
			$minsskala=min($areybbtskala);
			$minssiswa=min($areybbtsiswa);
			$minskelas=min($areybbtkelas);
			$minsakademik=min($areybbtakademik);
			$minsnonakademik=min($areybbtnonakademik);
			$minsbantuanakhir=min($areybbtbantuanakhir);

			echo '<tr>
						<td>'.round($minsskala,3).'</td>
                  		<td>'.round($minssiswa,3).'</td>
                  		<td>'.round($minskelas,3).'</td>
				  		<td>'.round($minsakademik,3).'</td>
				  		<td>'.round($minsnonakademik,3).'</td>
				  		<td>'.round($minsbantuanakhir,3).'</td>

					</tr>';
			?>
			</table>
			<br /> <h2>Perhitungan Separasi Positif dan Negatif</h2>
			<table class="table table-striped">
	        <tr>
	          <th>ID</th>

  <th>Separasi Positif</th>
			  <th>Separasi Negatif</th>
			</tr>
			<?php
			$areyjarakbbtpos=array();
			$indexjarakbbtpos=0;
			for ($a=0;$a<count($areyskala);$a++)
			{
				$jarakbbtpos= sqrt((pow(($areybbtskala[$a]-$maksskala),2))+(pow(($areybbtsiswa[$a]-$makssiswa),2))+(pow(($areybbtkelas[$a]-$makskelas),2))+(pow(($areybbtakademik[$a]-$maksakademik),2))+(pow(($areybbtnonakademik[$a]-$maksnonakademik),2))+(pow(($areybbtbantuanakhir[$a]-$maksbantuanakhir),2)));
				$areyjarakbbtpos[$indexjarakbbtpos]=$jarakbbtpos;
				$indexjarakbbtpos++;
			}
			$areyjarakbbtneg=array();
			$indexjarakbbtneg=0;
			for ($a=0;$a<count($areyskala);$a++)
			{
				$jarakbbtneg= sqrt((pow(($areybbtskala[$a]-$minsskala),2))+(pow(($areybbtsiswa[$a]-$minssiswa),2))+(pow(($areybbtkelas[$a]-$minskelas),2))+(pow(($areybbtakademik[$a]-$minsakademik),2))+(pow(($areybbtnonakademik[$a]-$minsnonakademik),2))+(pow(($areybbtbantuanakhir[$a]-$minsbantuanakhir),2)));
				$areyjarakbbtneg[$indexjarakbbtneg]=$jarakbbtneg;
				$indexjarakbbtneg++;
			}
			for($w=0;$w<count($areyskala);$w++)
			{
				echo'<tr>
						<td>S'.$w.'</td>
                  		<td>'.round($areyjarakbbtpos[$w],4).'</td>
                  		<td>'.round($areyjarakbbtneg[$w],4).'</td>
                  	</tr>';
			}
			?>
			</table>
			<br> </div>
			</div>
			</div>

<div style="margin: 5px 20px 20px;"> <div class="smallfont" style="margin-bottom: 2px;"><b>Detail Penghitungan Metode TOPSIS Untuk Bobot Default</b>: <input value="Open" style="margin: 0px; padding: 0px; width: 55px; font-size: 11px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Hide'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Open'; }" type="button"> </div> <div class="alt2" style="border: 1px inset ; margin: 0px; padding: 6px;"> <div style="display: none;">
					 <h2>Data Lokasi yang Telah Dikonversi</h2>
		  			<table class="table table-striped">
        			<tr>
					<th>Nama Sekolah</th>
					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>

				</tr>
        <?php
          $sql = "SELECT * FROM data_sekolah";
          $hasil = mysql_query($sql);
          if(mysql_num_rows($hasil) > 0)
          {

            while($record = mysql_fetch_row($hasil))
            {

              echo '<tr>
                  <td>'.$record[1].'</td>
                  <td>'.$record[2].'</td>
				  <td>'.$record[3].'</td>
				  <td>'.$record[4].'</td>
				  <td>'.$record[5].'</td>
				  <td>'.$record[6].'</td>
				  <td>'.$record[7].'</td>

                </tr>';

            }
          }
          else {
            echo '<tr>
          <td colspan="4"> Tidak Ada Data.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr> ';
          }
        ?>

      </table>
<br />
			<?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlskala = "select skala from data_sekolah";
          	$hasilskala = mysql_query($sqlskala);
			$hasil2skala = mysql_query($sqlskala);
			$tampskala=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordskala = mysql_fetch_row($hasilskala))
			{
				$tampskala=$tampskala+pow($recordskala[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarskala=sqrt($tampskala);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2skala=0;
			$areyskala=array();
			$indexskala=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2skala = mysql_fetch_row($hasil2skala))
			{
				$tamp2skala=$record2skala[0]/$akarskala;
				$areyskala[$indexskala]=$tamp2skala;
				$indexskala++;

			}
			?>
			<?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlsiswa = "select siswa from data_sekolah";
          	$hasilsiswa = mysql_query($sqlsiswa);
			$hasil2siswa = mysql_query($sqlsiswa);
			$tampsiswa=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordsiswa = mysql_fetch_row($hasilsiswa))
			{
				$tampsiswa=$tampsiswa+pow($recordsiswa[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarsiswa=sqrt($tampsiswa);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2siswa=0;
			$areysiswa=array();
			$indexsiswa=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2siswa = mysql_fetch_row($hasil2siswa))
			{
				$tamp2siswa=$record2siswa[0]/$akarsiswa;
				$areysiswa[$indexsiswa]=$tamp2siswa;
				$indexsiswa++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlkelas = "select kelas from data_sekolah";
          	$hasilkelas = mysql_query($sqlkelas);
			$hasil2kelas = mysql_query($sqlkelas);
			$tampkelas=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordkelas = mysql_fetch_row($hasilkelas))
			{
				$tampkelas=$tampkelas+pow($recordkelas[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarkelas=sqrt($tampkelas);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2kelas=0;
			$areykelas=array();
			$indexkelas=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2kelas = mysql_fetch_row($hasil2kelas))
			{
				$tamp2kelas=$record2kelas[0]/$akarkelas;
				$areykelas[$indexkelas]=$tamp2kelas;
				$indexkelas++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlakademik = "select akademik from data_sekolah";
          	$hasilakademik = mysql_query($sqlakademik);
			$hasil2akademik = mysql_query($sqlakademik);
			$tampakademik=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordakademik = mysql_fetch_row($hasilakademik))
			{
				$tampakademik=$tampakademik+pow($recordakademik[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarakademik=sqrt($tampakademik);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2akademik=0;
			$areyakademik=array();
			$indexakademik=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2akademik = mysql_fetch_row($hasil2akademik))
			{
				$tamp2akademik=$record2akademik[0]/$akarakademik;
				$areyakademik[$indexakademik]=$tamp2akademik;
				$indexakademik++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlnonakademik = "select nonakademik from data_sekolah";
          	$hasilnonakademik = mysql_query($sqlnonakademik);
			$hasil2nonakademik = mysql_query($sqlnonakademik);
			$tampnonakademik=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordnonakademik = mysql_fetch_row($hasilnonakademik))
			{
				$tampnonakademik=$tampnonakademik+pow($recordnonakademik[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarnonakademik=sqrt($tampnonakademik);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2nonakademik=0;
			$areynonkademik=array();
			$indexnonakademik=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2nonakademik = mysql_fetch_row($hasil2nonakademik))
			{
				$tamp2nonakademik=$record2nonakademik[0]/$akarnonakademik;
				$areynonakademik[$indexnonakademik]=$tamp2nonakademik;
				$indexnonakademik++;

			}
			?><?php
			// menghitung nilai tiap data di tiap kriteria,
			$sqlbantuanakhir = "select bantuanakhir from data_sekolah";
          	$hasilbantuanakhir = mysql_query($sqlbantuanakhir);
			$hasil2bantuanakhir = mysql_query($sqlbantuanakhir);
			$tampbantuanakhir=0;
			//diatas melooping untuk menambah tiap data sebanyak data
			while($recordbantuanakhir = mysql_fetch_row($hasilbantuanakhir))
			{
				$tampbantuanakhir=$tampbantuanakhir+pow($recordbantuanakhir[0],2);

			}

			//menghitung nilai akar dari nilai tambah kuadrat tiap kriteria
			$akarbantuanakhir=sqrt($tampbantuanakhir);
			//1 2 3 digunaan untuk menampung variabel baru yang digunakan untuk perhitungan selanjutnya
			$tamp2bantuanakhir=0;
			$areybantuanakhir=array();
			$indexbantuanakhir=0;

			//menghitung nilai normalisasi matriks dari nilai data konversi dibagi dengan nilai akarjp
			while($record2bantuanakhir = mysql_fetch_row($hasil2bantuanakhir))
			{
				$tamp2bantuanakhir=$record2bantuanakhir[0]/$akarbantuanakhir;
				$areybantuanakhir[$indexbantuanakhir]=$tamp2bantuanakhir;
				$indexbantuanakhir++;

			}
			?>
			<h2>Pembagi per Kriteria</h2>

			<table class="table table-striped">
	        <tr>

	          <th>A</th>
			  <th>B</th>
			  <th>C</th>
	          <th>D</th>
	          <th>E</th>
			  <th>F</th>

	        </tr>
			<tr>
				<td><?php echo round($akarskala,3);?></td>
				<td><?php echo round($akarsiswa,3);?></td>
				<td><?php echo round($akarkelas,3);?></td>
				<td><?php echo round($akarakademik,3);?></td>
				<td><?php echo round($akarnonakademik,3);?></td>
				<td><?php echo round($akarbantuanakhir,3);?></td>

			</tr>
			</table>
			<br />

				<h2>Normalisasi Matriks</h2>
			<table class="table table-striped">
	        <tr>
	          <th>Nama Sekolah</th>
					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>

			</tr>
			<?php
			$q=0;
			for($q;$q<count($areyskala);$q++)
			{
				echo '<tr>
						<td>S'.$q.'</td>
                  		<td>'.round($areyskala[$q],3).'</td>
                  		<td>'.round($areysiswa[$q],3).'</td>
                  		<td>'.round($areykelas[$q],3).'</td>
				  		<td>'.round($areyakademik[$q],3).'</td>
				  		<td>'.round($areynonakademik[$q],3).'</td>
				  		<td>'.round($areybantuanakhir[$q],3).'</td>

					</tr>';
			}
			?>
			</table>
			<br />
			<h2>Matriks Ternormalisasi Terbobot</h2>
			<table class="table table-striped">
	        <tr>
	          <th>Nama Sekolah</th>
					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>
			</tr>

			<?php
			$querybobotdefault=mysql_query("select * from bobot_prioritas WHERE id_bobot=1;");
			$databobotdefault=mysql_fetch_array($querybobotdefault);
			$areybbtskaladefault=array();
			$indexbbtskaladefault=0;
			$areybbtsiswadefault=array();
			$indexbbtsiswadefault=0;
			$areybbtkelasdefault=array();
			$indexbbtkelasdefault=0;
			$areybbtakademikdefault=array();
			$indexbbtakademikdefault=0;
			$areybbtnonakademikdefault=array();
			$indexbbtnonakademikdefault=0;
			$areybbtbantuanakhirdefault=array();
			$indexbbtbantuanakhirdefault=0;

			$qdefault=0;
			for($qdefault;$qdefault<count($areyskala);$qdefault++)
			{
				$hasilbbtskaladefault=$areyskala[$qdefault]*$databobotdefault['skala_kerusakan'];
				$areybbtskaladefault[$indexbbtskaladefault]=$hasilbbtskaladefault;
				$indexbbtskaladefault++;

				$hasilbbtsiswadefault=$areysiswa[$qdefault]*$databobotdefault['jumlah_siswa'];
				$areybbtsiswadefault[$indexbbtsiswadefault]=$hasilbbtsiswadefault;
				$indexbbtsiswadefault++;

				$hasilbbtkelasdefault=$areykelas[$qdefault]*$databobotdefault['jumlah_kelas'];
				$areybbtkelasdefault[$indexbbtkelasdefault]=$hasilbbtkelasdefault;
				$indexbbtkelasdefault++;

				$hasilbbtakademikdefault=$areyakademik[$qdefault]*$databobotdefault['prestasi_akademik'];
				$areybbtakademikdefault[$indexbbtakademikdefault]=$hasilbbtakademikdefault;
				$indexbbtakademikdefault++;

				$hasilbbtnonakademikdefault=$areynonakademik[$qdefault]*$databobotdefault['prestasi_non_akademik'];
				$areybbtnonakademikdefault[$indexbbtnonakademikdefault]=$hasilbbtnonakademikdefault;
				$indexbbtnonakademikdefault++;

				$hasilbbtbantuanakhirdefault=$areybantuanakhir[$qdefault]*$databobotdefault['tahun_bantuan'];
				$areybbtbantuanakhirdefault[$indexbbtbantuanakhirdefault]=$hasilbbtbantuanakhirdefault;
				$indexbbtbantuanakhirdefault++;

			}

			$wdefault=0;
			for($wdefault;$wdefault<count($areyskala);$wdefault++)
			{
				echo '<tr>
						<td>S'.$wdefault.'</td>
                  		<td>'.round($areybbtskaladefault[$wdefault],3).'</td>
                  		<td>'.round($areybbtsiswadefault[$wdefault],3).'</td>
                  		<td>'.round($areybbtkelasdefault[$wdefault],3).'</td>
				  		<td>'.round($areybbtakademikdefault[$wdefault],3).'</td>
				  		<td>'.round($areybbtnonakademikdefault[$wdefault],3).'</td>
				  		<td>'.round($areybbtbantuanakhirdefault[$wdefault],3).'</td>

					</tr>';
			}
			?>
			</table>
			<br />
			<h2>Solusi Ideal Positif</h2>
			<table class="table table-striped">
	        <tr>

					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>
			</tr>
			<?php
			$maksskaladefault=max($areybbtskaladefault);
			$makssiswadefault=max($areybbtsiswadefault);
			$makskelasdefault=max($areybbtkelasdefault);
			$maksakademikdefault=max($areybbtakademikdefault);
			$maksnonakademikdefault=max($areybbtnonakademikdefault);
			$maksbantuanakhirdefault=max($areybbtbantuanakhirdefault);

			echo '<tr>
						<td>'.round($maksskaladefault,3).'</td>
                  		<td>'.round($makssiswadefault,3).'</td>
                  		<td>'.round($makskelasdefault,3).'</td>
				  		<td>'.round($maksakademikdefault,3).'</td>
				  		<td>'.round($maksnonakademikdefault,3).'</td>
				  		<td>'.round($maksbantuanakhirdefault,3).'</td>
					</tr>';
			?>
			</table>
			<br />
			<h2>Solusi Ideal Negatif</h2>
			<table class="table table-striped">
	        <tr>

					<th>Skala Kerusakan</th>
					<th>Jumlah Siswa</th>
					<th>Jumlah Kelas</th>
					<th>Prestasi Akademik</th>
					<th>Prestasi non Akademik</th>
					<th>Mendapat Bantuan Terakhir</th>
			</tr>
			<?php
			$minsskaladefault=min($areybbtskaladefault);
			$minssiswadefault=min($areybbtsiswadefault);
			$minskelasdefault=min($areybbtkelasdefault);
			$minsakademikdefault=min($areybbtakademikdefault);
			$minsnonakademikdefault=min($areybbtnonakademikdefault);
			$minsbantuanakhirdefault=min($areybbtbantuanakhirdefault);

			echo '<tr>
						<td>'.round($minsskaladefault,3).'</td>
                  		<td>'.round($minssiswadefault,3).'</td>
                  		<td>'.round($minskelasdefault,3).'</td>
				  		<td>'.round($minsakademikdefault,3).'</td>
				  		<td>'.round($minsnonakademikdefault,3).'</td>
				  		<td>'.round($minsbantuanakhirdefault,3).'</td>

					</tr>';
			?>
			</table>
			<br />

			 <h2>Perhitungan Separasi Positif dan Negatif</h2>
			<table class="table table-striped">
	        <tr>
	          <th>ID</th>

  <th>Separasi Positif</th>
			  <th>Separasi Negatif</th>
			</tr>
			<?php
			$areyjarakbbtposdefault=array();
			$indexjarakbbtposdefault=0;
			for ($adefault=0;$adefault<count($areyskala);$adefault++)
			{
				$jarakbbtposdefault= sqrt((pow(($areybbtskaladefault[$adefault]-$maksskaladefault),2))+(pow(($areybbtsiswadefault[$adefault]-$makssiswadefault),2))+(pow(($areybbtkelasdefault[$adefault]-$makskelasdefault),2))+(pow(($areybbtakademikdefault[$adefault]-$maksakademikdefault),2))+(pow(($areybbtnonakademikdefault[$adefault]-$maksnonakademikdefault),2))+(pow(($areybbtbantuanakhirdefault[$adefault]-$maksbantuanakhirdefault),2)));
				$areyjarakbbtposdefault[$indexjarakbbtposdefault]=$jarakbbtposdefault;
				$indexjarakbbtposdefault++;
			}
			$areyjarakbbtnegdefault=array();
			$indexjarakbbtnegdefault=0;
			for ($adefault=0;$adefault<count($areyskala);$adefault++)
			{
				$jarakbbtnegdefault= sqrt((pow(($areybbtskaladefault[$adefault]-$minsskaladefault),2))+(pow(($areybbtsiswadefault[$adefault]-$minssiswadefault),2))+(pow(($areybbtkelasdefault[$adefault]-$minskelasdefault),2))+(pow(($areybbtakademikdefault[$adefault]-$minsakademikdefault),2))+(pow(($areybbtnonakademikdefault[$adefault]-$minsnonakademikdefault),2))+(pow(($areybbtbantuanakhirdefault[$adefault]-$minsbantuanakhirdefault),2)));
				$areyjarakbbtnegdefault[$indexjarakbbtnegdefault]=$jarakbbtnegdefault;
				$indexjarakbbtnegdefault++;
			}
			for($wdefault=0;$wdefault<count($areyskala);$wdefault++)
			{
				echo'<tr>
						<td>S'.$wdefault.'</td>
                  		<td>'.round($areyjarakbbtposdefault[$wdefault],4).'</td>
                  		<td>'.round($areyjarakbbtnegdefault[$wdefault],4).'</td>
                  	</tr>';
			}
			?>
			</table>
			<br> </div>
			</div>
			</div>
			<div class="row">
          <div class="col-lg-12">

            <h3>Hasil Akhir Preferensi</h3>
            <table class="table table-striped">
        <tr>
          <th>No.</th>
		  <th>Nama Lokasi</th>

          <th>Nilai Preferensi Default</th>
          <th>Nilai Preferensi Percobaan</th>

		  <!--<th>Data Sebenarnya</th>-->
		 

        </tr>
        <?php
//inisialisasi array preferensi
          $areypreferensi=array();
			// menghitung preferensi dari tiap bobot yang  dinamis
			$indexpreferensi=0;

			for($s=0;$s<count($areyskala);$s++)
			{
				$preferensi=$areyjarakbbtneg[$s]/($areyjarakbbtneg[$s]+$areyjarakbbtpos[$s]);
				$areypreferensi[$indexpreferensi]=$preferensi;
				$indexpreferensi++;
				}
			// menghitung preferensu dari bobot statis
			$areypreferensidefault=array();
			$indexpreferensidefault=0;
			for($sdefault=0;$sdefault<count($areyskala);$sdefault++)
			{
				$preferensidefault=$areyjarakbbtnegdefault[$sdefault]/($areyjarakbbtnegdefault[$sdefault]+$areyjarakbbtposdefault[$sdefault]);
				$areypreferensidefault[$indexpreferensidefault]=$preferensidefault;
				$indexpreferensidefault++;

			}

            // Hasil Sorting
            /*$sorted_default = $areypreferensidefault;
            quicksort($sorted_default, 0, count($sorted_default));

            $sorted_coba = $areypreferensi;
            quicksort($sorted_coba, 0, count($sorted_coba));*/


		  $sql = "SELECT * FROM data_sekolah";

          $hasil = mysql_query($sql);
              if(mysql_num_rows($hasil) > 0)
              {
                    $i = 0;
                    $z = -1;
                    while($record = mysql_fetch_row($hasil))
                    {
                          $i+=1;
                          $z++;
            			  echo '<tr>
                              <td>'.$i.'</td>
                              <td>'.$record[1].'</td>

            				  <td>'.round($areypreferensidefault[$z],4).'</td>
            				  <td>'.round($areypreferensi[$z],4).'</td>


            				 
                            </tr>';
                    }
                }
          else {
            echo '<tr>
          <td colspan="4"> Tidak Ada Lokasi yang Diinputkan.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr> ';
          }
        ?>

      </table>
        <?php
            $sql = "SELECT * FROM data_sekolah";
            $res = mysql_query($sql);
            $daftar_sekolah = array();
            $i = 0;
            if (mysql_num_rows($res) > 0) {
                while ($row = mysql_fetch_assoc($res)) {
                    $daftar_sekolah[$i]['nama_sekolah'] = $row['nama_sekolah'];
                    $daftar_sekolah[$i]['id_sekolah'] = $row['id_sekolah'];
                    $i++;
                }
            } else {
                echo "no data found!";
            }
            arsort($areypreferensi);
            arsort($areypreferensidefault);
        ?>

<table>
<tr>
<td>
        <table class="table table-striped">
		 <h3>Hasil Perangkingan Nilai Default</h3>
            <tr>
                <th>No</th>
                <th>Nama Lokasi</th>
                <th>Nilai Preferensi Default</th>
                
            </tr>
            <?php $no = 1; foreach ($areypreferensidefault as $key => $val) :?>
                <tr>
                <?php for($i = 0; $i < count($daftar_sekolah); $i++): ?>
                    <?php if($key == $i ):?>
                        <td><?php echo $no; $no++; ?></td>
                        <td><?php echo $daftar_sekolah[$i]['nama_sekolah']; ?></td>
                        <td><?php echo $val; ?></td>
                        
                    <?php endif; ?>
                <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        </table>
</td>
<td>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;</td>
<td>
        <table class="table table-striped">
		<h3>Hasil Perangkingan Nilai Percobaan</h3>
            <tr>
                <th>No</th>
                <th>Nama Lokasi</th>
                <th>Nilai Preferensi Percobaan</th>
                
            </tr>
            <?php $no = 1; foreach ($areypreferensi as $key => $val) :?>
                <tr>
                <?php for($i = 0; $i < count($daftar_sekolah); $i++): ?>
                    <?php if($key == $i ):?>
                        <td><?php echo $no; $no++; ?></td>
                        <td><?php echo $daftar_sekolah[$i]['nama_sekolah']; ?></td>
                        <td><?php echo $val; ?></td>
                                                
                    <?php endif; ?>
                <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        </table>
		</td>
</tr>
</table>

          </div>
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
    <script src="assets/kelas/jquery-1.10.2.kelas"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/kelas/bootstrap.min.kelas"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/kelas/jquery.metisMenu.kelas"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/kelas/custom.kelas"></script>


</body>
</html>
