// 문제번호 11022 : A+B -8

<?php
    fscanf(STDIN,"%d",$a);

    for ($i = 1; $i <= $a; $i++){
        fscanf(STDIN, "%d %d", $numa , $numb);
        printf("Case #".$i.": ".$numa." + ".$numb." = ".($numa+$numb)."\n");
    }
?>