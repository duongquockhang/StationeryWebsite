<?php
class tintuc extends DController {
    
    public function __construct(){
        $data = array();
      
        parent::__construct();
    }
    public function index($id){
         $this->danhmuc($id);
    }
    public function tatca(){
      $table='tbl_category_product';
      $table_post='tbl_category_post';
      $post = 'tbl_post';
      $categorymodel=$this->load->model('categorymodel');
      $data['category']=$categorymodel->category_home($table);
      $data['category_post']=$categorymodel->categorypost_home($table_post);
      $data['list_post']=$categorymodel->listpost_home($post);
        $this->load->view('header',$data);  
        $this->load->view('list_post',$data);
        $this->load->view('footer');  
    }
    public function danhmuc($id){
      $table='tbl_category_product';
      $table_post='tbl_category_post';
      $post = 'tbl_post';
      $categorymodel=$this->load->model('categorymodel');
      $data['category']=$categorymodel->category_home($table);
      $data['category_post']=$categorymodel->categorypost_home($table_post);
      $data['postbyid']=$categorymodel->postbyid_home($table_post,$post,$id);
        $this->load->view('header',$data);  
       
        $this->load->view('categorypost',$data);
        $this->load->view('footer');  
    }
    public function chitiettin($id){
      $table='tbl_category_product';
      $table_post='tbl_category_post';
      $post = 'tbl_post';
     
      $cond = "$table_post.id_category_post=$post.id_category_post AND $post.id_post ='$id'";
      $categorymodel=$this->load->model('categorymodel');
      $data['category']=$categorymodel->category_home($table);
      $data['category_post']=$categorymodel->categorypost_home($table_post);
      $data['postbyid']=$categorymodel->postbyid_home($table_post,$post,$id);

      $data['detail_post']=$categorymodel->detail_post_home($table_post,$post,$cond);
      foreach($data['detail_post'] as $key => $cate){
        $id_cate=$cate['id_category_post'];
    }
     
      $cond_related="$table_post.id_category_post=$post.id_category_post AND $post.id_category_post ='$id_cate' AND $post.id_post !='$id'";
      // $cond_related= "$post.id_category_product = '$id_cate' AND $post.id_product != '$id'";
     
      $data['related']=$categorymodel->related_post_home($table_post,$post,$cond_related);
    //   echo '<pre>';
    //   print_r($data['related'] );
    // echo '</pre>';
    // die();
        $this->load->view('header',$data);  
      
      $this->load->view('detailpost',$data);
      $this->load->view('footer');  
    }
 
   
}