<?php

namespace Dhii\SimpleTest\FuncTest\TestCase;

/**
 * Tests {@see \Dhii\SimpleTest\TestCase\CaseInterface}.
 *
 * @since [*next-version*]
 */
class CaseInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\TestCase\CaseInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\TestCase\\CaseInterface')
                ->beforeTest()
                ->afterTest()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\TestCase\\CaseInterface', $subject, 'Subject is not a valid test case');
    }
}
