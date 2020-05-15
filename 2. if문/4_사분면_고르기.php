// 문제번호 14681 : 사분면 고르기

<?php
    fscanf(STDIN,"%d",$a);
    fscanf(STDIN,"%d",$b);
    if($a > 0 && $b > 0)
        echo "1";
    else if($a > 0 && $b < 0)
        echo "4";
    else if($a < 0 && $b < 0)
        echo "3";
    else if($a < 0 && $b > 0)
        echo "2";
?>