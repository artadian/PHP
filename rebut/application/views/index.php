<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Building and Construction</title>
<meta name="keywords" content="building, construction, green, dark green, website templates, CSS, HTML" />
<meta name="description" content="Building is a construction template that includes total 5 HTML pages." />
<link href="<?=base_url()?>styles/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_sidebar">
    	
        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><img src="<?=base_url()?>/styles/images/templatemo_logo.png" alt="building template" /><span>RENT BUILDING TAX</span></a></h1>
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
        	
            <div class="col_w670">
                <h2>SELAMAT DATANG DI REBUT (RENT BUILDING TAX)</h2>
                <p align="justify">Rent Building Tax merupakan sebuah aplikasi berbasis web yang ditujukan kepada Bagian Sarana Prasarana Universitas Brawijaya. Website ini berisi informasi tentang gedung gedung milik Universitas Brawijaya yang dapat disewakan, baik untuk mahasiswa Universitas Brawijaya sendiri, ataupun untuk umum. Dalam detail informasi mengenai gedung, terdapat juga rincian administrasi berupa harga sewa gedung dan juga besaran pajak yang harus dibayarkan oleh penyewa gedung.</p>
                <div class="btn_more float_r"></div>
                <div class="cleaner"></div>
			</div>
            
            <div class="col_w315 float_l">
            	<h3>Event</h3>
                <div class="image_wrapper"><a href="http://www.flashmo.com" target="_parent"><img src="<?=base_url()?>styles/images/templatemo_image_01.jpg" alt="flash template" /></a></div>
                <p><em>Event berisi tentang kegiatan apa saja yang dilaksanakan pada gedung gedung yang disewakan di Universitas Brawijaya, mulai dari seminar, kuliah tamu hingga konser</em></p>
                            
                
                <div class="cleaner"></div>
                <div class="btn_more"><?php echo anchor('rebut_cont/event','Read More')?></div>
                
            </div>
            
            <div class="col_w315 float_r">
            	<h3>Gallery</h3>
                <div class="image_wrapper"><a href="http://www.flashmo.com/page/1" target="_parent"><img src="<?=base_url()?>styles/images/gedung/gor.jpg" alt="3" height="100" width="300"/></a></div>
            	<p align="justify"><em>Gallery berisi tentang gambar gedung gedung yang dapat disewakan beserta detail informasi tentang gedung tersebut, antara lain fasilitas gedung dan juga biaya administrasi dari gedung tersebut. Antara lain yaitu</em></p>
				<p>
				<ul class="tmo_list">
                    <li>Gedung Widyaloka</li>
                    <li>Samantha Krida</li>
                    <li>GOR Pertamina</li>
                </ul>
				</p>
            <div class="btn_more"><?php echo anchor('rebut_cont/gallery','Read More')?></div>
            </div>
        </div>
        
    </div>
    
    <div class="cleaner"></div>

</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	
        <div id="company_logo">
        	<a href="http://www.templatemo.com"><img src="images/joysoft_logo.jpg" alt="logo" width="173" height="82" /></a>
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


<script type='text/javascript' src='<?=base_url()?>styles/js/logging.js'></script>
</body>
</html>