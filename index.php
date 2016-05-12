<?php

//calculation functions
require_once('results.php');
if (!empty($_POST)) {
  $command_parser = $_POST['command_parser'];
  include_once('show_results.php');
} else {
  include_once('main.php');
}
