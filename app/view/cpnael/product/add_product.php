
<h1 style = "text-align: center;">Thêm sản phẩm </h1>
<div class="col-md-3">
<form action="<?php echo BASE_URL?>/?url=product/insert_product" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Tên sản phẩm </label>
    <input type="text" name="tittle_product" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Miêu tả danh muc</label>
   <textarea type='text' class="form-control" name="desc_product"  cols="30" rows="10"></textarea> 
  </div>
  <div class="form-group">
    <label for="pwd">Gía Sản phẩm</label>
    <input type="text" name="price_product"class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Số lượng sản phẩm</label>
    <input type="text" name="quantity_product"class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Hình ảnh sản phẩm</label>
    <input type="file" name="img_product"class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Danh mục sản phẩm</label>
   <select class="form-control" name="category_product">
    <?php foreach ($category as $key=>$cate){ ?>
   <option value="<?php echo $cate['id_category_product']?>"><?php echo $cate['tittle_category_product']?></option>
     <?php } ?> 
</select>
  </div>
  <div class="form-group">
    <label for="pwd">Sản Phẩm Hot</label>
   <select class="form-control" name="product_hot">
   <option value="0">Không</option>
   <option value="1">Có</option>
   
</select>
  </div>
  
 
  
 
  <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
</form>
</div>
