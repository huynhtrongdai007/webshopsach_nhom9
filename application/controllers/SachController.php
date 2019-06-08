<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SachController extends CI_Controller 
{

  	public function Admin() {
		$this->load->view("admin/index");
	}   
	public function User() {
		$this->load->model("SachModel");
		$data = $this->SachModel->GetAllUser();
		$this->load->view("admin/user",['data'=>$data,'modelFormUser'=>'admin/templates/modelFormUser']);
	}

	function detail_user($id)
	{
		$this->load->model("SachModel");
		$row = $this->SachModel->detail_users($id);
		echo json_encode($row);



	public function Process(){
		$username=$this->input->post('username',TRUE);
    	$password= $this->input->post('password',TRUE);
    	$this->load->model('SachModel');

    	$validate = $this->SachModel->Login($username,$password);
    	//print_r($validate);
			//echo "0000";

	 function Process(){


	

		$email=$this->input->post('username',TRUE);
    	$password= $this->input->post('password',TRUE);
    	$this->load->model('SachModel');

    	$validate = $this->SachModel->Login($email,$password);


		 	if($validate->num_rows() > 0)
    		{
		        $data  = $validate->row_array();
		        $name  = $data['full_name'];
		        $username = $data['email'];
		        $level = $data['level'];
		        $sesdata = array(
		       		'full_name' =>$name,
		            'username'  => $username,
		            'level'     => $level,
		            'logged_in' => TRUE
		            
		        );
		       
		        $this->session->set_userdata($sesdata);
		     

		        if($level==='1')
		        {
		            redirect(base_url().'SachController/Admin');
		 
		        // access login for author
		        }else
		        {

		            redirect(base_url().'Index/Trangchu');

		             redirect(base_url().'Index/Trangchu');

		        }
    		}
    		else {
    			echo $this->session->set_flashdata('msg','Username or Password is Wrong');
    			 redirect(base_url().'SachController/LoginFail');
    		}	


			
		
	}
	 function logout(){
		$this->session->sess_destroy();
		  redirect(base_url().'Index/Trangchu');

	}



	
	function LoginFail(){
		$this->login();

	}
	function save()
	{
		$this->load->model("SachModel");
		$data = array(
			'full_name'=>$this->input->post('user_name'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'address'=>$this->input->post('adress'),
			'phone'=>$this->input->post('phone'),
			'level'=>$this->input->post('level'),

		);


	public function Form_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email", "Email" ,"required","unique");
		$this->form_validation->set_rules("username","Username","required");
		$this->form_validation->set_rules("full_name", "FullName" ,"required");
		$this->form_validation->set_rules("address", "Address" ,"required");
		$this->form_validation->set_rules("phone", "Phone" ,"required");
		$this->form_validation->set_rules("password", "Password" ,"required");

		$this->load->model('SachModel');
		$username = $this->input->post('username');
		$query = $this->SachModel->Liked($username);
		if ($query->num_rows()>0) {
			
			
			
			redirect(base_url()."sachController/inserted");
		}else{
			$data = array(
				'email'=> $this->input->post('email'),
				'full_name'=> $this->input->post('full_name'),
				'username'=>$this->input->post('username'),
				'address'=> $this->input->post('address'),
				'phone'=> $this->input->post('phone'),
				'password'=> $this->input->post('password')

			);
			$this->SachModel->Insert_User($data);
			redirect(base_url()."sachController/inserted");

		$message = $this->SachModel->update_user($this->input->post('user_id'), $data);

		echo json_encode($message);

			$this->SachModel->Insert_User($data);
			redirect(base_url()."sachController/inserted");
		}	{

			$this->signup();
		}
	}
	public function delete_datauser() {
		// $id=$_GET["id"];
		$id = $this->uri->segment(3);
		$this->load->model("SachModel");
		$this->SachModel->delete_user($id);
		redirect(base_url(). "sachController/User"); 
	}

	

	public function Products() {
		$this->load->model("SachModel");
		$data=$this->SachModel->GetProduct();
		$this->load->view("admin/product",['data'=>$data]);
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





	public function Updateproduct() {
			$this->load->model("SachModel");
				$id=$_GET["id"];
				$data=$this->SachModel->SelectProduct($id); 
			
			$this->load->model("SachModel");
			$this->load->view('admin/updateproduct',['header'=>'admin/templates/header','footer'=>'admin/templates/footer','data'=>$data,'id'=>$id]
		);
		
	}



	public function upload_validation() 
	{
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


	public function updated()
	{
			$this->updateproduct();
	}

	public function	update_filse()
	{
			$this->Updateproduct();
	}

		function Insert_Product() {
			$this->load->model('Model_Form');
			$data = array(
				'name'=>$this->input->post('name'),
				'description'=>$this->input->post('description'),
				'unit_price'=>$this->input->post('unit_price'),
				'promotion_price'=>$this->input->post('promotion_price'),
				'unit'=>$this->input->post('unit'),
				'image'=>$this->upload_image()
			);
			$message = $this->Model_Form->Insert_Product($data);
			
			echo json_encode($message);
			redirect(base_url(). "SachController/Products");
		}

			public function Delete_data() {
				$id = $this->uri->segment(3);
				$this->load->model("Model_Form");
			    $this->Model_Form->Delete_Data($id);

				redirect(base_url(). "SachController/deleted"); 

			}
				public function deleted() {

						$this->Products();

				}

		

		function upload_image() {

			if (isset($_FILES["product_image"])) {
				$extension  = explode('.', $_FILES['product_image']['name']);
				$new_name = rand().'.'.$extension[1];
				$destiantion = './uploads/'.$new_name;
				move_uploaded_file($_FILES['product_image']['tmp_name'], $destiantion);
				return $new_name;
			}

		}

		public function Catory(){
		$this->load->model("SachModel");
		$data=$this->SachModel->GetCatory();
		$this->load->view("admin/catory.php",['data'=>$data]);
	}

		function new_catory()
		{
			$this->load->model("SachModel");
			$data = array(
				'name'=>$this->input->post('cat_name'),
				'description'=>$this->input->post('description'),
				
			);
			$message = $this->SachModel->Insert_Catory($data);

			echo json_encode($message);
		}


	function detail_catory($id)
	{
		$this->load->model("SachModel");
		$row = $this->SachModel->detail_catory($id);
		echo json_encode($row);
	}

	function save_catory()
{
	$this->load->model("SachModel");
	$data = array(
		'id'=>$this->input->post('cat_id'),
		'name'=>$this->input->post('cat_name'),
		'description'=>$this->input->post('description'),
		
	);
	$message = $this->SachModel->update_catory($this->input->post('cat_id'), $data);

	echo json_encode($message);
}

public function delete_Catory() {
		$id = $this->uri->segment(3);
		$this->load->model("SachModel");
		if($this->SachModel->delete_Catory($id))
			$message = "delete catory susscess";	
		
		else{
			$message = "You cannot delete categories that are used";		}

		echo json_encode($message);
		
	}
}

