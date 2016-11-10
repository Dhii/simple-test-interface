<?php

namespace Dhii\SimpleTest\FuncTest\Locator;

/**
 * Tests {@see \Dhii\SimpleTest\Locator\ClassLocatorInterface}.
 *
 * @since 0.1.0
 */
class ClassLocatorInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
     *
     * @return \Dhii\SimpleTest\Locator\ClassLocatorInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Locator\\ClassLocatorInterface')
                ->setClass()
                ->locate()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Locator\\LocatorInterface', $subject, 'Subject is not a valid locator');
        $this->assertInstanceOf('Dhii\\SimpleTest\\Locator\\ClassLocatorInterface', $subject, 'Subject is not a valid class locator');
    }
}
