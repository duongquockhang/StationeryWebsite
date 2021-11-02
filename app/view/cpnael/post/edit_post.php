
<h1 style = "text-align: center;">Cập nhật bài viết </h1>
<div class="col-md-3">
  <?php foreach ($postbyid as $key => $post) {?>
<form action="<?php echo BASE_URL?>/?url=post/update_post/<?php echo $post['id_post']?>"  method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Tên bài viết </label>
    <input type="text" value="<?php echo $post['tittle_post']?>" name="tittle_post" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Mô tả bài viết</label>
    <input type="text" value="<?php echo $post['content_post']?>" name="desc_post"class="form-control" >
  </div>
 
  <div class="form-group">
    <label for="pwd">Hình ảnh bài viết</label>
    <input type="file" name="img_post"class="form-control" >
    <p> <img src="<?php echo BASE_URL?>/public/uploads/post/<?php echo $post['img_post']?>" height="100" width="100"></p>
  </div>
  <div class="form-group">
    <label for="pwd">Danh mục bài viết</label>
   <select class="form-control"  value="<?php echo $pro['id_category_post']?>" name="category_post">
    <?php foreach ($category as $key=>$cate){ ?>
   <option <?php if($cate['id_category_post']==$post['id_category_post']) {echo 'selected';} ?> 
   value="<?php echo $cate['id_category_post']?>"><?php echo $cate['tittle_category_post']?></option>
     <?php } ?> 
</select>
  </div>

  <button type="submit" class="btn btn-default">Cập nhật bài viết</button>
</form>
<?php } ?>
</div>
