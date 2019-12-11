<?php
function sum($max){
  $result = 0;
  for($i = 1; $i <= $max; $i++){
  $result += $i;
 }
return $result;
}
echo sum(100);
echo "\n";

function x2($num){
return  $num * 2;
}
echo x2(3);
echo "\n";

function w2($a, $b){
return $a + $b; 
}
echo w2(2, 2);

$arr = arry(1, 3, 5, 7, 9);
function ar($arr1){
  $result = 1;
  foreach($arr1 as $num ){
    $result = $num * $result;
  }
  return $result;
}
echo ar($arr);