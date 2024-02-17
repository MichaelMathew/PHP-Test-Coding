<?php
$rndinteger = [random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)];

function max_second(){
    global $rndinteger;

    $maxpertama = max($rndinteger);
    $index = array_search($maxpertama,$rndinteger);
    unset($rndinteger[$index]);
    return max($rndinteger);
}

print_r($rndinteger);
echo "<br>";

print(max_second());
?>