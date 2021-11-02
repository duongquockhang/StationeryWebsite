
<h1 style = "text-align: center;">Cập nhật sản phẩm </h1>
<div class="col-md-3">
  <?php foreach ($productbyid as $key => $pro) {?>
<form action="<?php echo BASE_URL?>/?url=product/update_product/<?php echo $pro['id_product']?>"  method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Tên sản phẩm </label>
    <input type="text" value="<?php echo $pro['tittle_product']?>" name="tittle_product" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Mô tả sản phẩm</label>
   <textarea name="desc_product" class="form-control" type="text" cols="30" rows="10" style=" resize: none;" ><?php echo $pro['desc_product']?></textarea> 
  </div>
  <div class="form-group">
    <label for="pwd">Gía Sản phẩm</label>
    <input type="text"  value="<?php echo $pro['price_product']?>" name="price_product"class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Số lượng sản phẩm</label>
    <input type="text"  value="<?php echo $pro['quantity_product']?>" name="quantity_product"class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Hình ảnh sản phẩm</label>
    <input type="file" name="img_product"class="form-control" >
    <p> <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $pro['img_product']?>" height="100" width="100"></p>
  </div>
  <div class="form-group">
    <label for="pwd">Danh mục sản phẩm</label>
   <select class="form-control"  value="<?php echo $pro['id_category_product']?>" name="category_product">
    <?php foreach ($category as $key=>$cate){ ?>
   <option <?php if($cate['id_category_product']==$pro['id_category_product']) {echo 'selected';} ?> 
   value="<?php echo $cate['id_category_product']?>"><?php echo $cate['tittle_category_product']?></option>
     <?php } ?> 
</select>
  </div>
  <div class="form-group">
    <label for="pwd">Sản Phẩm Hot</label>
   <select class="form-control" name="product_hot">
     <?php if ($pro['product_hot'] ==0){ ?>
      <option selected value="0">Không</option>
      <option value="1">Có</option>
    <?php }else{ ?>
      <option value="0">Không</option>
      <option selected value="1">Có</option>

    <?php }?>
   

</select>
  </div>

  <button type="submit" class="btn btn-default">Cập nhật sản phẩm</button>
</form>
<?php } ?>
</div>
