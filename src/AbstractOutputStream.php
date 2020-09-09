<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use Hschulz\IOStreams\OutputStream;

/**
 *
 */
abstract class AbstractOutputStream implements OutputStream
{
    /**
     *
     * @var OutputStream|null
     */
    protected ?OutputStream $stream = null;

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
     * @return bool
     */
    public function open(): bool
    {
        return $this->stream->open();
    }
}
