<?php

require_once '../vendor/autoload.php';

echo '<h2>Teste Operaciona das class FizzBuzz e Calc</h2>';

$fizbuzz = new tdd\FizzBuzz();
echo 'Teste FizzBuzz <br />';
for ($i = 1; $i <= 16; $i++):
    $result = $fizbuzz->check($i);
    echo $i .'='.$result;
    echo '<br />';
endfor;
echo 'end Teste FizzBuzz <br /><br />';

$calc = new Calc\Calc();

echo 'Teste Calculadora <br />';
echo '2 + 2 = '.$calc->somar(2, 2).'<br />';
echo '2 - 2 = '.$calc->subtrair(2, 2).'<br />';
echo '2 * 2 = '.$calc->multiplicar(2, 2).'<br />';
echo '2 / 2 = '.$calc->dividir(2, 2).'<br />';
echo 'end Teste Calculadora <br /><br />';