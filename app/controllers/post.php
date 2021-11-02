<?php
class post extends DController{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->add_category();
       
    }
    public function add_category(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        
        $this->load->view('cpnael/post/add_category');
        $this->load->view('cpnael/footer');
    }
    public function insert_category(){
       
       $title = $_POST['tittle_category_post'];
       $desc = $_POST['desc_category_post'];
       $table= 'tbl_category_post';
       $data= array(
           'tittle_category_post' =>  $title,
           'desc_category_post'=>$desc
       );
       $categorymodel= $this->load->model('categorymodel');
       $result= $categorymodel->insertcategory_post($table,$data); 
      if($result == 1){
         
        header("Location:".BASE_URL."/?url=post/list_category");
      }
      else{
     
        
      }
  
}
   public function list_category(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        $table= 'tbl_category_post';
        $categorymodel= $this->load->model('categorymodel');
        $result= $categorymodel->post_category($table); 
        $data['category']=$categorymodel->post_category($table);
        $this->load->view('cpnael/post/list_category',$data);
        $this->load->view('cpnael/footer');
       
    }
    public function delete_category($id){
        $table= 'tbl_category_post';
        $cond = "id_category_post=$id";
        $categorymodel= $this->load->model('categorymodel');
        $result= $categorymodel->post_deletecategory($table,$cond); 
        if($result==1){
            header("Location:".BASE_URL."/?url=post/list_category");
           }
           else{
            echo 'Xóa dữ liệu thất bại';
           }
    }
    public function edit_category($id){
        $table= 'tbl_category_post';
        $cond = "id_category_post=$id";
        $categorymodel= $this->load->model('categorymodel');
        $data['categorybyid']=$categorymodel->post_categorybyid($table,$cond);
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        
        $this->load->view('cpnael/post/edit_category',$data);
        $this->load->view('cpnael/footer');
      
    }
    public function update_category($id){
        $table= 'tbl_category_post';
        $cond = "id_category_post='$id'";
        $title = $_POST['edit_tittle_category_post'];
        $desc = $_POST['edit_desc_category_post'];
        $data= array(
            'tittle_category_post' =>  $title,
            'desc_category_post'=>$desc
        );
        $categorymodel= $this->load->model('categorymodel');
        $result=$categorymodel->post_updatecategory($table,$data,$cond);
        if($result==1){
            header("Location:".BASE_URL."/?url=post/list_category");
           }
           else{
            echo 'Xóa dữ liệu thất bại';
           }
    }
    public function add_post(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        $postmodel= $this->load->model('postmodel');
        $table= 'tbl_category_post';
        $data['category']=$postmodel->post_category($table);
        $this->load->view('cpnael/post/add_post',$data);
        $this->load->view('cpnael/footer');
    }
    public function insert_post(){
        
        $title = $_POST['tittle_post'];
        $price = $_POST['desc_post'];
        $img = $_FILES['img_post']['name'];
        $tmp_img = $_FILES['img_post']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $unique_image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/post/".$unique_image;
        
        $category = $_POST['category_post'];
        $table= 'tbl_post';
        $data= array(
            'tittle_post' =>  $title,
            'content_post'=>$price,
            'img_post' =>  $unique_image,
            'id_category_post'=>$category
        );
        $postmodel= $this->load->model('postmodel');
        $result= $postmodel->insertpost($table,$data); 
    if($result == 1){
        move_uploaded_file($tmp_img,$path_uploads);
        header("Location:".BASE_URL."/?url=post/list_post");
    }
    else{
    
        header("Location:".BASE_URL."/?url=index");
    }
    }
    public function list_post(){
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
        $table= 'tbl_post';
        $table_post='tbl_category_post';  
        $postmodel= $this->load->model('postmodel');
        $result= $postmodel->post($table,$table_post); 
        $data['post']=$postmodel->post($table,$table_post);
        $this->load->view('cpnael/post/list_post',$data);
        $this->load->view('cpnael/footer');
}
public function delete_post($id){
    $table= 'tbl_post';
    $cond = "id_post=$id";
    $postmodel= $this->load->model('postmodel');
    $result= $postmodel->deletepost($table,$cond); 
    if($result==1){
        header("Location:".BASE_URL."/?url=post/list_post");
       }
       else{
        echo 'Xóa dữ liệu thất bại';
       }
}
public function edit_post($id){
    $table= 'tbl_post';
    $table_post= 'tbl_category_post';
    $cond = "id_post=$id";
    $postmodel= $this->load->model('postmodel');
    $data['postbyid']=$postmodel->postbyid($table,$cond);
    $data['category']=$postmodel->post_category($table_post);
    
    $this->load->view('cpnael/header');
    $this->load->view('cpnael/menu');
    
    $this->load->view('cpnael/post/edit_post',$data);
    $this->load->view('cpnael/footer');
    // header("Location:".BASE_URL."/?url=product/list_category");
}
public function update_post($id){
    $table= 'tbl_post';
    $postmodel= $this->load->model('postmodel');
    $cond = "id_post='$id'";

    $title = $_POST['tittle_post'];
    $desc = $_POST['desc_post']; 
    $img = $_FILES['img_post']['name'];
    $tmp_img = $_FILES['img_post']['tmp_name'];
    $div = explode('.',$img);
    $file_ext = strtolower(end($div));
    $unique_image= $div[0].time().'.'.$file_ext;
    $path_uploads="public/uploads/post/".$unique_image;
    $category = $_POST['category_post'];
   
    if($img){ 
        $data['postbyid']=$postmodel->postbyid($table,$cond);          
        foreach($productbyid as $key => $value){
            $path_unlink="public/uploads/post";
           
                unlink($path_unlink.$value['img_post']);              
        }          
        $data= array(
        'tittle_post' =>  $title,
        'content_post' =>  $desc,
        'img_post' =>  $unique_image,
        'id_category_post'=>$category
    );
    move_uploaded_file($tmp_img,$path_uploads);
    }else{
        $data= array(
            'tittle_post' =>  $title,   
            'content_post' =>  $desc,        
            'id_category_post'=>$category
        );
        
    }
    $result=$postmodel->updatepost($table,$data,$cond);
    if($result==1){
        header("Location:".BASE_URL."/?url=post/list_post");
       }
       else{
        echo 'Xóa dữ liệu thất bại';
       }
}


}
?>