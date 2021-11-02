<?php 
// if (!empty($_GET['msg'])){
//     $msg = $_GET['msg'];
//     foreach($msg as $key => $value){
//         echo $value;
//     }
// }



?>

<h1 style = "text-align: center;">Thêm danh mục sản phẩm </h1>
<div class="col-md-3">
<form action="<?php echo BASE_URL?>/?url=product/insert_category" method="POST">
  <div class="form-group">
    <label for="email">Tên danh mục </label>
    <input type="text" name="tittle_category_product" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Miêu tả danh mục</label>
    <input type="text" name="desc_category_product"class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-default">Thêm danh mục</button>
</form>
</div>