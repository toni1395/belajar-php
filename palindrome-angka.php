<?php

    function palindrome ($str){
        $hasil =false;
        if (strrev($str)==$str){
          $hasil = true;
        }
        return $hasil;
    }
function palindrome_angka($angka) {
  // tulis kode di sini
 if($angka >= 1 && $angka <= 8){
   return $angka++;
 }
 if (palindrome($angka)){
   $angka++;
 }
while (palindrome($angka) == false){
  $angka++;
}
return $angka;
}


// TEST CASES
echo palindrome_angka(8); // 9
  echo "<br>";
echo palindrome_angka(10); // 11
  echo "<br>";
echo palindrome_angka(117); // 121
  echo "<br>";
echo palindrome_angka(175); // 181
  echo "<br>";
echo palindrome_angka(1000); // 1001
  echo "<br>";

?>