// 문제번호 9498 : 시험성적

<?php
    fscanf(STDIN,"%d",$a);

    if($a >= 90)
        echo "A";
    else if ($a < 90 && $a >= 80)
        echo "B";
    else if ($a < 80 && $a >= 70)
        echo "C";
    else if ($a < 70 && $a >= 60)
        echo "D";
    else
        echo "F";
?>