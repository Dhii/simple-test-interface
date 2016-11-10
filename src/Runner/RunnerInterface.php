<?php

namespace Dhii\SimpleTest\Runner;

use Dhii\SimpleTest\Test;

/**
 * Something that can act as a test runner.
 *
 * @since 0.1.0
 */
interface RunnerInterface
{
    /**
     * Retrieve the code name of this runner.
     *
     * @since 0.1.0
     *
     * @return string This runner's code.
     */
    public function getCode();

    /**
     * Runs a test.
     *
     * @param Test\TestInterface $test The test to run.
     *
     * @return Test\ResultInterface The result of the test.
     */
    public function run(Test\TestBaseInterface $test);

    /**
     * Run all the tests in this suite.
     *
     * @since 0.1.0
     *
     * @param Test\SourceInterface|\Traversable $tests The list of tests to run.
     *
     * @return Test\ResultSetInterface The results of running the tests.
     */
    public function runAll($tests);
}
