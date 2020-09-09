<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use function json_decode;

/**
 *
 */
class JSONInputStream extends AbstractInputStream
{
    /**
     *
     * @param InputStream $stream
     */
    public function __construct(InputStream $stream)
    {
        parent::__construct();
        $this->stream = $stream;
    }

    /**
     * Returns the string representation of the json that has been read.
     *
     * @return string
     */
    public function read(): string
    {
        return $this->stream->read();
    }

    /**
     * Returns the decoded json string as whatever it will be parsed as.
     *
     * @param bool $asAssoc Return objects as associative arrays
     * @return mixed
     */
    public function readDecoded(bool $asAssoc = true)
    {
        return json_decode($this->stream->read(), $asAssoc);
    }
}
