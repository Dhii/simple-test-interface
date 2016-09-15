<?php

namespace Dhii\SimpleTest\FuncTest\Test;

/**
 * Tests {@see \Dhii\SimpleTest\Test\TestBaseInterface}.
 *
 * @since [*next-version*]
 */
class TestBaseInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Test\TestBaseInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Test\\TestBaseInterface')
                ->getCaseName()
                ->getMethodName()
                ->getKey()
                ->getSuiteCode()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\TestBaseInterface', $subject, 'Subject is not a valid test base');
    }
}
