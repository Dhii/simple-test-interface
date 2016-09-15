<?php

namespace Dhii\SimpleTest\FuncTest;

/**
 * Tests {@see \Dhii\SimpleTest\ExceptionInterface}.
 *
 * @since [*next-version*]
 */
class ExceptionInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
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
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\ExceptionInterface', $subject, 'Subject is not a valid Dhii SimpleTest exception');
    }
}
