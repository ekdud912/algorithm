// 문제번호 15552 : 빠른 A+B

<?php
    fscanf(STDIN,"%d",$a);
    ob_start();
    for ($i = 0; $i < $a; $i++){
        fscanf(STDIN, "%d %d", $na , $nb);
        echo ($na + $nb)."\n";
    }
    ob_flush();
?>

// 실패... 왜...?