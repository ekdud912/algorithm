// 문제번호 10871 : X보다 작은 수

<?php
    fscanf(STDIN,'%d %d',$n,$x);
    $arr = explode(' ',fgets(STDIN));
    for($i=0; $i<$n; $i++) {
        if( $arr[$i]<$x ) echo $arr[$i].' ';
    }
?>

* 참고 *
ob_start();
- 출력 버퍼링을 켜는 PHP 명령어
- 출력 버퍼링이 켜져 있는 동안 헤더를 제외한 스크립트의 모든 출력을 내부 버퍼에 저장하며 실제 전송하지 않는다.