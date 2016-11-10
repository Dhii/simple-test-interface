<?php

namespace Dhii\SimpleTest\FuncTest\Runner;

/**
 * Tests {@see \Dhii\SimpleTest\Runner\RunnerInterface}.
 *
 * @since 0.1.0
 */
class RunnerInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
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
     * @since 0.1.0
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\Runner\\RunnerInterface', $subject, 'Subject is not a valid runner');
    }
}
