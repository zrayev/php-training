<?php

  $dice_type = isset($_GET['facet']) ? $_GET['facet'] : 6;//количество граней куба
  $min_value = isset($_GET['min_value']) ? $_GET['min_value'] : 1;//Минимальное значение для вывода
  $count = isset($_GET['throw']) ? $_GET['throw'] : 0;//Количество бросков
  $restriction = isset($_GET['restriction']) ? $_GET['restriction'] : false;//Тригер

function get_single_dice_result( $min_value, $dice_type, $restriction) {
  if (!$restriction){//стандартная логика
    return rand($min_value, $dice_type);
  }else {//Подключение логики с репозитория https://github.com/ElderPhoenix/php-training/blob/logic/php-training/results.php
    $number = rand(1, $dice_type);
    if ($number > 3){
      return $number;
    } else {
      return $message = "7";//Возращаемое значения если тригер активен
    }
  }
}

?>