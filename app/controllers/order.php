<?php
class order extends DController{
    public function __construct(){
        parent::__construct();
        Session::checkSession();
    }
    public function index(){
        $this->order();
    }
    public function order(){
        $ordermodel = $this->load->model('ordermodel');
        $table_order="tbl_donhang";
        $data["order"]= $ordermodel->list_order($table_order);
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
       
        $this->load->view('cpnael/order/order',$data);
        $this->load->view('cpnael/footer');
    }
    public function order_details($order_code){
        $ordermodel = $this->load->model('ordermodel');
        $table_order_details="tbl_order_details";
        $table_product="tbl_product";
        $cond="$table_product.id_product=$table_order_details.product_id AND $table_order_details.order_code='$order_code'";
        $cond_info="$table_order_details.order_code='$order_code'";
       $data['order_details']= $ordermodel->list_order_details($table_product,$table_order_details,$cond);
       $data['order_info']= $ordermodel->list_info($table_product,$table_order_details,$cond_info);
        $this->load->view('cpnael/header');
        $this->load->view('cpnael/menu');
       
        $this->load->view('cpnael/order/order_details',$data);
        $this->load->view('cpnael/footer');
    }
    public function order_con($order_code){
        $ordermodel = $this->load->model('ordermodel');
        $table_order="tbl_donhang";
        $cond="$table_order.order_code='$order_code'";
        $data=array(
            "order_status"=> 1
        );
        $sama['order_details'] = $ordermodel->order_confirm($table_order,$data,$cond);
       
        header("Location:".BASE_URL."/?url=order");
      }
}
?>