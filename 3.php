<?php
$warna = ["merah", "kuning", "hijau"];
$index = 2;

function traffict(){
    global $warna;
    global $index;
    $index ++;
    return $warna[$index%3];
}

for ($i=0; $i < 99; $i++) { 
    print("lampu " . traffict());
    echo "<br>";
}
?>