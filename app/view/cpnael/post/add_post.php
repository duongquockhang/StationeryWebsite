
<h1 style = "text-align: center;">Thêm bài viết </h1>
<div class="col-md-3">
<form action="<?php echo BASE_URL?>/?url=post/insert_post" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Tên bài viết </label>
    <input type="text" name="tittle_post" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Chi tiết bài viết</label>
   <textarea class="form-control" name="desc_post" rows='10' style ="resize: none"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Hình ảnh sản phẩm</label>
    <input type="file" name="img_post"class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Danh mục bài viết</label>
   <select class="form-control" name="category_post">
    <?php foreach ($category as $key=>$cate){ ?>
   <option value="<?php echo $cate['id_category_post']?>"><?php echo $cate['tittle_category_post']?></option>
     <?php } ?> 
</select>
  </div>
 
  
 
  <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
</form>
</div>
