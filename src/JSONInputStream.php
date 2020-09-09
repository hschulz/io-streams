<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use Hschulz\IOStreams\AbstractInputStream;
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
     *
     * @return string
     */
    public function read(): string
    {
        return json_decode($this->stream->read(), true);
    }
}
