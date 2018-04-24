<?php

namespace hschulz\IOStreams;

/**
 *
 */
abstract class AbstractOutputStream implements OutputStream
{

    /**
     *
     * @var OutputStream
     */
    protected $stream = null;

    /**
     *
     * @param string $mode
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
     * @return bool
     */
    public function open(): bool
    {
        return $this->stream->open();
    }

    /**
     * @return int
     */
    abstract public function write($data): int;
}
