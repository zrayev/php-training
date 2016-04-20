<?php

function get_single_dice_result($dice_type) {
  $change = rand(1, $dice_type);
  return $change;
}

function get_dice_results($dice_type, $count, $triger) {
  $results = array();

  for($i = 0; $i < $count; $i++) {
    $results[] = rand(1, $dice_type);
  }

  return $results;
}
