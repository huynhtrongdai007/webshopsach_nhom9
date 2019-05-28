<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function Trangchu() 
	{
		$this->load->model('SachModel');
		$data=$this->SachModel->GetProduct();
		$newproduct=$this->SachModel->NewProduct();
		$this->load->view('web/index',['List_Product'=>'web/templates/List_Product','data'=>$data,'New_Product'=>'web/templates/New_Product','newproduct'=>$newproduct]);
	}

	
}