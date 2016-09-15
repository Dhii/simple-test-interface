<?php

namespace Dhii\SimpleTest\FuncTest\Suite;

/**
 * Tests {@see \Dhii\SimpleTest\Suite\SuiteInterface}.
 *
 * @since [*next-version*]
 */
class SuiteInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Suite\SuiteInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Suite\\SuiteInterface')
                ->getCode()
                ->addTest()
                ->addTests()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Suite\\SuiteInterface', $subject, 'Subject is not a valid test suite');
    }
}