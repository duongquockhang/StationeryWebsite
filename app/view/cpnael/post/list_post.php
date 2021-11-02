<h1 style = "text-align: center;">Liệt kê bài viết </h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên bài viết</th>
        <th>Chi tiết bài viết</th>
        <th>Hình ảnh</th>
        <th>Danh mục</th>
        <th>Quản lý</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
        $i=0;

        foreach ($post as $key => $post){
            $i++;
        ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $post['tittle_post']?></td>
        <td><?php echo $post['content_post']?></td>
        <td><img src="<?php echo BASE_URL?>/public/uploads/post/<?php echo $post['img_post']?>" height="100" width="100"> </td>
        <td><?php echo $post['tittle_category_post']?></td>
        <td><a href="<?php echo BASE_URL ?>/?url=post/delete_post/<?php echo $post['id_post']?>">Xóa</a>
        ||<a href="<?php echo BASE_URL ?>/?url=post/edit_post/<?php echo $post['id_post']?>">Cập nhật</a></td>
      </tr>
    <?php
     } 
    ?>
    
    </tbody>
  </table>