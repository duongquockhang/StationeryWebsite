<h1 style = "text-align: center;">Liệt kê danh mục sản phẩm </h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả </th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i=0;

        foreach ($category as $key => $cate){
            $i++;
        ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $cate['tittle_category_product']?></td>
        <td><?php echo $cate['desc_category_product']?></td>
          <td><a href="<?php echo BASE_URL ?>/?url=product/delete_category/<?php echo $cate['id_category_product']?>">Xóa</a>
          ||<a href="<?php echo BASE_URL ?>/?url=product/edit_category/<?php echo $cate['id_category_product']?>">Cập nhật</a></td>
      </tr>
    <?php
     } 
    ?>
    
    </tbody>
  </table>