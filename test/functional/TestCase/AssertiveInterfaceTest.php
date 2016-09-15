<?php

namespace Dhii\SimpleTest\FuncTest\TestCase;

/**
 * Tests {@see \Dhii\SimpleTest\TestCase\AssertiveInterface}.
 *
 * @since [*next-version*]
 */
class AssertiveInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\TestCase\AssertiveInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\TestCase\\AssertiveInterface')
                ->beforeTest()
                ->afterTest()

                ->setAssertionMaker()
                ->assert()
                ->assertTrue()
                ->assertFalse()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\TestCase\\AssertiveInterface', $subject, 'Subject is not a valid assertive test case');
    }
}
