<?php
/**
 * @file
 * Funzioni utili per agevolare i test
 * php version 7.0
 * @author Sarasso Roberto <sarassoroberto@gmail.com>
 */

define('SHOW_PASS_TEST', true);

/**
 * Controlla se un affermazione è corretta
 * 
 * @var    $expected    valore atteso
 * @var    $actual      valore corrente da confrontare  
 * @var    $description descrizione del test
 * @var    $line        linea del dataset a cui appartiene il test 
 * @return void
 *
 */
function assertEquals($expected,$actual,$description = '', $line = null ) 
{
    displayResultCLI($expected, $actual, $description, $line);
};

/**
 * Visualizza il risultato del test via cli
 *
 * @return void
 */
function displayResultCLI($expected,$actual,$description = '', $line = null )
{
    if($expected === $actual && SHOW_PASS_TEST)
    {
        return ''; 
    }

    $result = $expected !== $actual ? 'FAIL' : 'PASS'; 
    echo "\n-----------------------------\n\n";
    echo "$result: $description \n";
    echo "atteso  '$expected' (".gettype($expected).")\n";
    echo "trovato '$actual' (".gettype($actual).")\n";
    echo "line: $line\n";   
}

/**
 * Visualizza il risultato di un test via web
 */
function displayResultWEB($expected,$actual,$description = '', $line = null )
{
    $display = nl2br(displayResultCLI($expected, $actual, $description = '', $line = null));

    ?>
    <div class='card-pass'>
        <?= $display ?>
    </div>
    <?php 
}