<?php
$name = "ryuya";
switch ($name) {
  case "ryuya":
   echo "私は あなたの名前 です";
   break;
   default:
     echo "あなたの名前ではありません";
}
echo "\n";

$total = 0;
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "strawberry", "banana", "grape", "peach",);
foreach($fruits as $fruit ){
    echo $fruit." ";
}
echo "\n";

$start = 1;
$end = 101;
for($i = $start; $i < $end; $i++ ){
  if($i % 5 == 0){
  echo $i;
  echo "\n";
  }
}
