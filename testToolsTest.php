<?php

require ('./testTools.php');

$dataset = [
    [true,true,__LINE__],
    ['ciao','ciao',__LINE__],
    ['ciao','ciao_',__LINE__]

];

$testResult = [];
foreach ($dataset as $row) {
    list($expected,$actual,$line) = $row;
    $testResult[] = assertEquals($expected, $actual, '', $line);
}
reportPassFail($testResult);