<?php 
// if (!empty($_GET['msg'])){
//     $msg = $_GET['msg'];
//     foreach($msg as $key => $value){
//         echo $value;
//     }
// }



?>

<h1 style = "text-align: center;">Thêm danh mục bài viết </h1>
<div class="col-md-3">
<form action="<?php echo BASE_URL?>/?url=post/insert_category" method="POST">
  <div class="form-group">
    <label for="email">Tên danh mục </label>
    <input type="text" name="tittle_category_post" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Miêu tả danh mục</label>
    <input type="text" name="desc_category_post"class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-default">Thêm danh mục bài viết</button>
</form>
</div>