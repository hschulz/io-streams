<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

/**
 *
 */
abstract class AbstractInputStream implements InputStream
{
    /**
     *
     * @var InputStream|null
     */
    protected ?InputStream $stream = null;

    /**
     *
     */
    public function __construct()
    {
        $this->stream = null;
    }

    /**
     *
     * @return bool
     */
    public function close(): bool
    {
        return $this->stream->close();
    }

    /**
     *
     * @return bool
     */
    public function open(): bool
    {
        return $this->stream->open();
    }
}
