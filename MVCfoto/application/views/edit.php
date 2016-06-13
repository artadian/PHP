<?php  
			 //echo form_open('foto_controller');

	  echo form_open('foto_controller/update'); 
	 
	    foreach ($query as $row){
  	
   echo form_hidden('id_berita',$row->id_berita,'id="id_berita"');
				 
					    echo form_label('Judul');   
					   echo form_input('judul',$row->judul,'id="judul"');   
				 
				 
					    echo form_label('Isi');   
					     $textarea = array("name"=>'isi',"value"=>$row->isi);   
				 		echo form_textarea($textarea);
				 
					    echo form_submit('submit','Submit','id="submit"'); echo form_close();  
			
				 
				
 }

			 ?>