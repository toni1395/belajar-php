<?php

function palindrome ($str){
    $hasil =false;
    if (strrev($str)==$str){
      $hasil = true;
    }
    return $hasil;
}
function tukar_besar_kecil($string){
// tulis kode di sini
if($string >= 1 && $atring <= 8){
return $string++;
}
if (palindrome($srtring)){
$string++;
}
while (palindrome($string) == false){
$string++;
}
return $string;
}


// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>