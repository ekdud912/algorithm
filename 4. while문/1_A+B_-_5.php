// 문제번호 10952 : A+B -5

<?php
    while(1) {
        fscanf(STDIN,'%d %d',$a,$b);
        if($a==0 && $b==0)
            break;
        echo ($a+$b)."\n";
    }
?>