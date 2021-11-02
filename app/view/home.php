
<section>
        <div class="bg_in">
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm HOT</h1>
                        <a class="read_more" href="<?php echo BASE_URL?>/?url=sanpham/sanphamhot">
                  Xem thêm
                  </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                    <div class="girds_all list_all_other_page ">
                        
            <?php foreach ($product as $key => $cate){
                if($cate['product_hot']==1){
                ?>
              <form action="<?php echo BASE_URL?>/?url=giohang/themgiohang" method="POST">
              <input type="hidden" name="product_id" value="<?php echo $cate['id_product']?>">  
              <input type="hidden" name="product_tittle" value="<?php echo $cate['tittle_product']?>">  
              <input type="hidden" name="product_img" value="<?php echo $cate['img_product']?>">  
              <input type="hidden" name="product_price" value="<?php echo $cate['price_product']?>">  
              <input type="hidden" name="product_quantity" value="1">  
            <div class="grids">
               <div class="grids_in" >
                  <div class="content">
                     <div class="img-right-pro">
                        <a href="sanpham.php">
                           <!-- src="http://localhost/Vanphongpham/public/uploads/product/21629085056.jpg" -->
                        <img class="lazy img-pro content-image" src="http://localhost/Vanphongpham/public/uploads/product/<?php echo $cate['img_product']?>" data-original="image/iphone.png" alt="<?php echo $cate['tittle_product']?>" />
                        </a>
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                           <ul class="details-product-overlay">
                             <li> <?php echo $cate['desc_product']?></li>
                           </ul>
                        </div>
                     </div>
                     <div class="name-pro-right">
                        <a href="<?php echo BASE_URL?>/?url=sanpham/chitietsanpham/<?php echo $cate['id_product']?>">
                           <h3><?php echo $cate['tittle_product']?></h3>
                        </a>
                     </div>
                  
                        <div>
                        <a>
                      
                        <input type="submit" style="box-shadow: none;margin-top:5%" class="btn btn-success" name="addcart" value="Đặt Hàng">
                        </a>
                        </div>
                     <div class="price_old_new">
                        <div class="price" style ='text-align:center; margin-left:20px'>
                           <span  class="news_price"><?php echo number_format($cate['price_product'],0,',','.').'VNĐ'?></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                </form>
       <?php  
                }
    } ?>
                     
                       
                      
                      

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php foreach ($category as $key => $cate){
                 ?>
               
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar"> 
                  
                        <h1><?php echo $cate['tittle_category_product']?></h1>
                        <a class="read_more" href="<?php echo BASE_URL?>/?url=sanpham/danhmuc/<?php echo $cate['id_category_product']?>">
                  Xem thêm
                  </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                  <?php 
                   foreach ($product as $key => $pro_cate){
                    if($cate['id_category_product']==$pro_cate['id_category_product']){
                  
                  ?>
                   <form action="<?php echo BASE_URL?>/?url=giohang/themgiohang" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $pro_cate['id_product']?>">  
                        <input type="hidden" name="product_tittle" value="<?php echo $pro_cate['tittle_product']?>">  
                        <input type="hidden" name="product_img" value="<?php echo $pro_cate['img_product']?>">  
                        <input type="hidden" name="product_price" value="<?php echo $pro_cate['price_product']?>">  
                        <input type="hidden" name="product_quantity" value="1">  
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="sanpham.php">
                                            <img class="lazy img-pro content-image" src="http://localhost/Vanphongpham/public/uploads/product/<?php echo $pro_cate['img_product'] ?>" data-original="http://localhost/Vanphongpham/public/images/mac.jpg" alt="Máy in Canon MF229DW" />
                                        </a>

                                        <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top">
                                            <ul class="details-product-overlay">
                                                <li><?php echo $pro_cate['desc_product'] ?></li>
                                               

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?php echo BASE_URL ?>/?url=sanpham/chitietsanpham/<?php echo $pro_cate['id_product']?> ">
                                            <h3><?php echo $pro_cate['tittle_product']?></h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                    <input type="submit" style="box-shadow: none" class="btn btn-success" name="addcart" value="Đặt Hàng">
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price"><?php echo number_format($pro_cate['price_product'],0,',','.').'VNĐ'?></span>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </form>
                     <?php 
                    }
                }
                    ?>
                      
                        
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
           
            <?php 
          
        }?>
    </section>
    <!--end:body-->
    