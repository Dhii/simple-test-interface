<?php

namespace Dhii\SimpleTest\FuncTest\Tester;

/**
 * Tests {@see \Dhii\SimpleTest\Tester\TesterInterface}.
 *
 * @since [*next-version*]
 */
class TesterInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Tester\TesterInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Tester\\TesterInterface')
                ->addSuite()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Tester\\TesterInterface', $subject, 'Subject is not a valid tester');
    }
}
