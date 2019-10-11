<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json; charset=UTF-8');
  //ini_set("allow_url_fopen", 1);

  // YYYY/MM/DD
  $date = date('Y/m/d', time());
  // 5865 = JAMK Lutakko
  $restaurant = 5865;
  // fi = finnish
  $language = 'fi';

  echo file_get_contents('https://www.sodexo.fi/ruokalistat/output/daily_json/5865/'.$date.'/fi');
  //echo file_get_contents('https://www.sodexo.fi/ruokalistat/output/daily_json/5865/2019/10/11/fi');
?>