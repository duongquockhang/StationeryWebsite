<?php
class categorymodel extends DModel{
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
    public function updatecategory($table_category_product,$data,$cond){
      return $this->db->update($table_category_product,$data,$cond);
    }
    public function deletecategory($table_category_product,$cond){
      return $this->db->delete($table_category_product,$cond);
    }

    public function insertcategory_post($table_category_product,$data){
      return $this->db->insert($table_category_product,$data);
    }
    public function post_category($table){
      $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
    return $this->db->select($sql);  
}
    public function listpost_home($post){
      $sql = "SELECT * FROM $post ORDER BY $post.id_post DESC";
     
      return $this->db->select($sql);

    }
    public function categorypost_home($table){
      $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
    return $this->db->select($sql);  
    }
    public function postbyid_home($table_post,$post,$id){
      $sql = "SELECT * FROM $table_post JOIN $post ON $table_post.id_category_post = $post.id_category_post AND $post.id_category_post='$id' ORDER BY $post.id_post DESC ";
      return $this->db->select($sql);      
      
    }
    public function post_deletecategory($table_category_product,$cond){
      return $this->db->delete($table_category_product,$cond);
}
    public function post_categorybyid($table,$cond){
      $sql = "SELECT * FROM $table WHERE $cond";
    
      return $this->db->select($sql);
    }
    public function detail_post_home($table_post,$post,$cond){
      $sql = "SELECT * FROM $table_post JOIN $post ON $cond ORDER BY $post.id_post DESC";
    //  echo '<pre>';
    //    print_r( $sql );
    //  echo '</pre>';
    //  die();
      return $this->db->select($sql);
    }
    public function related_post_home($table_post,$post,$cond_related){
       $sql = "SELECT * FROM $table_post,$post WHERE $cond_related ORDER BY $post.id_post DESC";
     
      return $this->db->select($sql);
    }
    public function post_updatecategory($table_category_product,$data,$cond){
      return $this->db->update($table_category_product,$data,$cond);
    }
    //product
    public function listproduct_home($table_product){
      $sql = "SELECT * FROM $table_product ORDER BY $table_product.id_product DESC";
     
      return $this->db->select($sql);

    }
    public function product_hot($table_product){
      $sql = "SELECT * FROM $table_product where product_hot = 1 ORDER BY $table_product.id_product DESC";
     
      return $this->db->select($sql);
    }
    public function list_product_index($table_product){
      $sql = "SELECT * FROM $table_product ORDER BY $table_product.id_product DESC";
     
      return $this->db->select($sql);

    }
    public function insertproduct($table_category_product,$data){
      return $this->db->insert($table_category_product,$data);
     
    }
    public function product($table,$table_category){
      $sql = "SELECT * FROM $table JOIN $table_category ON $table.id_category_product = $table_category.id_category_product ORDER BY id_product DESC ";
    return $this->db->select($sql);  
}
    public function deleteproduct($table_category_product,$cond){
      return $this->db->delete($table_category_product,$cond);
    }
    public function updateproduct($table_category_product,$data,$cond){
      return $this->db->update($table_category_product,$data,$cond);
    }
    public function productbyid($table,$cond){
      $sql = "SELECT * FROM $table WHERE $cond";
     
      return $this->db->select($sql);
    }
    public function related_product_home($table,$table_product,$cond_related){
      $sql = "SELECT * FROM $table,$table_product WHERE $cond_related";
     
      return $this->db->select($sql);
    }
    public function detail_product_home($table,$table_product,$cond){
      $sql = "SELECT * FROM $table,$table_product WHERE $cond";
     
      return $this->db->select($sql);
    }
    public function post_index($post){
      $sql = "SELECT * FROM $post ORDER BY $post.id_post DESC LIMIT 2";
     
      return $this->db->select($sql);
    }
}