<?php

namespace Dhii\SimpleTest\Suite;

/**
 * Something that can create test suites.
 *
 * @since 0.1.0
 */
interface FactoryInterface
{
    /**
     * Creates a new test suite.
     *
     * @param string $code The code of the test suite.
     *
     * @since 0.1.0
     *
     * @return SuiteInterface A new test suite instance.
     */
    public function createSuite($code);
}
