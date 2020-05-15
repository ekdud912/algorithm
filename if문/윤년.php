// 문제번호 2753 : 윤년

<?php
    fscanf(STDIN,"%d",$a);

    if( ( ($a%4) == 0 && ($a%100) != 0 ) || ($a%400) == 0)
        echo "1";
    else
        echo "0";
?>