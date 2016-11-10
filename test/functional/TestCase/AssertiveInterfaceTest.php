<?php

namespace Dhii\SimpleTest\FuncTest\TestCase;

/**
 * Tests {@see \Dhii\SimpleTest\TestCase\AssertiveInterface}.
 *
 * @since 0.1.0
 */
class AssertiveInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
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
     * @since 0.1.0
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\TestCase\\AssertiveInterface', $subject, 'Subject is not a valid assertive test case');
    }
}
