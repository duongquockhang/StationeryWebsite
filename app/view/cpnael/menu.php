<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo BASE_URL?>/?url=login/dashboard">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Danh Mục Bài viết
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo BASE_URL?>/?url=post/add_category">Thêm</a></li>
          <li><a href="<?php echo BASE_URL?>/?url=post/list_category">Liệt Kê</a></li>
         
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bài viết
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="<?php echo BASE_URL?>/?url=post/add_post">Thêm</a></li>
          <li><a href="<?php echo BASE_URL?>/?url=post/list_post">Liệt Kê</a></li>
         
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh Mục Sản Phẩm
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="<?php echo BASE_URL?>/?url=product/add_category">Thêm</a></li>
          <li><a href="<?php echo BASE_URL?>/?url=product/list_category">Liệt Kê</a></li>
         
        </ul>
      </li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản Phẩm
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="<?php echo BASE_URL?>/?url=product/add_product">Thêm</a></li>
          <li><a href="<?php echo BASE_URL?>/?url=product/list_product">Liệt Kê</a></li>
         
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Đơn hàng
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
          <li><a href="<?php echo BASE_URL?>/?url=order/index">Liệt Kê</a></li>
         
        </ul>
      </li>
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo BASE_URL?>/?url=login/logout">Đăng xuất</a>
    </div>
      
    </ul>
  </div>
</nav>