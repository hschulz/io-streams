<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use function feof;
use function fread;

/**
 *
 */
class StdInputStream extends FileInputStream
{
    /**
     * The default buffer size.
     * @var int
     */
    public const BUFFER_SIZE = 2048;

    /**
     *
     * @var int
     */
    protected int $bufferSize = self::BUFFER_SIZE;

    /**
     *
     * @param int $bufferSize
     */
    public function __construct(int $bufferSize = self::BUFFER_SIZE)
    {
        parent::__construct('php://stdin');
        $this->bufferSize = $bufferSize;
    }

    /**
     *
     * @return string
     */
    public function read(): string
    {
        $output = '';

        while (!feof($this->handle)) {
            if (($read = fread($this->handle, $this->bufferSize)) !== false) {
                $output .= $read;
            }
        }

        return $output;
    }
}
