<?php

namespace Dhii\SimpleTest\FuncTest\Runner;

/**
 * Tests {@see \Dhii\SimpleTest\Runner\RunnerInterface}.
 *
 * @since [*next-version*]
 */
class RunnerInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Runner\RunnerInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Runner\\RunnerInterface')
                ->getCode()
                ->run()
                ->runAll()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Runner\\RunnerInterface', $subject, 'Subject is not a valid runner');
    }
}
