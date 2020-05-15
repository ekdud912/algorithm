// 문제번호 2588 : 곱셈

<?php
    fscanf(STDIN,"%d",$a);
    fscanf(STDIN,"%d",$b);
    $str = preg_split('//u', $b, null, PREG_SPLIT_NO_EMPTY);
    for($i = 2; $i >= 0; $i--){
        print_r($a*$str[$i]);
        echo "\n";
    }
    printf($a*$b);
?>