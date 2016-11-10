<?php

namespace Dhii\SimpleTest\FuncTest\Writer;

/**
 * Tests {@see \Dhii\SimpleTest\Writer\WriterInterface}.
 *
 * @since 0.1.0
 */
class WriterInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
     *
     * @return \Dhii\SimpleTest\Writer\WriterInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Writer\\WriterInterface')
                ->setLevel()
                ->getLevel()
                ->write()
                ->writeLine()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Writer\\WriterInterface', $subject, 'Subject is not a writer');
    }
}
