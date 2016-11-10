<?php

namespace Dhii\SimpleTest\Locator;

/**
 * Something that can act as a locator, which retrieves tests from a file path.
 *
 * @since 0.1.0
 */
interface FilePathLocatorInterface extends LocatorInterface
{
    /**
     * Add a path to this locator.
     *
     * @since 0.1.0
     *
     * @param string|\Traversable $path A path or glob expression (no brace syntax),
     *                                  or an instance of an iterator which returns file paths.
     */
    public function addPath($path);
}
