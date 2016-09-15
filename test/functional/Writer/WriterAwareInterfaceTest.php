<?php

namespace Dhii\SimpleTest\FuncTest\Writer;

/**
 * Tests {@see \Dhii\SimpleTest\Writer\WriterAwareInterface}.
 *
 * @since [*next-version*]
 */
class WriterAwareInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Writer\WriterAwareInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Writer\\WriterAwareInterface')
                ->getWriter()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Writer\\WriterAwareInterface', $subject, 'Subject is not writer aware');
    }
}
