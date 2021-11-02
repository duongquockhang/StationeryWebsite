<?php 
   foreach ($detail_post as $key=> $post){
      // $name=$product['tittle_category_product'];
      $name_post=$post['tittle_post'];
      $name_category_post=$post['tittle_category_post'];
      $id_cate = $post['id_category_post'];
   }
   ?>
<section>

   <div class="bg_in">
   <div class="wrapper_all_main">
   
   <div class="breadcrumbs">
               <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL?>">
                     <span itemprop="name">Trang chủ</span></a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL?>/?url=tintuc/danhmuc/<?php echo $id_cate?>">
                     <span itemprop="name"><?php echo $name_category_post ?></span></a>
                     <meta itemprop="position" content="2" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <span itemprop="item">
                     <strong itemprop="name">
                     <?php echo $name_post ?>
                     </strong>
                     </span>
                     <meta itemprop="position" content="3" />
                  </li>
               </ol>
            </div>
      <!--breadcrumbs-->
      <?php foreach ($detail_post as $key=> $post){ ?> 
      <div class="content_page">
         <div class="box-title">
            <div class="title-bar">
               <h1><?php echo $post['tittle_post'] ?></h1>
            </div>
         </div>
         <div class="content_text">
           <p><?php echo $post['content_post']?> </p>
         </div>
         <div class="clear"></div>
      </div>
      <?php } ?>
   </div>
   <div class="module_pro_all">
   <div class="box-title">
      <div class="title-bar">
         <h3>Bài Viết Liên Quan</h3>
      </div>
   </div>
   <div class="pro_all_gird">
   <div class="girds_all list_all_other_page ">
  <?php foreach ($related as $key=>$relate){?>
      <div class="grids">
         <div class="grids_in">
            <div class="content">
               <div class="img-right-pro">
                  <a href="<?php echo BASE_URL?>/?url=tintuc/chitiettin/<?php echo $relate['id_post']?>">
                  <img class="lazy img-pro content-image" src="<?php echo BASE_URL?>/public/uploads/post/<?php echo $relate['img_post'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                  </a>
                
               </div>
               <div class="name-pro-right">
                  <a href="<?php echo BASE_URL?>/?url=tintuc/chitiettin/<?php echo $relate['id_post']?>">
                     <h3><?php echo $relate['tittle_post']?></h3> 
                  </a>
               </div>
               <div class="add_card">
                  <a onclick="return giohang(579);">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                  </a>
               </div>
               <div class="price_old_new">
                  <div class="price">
                     <span class="news_price"></span>
                  </div>
               </div>
            </div>
         </div>
         <!--start:left-->
         <div class="wrapper_all_main_left">
         </div>
         <!--end:left-->
         <div class="clear"></div>
      </div>
      <?php }?>
      <div class="clear"></div>
   </div>
</section>