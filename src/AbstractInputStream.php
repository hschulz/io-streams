<?php

namespace hschulz\IOStreams;

/**
 *
 */
abstract class AbstractInputStream implements InputStream
{

    /**
     *
     * @var InputStream
     */
    protected $stream = null;

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

    /**
     *
     * @return mixed
     */
    abstract public function read();
}
