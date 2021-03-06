<?php

namespace Dhii\SimpleTest\Test;

/**
 * Something that can retrieve totals for tests ran in relation to it.
 *
 * @since 0.1.0
 */
interface AccountableInterface
{
    const TEST_SUCCESS = ResultInterface::SUCCESS;
    const TEST_ERROR   = ResultInterface::ERROR;
    const TEST_FAILURE = ResultInterface::FAILURE;

    /**
     * Retrieve the total number of tests ran in relation to this instance.
     *
     * @since 0.1.0
     *
     * @return int The total number of tests.
     */
    public function getTestCount();

    /**
     * Retrieve the number of tests for the specified status code ran in relation to this instance.
     *
     * @since 0.1.0
     *
     * @param string $status The status code, for which to get the test count.
     *
     * @return int The number of tests for the specified status code.
     */
    public function getTestCountByStatus($status);

    /**
     * Retrieve a list of possible status codes.
     *
     * @since 0.1.0
     *
     * @return string[] A numeric array, each value of which is unique and reresents a status code.
     */
    public function getTestStatusCodes();
}
