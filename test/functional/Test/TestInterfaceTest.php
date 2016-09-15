<?php

namespace Dhii\SimpleTest\FuncTest\Test;

/**
 * Tests {@see \Dhii\SimpleTest\Test\TestInterface}.
 *
 * @since [*next-version*]
 */
class TestInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Test\TestInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Test\\TestInterface')
                ->getCaseName()
                ->getMethodName()
                ->getKey()
                ->getSuiteCode()

                ->setSuiteCode()
                ->new();

        return $mock;
    }

    /**
     * Tests that a class implementing this interface can be instantiated.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\TestInterface', $subject, 'Subject is not a valid test');
    }
}
