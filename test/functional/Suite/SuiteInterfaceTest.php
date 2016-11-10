<?php

namespace Dhii\SimpleTest\FuncTest\Suite;

/**
 * Tests {@see \Dhii\SimpleTest\Suite\SuiteInterface}.
 *
 * @since 0.1.0
 */
class SuiteInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
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
     * @since 0.1.0
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\Suite\\SuiteInterface', $subject, 'Subject is not a valid test suite');
    }
}
