<?php

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
//を渡すとその要素をすべてかけた結果を返す関数を作成してください

function multipleArray($array) {
  
  $result = 1;
  
  foreach($array as $arr){
    $result *= $arr;
  }
  return $result;
}
echo multipleArray(array(1, 3, 5 ,7, 9));
echo "\n";