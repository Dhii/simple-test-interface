<?php

namespace Dhii\SimpleTest\TestCase;

/**
 * Something that can act as a test case.
 *
 * A test case is a class that contains test methods written by users.
 *
 * @since 0.1.0
 */
interface CaseInterface
{
    /**
     * Executed before a test method of this instance is run.
     *
     * @since 0.1.0
     */
    public function beforeTest();

    /**
     * Executed before a test method of this instance is run.
     *
     * @since 0.1.0
     */
    public function afterTest();
}
