<?php
function get_single_dice_result($dice_type,$min) {
  $result=rand(1,$dice_type);
  return ($result>=$min) ? $result : ' ' ;
}
