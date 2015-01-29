<?php
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fizzbuzz;
    public function setUp()
    {
        $this->fizzbuzz = new tdd\FizzBuzz();
    }
    public function fizzbuzz($expected, $number)
    {
        $this->assertEquals($expected, $this->fizzbuzz->check($number));
    }
    public function testNumm()
    {
        $this->fizzbuzz(1, 1);
        $this->fizzbuzz(2, 2);
        $this->fizzbuzz(4, 4);
        $this->fizzbuzz(7, 7);
        $this->fizzbuzz(8, 8);
        $this->fizzbuzz(11, 11);
        
        
    }
    
    public function testFizz()
    {
        $this->fizzbuzz("fizz", 3);
        $this->fizzbuzz("fizz", 9);
        $this->fizzbuzz("fizz", 27);
    }
    
    public function testBuzz()
    {
        $this->fizzbuzz("buzz", 5);
        $this->fizzbuzz("buzz", 20);
        $this->fizzbuzz("buzz", 40);
    }
    
    public function testFizzBuzz()
    {
        $this->fizzbuzz("fizzbuzz", 15);
        $this->fizzbuzz("fizzbuzz", 30);
        $this->fizzbuzz("fizzbuzz", 45);
    }
}