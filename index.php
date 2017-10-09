
<?php

$revertArray = ["first" => "olleH",
                "wrong" => "dlroW", "dlroW", "hsiniF"];

krsort($revertArray);
array_shift($revertArray);
$array2 = array_unique($revertArray);
arsort($array2);

foreach ($array2 as $item => $value)
{
   $array2[$item] = strrev($value);
}

print_r($array2);

?>
 