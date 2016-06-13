<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Building Website</title>
<meta name="keywords" content="building, construction, green, dark green, website templates, CSS, HTML" />
<meta name="description" content="Building is a construction template that includes total 5 HTML pages." />
<link href=<?=base_url()?>styles/templatemo_style.css" rel="stylesheet" type="text/css" />


</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_sidebar">
    	
        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><img src="images/templatemo_logo.png" alt="building template" /><span>construction template</span></a></h1>
        </div> <!-- end of site_title -->
        
        <div id="login">
        	<h4>SuperUser Login</h4>
        	<form method="get" action="#">
                <label for="username">Username:</label> <input type="text" id="username" name="username" class="login_field" />
                <div class="cleaner_h10"></div>
                <label for="password">Password:</label> <input type="password" id="password" name="password" class="login_field" />
                <div class="cleaner_h10"></div>
                <input type="submit" name="submit" id="submit" value="Login" class="login_button" />
            	&nbsp;&nbsp;<a href="http://www.templatemo.com">forgot password?</a>
        	</form>
			<a class="login_blank" href="http://www.onlyimage.com/" title="image from www.onlyimage.com"  target="_blank"></a>
        </div>
        
    </div>
    
	<div id="templatemo_main_column">
    
    	<div id="templatemo_menu">
            <ul>
                <li><a href="index.php">01<span>Home</span></a></li>
                <li><a href="about.php" class="current">02<span>Company</span></a></li>
                <li><a href="services.php">03<span>Services</span></a></li>
                <li><a href="gallery.php">04<span>Gallery</span></a></li>
                <li><a href="contact.php">05<span>Contact</span></a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_content">
        	
            <div class="col_w670">
                
                <p align="center"><h1 align="center">Event</h1></p>
<table border="1" align="center">
	<tr>
	<th>No event</th>
	<th>Judul Event</th>
	<th>Isi Event</th>
	<th>Tanggal Event</th>
	<th>Di Post</th>
	</tr>
<?php $i=0;
foreach($query as $row){
	$i++;
	echo"<tr>";
	echo"<td>".$row->id_event."</td>";
	echo"<td>".$row->judul_event."</td>";
	echo"<td>".$row->isi_event."</td>";
	echo"<td>".$row->tanggal_event."</td>";
	echo"<td>".$row->post_by."</td>";
	echo"</td>";
	echo"</tr>";
	 
}
?>
</table>

                
                <div class="cleaner_h50"></div>
                
                <h2>Company Background<span></span></h2>
  	       		<p><em>Nullam semper, metus a dignissim vulputate, felis diam bibendum orci, ut aliquam sem neque at magna. Fusce accumsan mattis vestibulum. Cras sit amet nulla vel odio iaculis sollicitudin nec non quam.</em></p>
                <p>Donec dignissim lorem ac est dictum vitae mattis purus imperdiet. Ut sed est ut urna posuere faucibus. Nulla imperdiet porta pharetra. Morbi sed nulla ac est cursus suscipit eu ac lectus.  Donec dignissim lorem ac est dictum vitae mattis purus imperdiet.</p>
                
                <ul class="tmo_list">
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget sollicitudin turpis.</li>
                    <li>Curabitur convallis molestie sem, et egestas enim ornare non.</li>
                    <li>Suspendisse ultrices gravida ligula, sed consequat enim facilisis vel.</li>
                    <li>Aliquam dolor metus, egestas ut vulputate eu, hendrerit condimentum libero.</li>
                    <li>Vestibulum tortor lorem, fringilla convallis malesuada in, sagittis sit amet massa.</li>                        
</ul>
                <div class="cleaner"></div>
                <div class="btn_more float_r"><a href="#"><span>&raquo;</span> Read more</a></div>
                
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
        	<a href="index.html">Home</a> | <a href="about.html">Company</a> | <a href="services.html">Services</a> | 
            <a href="http://www.flashmo.com" target="_parent">Flash Templates</a> | <a href="gallery.html">Gallery</a> | <a href="contact.html">Contact</a>
            <br /><br />
            
	        Copyright © 2048 <a href="#">Your Company Name</a>
            <br /><br />
        	Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>