<?php 
   foreach ($detail_product as $key=> $product){
      // $name=$product['tittle_category_product'];
      $name_product=$product['tittle_product'];
      $name_category_product=$product['tittle_category_product'];
      $id_cate = $product['id_category_product'];
   }
   ?>
<section>
   <?php 
      foreach ($detail_product as $key=> $detail){ ?>
       <form action="<?php echo BASE_URL?>/?url=giohang/themgiohang" method="POST">
              <input type="hidden" name="product_id" value="<?php echo $detail['id_product']?>">  
              <input type="hidden" name="product_tittle" value="<?php echo $detail['tittle_product']?>">  
              <input type="hidden" name="product_img" value="<?php echo $detail['img_product']?>">  
              <input type="hidden" name="product_price" value="<?php echo $detail['price_product']?>">  
              <input type="hidden" name="product_quantity" value="1">  
   <div class="bg_in">
      <div class="wrapper_all_main">
         <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
            <div class="breadcrumbs">
               <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL?>">
                     <span itemprop="name">Trang chủ</span></a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL?>/?url=sanpham/danhmuc/<?php echo $id_cate?>">
                     <span itemprop="name"><?php echo $name_category_product ?></span></a>
                     <meta itemprop="position" content="2" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <span itemprop="item">
                     <strong itemprop="name">
                     <?php echo $name_product ?>
                     </strong>
                     </span>
                     <meta itemprop="position" content="3" />
                  </li>
               </ol>
            </div>
            <div class="content_page">
               <div class="content-right-items margin0">
                  <div class="title-pro-des-ct">
                     <h1> <?php echo $name_product ?></h1>
                  </div>
                  <div class="slider-galery ">
                     <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="http://localhost/Vanphongpham/public/uploads/product/<?php echo $detail['img_product']?>" width="100%">
                        </div>
                        
                     </div>
                     <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="http://localhost/Vanphongpham/public/uploads/product/<?php echo $detail['img_product']?>" width="100%">
                        </div>
                     
                       
                       
                     </div>
                  </div>
                  <div class="content-des-pro">
                     <div class="content-des-pro_in">
                        <div class="pro-des-sum">
                           <div class="price">
                              <p class="code_skin" style="margin-bottom:10px">
                                 <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                              </p>
                              <div class="status_pro">
                                 <span><b>Trạng thái:</b>  Còn hàng</span>
                              </div>
                              <div class="status_pro"><span><b>Xuất xứ:</b>  Việt Nam</span></div>
                           </div>
                           <div class="color_price">
                              <span class="title_price bg_green">Giá bán</span><?php echo number_format($detail['price_product'],0,',','.').'VNĐ'?>. (GIÁ CHƯA VAT)
                              <div class="clear"></div>
                           </div>
                           <!-- <div class="color_price">
                              <span class="title_price">Giá cũ</span> 
                              <del> <span>vnđ</span></del>
                              </div> -->
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="content-pro-des">
                        <div class="content_des">
                           <p style="font-size: 16px;font-weight: bold;"><?php echo $detail['desc_product']?></p>
                           <br />
                        </div>
                     </div>
                     <div class="ct">
                        <div class="number_price">
                           <div class="custom pull-left">
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                              <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                              <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                        </div>
                        <div class="wp_a">
                        <input type="submit" style="box-shadow: none"  class="btn btn-success" name="addcart" value="Đặt Hàng">
                           <a href="tel:090 66 99 038" class="view_duan">
                           <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                           </a>
                           <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="tags_products prodcut_detail">
                        <div class="tab_link">
                           <h3 class="title_tab_link">TAGS: </h3>
                           <div class="content_tab_link"> <a href="tag/"></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="content-des-pro-suport">
                     <div class="box-setup">
                        <div class="title-setup">
                           <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                        </div>
                        <div class="info-setup">
                           <div class="row-setup">
                              <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                              <p><span style="color:#d50100">0932 023 992</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                           </div>
                        </div>
                     </div>
                     <div class="info-prod prod-price freeship">
                        <span class="title">
                           <p>
                              <!-- <img alt="chuyển hàng miễn phí tại thietbivanphong123.com" src="/data/upload/ship-hang-mien-phi.png" style="height:33px; width:60px" /> --> Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.
                           </p>
                        </span>
                        <span class="row more"><a href="" title="">Xem thêm</a>
                        </span>
                     </div>
                     <div class="bx-contact">
                        <span class="title-cnt">Bạn cần hỗ trợ?</span> 
                        <p>Chat với chúng tôi :</p>
                        <p><img alt="icon skype " src="image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <p><img alt="icon skype " src="image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <p><img alt="icon skype " src="image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                        <!--<div class="sup-item item1">
                           <div>
                           
                            <span class="title-support">Chat với chúng tôi:</span>
                           
                            <div class="icon-support">
                           
                              <span class="icon-chat">
                           
                              <a href="." target="_blank" title="Chat We">
                           
                                <img src="template/Default/img/skp.png" height="30" style="float:left; margin-right:5px;"/>  Mr.Quang
                           
                              </a></span>
                           
                           
                           
                            </div>
                           
                           </div>
                           
                           </div>
                           
                           <div class="sup-item item2">
                           
                           Góp ý, khiếu nại: (8h00 - 17h30)
                           
                           <span class="sub-item hanoi row"><i class="fa fa-caret-right fa-lg"></i>TP HCM:
                           
                           <span class="phone-number"><a href="tel:0906699 038">090 66 99 038</a></span>
                           
                           </span>
                           
                           <span class="sub-item hcm row"><i class="fa fa-caret-right fa-lg"></i>TP HCM: <span class="phone-number"><a href="tel:0909802038" >0909 80 20 38</a></span></span>
                           
                           </div>
                           
                           <div class="sup-item item3">Email: 
                           
                           <a class="email-text" href="mailto:thietbivanphong.123corp@gmail.com" title="Email hỗ trợ"><font color="#0092db">thietbivanphong.123corp@gmail.com</font></a></div>
                           
                           -->
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
         <div class="wrapper_all_main_right">
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="dmsub">
               <div class="tags_products desktop">
                  <div class="tab_link">
                     <h3 class="title_tab_link">TAGS: </h3>
                     <div class="content_tab_link"> 
                        <a href="tag/">Iphone x</a>
                        <a href="tag/">Iphone 10</a>
                        <a href="tag/">Iphone 11</a>
                        <a href="tag/">Iphone Like New</a>
                     </div>
                  </div>
               </div>
            </div>
      </form>
            <?php }?>
            <!-- <div class="content-brank">
               <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
               </div> -->
            <div class="module_pro_all">
               <div class="box-title">
                  <div class="title-bar">
                     <h3>Sản phẩm liên quan</h3>
                  </div>
               </div>
               <?php 
                         foreach ($related as $key=> $relate){ ?>
                           <form action="<?php echo BASE_URL?>/?url=giohang/themgiohang" method="POST">
                              <input type="hidden" name="product_id" value="<?php echo $relate['id_product']?>">  
                              <input type="hidden" name="product_tittle" value="<?php echo $relate['tittle_product']?>">  
                              <input type="hidden" name="product_img" value="<?php echo $relate['img_product']?>">  
                              <input type="hidden" name="product_price" value="<?php echo $relate['price_product']?>">  
              <input type="hidden" name="product_quantity" value="1">  
               <div class="pro_all_gird">
            
                  <div class="girds_all list_all_other_page ">
                  
                     <div class="grids">
                        <div class="grids_in">
                           <div class="content">
                              <div class="img-right-pro">
                                 <a href="sanpham.php">
                                 <img class="lazy img-pro content-image" src="http://localhost/Vanphongpham/public/uploads/product/<?php echo $relate['img_product']?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW">
                                 </a>
                                 <div class="content-overlay"></div>
                                 <div class="content-details fadeIn-top">
                                    <ul class="details-product-overlay">
                                       <li><?php echo $relate['desc_product'] ?></li>
                                      
                                    </ul>
                                 </div>
                              </div>
                              <div class="name-pro-right">
                                 <a href="<?php echo BASE_URL?>/?url=sanpham/chitietsanpham/<?php echo $relate['id_product']?>">

                                    <h3><?php echo $relate['tittle_product'] ?></h3>
                                 </a>
                              </div>
                              <div class="add_card">
                              <input type="submit" style="box-shadow: none" class="btn btn-success" name="addcart" value="Đặt Hàng">
                              </div>
                              <div class="price_old_new">
                                 <div class="price">
                                    <span class="news_price"><?php echo number_format($relate['price_product'],0,',','.').'VNĐ'?> </span>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                         </form>
                      <?php }?>
              
                  
                   
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
         <!--end:left-->
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
   
   <script>
      jQuery(document).ready(function() {
      
      
      
          var div_fixed = jQuery('.product_detail_info').offset().top;
      
          jQuery(window).scroll(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              } else {
      
                  jQuery('.tabs-animation').removeClass('fix_top');
      
              }
      
          });
      
          jQuery(window).load(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              }
      
          });
      
      });
      
   </script>
</section>
