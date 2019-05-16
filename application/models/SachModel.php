<?php

class SachModel extends CI_Model{

// public function getAllBook() {
// 		return $this->db->get('book')->result_array();
		
// 	}

	public function GetAllUser() {
		return $this->db->get('users')->result_array();
	}

	public function GetProduct_type() {
		$data=$this->db->get('type_products');
		$data=$this->db->get('products');
		return $data->result();
	}
	public function GetProduct() {
		$data=$this->db->get('products');
		return $data->result();
	}
	public function GetShopcart(){
		$data=$this->db->get('bill');
		return $data->result();
	}
    public  function getslide() {
		$data=$this->db->get("slide");
            return $data->result();
		
	} 

	function Insert_User($data) {
		$this->db->insert("users",$data);
		
	}

	function Insert_Product($data) {
		$data['image']=$this->upload_image();
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
			return $this->upload->data()['file_name'];

		}
	}

}
