<?php 

/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/

function sum($a=1,$b=2){
        return $a+$b;    
    }

function diff($a=1,$b=2){
        return $a-$b;    
    }

function mult($a=1,$b=2){
        return $a*$b;    
    }

function div($a=1,$b=2){
        return $a/$b;    
    }

//echo div(15,4);


/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
и вернуть полученное значение (использовать switch).*/

function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
      case "+":
        return sum();

      case "-":
        return diff();

      case "*":
        return mult();

      case "/":
        return div();

      default: 
        echo "Введены неверные параметры";
  
    }
}



echo mathOperation($a, $b, " ");

?>