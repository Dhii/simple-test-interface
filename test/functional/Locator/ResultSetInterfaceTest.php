<?php

namespace Dhii\SimpleTest\FuncTest\Locator;

/**
 * Tests {@see \Dhii\SimpleTest\Locator\ResultSetInterface}.
 *
 * @since [*next-version*]
 */
class ResultSetInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Locator\ResultSetInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Locator\\ResultSetInterface')
                ->getTests()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Locator\\ResultSetInterface', $subject, 'Subject is not a valid locator result set');
        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\SourceInterface', $subject, 'Subject is not a valid test source');
    }
}
