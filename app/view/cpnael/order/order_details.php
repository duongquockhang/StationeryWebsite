<h1 style = "text-align: center;">Liệt kê Đơn Hàng chi tiết</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên người đặt</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Ghi chú</th>
      
      </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        $total=0;
        foreach ($order_info as $key => $ord){
            $total +=$ord['price_product']*$ord['quantity_product'];
            $i++;
        ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $ord['order_name']?></td>
        <td><?php echo $ord['order_email']?></td>
        <td><?php echo $ord['order_phone']?></td>
        <td><?php echo $ord['order_adress']?></td>
        <td><?php echo $ord['order_content']?></td>
      
    <?php
     } 
    ?>
   
    </tbody>
  </table>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lương</th>
        <th>Đơn giá</th>
     
      
      </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        $total=0;
        foreach ($order_details as $key => $ord){
            $total +=$ord['price_product']*$ord['quantity_product'];
            $i++;
        ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $ord['desc_product']?></td>
        <td> <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $ord['img_product']?>" height="100" width="100"></td>
        <td><?php echo $ord['quantity_product']?></td>
        <td><?php echo number_format($ord['price_product'],0,',','.').'VNĐ'?></td>
    
        
      </tr>
    <?php
     } 
    ?>
   <form action="<?php echo BASE_URL?>/?url=order/order_con/<?php echo $ord['order_code']?>" method="POST">
    <tr>
     <td><input type="submit" name="update_order" value="Đã xử lý"></td>
        <td align="right" colspan="6">Tổng tiền:<?php echo number_format($total,0,',','.').'VNĐ'?> </td>
    </tr>
    </form>
    </tbody>
  </table>

