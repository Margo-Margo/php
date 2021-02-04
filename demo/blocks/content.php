<td style="vertical-align: top;text-align:center;">
    <?php
    switch($_GET['page']){
        case 'form':
            include "pages/form.php";
            break;
        case 'guestbook':
            include "pages/guestbook.php";
            break;

       case 'gallery':
            include "pages/gallery.php";
            break;
         case 'auth':
            include "pages/auth.php";
            break;
            
         case 'add_good':
             include "pages/admin/add_good.php";
             break;
        case 'edit_good':
            include "pages/admin/edit_good.php";
            break;
         case 'prices':
            include "pages/prices.php";
            break;
         case 'good':
             include "pages/good.php";
             break;
       case 'reg':
            include "pages/reg.php";
            break;
       case 'details_order':
           include "pages/admin/detail_order.php";
           break;
       case 'cart':
            include "pages/cart.php";
            break;
       case 'cabinet':
            include "pages/cart.php";
            break;
            
       case 'edit_orders':
           include "pages/admin/orders.php";
           break;
       case 'exit':
           unset($_SESSION['user_id']);
           session_destroy();
           $_SESSION = null;
          
            
            echo "<h1>Вы успешно вышли из системы</h1><br>";
            echo "<a type=\"button\" class=\"btn btn-warning mt-4\" href='index.php'>Перейти на главную</a>";
            break;
        default:
            include "pages/prices.php";
    }
?>




</td>