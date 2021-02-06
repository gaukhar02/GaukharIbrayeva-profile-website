<?
function leftShift($arr, $num) {
  for ($i = 0; $i < $num; $i++){
    $v = array_shift($arr);
    $arr[] = $v;
  }
  return $arr;
}
​
function rightShift($arr, $num) {
  for ($i = 0; $i < $num; $i++){
    $v = array_pop($arr);
    array_unshift($arr, $v);
  }
  return $arr;
}
?>