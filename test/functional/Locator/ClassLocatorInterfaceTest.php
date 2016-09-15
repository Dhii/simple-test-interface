<?php

namespace Dhii\SimpleTest\FuncTest\Locator;

/**
 * Tests {@see \Dhii\SimpleTest\Locator\ClassLocatorInterface}.
 *
 * @since [*next-version*]
 */
class ClassLocatorInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
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
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\Locator\\LocatorInterface', $subject, 'Subject is not a valid locator');
        $this->assertInstanceOf('Dhii\\SimpleTest\\Locator\\ClassLocatorInterface', $subject, 'Subject is not a valid class locator');
    }
}
