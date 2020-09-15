<?php



$categories = [
    [

    ],



];

$len = count($categories) -1;

for ($j=0; $j < $len; $j++) {
  for ($i=0; $i < $len; $i++) {
    if ($categories[$i]['order'] > $categories[$i + 1]['order']) {

      $tmp = $categories[$i]; //tmp = 8
      $categories[$i] = $categories[$i + 1]; //$arr[1] = $tmp = 8;
      $categories[$i + 1] = $tmp; //$arr[1] = $tmp = 8;
    }
  }
}




























die();
$arr = [1,4,3,7,8,9];

$len = count($arr) -1;

for ($j=0; $j < $len; $j++) {
  for ($i=0; $i < $len; $i++) {
    if ($arr[$i] > $arr[$i + 1]) {

      $tmp = $arr[$i]; //tmp = 8
      $arr[$i] = $arr[$i + 1]; //$arr[1] = $tmp = 8;
      $arr[$i + 1] = $tmp; //$arr[1] = $tmp = 8;
    }
  }
}

print_r($arr);