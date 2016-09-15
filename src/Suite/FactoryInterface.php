<?php

namespace Dhii\SimpleTest\Suite;

/**
 * Something that can create test suites.
 *
 * @since [*next-version*]
 */
interface FactoryInterface
{
    /**
     * Creates a new test suite.
     *
     * @param string $code The code of the test suite.
     *
     * @since [*next-version*]
     *
     * @return SuiteInterface A new test suite instance.
     */
    public function createSuite($code);
}
