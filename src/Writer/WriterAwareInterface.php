<?php

namespace Dhii\SimpleTest\Writer;

/**
 * Something that can act like it's writer-aware.
 *
 * That means that instances of this class can have a writer retrieved.
 *
 * @since 0.1.0
 */
interface WriterAwareInterface
{
    /**
     * Retrieves the writer used by this instance.
     *
     * @since 0.1.0
     *
     * @return WriterInterface
     */
    public function getWriter();
}
