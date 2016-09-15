<?php

namespace Dhii\SimpleTest\FuncTest\Test;

/**
 * Tests {@see \Dhii\SimpleTest\Test\ResultInterface}.
 *
 * @since [*next-version*]
 */
class ResultInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Test\ResultInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Test\\ResultInterface')
                ->getCaseName()
                ->getMethodName()
                ->getKey()
                ->getSuiteCode()

                ->getStatus()
                ->getTestStatusCodes()
                ->getMessage()
                ->isSuccessful()
                ->getRunnerCode()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\ResultInterface', $subject, 'Subject is not a valid test result');
        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\TestBaseInterface', $subject, 'Subject is not a valid test result');
    }
}
