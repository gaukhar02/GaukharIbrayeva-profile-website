<?
function reverseImage($image)
{
    $length = 0;
    $emptyStr = "";
    $emptyList = [];

    foreach ($image as $i) {
        foreach ($i as $x)
            if ($x == 1)
                $emptyStr .= "0";
            else $emptyStr .= "1";
        $length = count($i);
    }

    for ($count = 0; $count < strlen($emptyStr); $count += $length)
    {
        $result = str_split(substr($emptyStr, $count, $length));
        array_push($emptyList, array_map("intval", $result));
    }
    return $emptyList;
}?>