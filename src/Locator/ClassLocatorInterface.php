<?php

namespace Dhii\SimpleTest\Locator;

use ReflectionClass;

/**
 * Something that can act as a class test locator.
 *
 * Class test locators locate tests in a specified class.
 *
 * @since 0.1.0
 */
interface ClassLocatorInterface extends LocatorInterface
{
    /**
     * Set the class for this locator to locate tests from.
     *
     * @since 0.1.0
     *
     * @param string|ReflectionClass $class A class name or reflection instance.
     */
    public function setClass($class);
}
