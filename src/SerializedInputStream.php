<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use function unserialize;

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
    public function __construct(InputStream $stream)
    {
        parent::__construct();
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
