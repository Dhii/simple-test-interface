<?php

namespace Dhii\SimpleTest\FuncTest\Test;

/**
 * Tests {@see \Dhii\SimpleTest\Test\AccountableInterface}.
 *
 * @since [*next-version*]
 */
class AccountableInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Test\AccountableInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Test\\AccountableInterface')
                ->getTestCount()
                ->getTestCountByStatus()
                ->getTestStatusCodes()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Test\\AccountableInterface', $subject, 'Subject is not a valid test accountable');
    }
}
