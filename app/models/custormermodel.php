<?php
class custormermodel extends DModel{
    public function __construct(){
       parent::__construct();
    }
    public function category($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
      return $this->db->select($sql);  
}
    public function category_home($table){
      $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
    return $this->db->select($sql);  
    }
    public function categorybyid($table,$cond){
      $sql = "SELECT * FROM $table WHERE $cond";
     
      return $this->db->select($sql);
    }
    public function categorybyid_home($table,$table_product,$id){
      $sql = "SELECT * FROM $table JOIN $table_product ON $table.id_category_product = $table_product.id_category_product AND $table_product.id_category_product='$id' ORDER BY $table_product.id_product DESC ";
      return $this->db->select($sql);      
      
    }
    
    public function insertcategory($table_category_product,$data){
      return $this->db->insert($table_category_product,$data);
     
    }
  
}