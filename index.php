<?php
require_once('results.php');

$dice_type = isset($_GET['d']) ? $_GET['d'] : 6;

$count = isset($_GET['count']) ? $_GET['count'] : 7;

$min = isset($_GET['min']) ? $_GET['min'] : 3;

for ($i = 0; $i < $count; $i++) {
  $result=get_single_dice_result($dice_type);
  if($result>=$min)
  echo  $result . "<br/>";
}
