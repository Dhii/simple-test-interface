<?php

namespace Dhii\SimpleTest\FuncTest\Assertion;

/**
 * Tests {@see \Dhii\SimpleTest\Assertion\MakerInterface}.
 *
 * @since [*next-version*]
 */
class MakerInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\SimpleTest\Assertion\MakerInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Assertion\\MakerInterface')
                ->make()
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Assertion\\MakerInterface', $subject, 'Subject is not a valid assertion maker');
    }
}
