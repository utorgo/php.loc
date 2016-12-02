<?php

function calc($x, $y, $operator){
    switch ($operator){
        case '+':
            return $x + $y;
            break;
        case '/':
            return $x / $y;
            break;
        case '-':
            return $x - $y;
            break;
        case '*':
            return $x * $y;
            break;
        default:
            return null;
    }
}

assert(4==calc(2,2,'+'));
assert(2==calc(9,7,'-'));
assert(14==calc(7,2,'*'));
assert(6==calc(12,2,'/'));
?>


