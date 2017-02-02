<?php
//Файл test.xml содержит XML-документ с корневым элементом
//и, по крайней мере, элемент /[root]/title.

if (file_exists(__DIR__.'/1cbitrix/import.xml')) {
	$xml = simplexml_load_file(__DIR__.'/1cbitrix/import.xml');

	print_r($xml->Каталог->Товары->Товар[10]);
} else {
	exit('Не удалось открыть файл /1cbitrix/import.xml.');
}
?>






	