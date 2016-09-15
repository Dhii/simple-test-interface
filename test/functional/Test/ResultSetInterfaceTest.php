<?php

namespace Dhii\SimpleTest\FuncTest\Test;

/**
 * Tests {@see \Dhii\SimpleTest\Test\ResultSetInterface}.
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
     * @return \Dhii\SimpleTest\Test\ResultSetInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Test\\ResultSetInterface')
                ->getResults()
                ->getResultsByStatus()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\ResultSetInterface', $subject, 'Subject is not a valid test result set');
    }
}
