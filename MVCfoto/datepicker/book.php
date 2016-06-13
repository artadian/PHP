<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Dewata - The best service at the lowest price</title>
<meta name="keywords" content="free website templates, hotel and travel, CSS, XHTML, design layout" />
<meta name="description" content="Hotel and Travel - free website template provided by templatemo.com" />
<link href="<?php echo base_url();?>templatemo_style.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo base_url(); ?>datepicker/rfnet.css" rel="stylesheet" type="text/css" />
-->
<script type="text/javascript" src="<?php echo base_url(); ?>datepicker/datetimepicker_css.js"></script>
</head>
<body>

<div id="templatemo_container">
	<!-- Free Website Template by www.TemplateMo.com -->
    <div id="templatemo_header">
        <div id="website_title">
            <div id="title">
	            HOTEL DEWATA
            </div>
            <div id="salgon">
	            The first hotel located in south Malang</div>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_banner">
    	<div id="templatemo_menu">
            <ul>
                <li><?php echo anchor('hotel_controller/index','Home')?></li>
                <li><?php echo anchor('hotel_controller/tampilevents','Events')?></li>
                <li><?php echo anchor('hotel_controller/services','Services')?></li>
                <li><?php echo anchor('hotel_controller/fasilitas','Fasilitas')?></li>
                <li><?php echo anchor('hotel_controller/book','Book Now !')?></li>
                <li><?php echo anchor('hotel_controller/admin','Admin')?></li>
            </ul> 
        </div>    
    </div> <!-- end of banner -->
    
    <div id="templatemo_content">
    
    	<div id="content_left">
        	<div class="content_left_section">
            	<div class="content_title_01">Want to Book?</div>
                    
                        <div class="rc_btn_01"><?php echo anchor('hotel_controller/availability','Check Availability')?></div>                        
                    
                <div class="cleaner">&nbsp;</div>
            </div><!-- end of booking -->
            
            <div class="cleaner_h30">&nbsp;</div>
            <div class="cleaner_horizontal_divider_01">&nbsp;</div>
            <div class="cleaner_h30">&nbsp;</div>
             
            <div class="content_left_section">
            <div class="content_title_01">Events</div>
                
                <div class="news_title">Pagelaran seni "Malang Kembali"</div>
                    <p>Pagelaran seni "Malang Kembali" untuk pertama kali akan diadakan di pesisir selatan dari Kota Malang, jadilah saksi pagelaran seni pertama dengan view pantai</p>
                <div class="cleaner_h30">&nbsp;</div>

                <div class="news_title">Kotak Live in Concert</div>
                    <p>Hiburan dari band ibukota pun kini merambah daerah selatan Kota Malang. Pertama dan satu satunya acara di Malang Raya yang menggabungkan konsep musik dan pantai</p>
                  <div class="cleaner_h20">&nbsp;</div>
                    <div class="rc_btn_02"><?php echo anchor('hotel_controller/tampilevents','View All')?></div>         
                </div>   <!-- end of news section -->
                <div class="cleaner_h30">&nbsp;</div>

            <div class="cleaner_horizontal_divider_01">&nbsp;</div>
            <div class="cleaner_h30">&nbsp;</div>
            
            <a href="http://www.templatemo.com" target="_parent"><img src="images/templatemo_special_offer.jpg" alt="special offer" /></a>
          <div class="cleaner_h30">&nbsp;</div>
        </div> <!-- end of content left -->
        
        <div id="content_right">
        
        	<div class="content_right_section">
        	
                <div class="content_title_01">Booking Page</div>
				<p align="center">
				<?php echo form_open('hotel_controller/data');?>


					<table border="0">
						<tr>
							<td>Nama</td><td>:</td><td><input type="text" size="50" name="book_nama"/></td>
						</tr>
						<tr>
							<td>No. Identitas</td><td>:</td><td><input type="text" size="25" name="book_identitas"/></td>
						</tr>
						<tr>
							<td>Alamat</td><td>:</td><td><input type="text" size="50" name="book_alamat"/></td>
						</tr>
						<tr>
							<td>Tipe Kamar</td><td>:</td><td><select name="book_jenis">
                                <option value="Single Suite">Single Suite</option><option value="Double Suite">Double Suite</option><option value="VIP">VIP</option><option value="VVIP">VVIP</option><option value="Presidental Suite">Presidental Suite</option>
                            </select></td>
						</tr>
						<tr>
							<td>Jumlah Kamar</td><td>:</td><td><input type="text" size="5" name="book_jumlah"/></td>
						</tr>
						<tr>
							<td>Tanggal Check In</td><td>:</td><td><input type="text" name="book_checkin" id="ttl" size="20"/><a href="javascript:NewCssCal('ttl','yyyymmdd')">
<img src="<?php echo base_url(); ?>datepicker/images/cal.gif" width="16" height="16" alt="Pilih tanggal" />
</a></td>
						</tr>
						<tr>
							<td>Lama Menginap</td><td>:</td><td><input type="text" size="5" name="book_lama"/> Hari</td>
						</tr>
						<tr>
							<td></td><td></td><td><input type="submit"  size="50" name="submit" value="Booking Now!" align="right" /></td>
						</tr>
					</table><br />
					
				</p>
            
            
            <div class="cleaner_h40">&nbsp;</div>
            
            
            <div class="content_right_section">
                <div class="content_title_01">Contact Us</div>
                    
                    
                    <div class="cleaner_h20">&nbsp;</div>
                    
                    <div class="cleaner">&nbsp;</div>
			</div>                    
        	<div class="cleaner_h20">&nbsp;</div>
        </div> <!-- end of content right -->
        
        <div class="cleaner">&nbsp;</div>
    </div>
    
    <div id="templatemo_footer">
    Copyright © 2013 <a href="https://twitter.com/ianMaulana"><strong>Ian Maulana Zaky</strong></a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        <div style="clear: both; margin-top: 10px;">                
            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
        </div> 
	</div> <!-- end of footer -->
</div> <!-- end of container -->
<!-- Free Website Templates @ TemplateMo.com -->
</body>
</html>