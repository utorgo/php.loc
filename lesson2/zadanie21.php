<?php
/**
 * Created by PhpStorm.
 * User: upt
 * Date: 25.11.2016
 * Time: 15:17
 */
$a = '01';
$b = '01';

function andTable($operandOne, $operandTwo){
        return ($operandOne && $operandTwo);
}

assert(andTable(true, true) == true);
assert(andTable(true, false) == false);
assert(andTable(false, true) == false);
assert(andTable(false, false) == false);

function orTable($operandOne, $operandTwo){
    return ($operandOne || $operandTwo);
}

assert(orTable(true, true) == true);
assert(orTable(true, false) == true);
assert(orTable(false, true) == true);
assert(orTable(false, false) == false);

function xorTable($operandOne, $operandTwo){
    return ($operandOne xor $operandTwo);
}

assert(xorTable(true, true) == false);
assert(xorTable(true, false) == true);
assert(xorTable(false, true) == true);
assert(xorTable(false, false) == false);


for ($cntA = 0; $cntA < strlen($a); $cntA++ ){
    for ($cntB = 0; $cntB < strlen($b); $cntB++)
    {
        echo xorTable((bool)$a[$cntA], (bool)$b[$cntB]);
        //echo $b[$cntB];
    }
    echo '</br>';
}