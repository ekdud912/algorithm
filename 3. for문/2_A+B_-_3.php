// 문제번호 10950 : A+B -3

<?php
    fscanf(STDIN,"%d",$a);

    for ($i = 1; $i <= $a; $i++){
        fscanf(STDIN, "%d %d", $numa , $numb);
        printf($numa + $numb."\n");
    }
?>