// 문제번호 10039 : 평균 점수

<?php
    $sum = 0;
    for($i=0; $i<5; $i++) {
        $n = intval(fgets(STDIN));
        if($n < 40) $n = 40;
        $sum += $n;
    }
    echo $sum/5;
?>