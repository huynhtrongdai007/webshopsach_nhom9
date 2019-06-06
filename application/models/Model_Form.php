 <?php  
 class Model_Form extends CI_Model  
 {  
     function Insert_Product($data) {
        $this->db->insert('products',$data);
        return "Add New Success";
     }

     function Delete_Data($id) {
       $this->db->where("id",$id);
       $this->db->delete("products");
       return "Add New Success";
     }

 } 