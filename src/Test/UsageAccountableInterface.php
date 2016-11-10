<?php

namespace Dhii\SimpleTest\Test;

/**
 * Something that can have usage stats retrieved.
 *
 * @since 0.1.0
 */
interface UsageAccountableInterface
{
    /**
     * Retrieve the time that was taken to run this test.
     *
     * @since 0.1.0
     *
     * @return float The amount of time taken to run this test, in seconds.
     */
    public function getTimeTaken();

    /**
     * Retrieve the amount of memory that was taken to run this test.
     *
     * @since 0.1.0
     *
     * @return int The amount of memory taken to run this test, in bytes.
     */
    public function getMemoryTaken();
}
