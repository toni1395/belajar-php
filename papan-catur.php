<?php

function papan_catur($angka, $kolom) {
// tulis kode di sini
$text1=1;
    echo "<table align=center border=1 cellspacing=0>";
    while ($text1 <= $angka){
        echo "<tr>";
        $y=1;

        while($y <= $kolom){
            if(($x+$y)%2>0)
            echo "<td width=20 height=20 bgcolor=#000000> </td>";
            else
            echo "<td width=20 height=20 bgcolor=#ffffff> </td>";
            $y++;
        }
        echo "</table><br><br>";
        }
 
// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>