<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SachController extends CI_Controller {


// trang chu
	public function Index() {
		$this->load->model("sachModel");
		$data = $this->sachModel->getslide();
		$this->load->view("web/Index",['header'=>'web/templates/header','footer'=>'web/templates/footer','slide'=>'web/templates/slide','data'=>$data]);
	}
	public function Product() {
		$this->load->view("web/product");
	}

	public function About() {
		$this->load->view("web/about");
	}

	public function SignUp() {
 		$this->load->view("web/signup");
	}

	public function Login() {
 		$this->load->view("web/login",['header'=>'web/templates/header']);


	}






// signup 

	public function Form_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email", "Email" ,"required");
		$this->form_validation->set_rules("username", "Username" ,"required");
		$this->form_validation->set_rules("address", "Address" ,"required");
		$this->form_validation->set_rules("phone", "Phone" ,"required");
		$this->form_validation->set_rules("password", "Password" ,"required");

		if ($this->load->model("SachModel")) {
			$data = array(
			"email"=>$this->input->post("email"),
			"full_name"=>$this->input->post("full_name"),
			"address"=>$this->input->post("address"),
			"phone"=>$this->input->post("phone"),
			"password"=>$this->input->post("password")
		);




			$this->SachModel->Insert_User($data);
			redirect(base_url()."sachController/inserted");
		}else{
			$this->signup();
		}
	}

	public function Inserted() {
		$this->signup();
	}

// admin
	public function Admin() {
		$this->load->view("admin/index");
	}

	public function User() {
		$this->load->view("admin/user");
	}

	

	// public function product() {
	// 	$this->load->model("sachModel");
	// 	$data = $this->sachModel->getAllBook();
	// 	$this->load->view("admin/product",['product'=>$data]);
	// }

	public function Products() {
		$this->load->model("SachModel");
		$data=$this->SachModel->GetProduct();
		$this->load->view("admin/product",['data'=>$data]);
	}


	public function AddUser() {
		$this->load->view("admin/adduser");
	}

	

	public function AddProduct(){
		$this->load->view('admin/addproduct',['header'=>'admin/templates/header','footer'=>'admin/templates/footer']);
	}

	public function InsertProduct() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "Name_Product" ,"required");
		$this->form_validation->set_rules("description", "Description" ,"required");
		$this->form_validation->set_rules("unit_price", "Unit_Price" ,"required");
		$this->form_validation->set_rules("promotion_price", "Promotion_Price" ,"required");
			$this->form_validation->set_rules("image", "Image" ,"required");
		$this->form_validation->set_rules("unit", "Unit" ,"required");

		if ($this->load->model("SachModel")) {
			$data = array(
			"name"=>$this->input->post("name_product"),
			"description"=>$this->input->post("description"),
			"unit_price"=>$this->input->post("unit_price"),
			"promotion_price"=>$this->input->post("promotion_price"),
			"image"=>$this->input->post("image"),
			"unit"=>$this->input->post("unit")
		);


			$this->sachModel->insert_product($data);
			redirect(base_url()."SachController/insertedAddProduct");
			$data['image']=$this->Upload_Image();
		}else{
			$this->AddProduct();
		}
	}

	
	public function InsertedAddProduct() {
		$this->AddProduct();
	}

	
}
