<?php
require ('./testTools.php');
$dataset = [
    [
        'inputArray'=> [true,false], 
        'countTrue' => 1,
        'countFalse'=> 1,
        'countTotal'=> 2
    ],
    [
        'inputArray'=> [true,true], 
        'countTrue' => 2,
        'countFalse'=> 0,
        'countTotal'=> 2
    ],
];


foreach ($dataset as $row) {
    extract($row);
    $report = reportPassFail($inputArray);
    assertEquals($countTotal, $report['total']);
    assertEquals($countTrue, $report['pass']);

}