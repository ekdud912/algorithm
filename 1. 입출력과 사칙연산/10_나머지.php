// 문제번호 10430 : 나머지

<?php
    fscanf(STDIN,"%d %d %d",$a, $b, $c);
    fprintf(STDOUT,"%d\n",($a+$b)%$c);
    fprintf(STDOUT,"%d\n",(($a%$c) + ($b%$c))%$c);
    fprintf(STDOUT,"%d\n",($a*$b)%$c);
    fprintf(STDOUT,"%d\n",(($a%$c) * ($b%$c))%$c);
?>