<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	class cont_admin extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$this->load->model('model_admin');
			$data['query'] = $this->model_admin->getAll();
			$this->template_admin->display('index',$data);
		}
		
		function barang($parameter){
			$data['query']=$this->model->getBarang($parameter);
			$this->template_admin->display('produk',$data);
		}
		
		function delete(){
			$this->model_admin->clear();
			redirect('cont_admin');
		}
		
		//cari yg mau diupdate
		function edit(){
			$data['query']=$this->model_admin->cari_edit();
			$this->template_admin->display('form_edit',$data);
		}
		
		function update(){
						//upload foto
			$jenis = $this->input->post('jenis');
			$kategori = $this->input->post('kategori');
			if($jenis=='herbisida' || $jenis=='insektisida' || $jenis=='fungisida'){
				$path = "./plus/img/produk/".$jenis."/";
			}
			else{ $path = "./plus/img/produk/".$kategori."/";}
			
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|png';
/*			$config['max_size']    = '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';*/
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload()){
				echo $this->upload->display_errors();
				echo $path; echo base_url();
			}
			else{
				$data_file = $this->upload->data();
				$foto = $data_file['file_name'];
				
				$data = array(
					'nama_barang'=>$this->input->post('nama_barang'),
					'kategori'=>$this->input->post('kategori'),
					'jenis'=>$this->input->post('jenis'),
					'harga'=>$this->input->post('harga'),
					'stok'=>$this->input->post('stok'),
					'foto'=>$foto,
					'keterangan'=>$this->input->post('keterangan')
				);
				$this->model_admin->update($data);
				redirect('cont_admin');
			}			
		}
		
		function tambah(){
			$this->template_admin->display('form_tambah');;
		}
		
		function prosesTambah(){
			//upload foto
			$jenis = $this->input->post('jenis');
			$kategori = $this->input->post('kategori');
			if($jenis=='herbisida' || $jenis=='insektisida' || $jenis=='fungisida'){
				$path = "./plus/img/produk/".$jenis."/";
			}
			else{ $path = "./plus/img/produk/".$kategori."/";}
			
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|png';
/*			$config['max_size']    = '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';*/
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload()){
				echo $this->upload->display_errors();
				echo $path; echo base_url();
			}
			else{
				$data_file = $this->upload->data();
				$foto = $data_file['file_name'];
				
				$data = array(
					'id_barang'=>$this->input->post('id_barang'),
					'nama_barang'=>$this->input->post('nama_barang'),
					'kategori'=>$this->input->post('kategori'),
					'jenis'=>$this->input->post('jenis'),
					'harga'=>$this->input->post('harga'),
					'stok'=>$this->input->post('stok'),
					'foto'=>$foto,
					'keterangan'=>$this->input->post('keterangan')
				);
				$this->model_admin->tambahBarang($data);
				redirect('cont_admin');
			}
		}
		
		function pesanan(){
			$data['query']=$this->model_admin->getPesanan();
			$this->template_admin->display('pesanan',$data);
		}
		
		function customer(){
			$data['query']=$this->model_admin->getCustomer();
			$this->template_admin->display('customer',$data);
		}
		
		function komentar(){
			$data['query']=$this->model_admin->getKomentar();
			$this->template_admin->display('komentar',$data);
		}
		
/*		function deleteCustomer(){
			$this->model_admin->deleteCustomer();
			redirect('cont_admin');
		}*/
		
		function logout(){
			$this->session->sess_destroy();
			redirect('controller');
		}
		
	}
?>