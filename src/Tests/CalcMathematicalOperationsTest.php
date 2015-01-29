<?php

/**
 * Description of CalcMathematicalOperationsTest
 * class para operações básicas de matemática
 * @author Isael Sousa <faelp22@hotmail.com>
 */
class CalcMathematicalOperationsTest extends PHPUnit_Framework_TestCase {

    protected $calc;

    public function setUp() {
        $this->calc = new \Calc\Calc();
    }

    public function calcSomar($expected, $a, $b) {
        $this->assertEquals($expected, $this->calc->somar($a, $b));
    }

    public function calcSubtrair($expected, $a, $b) {
        $this->assertEquals($expected, $this->calc->subtrair($a, $b));
    }
    
    public function calcMultiplicar($expected, $a, $b) {
        $this->assertEquals($expected, $this->calc->multiplicar($a, $b));
    }
    
    public function calcDividir($expected, $a, $b) {
        $this->assertEquals($expected, $this->calc->dividir($a, $b));
    }

    public function testSomaNumm() {
        $this->calcSomar(2, 1, 1);
        $this->calcSomar(3, 2, 1);
        $this->calcSomar(1, 2, -1);
    }

    public function testSubtrairNumm() {
        $this->calcSubtrair(1, 2, 1);
        $this->calcSubtrair(9, 10, 1);
        $this->calcSubtrair(3, 2, -1);
    }
    
    public function testMultiplicarNumm() {
        $this->calcMultiplicar(2, 2, 1);
        $this->calcMultiplicar(10, 10, 1);
        $this->calcMultiplicar(-2, 2, -1);
    }
    
    public function testDividirNumm() {
        $this->calcDividir(2, 2, 1);
        $this->calcDividir(5, 10, 2);
        $this->calcDividir(-2, 2, -1);
        $this->calcDividir(2, 2, 0);
        $this->calcDividir(0, 0, 2);
    }
}
