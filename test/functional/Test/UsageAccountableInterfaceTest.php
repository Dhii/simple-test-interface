<?php

namespace Dhii\SimpleTest\FuncTest\Test;

/**
 * Tests {@see \Dhii\SimpleTest\Test\UsageAccountableInterface}.
 *
 * @since 0.1.0
 */
class UsageAccountableInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
     *
     * @return \Dhii\SimpleTest\Test\UsageAccountableInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Test\\UsageAccountableInterface')
                ->getTimeTaken()
                ->getMemoryTaken()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\UsageAccountableInterface', $subject, 'Subject is not a valid test usage accountable');
    }
}
