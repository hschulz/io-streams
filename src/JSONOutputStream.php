<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use const JSON_PRETTY_PRINT;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

/**
 *
 */
class JSONOutputStream extends AbstractOutputStream
{
    /**
     * @var int
     */
    public const DEFAULT_MASK = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

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
     * @param int $mask
     * @return int
     */
    public function write($data, int $mask = self::DEFAULT_MASK): int
    {
        return $this->stream->write(json_encode($data, $mask));
    }
}
