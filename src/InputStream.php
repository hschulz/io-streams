<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

/**
 *
 */
interface InputStream
{
    /**
     *
     * @return bool
     */
    public function open(): bool;

    /**
     *
     * @return string
     */
    public function read(): string;

    /**
     *
     * @return bool
     */
    public function close(): bool;
}
