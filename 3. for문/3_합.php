// 문제번호 8393 : 합

<?php
    fscanf(STDIN,"%d",$a);
    $sum = 0;
    for($i = 1; $i <= $a; $i++)
        $sum = $sum + $i;
    printf($sum);
?>