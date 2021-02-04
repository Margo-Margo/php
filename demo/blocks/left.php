<?php
$baseMenu = ["Главная"=>"/","Форма обратной связи" => "?page=form", "компании"=>"#","Фотогаллерея"=>"?page=gallery","Поисковик"=>"https://google.com","Каталог"=>"?page=prices"];

$menuForNotAuthUser = ["Регистрация"=>"?page=reg","Войти"=>"?page=auth"];
$menuForAuthUser = ["Личный кабинет"=>"?page=cabinet","Выйти"=>"?page=exit","Корзина"=>"?page=cart"];

if(isset($_SESSION['id_user'])){//значит авторизован
    $menu = array_merge($baseMenu,$menuForAuthUser);
}
else{
    $menu = array_merge($baseMenu,$menuForNotAuthUser);
}

    $list = "<ul class=\"navbar-nav\">";
    foreach($menu as $title => $link){
         $list .= "<li class=\"nav-item\"><a class=\"nav-link\" href='$link'>$title</li>";
    }
    $list .= "</ul>";

?>
               

               
               <td style="vertical-align: top" width="15%">
                <h1>Главное меню</h1>
                <?= $list?>
            </td>