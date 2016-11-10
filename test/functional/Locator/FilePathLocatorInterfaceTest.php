<?php

namespace Dhii\SimpleTest\FuncTest\Locator;

/**
 * Tests {@see \Dhii\SimpleTest\Locator\FilePathLocatorInterface}.
 *
 * @since 0.1.0
 */
class FilePathLocatorInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
     *
     * @return \Dhii\SimpleTest\Locator\FilePathLocatorInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Locator\\FilePathLocatorInterface')
                ->locate()
                ->addPath()
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
        $this->assertInstanceOf('Dhii\\SimpleTest\\Locator\\FilePathLocatorInterface', $subject, 'Subject is not a valid file path locator');
    }
}
