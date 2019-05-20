<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SachController extends CI_Controller {


// trang chu
	public function Index() {
		$this->load->model("sachModel");
		$data = $this->sachModel->getslide();	
		$data = $this->sachModel->GetProduct();
		$this->load->view("web/Index",['header'=>'web/templates/header','footer'=>'web/templates/footer','web/product','slide'=>'web/templates/slide','sanpham'=>'web/templates/sanpham','data'=>$data]);
	}
	public function Product_type() {
		$this->load->model("sachModel");
		$data = $this->sachModel->GetProduct();
		$data = $this->sachModel->GetProduct_type();
		$this->load->view("web/product_type",['header'=>'web/templates/header','footer'=>'web/templates/footer','sanpham'=>'web/templates/sanpham','data'=>$data]);
	}

        public function Product() {
        	$this->load->model("sachModel");
		$data = $this->sachModel->GetProduct();
        	$this->load->view("web/product",['header'=>'web/templates/header','footer'=>'web/templates/footer','data'=>$data]);
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
			"email"=>$this->input->post("password")
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
			//"image"=>$this->input->post("image"),
			"image"=> $_FILES['image']['name'],
			"unit"=>$this->input->post("unit")
		);

//print_r($data);exit;
			$data['image']=$this->SachModel->Upload_Image();
			$this->SachModel->insert_product($data);

			redirect(base_url()."SachController/insertedAddProduct");
			

		}else{
			$this->AddProduct();
		}
	}

	
	public function InsertedAddProduct() {
		$this->AddProduct();
	}


	public function delete_data() {
		$id = $this->uri->segment(3);
		$this->load->model("SachModel");
		$this->SachModel->delete_data($id);
		redirect(base_url(). "SachController/deleted"); 
	}
	public function deleted() {
		$this->Products();
	}



	public function Updateproduct() {
		$this->load->model("SachModel");
			$id=$_GET["id"];
			$data=$this->SachModel->SelectProduct($id); 
		
		$this->load->model("SachModel");
		$this->load->view('admin/updateproduct',['header'=>'admin/templates/header','footer'=>'admin/templates/footer','data'=>$data,'id'=>$id]
	);
		
	}

	

	public function upload_validation() {
				$id=$this->input->post("hidden_id");
					if ($this->input->post("update")) {
						$data = array(
								"name"=>$this->input->post("name_product"),
								"description"=>$this->input->post("description"),
								"unit_price"=>$this->input->post("unit_price"),
								"promotion_price"=>$this->input->post("promotion_price"),
								//"image"=>$this->input->post("image"),
								"unit"=>$this->input->post("unit")
								

							);
							$this->load->model("SachModel");
							
								if ($_FILES['image']['error']==0) 
								{
									$data['image']=$this->SachModel->Upload_Image();
									 
								}
							
						
	 					$this->SachModel->update_data($data,$id);
	 					 
	 					 redirect(base_url()."SachController/updated/?id=".$id);
	 				
	 			}else{
	 				
	 				 	redirect(base_url()."SachController/update_filse/?id=".$id);
	 				 
	 			}	
			
	}


public function updated(){
		$this->updateproduct();
}

public function	update_filse(){
		$this->Updateproduct();
	}
	
}
