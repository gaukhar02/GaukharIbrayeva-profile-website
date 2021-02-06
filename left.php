<?
function leftShift($arr, $num) {
 $num = $num % sizeof($arr);
​
$shifted=array();
 for($i=0;$i<sizeof($arr);$i++){
  $index=$i-$num;
  if($index<0)$index=$index+sizeof($arr);
  $shifted[$index]=$arr[$i];
 }
 ksort($shifted);
 return $shifted;
}
​
function rightShift($arr, $num) {
 $num = $num % sizeof($arr);
​
$shifted=array();
 for($i=0;$i<sizeof($arr);$i++){
  $index=$i+$num;
  if($index>=sizeof($arr))$index=$index-sizeof($arr);
  $shifted[$index]=$arr[$i];
 }
 ksort($shifted);
 return $shifted;
}
?>