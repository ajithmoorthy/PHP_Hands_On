<?php
$i=4;
$f=1;
while ($i!=0) {
    $f=$f*$i;
    $i--;
}
print($f);
$n=121;
$palind=0;
do {
    $r=$n%10;
    $palind=$palind*10+$r;
    
    $n=$n/10;
 }while ($n>1);
print ($palind);
