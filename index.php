<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanphongpham</title>
</head>
<body>
  <div class="container">
    <?php
    spl_autoload_register(function($class){
        include_once('system/lba/'.$class.'.php');
       
    });
    include_once('app/config/config.php');
    // include('public/template/css/style.css');
    $main = new Main();
  

    // $url= ( isset($_GET['url']) ) ? $_GET ['url'] : NULL;
    // if($url!=NULL){
    //     $url= rtrim($url,'/');
    //     $url= explode("/",filter_var($url,FILTER_SANITIZE_URL));
    // }else{
    //     unset($url);
    // }
    // if(isset($url[0])){
    //     // $url[0] = str_replace('.php','',$url[0]);
    //     include_once('app/controllers/'.$url[0].'.php');
    //     $ctrl = new $url[0]();

    //     if (isset($url[2])){
    //         $ctrl->{$url[1]}($url[2]);
    //     }
    //     else{
    //         if(isset($url[1])){
    //             $ctrl->{$url[1]}();
    //         }
    //         else{
               
    //         }
    //     }
    // } 
    // else{
    //     include_once('app/controllers/index.php');
    //     $index = new index();
    //     $index->homepage ();
       
       
    // }
    
     ?>
   
    </div>
</body>
</html>