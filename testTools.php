<?php

function assertEquals($expected,$actual,$description = '',$line = NULL){
    if($expected !== $actual){
        echo "FAIL: $description \n";
        echo "atteso  '$expected' (".gettype($expected).")\n";
        echo "trovato '$actual' (".gettype($actual).")\n\n";
        return true;
    }else{
        return false;
    }
};