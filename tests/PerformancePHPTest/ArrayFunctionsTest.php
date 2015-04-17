<?php


namespace PerformancePHPTest;


use PerformancePHP\ArrayFunctions;

class ArrayFunctionsTest extends \PHPUnit_Framework_TestCase
{
    public function testNotEmpty()
    {
        $array = new ArrayFunctions();
        $time = $array->functionNotEmpty();

        var_dump(__METHOD__ . ' => ' . $time);

        $this->assertTrue(true);
    }

    public function testCount()
    {
        $array = new ArrayFunctions();
        $time = $array->functionCount();

        var_dump(__METHOD__ . ' => ' . $time);

        $this->assertTrue(true);
    }

    public function testCastBool()
    {
        $array = new ArrayFunctions();
        $time = $array->functionCastBool();

        var_dump(__METHOD__ . ' => ' . $time);

        $this->assertTrue(true);
    }


}
