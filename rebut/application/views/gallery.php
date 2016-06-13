<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Building and Construction Gallery</title>
<meta name="keywords" content="building, construction, gallery, dark green, website templates, CSS, HTML" />
<meta name="description" content="Building Gallery is a construction template that is also a W3C standards-compliant layout." />
<link href="<?=base_url()?>styles/templatemo_style.css" rel="stylesheet" type="text/css" />

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="<?=base_url()?>styles/css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="<?=base_url()?>styles/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>styles/js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

</head>
<body>

<div id="templatemo_wrapper">
	
    <div id="templatemo_sidebar">
    	
        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><img src="<?=base_url()?>styles/images/templatemo_logo.png" alt="building template" /><span>RENT BUILDING TAX</span></a></h1>
        </div> <!-- end of site_title -->
        
        <div id="login">
        	<h4>SuperUser Login</h4>
        	
			<?php echo form_open('rebut_cont/login');?>
                <label for="username">Username:</label> <input type="text" id="username" name="username" class="login_field" />
                <div class="cleaner_h10"></div>
                <label for="password">Password:</label> <input type="password" id="password" name="password" class="login_field" />
                <div class="cleaner_h10"></div>
                <input type="submit" name="submit" id="submit" value="Login" class="login_button" />
            	&nbsp;&nbsp;
        	
        </div>
        
    </div>

	<div id="templatemo_main_column">
    
    	<div id="templatemo_menu">
            <ul>
                <li><?php echo anchor('rebut_cont/index','01')?><span>Home</span></a></li>
                <li><?php echo anchor('rebut_cont/tax','02')?><span>Tax</span></a></li>
                <li><?php echo anchor('rebut_cont/event','03')?><span>Event</span></a></li>
                <li><?php echo anchor('rebut_cont/gallery','04')?><span>Gallery</span></a></li>
                <li><?php echo anchor('rebut_cont/contact','05')?><span>Contact</span></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_content">
        	
            <h2>Galeri</h2>
             <div id="gallery">
			
			<table border="0" align="center">
	
		<tr><td colspan="2"></td></tr>
<?php
foreach($query as $row){
	;?>
	<?php echo"<tr>";?>
	<?php echo	"<td align='center'><p><font color='#16e9e9' size='5'>".$row->nama_gedung."</font></p></td>";?>
	<?php echo"</tr>";?>
	<?php echo"<tr>";?>
	<td><img src="<?php echo  base_url()."/styles/images/gedung/".$row->gambar_gedung; ?>" height="250px" width="400px" /> </td>
	<?php echo	"<td>".$row->informasi_gedung."</td>";?>
	<?php echo"</tr>";?>
	<?php echo	"<td align='center'> Rp." .$row->harga_gedung."</td>";?>
	<?php echo"<td align='center'>";?><?php echo anchor('mynotes/notes','Pesan Sekarang');?><?php "</td>";?>
	<?php echo"<tr>";?>
	<?php echo"</tr>";?>
	<?php echo"<tr>";?>
	<?php echo	"<td colspan='2'><hr/></td>";?>
	<?php echo"</tr>";?>
	<?php echo"<tr>";?>
	<?php echo"</tr>";?>
	<?php echo"<tr>";?>
	<?php echo"</tr>";?>
	<?php echo"<tr>";?>
	<?php echo"</tr>";?>
	<?php echo"<tr>";?>
	<?php echo"</tr>";?>
	
<? endforeach; ?> 
<?php } ?>
</table>
			
            <!--<ul>
               	<li>
                	<div class="left">
                    	<a href="<?=base_url()?>styles/images/gedung/widyaloka.jpg" class="pirobox" title="Samantha Krida"><img src="<?=base_url()?>styles/images/gedung/widyaloka.jpg" alt="2" /></a>
                    </div>
                    <div class="right">
                        <h5>Gedung Widyaloka</h5>
                        <p>Gedung yang berada di wilayah Fakultas Hukum. Berisi beberapa ruang yang cocok buat seminar ataupun Pertemuan - pertemuan lainnya.</p>
                        <div class="btn_more float_r"><?php echo anchor('rebut_cont/widyaloka',' >> Read More')?></div>
                    </div>
                    <div class="cleaner"></div>
                </li>
                
                <li>
                    <div class="left">
                    	<a href="<?=base_url()?>styles/images/gedung/samantha.jpg" class="pirobox" title="Samantha Krida"><img src="<?=base_url()?>styles/images/gedung/samantha.jpg" alt="2" /></a>
                    </div>
                    <div class="right">
                      <h5>Samantha Krida</h5>
                      <p>Gedung yang memiliki tribun di sisi kanan dan kiri gedung, dan juga terdapat panggung utama di bagian depan.</p>
                       <div class="btn_more float_r"><?php echo anchor('rebut_cont/samantha',' >> Read More')?></div>
                    </div>
               		<div class="cleaner"></div>
                </li>
                
                <li>
                	<div class="left">
                		<a href="<?=base_url()?>styles/images/gedung/gor.jpg" class="pirobox" title="GOR Pertamina"><img src="<?=base_url()?>styles/images/gedung/gor.jpg" alt="3" /></a>
                    </div>
                    <div class="right">
                    	<h5>GOR Pertamina</h5>
	                  <p>Gelanggan Olahraga yang berisi Lapangan Basket di dalamnya, terdapat scoreboard di dalamnya dan juga tribun di 3 sisi dari GOR ini.</p>
        		        <div class="btn_more float_r"><?php echo anchor('rebut_cont/gor',' >> Read More')?></div>
                  </div>
                     <div class="cleaner"></div>
                </li>
                
			</ul>-->
        </div>
            
        </div>
        
    </div>
    
    <div class="cleaner"></div>

</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	
        <div id="company_logo">
        	<a href="http://www.templatemo.com"><img src="images/templatemo_logo_2.png" alt="logo" /></a>
        </div>
        
        <div id="copyright">
        	<?php echo anchor('rebut_cont/index','Home')?> | <?php echo anchor('rebut_cont/tax','Tax')?> | <?php echo anchor('rebut_cont/event','Event')?> | <?php echo anchor('rebut_cont/gallery','Gallery')?> | <?php echo anchor('rebut_cont/contact','Contact')?>
            <br /><br />
            
	        Copyright © 2013 <a href="http://www.joysoft.com">Joysoft Group</a>
            <br /><br />
        	Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>