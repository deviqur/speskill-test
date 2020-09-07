<?php 
function blueocean($a1,$a2){
$result = array_diff($a1, $a2);   
print_r($result);
}
$a1=[1,2,3,4,5,6,10];
$a2=[1];
blueocean($a1,$a2);
?>