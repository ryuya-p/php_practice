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

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function x2($num){
return  $num * 2;
}
echo x2(3);
echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function w2($a, $b){
return $a + $b; 
}
echo w2(2, 2);

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
$arr = array(1, 3, 5, 7, 9);
function ar($arr1){
  $result = 1;
  foreach($arr1 as $num ){
    $result = $num * $result;
  }
  return $result;
}
echo ar($arr);

// 4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
$arr = array(8, 4, 5, 7, 9);
function max_array($array_1){
 $max_number = $array_1[0];
 foreach($array_1 as $a){
if ($max_number < $a){
  $max_number = $a;
}
 }
return $max_number;
}
echo max_array($arr);
echo "\n";

//strip_tags — 文字列から HTML および PHP タグを取り除く
$text = "<p>タグを</p><a>取り除きます</a>";
echo strip_tags($text);
echo "\n";

//array_push — 一つ以上の要素を配列の最後に追加する
$fruits = ["apple","orange"];
array_push($fruits,"banana","peach");
print_r($fruits);
echo "\n";

//array_merge — ひとつまたは複数の配列を結合する
$array1 = [1, 5, 7];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";

//mktime — 日付をタイムスタンプとして取得する
$timestamp = mktime(14, 0, 0, 12, 13, 2019);
echo "今日の14時のタイムスタンプ" .$timestamp;
echo "\n";

//date — ローカルの日付/時刻を書式化する
echo date("Y/m/d G:i:s");