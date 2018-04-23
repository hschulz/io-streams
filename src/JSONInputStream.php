<?php

namespace hschulz\IOStreams;

use json_decode;

class JSONInputStream extends AbstractInputStream
{
    /**
     * @param InputStream $stream
     */
    public function __construct(InputStream $stream)
    {
        parent::__construct();
        $this->stream = $stream;
    }

    /**
     * @return mixed
     */
    public function read()
    {
        return json_decode($this->stream->read(), true);
    }
}
