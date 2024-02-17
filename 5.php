<form method="get">
    <input type="text" name="string">
    <input type="submit">
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
$str = filter_input(INPUT_GET,'string');


function countMostChar($string){
    $len = strlen($string);

    $arr = array();

    for ($i=0; $i < $len ; $i++) {
        $char = $string[$i]; 
        if(!array_key_exists($char,$arr)){
            for ($j=0; $j < $len ; $j++) { 
                if($char == $string[$j]){
                    $arr[$char]++;
                }                
            }
        }
    }
    $jumlah_karakter = max($arr);
    return [array_search($jumlah_karakter,$arr),$jumlah_karakter];
}

$hasil = countMostChar($str);
echo $hasil[0] . "" . $hasil[1] . "x";
?>