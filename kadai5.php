<?php

// 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
// strip_tags
// array_push
// array_merge
// time, mktime
// date


// strip_tags
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text) . "\n";

// array_push
$scores = [30, 40, 50];

array_push($scores,60,70) ;
print_r($scores);

// array_merge
$a = [3, 4, 8];
$b = [4, 8, 12];

$merged = array_merge($a, $b);
print_r($merged);


// time, mktime
echo time() . "\n";
echo date('Y-m-d l', mktime(0, 0, 0, 2, 20, 2021)) . "\n";

// date
echo date('Y-m-d l',time()) . "\n";