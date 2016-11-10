<?php

namespace Dhii\SimpleTest\FuncTest\TestCase;

/**
 * Tests {@see \Dhii\SimpleTest\TestCase\CaseInterface}.
 *
 * @since 0.1.0
 */
class CaseInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
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
     * @since 0.1.0
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\TestCase\\CaseInterface', $subject, 'Subject is not a valid test case');
    }
}
