<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Calendar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/css/colorbox.css"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>styles/js/jquery.colorbox-min.js"></script>
</head>
<body>
	<div align="center">
		<h2>CRUD KALENDER</h2>
		<?php echo $notes?>
		<span> by Cemplux</span><br /><br />
		<?php echo anchor('rebut_cont/adminpage','Kembali ke Halaman Admin')?>
	</div>
	<script>
	$(function(){
		$(".act_note").colorbox({ 
				overlayClose: false,
				data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>}
		});
	});
</script>
</body>
</html>