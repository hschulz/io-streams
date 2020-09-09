<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use function serialize;

/**
 *
 */
class SerializedOutputStream extends AbstractOutputStream
{
    /**
     *
     * @param OutputStream $stream
     */
    public function __construct(OutputStream $stream)
    {
        parent::__construct();
        $this->stream = $stream;
    }

    /**
     *
     * @param mixed $data
     * @return int
     */
    public function write($data): int
    {
        return $this->stream->write(serialize($data));
    }
}
