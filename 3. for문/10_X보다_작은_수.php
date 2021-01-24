// 문제번호 10871 : X보다 작은 수

<?php
    fscanf(STDIN,'%d %d',$n,$x);
    $arr = explode(' ',fgets(STDIN));
    for($i=0; $i<$n; $i++) {
        if( $arr[$i]<$x ) echo $arr[$i].' ';
    }
?>
