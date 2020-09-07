<?php
function findNeedle($a,$b)
{ if(in_array($b, $a)) {
    echo 1;
}
}

$a=['red','blue','black','yellow'];
$b='blue';
findNeedle($a,$b);
?>