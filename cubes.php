<?
function sumOfCubes($nums) {
 return array_reduce($nums, function($carry, $item) {
  return $carry + pow($item, 3);
 });
}
?>