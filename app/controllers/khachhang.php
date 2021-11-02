<?php
class khachhang extends DController {
    
    public function __construct(){
        $data = array();
      
        parent::__construct();
    }
    public function index(){
      
         $this->homepage();
    }
    // public function homepage(){
    //   $table='tbl_category_product';
    //   $table_post='tbl_category_post';
    //   $tbl_product='tbl_product';
    //   $post='tbl_post';
    
    //   $categorymodel=$this->load->model('categorymodel');
    //   $data['category']=$categorymodel->category_home($table);
    //   $data['category_post']=$categorymodel->categorypost_home($table_post);
    //   $data['product']=$categorymodel->list_product_index($tbl_product);
    //   $data['post_in']=$categorymodel->post_index($post);
     
    //     $this->load->view('header',$data);  
    //     $this->load->view('slider',$data);
    //     $this->load->view('home',$data);
    //     $this->load->view('footer');  
    // }
    
   
   
   public function dangnhap(){
     public function homepage(){
      $table='tbl_category_product';
      $table_post='tbl_category_post';
      $tbl_product='tbl_product';
      $post='tbl_post';
    
      $categorymodel=$this->load->model('categorymodel');
      $data['category']=$categorymodel->category_home($table);
      $data['category_post']=$categorymodel->categorypost_home($table_post);
      $data['product']=$categorymodel->list_product_index($tbl_product);
      $data['post_in']=$categorymodel->post_index($post);
     
        $this->load->view('header',$data);  
        $this->load->view('slider',$data);
        $this->load->view('home',$data);
        $this->load->view('footer');  
    
   }
}
}