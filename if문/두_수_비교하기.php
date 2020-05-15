// 문제번호 1330 : 두 수 비교하기

<?php
    fscanf(STDIN,"%d %d",$a, $b);

    if($a > $b)
        echo ">";
    else if ($a == $b)
        echo "==";
    else if ($a < $b)
        echo "<";
?>