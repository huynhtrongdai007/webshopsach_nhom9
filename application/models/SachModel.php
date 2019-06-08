<?php

class SachModel extends CI_Model{

// public function getAllBook() {
// 		return $this->db->get('book')->result_array();
		
// 	}

	public function GetAllUser() {
		return $this->db->get('users')->result_array();
	}
	public function paGetProduct_type() {
		$data=$this->db->get('type_products');
		$data=$this->db->get('products',8);
		return $data->result();
	}
	public function GetProduct() {
		$data=$this->db->get('products',8);
	//		$data=$this->db->get("slide",4);
		return $data->result();
	}
	
	public function NewProduct() {
		$data = $this->db->query("SELECT * FROM products ORDER BY id DESC LIMIT 4");
		return $data->result();
	}

	// lấy mot san pham 
	public function SelectProduct($id) {
			
		$data = $this->db->query("SELECT * FROM products WHERE id = '$id'");
		return $data->result_array();
	}
	public function Login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$reuslt =$this->db->get('users');
		return $reuslt;

		// $this->db->select('*');
		// $this->db->from('users');
		// $this->db->where('email',$username);
		// $this->db->where('password',$password);
		// $this->db->where('level',$level);
		//$query =$this->db->get();
		// $query=$this->query("SELECT * FROM users WHERE email = $email and password = $password");
		//  return $query->result_array();
	}


	public function GetShopcart(){
		$data=$this->db->get('bill');
		return $data->result();
	}
    public  function getslide() {
		$data=$this->db->get("slide",4);
            return $data->result();
		
	}
	public function Liked($username){
		$data=$this->db->query('SELECT * from users where username Like "%$username%"');
		 return $data;
		

	}
	public function Insert_User($data) {
		$this->db->insert("users",$data);
	}

	function Insert_Product($data) {
		//$data['image']=$this->upload_image();
		$this->db->insert("products",$data);
	}

	public function Upload_Image() {
		$config['upload_path']='./uploads';
		$config['allowed_types']='gif|jpg|png';
		$config['encrypt_name']=TRUE;
		$this->load->library('upload',$config);

		if (!$this->upload->do_upload('image')) {
			return false;
		}else{
			$data_uploaded = $this->upload->data();
			//$this->db->set($data);

			return $this->upload->data()['file_name'];

		}
	}

		function delete_data($id) {
		$this->db->where("id",$id);
		$this->db->delete("products");
		//DELETE FROM user WHERE id = $id 
	}

 	// cap nhat san pham
	function update_data($data,$id) {
		$this->db->where("id",$id);
		$this->db->update("products",$data);
		
	}

	function insert_crud($data) {
		$this->db->insert('products',$data);
	}

	 function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      } 

        function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      } 

      

}
