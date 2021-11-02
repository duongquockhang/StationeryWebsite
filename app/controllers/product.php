<?php
class product extends DController {
    
    public function __construct(){
     parent::__construct();
    }
    public function index(){
        $this->add_category();
       
    }
    public function add_category(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        
        $this->load->view('cpnael/product/add_category');
        $this->load->view('cpnael/footer');
    }
    public function add_product(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        $table= 'tbl_category_product';
        $categorymodel= $this->load->model('categorymodel');
        $data['category']=$categorymodel->category($table);
        
        $this->load->view('cpnael/product/add_product',$data);
        $this->load->view('cpnael/footer');
    }
    public function insert_category(){
       
       $title = $_POST['tittle_category_product'];
       $desc = $_POST['desc_category_product'];
       $table= 'tbl_category_product';
       $data= array(
           'tittle_category_product' =>  $title,
           'desc_category_product'=>$desc
       );
       $categorymodel= $this->load->model('categorymodel');
       $result= $categorymodel->insertcategory($table,$data); 
      if($result == 1){
         
        header("Location:".BASE_URL."/?url=product/add_category");
      }
      else{
     
        header("Location:".BASE_URL."/?url=product");
      }
}
    public function insert_product(){
        
        $title = $_POST['tittle_product'];
        $price = $_POST['price_product'];
        $desc = $_POST['desc_product'];
        $quantity = $_POST['quantity_product'];
        $img = $_FILES['img_product']['name'];
        $tmp_img = $_FILES['img_product']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $unique_image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/product/".$unique_image;
        move_uploaded_file($tmp_img,$path_uploads);
        $category = $_POST['category_product'];
        $product_hot = $_POST['product_hot'];
        $table= 'tbl_product';
        $data= array(
            'tittle_product' =>  $title,
            'price_product'=>$price,
            'desc_product' =>  $desc,
            'quantity_product'=>$quantity,
            'img_product' =>  $unique_image,
            'id_category_product'=>$category,
            'product_hot'=>$product_hot
        );
        $categorymodel= $this->load->model('categorymodel');
        $result= $categorymodel->insertproduct($table,$data); 
    if($result == 1){
        
        header("Location:".BASE_URL."/?url=product/add_product");
    }
    else{
    
        header("Location:".BASE_URL."/?url=product");
    }
    }
    public function list_category(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        $table= 'tbl_category_product';
        $categorymodel= $this->load->model('categorymodel');
        $result= $categorymodel->category($table); 
        $data['category']=$categorymodel->category($table);
        $this->load->view('cpnael/product/list_category',$data);
        $this->load->view('cpnael/footer');

       
    }
    public function list_product(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        $table= 'tbl_product';
        $table_category='tbl_category_product';  
        $categorymodel= $this->load->model('categorymodel');
        $result= $categorymodel->product($table,$table_category); 
        $data['product']=$categorymodel->product($table,$table_category);
        $this->load->view('cpnael/product/list_product',$data);
        $this->load->view('cpnael/footer');
      
    }
    public function delete_category($id){
        $table= 'tbl_category_product';
        $cond = "id_category_product=$id";
        $categorymodel= $this->load->model('categorymodel');
        $result= $categorymodel->deletecategory($table,$cond); 
        if($result==1){
            header("Location:".BASE_URL."/?url=product/list_category");
           }
           else{
            echo 'Xóa dữ liệu thất bại';
           }
    }
    public function delete_product($id){
        $table= 'tbl_product';
        $cond = "id_product=$id";
        $categorymodel= $this->load->model('categorymodel');
        $result= $categorymodel->deleteproduct($table,$cond); 
        if($result==1){
            header("Location:".BASE_URL."/?url=product/list_product");
           }
           else{
            echo 'Xóa dữ liệu thất bại';
           }
    }
    public function edit_category($id){
        $table= 'tbl_category_product';
        $cond = "id_category_product=$id";
        $categorymodel= $this->load->model('categorymodel');
        $data['categorybyid']=$categorymodel->categorybyid($table,$cond);
        
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        
        $this->load->view('cpnael/product/edit_category',$data);
        $this->load->view('cpnael/footer');
        // header("Location:".BASE_URL."/?url=product/list_category");
    }
    public function edit_product($id){
        $table= 'tbl_product';
        $table_category= 'tbl_category_product';
        $cond = "id_product=$id";
        $categorymodel= $this->load->model('categorymodel');
        $data['productbyid']=$categorymodel->productbyid($table,$cond);
        $data['category']=$categorymodel->category($table_category);
        

        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        
        $this->load->view('cpnael/product/edit_product',$data);
        $this->load->view('cpnael/footer');
        // header("Location:".BASE_URL."/?url=product/list_category");
    }
    public function update_category($id){
        $table= 'tbl_category_product';
        $cond = "id_category_product='$id'";
        $title = $_POST['edit_tittle_category_product'];
        $desc = $_POST['edit_desc_category_product'];
        $data= array(
            'tittle_category_product' =>  $title,
            'desc_category_product'=>$desc
        );
        $categorymodel= $this->load->model('categorymodel');
        $result=$categorymodel->updatecategory($table,$data,$cond);
        if($result==1){
            header("Location:".BASE_URL."/?url=product/list_category");
           }
           else{
            echo 'Xóa dữ liệu thất bại';
           }
    }
    public function update_product($id){
        $table= 'tbl_product';
        $categorymodel= $this->load->model('categorymodel');
        $cond = "id_product='$id'";

        $title = $_POST['tittle_product'];
        $price = $_POST['price_product'];
        $desc = $_POST['desc_product'];
        $quantity = $_POST['quantity_product'];
        $img = $_FILES['img_product']['name'];
        $tmp_img = $_FILES['img_product']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $unique_image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/product/".$unique_image;
        $category = $_POST['category_product'];
        $product_hot = $_POST['product_hot'];
        if($img){ 
            $data['productbyid']=$categorymodel->productbyid($table,$cond);          
            foreach($productbyid as $key => $value){
                $path_unlink="public/uploads/product";
               
                    unlink($path_unlink.$value['img_product']);              
            }          
            $data= array(
            'tittle_product' =>  $title,
            'price_product'=>$price,
            'desc_product' =>  $desc,
            'quantity_product'=>$quantity,
            'img_product' =>  $unique_image,
            'id_category_product'=>$category,
            'product_hot'=>$product_hot

        );
        move_uploaded_file($tmp_img,$path_uploads);
    }else{
        $data= array(
            'tittle_product' =>  $title,
            'price_product'=>$price,
            'desc_product' =>  $desc,
            'quantity_product'=>$quantity, 
                     
            'id_category_product'=>$category,
            'product_hot'=>$product_hot
        );
         
    }
      
       
        $result=$categorymodel->updateproduct($table,$data,$cond);
        if($result==1){
            header("Location:".BASE_URL."/?url=product/list_product");
           }
           else{
            echo 'Xóa dữ liệu thất bại';
           }
    }
    
}