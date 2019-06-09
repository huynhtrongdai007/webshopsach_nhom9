<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller 
{
	
		
	public function Trangchu() 
	{
		$this->load->model('SachModel');
		$data=$this->SachModel->GetProduct();
		$newproduct=$this->SachModel->NewProduct();
		$this->load->view('web/index',['header'=>'web/templates/header','List_Product'=>'web/templates/List_Product','data'=>$data,'New_Product'=>'web/templates/New_Product','newproduct'=>$newproduct,'slider'=>'web/templates/slider','footer'=>'web/templates/footer']);
		$this->load->view('web/index',['header'=>'web/templates/header','slide'=>'web/templates/slide','List_Product'=>'web/templates/List_Product','data'=>$data,'New_Product'=>'web/templates/New_Product','newproduct'=>$newproduct]);
	}

		public function About() {
			$this->load->view('web/About',['header'=>'web/templates/header','footer'=>'web/templates/footer']);
		}

		public function Login(){
			$this->load->view('web/login',['header'=>'web/templates/header','footer'=>'web/templates/footer']);
		}
		

		public function Signup() {
			$this->load->view('web/Signup',['header'=>'web/templates/header','footer'=>'web/templates/footer']);
		}

		public function Product() {
			$id = $this->uri->segment(3);
			$this->load->model('Model_Form');
			$data=$this->Model_Form->product_id($id);
			$this->load->view('web/product',['header'=>'web/templates/header','data'=>$data,'footer'=>'web/templates/footer','detail_product'=>'web/templates/detail_product']);
		}

}