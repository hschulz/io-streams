<?php

namespace hschulz\IOStreams;

use JSON_PRETTY_PRINT;
use JSON_UNESCAPED_SLASHES;
use JSON_UNESCAPED_UNICODE;

class JSONOutputStream extends AbstractOutputStream
{
    /**
     * @param OutputStream $stream
     */
    public function __construct(OutputStream $stream)
    {
        parent::__construct();
        $this->stream = $stream;
    }

    /**
     * @param mixed $data
     *
     * @return int
     */
    public function write($data): int
    {
        $mask = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

        return (int) $this->stream->write(json_encode($data, $mask));
    }
}
