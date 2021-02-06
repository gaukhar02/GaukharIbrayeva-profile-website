<?
function noOdds($arr)
{
  return array_filter($arr, function ($num) {
    return $num % 2 == 0;
  });
}
?>