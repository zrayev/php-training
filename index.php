<?php
require_once('results.php');

$dice_type = isset($_GET['d']) ? $_GET['d'] : 6;

$count = isset($_GET['count']) ? $_GET['count'] : 1;

get_dice_results($dice_type = 6, $count = 1);
