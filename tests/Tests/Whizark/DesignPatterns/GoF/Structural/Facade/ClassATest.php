<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Facade;

use Whizark\DesignPatterns\GoF\Structural\Facade\ClassA;

/**
 * Class ClassATest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Facade
 */
class ClassATest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $classA = new ClassA();
        $classA->doSomething();
    }
}
