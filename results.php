<?php
function get_dice_results($dice_type, $count) {
  for ($i = 0; $i < $count; $i++) {
    echo "<p> dice " . ($i+1) . " result is "  . rand(1, $dice_type) . "</p><br/>";
  }
}
