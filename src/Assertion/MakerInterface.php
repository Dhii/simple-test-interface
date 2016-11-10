<?php

namespace Dhii\SimpleTest\Assertion;

/**
 * Something that can act as an assertion maker.
 *
 * @since 0.1.0
 */
interface MakerInterface
{
    const SUCCESS = 1;
    const FAILURE = 0;

    /**
     * React with specified message if the given assetion fails.
     *
     * @since 0.1.0
     *
     * @param callable $assertion The assertion to make.
     * @param string   $message   The message in case the assertion fails.
     */
    public function make($assertion, $message);
}
