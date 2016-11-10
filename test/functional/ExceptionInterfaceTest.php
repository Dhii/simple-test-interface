<?php

namespace Dhii\SimpleTest\FuncTest;

/**
 * Tests {@see \Dhii\SimpleTest\ExceptionInterface}.
 *
 * @since 0.1.0
 */
class ExceptionInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
     *
     * @return \Dhii\SimpleTest\ExceptionInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\ExceptionInterface')
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\ExceptionInterface', $subject, 'Subject is not a valid Dhii SimpleTest exception');
    }
}
