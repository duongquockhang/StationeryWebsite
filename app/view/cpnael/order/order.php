<h1 style = "text-align: center;">Liệt kê Đơn Hàng </h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>code đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tình Trạng</th>
        
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i=0;

        foreach ($order as $key => $ord){
            $i++;
        ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $ord['order_code']?></td>
        <td><?php echo $ord['order_date']?></td>
        <td><?php if ($ord['order_status']==0){
            echo 'đơn hàng mới';

        }
        else{
            echo 'đã xử lý';
        }?></td>
        
        <td><a href="<?php echo BASE_URL ?>/?url=order/order_details/<?php echo $ord['order_code']?>">Xem Đơn Hàng</a>
        </td>
      </tr>
    <?php
     } 
    ?>
    
    </tbody>
  </table>

