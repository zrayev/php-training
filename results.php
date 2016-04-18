<?php

function get_single_dice_result($min,$dice_type){
    $change = rand(1,$dice_type);
    if ($change >= $min){
      return $change;
	}
}
