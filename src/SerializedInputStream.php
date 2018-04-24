<?php

namespace hschulz\IOStreams;

use \unserialize;

/**
 *
 */
class SerializedInputStream extends AbstractInputStream
{

    /**
     *
     * @param InputStream $stream
     * @param string $mode
     */
    public function __construct(InputStream $stream, $mode = ReadModes::MODE_READ)
    {
        parent::__construct($mode);
        $this->stream = $stream;
    }

    /**
     *
     * @return mixed
     */
    public function read()
    {
        return unserialize($this->stream->read());
    }
}
