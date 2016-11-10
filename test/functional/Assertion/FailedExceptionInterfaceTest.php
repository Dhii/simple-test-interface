<?php

namespace Dhii\SimpleTest\FuncTest\Assertion;

/**
 * Tests {@see \Dhii\SimpleTest\Assertion\FailedExceptionInterface}.
 *
 * @since 0.1.0
 */
class FailedExceptionInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
     *
     * @return \Dhii\SimpleTest\Assertion\FailedExceptionInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Assertion\\FailedExceptionInterface')
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Assertion\\FailedExceptionInterface', $subject, 'Subject is not a valid failed exception');
    }
}
