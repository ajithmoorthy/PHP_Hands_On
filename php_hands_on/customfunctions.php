<?php
function addition($first,$second) {
    return $first+$second;
}
function multiplication($first,$second) {
    return $first*$second;
}
function subtraction($first,$second) {
    return $first-$second;
}
function division($first,$second) {
    return $first/$second;
}

$add=addition(5, 10);
$sub=subtraction(5, 10);
$mul=multiplication(5, 10);
$div=division(5, 10);
print ("$add $div $mul $sub");