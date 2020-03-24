<?php
$a=10;
$b=5;
if($a==$b){
    echo "hello";
}
else if($b==5 && $b<=$a){
    echo "hello world";
}

$c=$a+$b;
$sub=$a-$b;
$div=$a/$b;
$mul=$a*$b;



print_r("\n ADD=$c SUB=$sub MUL=$mul DIV=$div");