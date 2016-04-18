<?php

function get_single_dice_result($dice_type) {
  $change = rand(1, $dice_type);
  return $change;
}
