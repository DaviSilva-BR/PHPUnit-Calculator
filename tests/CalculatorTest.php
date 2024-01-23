<?php

use App\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calculator = new App\Calculator;
        $result = $calculator->add(20, 5);

        $this->assertEquals(25, $result);
    }

    public function testSubtract()
    {
        $calculator = new App\Calculator;
        $result = $calculator->subtract(30, 5);

        $this->assertEquals(25, $result);
    }

    public function testMultiply()
    {
        $calculator = new App\Calculator;
        $result = $calculator->multiply(2, 5);
        $this->assertEquals(10, $result);
    }

    public function testDivide()
    {
        $calculator = new Calculator;
        $result = $calculator->divide(8, 2);

        $this->assertEquals(4, $result);
    }
}
