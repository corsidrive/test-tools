<?php
/**
 * @file
 * Funzioni utili per agevolare i test
 * php version 7.0
 * @author Sarasso Roberto <sarassoroberto@gmail.com>
 */


/**
 * Controlla se un affermazione è corretta
 * 
 * @var    $expected valore atteso
 * @var    $actual valore da controllare
 * @var    $description eventuale descrizione del test
 * @var    $line
 * @return void
 */
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