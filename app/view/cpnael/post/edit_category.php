<h1 style = "text-align: center;">Sửa danh mục bài viết </h1>
<div class="col-md-3">
    <?php 
    foreach ($categorybyid as $key=>$cate){
        ?>
<form action="<?php echo BASE_URL?>/?url=post/update_category/<?php echo $cate['id_category_post']?>" method="POST">
  <div class="form-group">
    <label for="email">  Tên danh mục </label>
    <input type="text"  value="<?php echo $cate['tittle_category_post']?>" name="edit_tittle_category_post" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd"> Miêu tả danh mục</label>
    <input type="text" value="<?php echo $cate['desc_category_post']?>"name="edit_desc_category_post"class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-default">Sửa danh mục bài viết</button>
</form>
<?php 
}
?>
</div>