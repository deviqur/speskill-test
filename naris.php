<?php

function narcissistic($number){
$arrnum=str_split($number);
$cek=0;
foreach($arrnum as $num){
    $cek += pow($num,count($arrnum));
}
if ($number == $cek){
    echo "true";
}else{
    echo "false";
    }
}

narcissistic(153);
narcissistic(111);
?>