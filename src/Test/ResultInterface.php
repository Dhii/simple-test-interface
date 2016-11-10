<?php

namespace Dhii\SimpleTest\Test;

/**
 * Represents a test result.
 *
 * @since 0.1.0
 */
interface ResultInterface extends TestBaseInterface
{
    const FAILURE = 'failed';
    const ERROR   = 'errored';
    const SUCCESS = 'success';

    /**
     * Retrieve the status code of this test.
     *
     * A status represents the outcome of a test.
     *
     * @since 0.1.0
     *
     * @return string A string that represents this test's status.
     */
    public function getStatus();

    /**
     * Retrieve a list of possible status codes.
     *
     * @since 0.1.0
     *
     * @return string[] A numeric array, each value of which is unique and reresents a status code.
     */
    public function getTestStatusCodes();

    /**
     * Get the message of this test.
     *
     * @since 0.1.0
     *
     * @return mixed Something that represents a message.
     */
    public function getMessage();

    /**
     * Retrieve whether or not this test was successful.
     *
     * @since 0.1.0
     *
     * @return bool True if the test passed; false otherwise.
     */
    public function isSuccessful();

    /**
     * Retrieve the code of the runner that ran this test.
     *
     * @since 0.1.0
     *
     * @return string The code of the runner that ran this test.
     */
    public function getRunnerCode();
}
