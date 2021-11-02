<?php
class giohang extends DController {
    
    public function __construct(){
        $data = array();
      
        parent::__construct();
    }
    public function index(){
         $this->giohang();
    }
    public function giohang(){
        Session::init();
        $categorymodel=$this->load->model('categorymodel');
        $table_post='tbl_category_post';
        $data['category_post']=$categorymodel->categorypost_home($table_post);
        $table='tbl_category_product';
       
        $data['category']=$categorymodel->category_home($table);
        $this->load->view('header',$data);  
        //   $this->load->view('slider');
        $this->load->view('cart_giohang');
        $this->load->view('footer');  
    }
    public function dathang(){
        Session::init();
        $table='tbl_donhang';
        $table_order_details='tbl_order_details';
        $ordermodel=$this->load->model('ordermodel');
       

        $name=$_POST['hoten'];
        $sodienthoai=$_POST['sodienthoai'];
        $diachi=$_POST['diachi'];
        $email=$_POST['email'];
        $noidung=$_POST['noidung'];
        $order_code=rand(0,9999);
        date_default_timezone_set('asia/ho_chi_minh');
        $date = date("d/m/Y");
        $hour= date("h:i:sa");
        $order_date=  $date.$hour;
        $data_order = array(
            'order_status'=>'đơn hàng mới',
            'order_code'=>$order_code,
            'order_date'=>$date.''.$hour


        );
        $result_order=$ordermodel->insert_order($table,$data_order);
        if(Session::get("shopping_cart")==true){
           foreach(Session::get("shopping_cart") as $key => $value){
            $data = array(
                'order_code'=> $order_code,
                'product_id'=>$value['product_id'],
                'product_quantity'=>$value['product_quantity'],
                'order_name'=> $name,
                'order_phone'=>$sodienthoai,
                'order_adress'=>$diachi,
                'order_email'=>$email,
                'order_content'=>$noidung
               
            );
        //     echo '<pre>';
        //     print_r(   $data );
        // echo '</pre>';
        // die();
            $result_order_details=$ordermodel->insert_order_details($table_order_details,$data);
           }
           unset($_SESSION["shopping_cart"]);
           header("Location:".BASE_URL."/?url=giohang");
        }
    }
   public function themgiohang(){
       Session::init();
    //    Session::destroy();
      if(isset($_SESSION["shopping_cart"])){
           $avaiable=0;
        foreach($_SESSION["shopping_cart"] as $key =>$value){
            if($_SESSION["shopping_cart"][$key]['product_id']==$_POST['product_id']){
                $avaiable++;
                $_SESSION["shopping_cart"][$key]['product_quantity'] =$_SESSION["shopping_cart"][$key]['product_quantity']+$_POST['product_quantity'];
            }
           
           }
        
        if ($avaiable==0){
            $item = array(
                'product_id' =>$_POST['product_id'],
                'product_tittle' =>$_POST['product_tittle'],
                'product_price' =>$_POST['product_price'],
                'product_img' =>$_POST['product_img'],
                'product_quantity' =>$_POST['product_quantity']
                
            );
            $_SESSION['shopping_cart'][]=$item;

        }
       }
       else{
            $item = array(
                'product_id' =>$_POST['product_id'],
                'product_tittle' =>$_POST['product_tittle'],
                'product_price' =>$_POST['product_price'],
                'product_img' =>$_POST['product_img'],
                'product_quantity' =>$_POST['product_quantity']
                
            );
            $_SESSION['shopping_cart'][]=$item;
       }
       header("Location:".BASE_URL."/?url=giohang");  
   }
   public function updategiohang(){
    Session::init();
    if(isset($_POST["delete_cart"])){
        if(isset($_SESSION["shopping_cart"])){
            foreach($_SESSION["shopping_cart"] as $key =>$value){
                if($value['product_id']==$_POST['delete_cart']){
                    unset($_SESSION["shopping_cart"][$key]);
                }
            }
            header("Location:".BASE_URL."/?url=giohang");
        }
            else{
                header("Location:".BASE_URL);
            }
        
    
    }
    else{
        foreach($_POST['qty'] as $key =>$qty){
            foreach($_SESSION['shopping_cart'] as $session =>$values){
                if($values['product_id']==$key  ){
                    $_SESSION['shopping_cart'][$session]['product_quantity']=$qty;
                }
                
            }
           
        }
        header("Location:".BASE_URL."/?url=giohang");
    }
}
}