 <?php  
 class Model_Form extends CI_Model  
 {  
     function Insert_Product($date(format)ata) {
        $this->db->insert('products',$data);
        return "Add New Success";
     }

     function Delete_Data($id) {
       $this->db->where("id",$id);
       $this->db->delete("products");
       return "Add New Success";
     }

     function update_product($id,$data) {
      $this->db->where("id",$id);
      $this->db->update("products",$data);
      return "Update Success";
    }

  //   public function product_id($id) {
  //    	$this->db->select('*');
		// $this->db->from('products');
		// $this->db->where(array('id'=>$id));
		// $data = $this->db->get();
		// //Tra ve 1 dong 
		// return $data->row_array();
  //    }

   public function product_id($id){
   
     $data = $this->db->query("SELECT * FROM products WHERE id = '$id'");
      return $data->row_array();
   
   } 

 } 