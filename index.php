<?php
//calculation functions
require_once('results.php');

$dice_type = isset($_GET['facet']) ? $_GET['facet'] : 6;//количество граней куба
$min_value = isset($_GET['min_value']) ? $_GET['min_value'] : 1;//Минимальное значение для вывода
$count = isset($_GET['throw']) ? $_GET['throw'] : 0;//Количество бросков

include_once('main.php');
