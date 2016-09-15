<?php

namespace Dhii\SimpleTest\FuncTest\Assertion;

/**
 * Tests {@see \Dhii\SimpleTest\Assertion\FailedExceptionInterface}.
 * 
 * @since [*next-version*]
 */
class FailedExceptionInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     * 
     * @since [*next-version*]
     * 
     * @return \Dhii\SimpleTest\Assertion\FailedExceptionInterface The new instance of the subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\SimpleTest\\Assertion\\FailedExceptionInterface')
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
        
        $this->assertInstanceOf('Dhii\\SimpleTest\\Assertion\\FailedExceptionInterface', $subject, 'Subject is not a valid failed exception');
    }
}
