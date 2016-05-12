<?php

function get_dice_results($dice_type, $count, $sign, $filter_param)
{
  $results = array();
  for ($i = 0; $i < $count; $i++) {
    $results[] = rand(1, $dice_type);
  }
  switch ($sign) {
    case ">":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] <= $filter_param) {
          unset($results[$i]);
        }
      }
      break;
    case ">=":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] < $filter_param) {
          unset($results[$i]);
        }
      }
      break;
    case "<":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] >= $filter_param) {
          unset($results[$i]);
        }
      }
      break;
    case "<=":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] > $filter_param) {
          unset($results[$i]);
        }
      }
      break;
    case "=":
      for ($i = 0; $i < $count; $i++) {
        if ($results[$i] != $filter_param) {
          unset($results[$i]);
        }
      }
      break;
  }

  return $results;
}

function filter_wrapper($dice_type, $count, $trigger, $sign, $filter_param)
{
  $results = get_dice_results($dice_type, $count, $sign, $filter_param);
  if ($trigger == "asc") {
    sort($results);

    return $results;
  } elseif ($trigger == "desc") {
    rsort($results);

    return $results;
  } else {
    return $results;
  }
}

//throw 5 d6 filter >= 4 sort asc
function parser($command_parser)
{
  $elements = explode(" ", $command_parser);
  if (($elements[0] == "throw")) {
    if (is_numeric($elements[1])) {
      $count = $elements[1];
    } else {
      throw new Exception("Задайте к-ть кубів!");
    }
    $d = explode("d", $elements[2]);
    if (is_numeric($d[1])) {
      $dice_type = $d[1];
    } else {
      throw new Exception("Задайте к-ть граней куба!");
    }
    if (empty($elements[3]) == true) {
      $sign = "<";
      $filter_param = "6";
      $trigger = "";
    } else {
      if (($elements[4] == ">") || ($elements[4] == ">=") || ($elements[4] == "<") || ($elements[4] == "<=") || ($elements[4] == "=")) {
        $sign = $elements[4];
      } else {
        throw new Exception("Задайте правильний знак!");
      }
      if (is_numeric($elements[5])) {
        $filter_param = $elements[5];
      } else {
        throw new Exception("Задайте параметр для фільтру!");
      }
      if (empty($elements[6]) == false) {
        $trigger = $elements[7];
      } else {
        $trigger = "";
      }
    }
  } else {
    throw new Exception("Невірна команда!");
  }

  return filter_wrapper($dice_type, $count, $trigger, $sign, $filter_param);
}
