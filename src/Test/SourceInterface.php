<?php

namespace Dhii\SimpleTest\Test;

/**
 * Something that can act as a test source.
 *
 * A test source is something that can retrieve test instances.
 *
 * @since 0.1.0
 */
interface SourceInterface
{
    /**
     * Retrieve tests.
     *
     * @since 0.1.0
     *
     * @return Test\TestInterface[] An array of tests.
     */
    public function getTests();
}
