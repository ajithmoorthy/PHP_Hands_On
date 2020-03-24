<?php
$fruits=array('apple','orange','mango');
sort($fruits);
foreach ($fruits as $fruit){
    echo "$fruit \n";
}

rsort($fruits);

foreach ($fruits as $fruit){
    echo strtoupper($fruit),"\n";
    echo sha1($fruit),"\n";
}