<?php
class postmodel extends DModel{
    public function __construct(){
       parent::__construct();
    }
    public function post_category($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
      return $this->db->select($sql);  
}
    public function postbyid($table,$cond){
      $sql = "SELECT * FROM $table WHERE $cond";
     
      return $this->db->select($sql);
    }
    public function insertpost($table_category_product,$data){
      return $this->db->insert($table_category_product,$data);
     
    }
    public function updatepost($table_category_product,$data,$cond){
      return $this->db->update($table_category_product,$data,$cond);
    }
    public function deletepost($table_category_product,$cond){
      return $this->db->delete($table_category_product,$cond);
    }

    // public function insertcategory_post($table_category_product,$data){
    //   return $this->db->insert($table_category_product,$data);
    // }
    public function post($table,$table_category){
      $sql = "SELECT * FROM $table JOIN $table_category ON $table.id_category_post = $table_category.id_category_post ORDER BY id_post   DESC ";
    return $this->db->select($sql);  
}
   
}