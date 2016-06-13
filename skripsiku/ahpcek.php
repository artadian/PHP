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
                     <h2>User</h2>   
                        <h4>CRUD USER</h4>
						</div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
				 
				  <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Data Sekolah
                        </div>
<div class="row">
          
<?php
			if(isset($_POST["check"]))
			{
				$namamk=$_POST["nama_mk"];
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
				
				
				
				
			}
			?>

		<div class="col-lg-12">
            <h1>Analytical Hierarchy Process <small>Proses AHP</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li><a href="ahp.php"><i class="fa fa-edit"></i> Pengisian Matrik Kriteria</a></li>
			  <li class="active"><a href="ahpcek.php"><i class="fa fa-edit"></i> Pengisian Matrik Kriteria (2)</a></li>
			  
            </ol>
        </div>
          
        </div><!-- /.row -->

<div class="row">
          <div class="col-lg-12">
          	
			<h2>Masukkan Pembobotan Kriteria</h2>
			
			<form action="ahpcek-input.php" method="POST">
			<div class="form-group">
            		<label for="namamk" class="control-label col-md-2">Nama Matriks Kriteria</label>
            		<div class="col-sm-4">
						<input type="text" name="nama_mk" value="<?php echo $namamk; ?>" class="form-control" placeholder="Masukkan nama matriks kriteria">
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
						<th style="width:60px;">A</th>
						<th><input type="number" min="0" max="9" name="AA"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="AB"  class="form-control" value="<?php echo $AB;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="AC"  class="form-control" value="<?php echo $AC;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="AD"  class="form-control" value="<?php echo $AD;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="AE"  class="form-control" value="<?php echo $AE;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="AF"  class="form-control" value="<?php echo $AF;?>" step="any"></th>
						
					</tr>
					<tr>
						<th>B</th>
						<th><input type="number" min="0" max="9" name="BA"  class="form-control" value="<?php echo $BA;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="BB"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="BC"  class="form-control" value="<?php echo $BC;?>"  step="any"></th>
						<th><input type="number" min="0" max="9" name="BD"  class="form-control" value="<?php echo $BD;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="BE"  class="form-control" value="<?php echo $BE;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="BF"  class="form-control" value="<?php echo $BF;?>" step="any"></th>
						
					</tr>
					<tr>
						<th>C</th>
						<th><input type="number" min="0" max="9" name="CA"  class="form-control" value="<?php echo $CA;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="CB"  class="form-control" value="<?php echo $CB;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="CC"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="CD"  class="form-control" value="<?php echo $CD;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="CE"  class="form-control" value="<?php echo $CE;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="CF"  class="form-control" value="<?php echo $CF;?>" step="any"></th>
						
					</tr>
					<tr>
						<th>D</th>
						<th><input type="number" min="0" max="9" name="DA"  class="form-control" value="<?php echo $DA;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DB"  class="form-control" value="<?php echo $DB;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DC"  class="form-control" value="<?php echo $DC;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DD"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="DE"  class="form-control" value="<?php echo $DE;?>" step="any"></th>
						<th><input type="number" min="0" max="9" name="DF"  class="form-control" value="<?php echo $DF;?>" step="any"></th>
					
					</tr>
					<tr>
						<th>E</th>
						<th><input type="number" min="0" max="9" name="EA"  class="form-control" value="<?php echo $EA;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EB"  class="form-control" value="<?php echo $EB;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EC"  class="form-control" value="<?php echo $EC;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="ED"  class="form-control" value="<?php echo $ED;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EE"  class="form-control" value="1" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="EF"  class="form-control" value="<?php echo $EF;?>" step="any"></th>
						
					</tr>
					<tr>
						<th>F</th>
						<th><input type="number" min="0" max="9" name="FA"  class="form-control" value="<?php echo $FA;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FB"  class="form-control" value="<?php echo $FB;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FC"  class="form-control" value="<?php echo $FC;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FD"  class="form-control" value="<?php echo $FD;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FE"  class="form-control" value="<?php echo $FE;?>" readonly="readonly"></th>
						<th><input type="number" min="0" max="9" name="FF"  class="form-control" value="1" readonly="readonly"></th>
						
					</tr>
					
				</tbody>
			</table>
			<button type="submit" class="btn btn-default" name="input">Input dan Hitung</button>
			</form>
			</div></div>
             <!-- /. PAGE INNER  -->
            </div>
            </div>
            </div>
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

