<?php
function ubah_huruf($string){
//kode di sini\
$huruf="abcdefghijklmnopqrstuwxyz";
$hasil ="";
for ($i=0; $i < strlen ($string); $i++){
        $posisi = strrpos ($huruf, $string [$i]);
        $hasil .= substr ($huruf, $posisi+1, 1);
}
    return $hasil;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
    echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
    echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
    echo "<br>";
echo ubah_huruf('keren'); // lfsfo
    echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu
    echo "<br>";

?>