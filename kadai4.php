<?php

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す
//max_array という関数を実装しようとしています。途中の部分を完成させてください

 function max_array($arr) {
  $max_number = $arr[0];
 
 foreach($arr as $a) {
  if ($max_number < $a) {
   $max_number = $a;
  }
 }
 
 return $max_number;
 
 }
 
// echo max_array(array(6, 2, 3, 10, 5));