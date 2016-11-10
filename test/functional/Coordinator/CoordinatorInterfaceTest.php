<?php

namespace Dhii\SimpleTest\FuncTest\Coordinator;

/**
 * Tests {@see \Dhii\SimpleTest\Coordinator\CoordinatorInterface}.
 *
 * @since 0.1.0
 */
class CoordinatorInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1.0
     *
     * @return \Dhii\SimpleTest\Coordinator\CoordinatorInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Coordinator\\CoordinatorInterface')
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

        $this->assertInstanceOf('Dhii\\SimpleTest\\Coordinator\\CoordinatorInterface', $subject, 'Subject is not a valid coordinator');
    }
}
