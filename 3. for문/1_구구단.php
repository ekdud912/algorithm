// 문제번호 2739 : 구구단

<?php
    fscanf(STDIN,"%d",$a);

    for($i = 1; $i <= 9; $i++)
        printf("$a * $i = ".$a*$i."\n");
?>