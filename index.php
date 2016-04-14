<?php
require_once('results.php');

$dice_type = isset($_GET['d']) ? $_GET['d'] : 6;

$count = isset($_GET['count']) ? $_GET['count'] : 1;

for ($i = 0; $i < $count; $i++) {
  echo get_single_dice_result($dice_type) . "<br/>";
}
