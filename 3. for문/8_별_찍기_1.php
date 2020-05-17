// 문제번호 2438 : 별 찍기 -1

<?php
    fscanf(STDIN,"%d",$a);
    ob_start();
    for($i = 1; $i <= $a; $i++) {
        for($j = 1; $j <= $i; $j++)
            echo "*";
        echo "\n";
    }
    ob_flush();
?>

* 참고 *
ob_start();
- 출력 버퍼링을 켜는 PHP 명령어
- 출력 버퍼링이 켜져 있는 동안 헤더를 제외한 스크립트의 모든 출력을 내부 버퍼에 저장하며 실제 전송하지 않는다.