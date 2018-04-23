<?php

namespace hschulz\IOStreams;

use feof;
use fread;

class StdInputStream extends FileInputStream
{
    /**
     * The default buffer size.
     *
     * @var int
     */
    const BUFFER_SIZE = 2048;

    /**
     * @var int
     */
    protected $bufferSize = self::BUFFER_SIZE;

    /**
     * @param int $bufferSize
     */
    public function __construct(int $bufferSize = self::BUFFER_SIZE)
    {
        parent::__construct('php://stdin');
        $this->bufferSize = $bufferSize;
    }

    /**
     * @return mixed
     */
    public function read()
    {
        $output = '';

        while (!feof($this->handle)) {
            $output .= (string) fread($this->handle, $this->bufferSize);
        }

        return $output;
    }
}
