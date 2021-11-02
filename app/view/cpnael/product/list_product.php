<h1 style = "text-align: center;">Liệt kê sản phẩm </h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Gía sản phẩm  </th>
        <th>Mô tả</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Danh mục</th>
        <th>Sản phẩm hot</th>
        <th>Quản lý</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
        $i=0;

        foreach ($product as $key => $pro){
            $i++;
        ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $pro['tittle_product']?></td>
        <td><?php echo $pro['price_product']?></td>
        <td><?php echo $pro['desc_product']?></td>
        <td><?php echo $pro['quantity_product']?></td>
        
        <td><img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $pro['img_product']?>" height="100" width="100"> </td>
        <td><?php echo $pro['tittle_category_product']?></td>
        <td><?php
         if ($pro['product_hot']==0){
          echo 'không có';
         }
         else{
          echo 'Sản phẩm hot';  
         }?>
         </td>
        <td><a href="<?php echo BASE_URL ?>/?url=product/delete_product/<?php echo $pro['id_product']?>">Xóa</a>
        ||<a href="<?php echo BASE_URL ?>/?url=product/edit_product/<?php echo $pro['id_product']?>">Cập nhật</a></td>
      </tr>
    <?php
     } 
    ?>
    
    </tbody>
  </table>