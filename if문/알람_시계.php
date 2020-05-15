// 문제번호 2884 : 알람 시계

<?php
    fscanf(STDIN,"%d %d",$a, $b);

    if($b >= 45) {
        $min = $b-45;
        echo "$a $min";
    }
    else if($a == 0) {
        $clock = $a+23;
        $min = $b+15;
        echo "$clock $min";
    }
    else {
        $clock = $a-1;
        $min = $b+15;
        echo "$clock $min";
    }
?>