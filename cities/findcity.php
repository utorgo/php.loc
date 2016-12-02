<?php

require __DIR__.'/cities.php';

function  findCity($cities, $firstLetter){
    $firstLetter = mb_strtoupper($firstLetter);
    $i = 0;

    while ($i< count($cities) && !(mb_substr($cities[$i],0,1,'utf8')==$firstLetter)){
        $i++;
    }
    return $cities[$i];
}


assert('Абинск'== findCity($cities,'А'));
assert('Белореченск'== findCity($cities,'Б'));
assert('Геленджик'== findCity($cities,'Г'));
assert('Темрюк'== findCity($cities,'Т'));
assert('Усть-Лабинск'== findCity($cities,'У'));

assert('Абинск'== findCity($cities,'а'));
assert('Белореченск'== findCity($cities,'б'));
assert('Геленджик'== findCity($cities,'г'));
assert('Темрюк'== findCity($cities,'т'));
assert('Усть-Лабинск'== findCity($cities,'у'));

?>