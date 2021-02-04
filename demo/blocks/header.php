<?php
 $baseMenu = ["Главная"=>"/","Каталог"=>"?page=prices","Фотогалерея"=>"?page=gallery","Поисковик"=>"https://yandex.ru","Отзывы" => "?page=guestbook","Контакты" => "?page=form"];

 $menuForNotAuthUser = ["Регистрация"=>"?page=reg","Войти"=>"?page=auth"];
 $menuForAuthUser = ["Личный кабинет"=>"?page=cabinet","Выйти"=>"?page=exit"];
 $cartForAuthUser = ["Корзина"=>"?page=cart"];

 if(isset($_SESSION['id_user'])){//значит авторизован
     $menu = array_merge($baseMenu,$menuForAuthUser);
     $cart = array_merge($cartForAuthUser);
 }
 else{
     $menu = array_merge($baseMenu,$menuForNotAuthUser);
 }

 $list = "<ul class=\"navbar-nav\">";
 foreach($menu as $title => $link){
     $list .=  "<li class=\"nav-item\"><a class=\"nav-link\" href='$link'>$title</a></li>";
 }
 $list .= "</ul>";


 if(is_array($cart)){
 foreach ($cart as $cartTitle => $cartLink) {
     $cartList .=  "<a class=\"btn btn-outline-warning my-2 my-sm-0 cart-button\" href='$cartLink'>$cartTitle</a>";
   }
 }

 ?>





 <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <div class="container">
         <a class="navbar-brand" href="index.php">
             <img src="images/content/online-shop.png" width="90" height="90" class="d-inline-block align-top" alt=""
                  loading="lazy">

         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse " id="navbarNav">
             <?= $list?>
         </div>
         <?php
         if(isset($_SESSION['id_user'])){
             echo "$cartList";
         }
        ?>
     </div>
 </nav>
