<?php

namespace Dhii\SimpleTest\FuncTest\Suite;

/**
 * Tests {@see \Dhii\SimpleTest\Suite\FactoryInterface}.
 *
 * @since [*next-version*]
 */
class FactoryInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Suite\FactoryInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Suite\\FactoryInterface')
                ->createSuite()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Suite\\FactoryInterface', $subject, 'Subject is not a valid test suite factory');
    }
}
