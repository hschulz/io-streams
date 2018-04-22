<?php

namespace hschulz\IOStreams;


use \hschulz\IOStreams\AbstractOutputStream;
use \hschulz\IOStreams\OutputStream;
use \serialize;

/**
 *
 */
class SerializedOutputStream extends AbstractOutputStream {

    /**
     *
     * @param OutputStream $stream
     */
    public function __construct(OutputStream $stream) {
        parent::__construct();
        $this->stream = $stream;
    }

    /**
     *
     * @param mixed $data
     * @return int
     */
    public function write($data): int {
        return $this->stream->write(serialize($data));
    }
}
