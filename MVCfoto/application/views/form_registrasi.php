<html>
 <head>
 <title>Form Registrasi DIMASEDU INSTITUE </title>
 <style>
 body
 {
 margin:50px;
 font-family:Arial;
 background:#eee;
 }

 #wrap
 {
 margin:auto;
 width:500px;
 border:5px solid #ccc;
 padding:5px;
 background:#fff;
 box-shadow:4px 4px 10px 2px #888;
 }

 #content
 {
 padding:3px;
 }

 #content h2
 {
 font-size:22px;
 font-weight:bold;
 color:#FF9900;
 }

 .t_reg
 {
 padding:4px;
 }

 .t_reg tr td
 {
 font-size:12px;
 font-weight:bold;
 }

 .teks
 {
 padding:5px;
 border:1px #ccc solid;
 }

 .teksarea
 {
 padding:5px;
 border:1px #ccc solid;
 }

 .tombol
 {
 padding:5px;
 background:#cc0000;
 color:#fff;
 border:1px solid #fff;
 font-size:11px;
 font-weight:bold;
 }

 #footer
 {
 font-size:11px;
 margin:auto;
 margin-top:20px;
 text-align:center;
 }

 #footer a
 {
 text-decoration:none;
 color:#000;
 font-weight:bold;
 }
 </style>
 </head>
 <body>
 <div id="wrap">
 <div id="content">
 <h2>Registrasi Mahasiswa</h2>
 <?php
 //deklarasikan awal form
 form_open('foto_controller/proses',array('name'=>'regForm', 'method'=>'POST'));
 ?>
 <table>
 <tr>
 <td>Nama Lengkap</td>
 <td>:</td>
 <td><?php echo $f_nama;?></td>
 </tr>
 <tr>
 <td>Alamat Lengkap</td>
 <td>:</td>
 <td><?php echo $f_alamat;?></td>
 </tr>
 <tr>
 <td>Agama</td>
 <td>:</td>
 <td><?php echo $f_agama;?></td>
 </tr>
 <tr>
 <td>Hobi</td>
 <td>:</td>
 <td><?php echo $f_hobi;?> Sepakbola
 <?php echo $f_hobi2;?> Senam
 <?php echo $f_hobi3;?> Komputer
 </td>
 </tr>
 <tr>
 <td>Jurusan</td>
 <td>:</td>
 <td><?php echo $f_jur1;?> Komputer Akuntansi<br>
 <?php echo $f_jur2;?> Teknik Komputer<br>
 <?php echo $f_jur3;?> Sistem Informasi</td>
 </tr>
 <tr>
 <td></td>
 <td></td>
 <td><?php echo $f_tombol;?></td>
 </tr>
 </table>
 <?php
 //deklarasikan akhir form
 form_close();
 ?>
 </div>
 </div>
 <div id="footer">
 DIMASEDU INSTITUTE &copy; 2012<br>
 Created by Dimas Edubuntu Samid <br>
 <a href="http://dimasedu.net" target="_blank">DIMASEDU NET </a>
 </div>
 </body>
</html>
