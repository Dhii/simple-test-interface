<?php

namespace Dhii\SimpleTest\FuncTest\Assertion;

/**
 * Tests {@see \Dhii\SimpleTest\Assertion\MakerInterface}.
 *
 * @since 0.1.0
 */
class MakerInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
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
     * @since 0.1.0
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\SimpleTest\\Assertion\\MakerInterface', $subject, 'Subject is not a valid assertion maker');
    }
}
